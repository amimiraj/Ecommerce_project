<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();

class CheckoutController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $c_id = session()->get('customer_id');
        $total = session()->get('total');


        if (isset($c_id)) {

            if ($total > 0) {
                return redirect('/customer-shipping');
            } else {
                return redirect('/');
            }
        } else {

            $all_category = DB::table('categories')->where('category_status', 1)->get();
            $all_cart = DB::table('tbl_cart')->where('session_id', session_id())->get();
            $menu = view('pages.menu')->with('all_category', $all_category)->with('all_cart', $all_cart);
            $content = view('pages.checkout');

            return view('master')
                            ->with('menu', $menu)
                            ->with('master-content', $content);
        }
    }

    public function place_order() {

        session()->put('go_for_shiping', 1);
        $total = session()->get('total');

        if ($total > 0) {
            return redirect('/checkout');
        } else {
            return redirect('/');
        }
    }

    public function save_customer(Request $request) {
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_city'] = 0;
        $data['customer_zip_code'] = 0;
        $data['customer_country'] = 0;
        $data['customer_address'] = $request->customer_address;

        if ($request->customer_password == $request->confirm_password) {

            $data['customer_password'] = md5($request->customer_password);
            $customer_check = DB::table('tbl_customer')->where('customer_email', $data['customer_email'])->get();
            if (isset($customer_check[0])) {
                session()->put('rmsg', 'You are already registered');
            } else {

//                DB::table('tbl_customer')->insert($data);
                $customer_id = DB::table('tbl_customer')->insertGetId($data);
                session()->put('customer_id', $customer_id);
                session()->put('customer_name', $data['customer_name']);
                session()->put('customer_email', $data['customer_email']);
                return redirect('/checkout');
            }
        } else {
            session()->put('remsg', 'Your Password Did NOt Match!!!!');
            return redirect('/checkout');
        }
    }

    public function customer_login(Request $request) {

        $go_for_shiping = session()->get('go_for_shiping');

        $customer_email = $request->customer_email;
        $customer_password = md5($request->customer_password);
        $customer_info = DB::table('tbl_customer')->where('customer_email', $customer_email)->where('customer_password', $customer_password)->get();

        if (isset($customer_info[0])) {
            session()->put('customer_id', $customer_info[0]->customer_id);
            session()->put('customer_name', $customer_info[0]->customer_name);
            session()->put('customer_email', $customer_info[0]->customer_email);

            if ($go_for_shiping == 1) {
                return redirect('/customer-shipping');
            } else {
                return redirect('/');
            }
        } else {
            session()->put('login_msg', 'Your Email Or Password Invalid');
            return back();
        }
    }

    public function customer_shipping() {
        $all_category = DB::table('categories')->where('category_status', 1)->get();
        $all_cart = DB::table('tbl_cart')->where('session_id', session_id())->get();


        $menu = view('pages.menu')->with('all_category', $all_category)->with('all_cart', $all_cart);
        $content = view('pages.shipping');

        return view('master')
                        ->with('menu', $menu)
                        ->with('master-content', $content);
    }

    public function save_shipping(Request $request) {
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_address'] = $request->shipping_address;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        session()->put('shipping_id', $shipping_id);

        return redirect('/customer-payment');
    }

    public function customer_payment() {

        $all_cart = DB::table('tbl_cart')->where('session_id', session_id())->get();

        $all_category = DB::table('categories')->where('category_status', 1)->get();
        $menu = view('pages.menu')->with('all_category', $all_category)->with('all_cart', $all_cart);

        $content = view('pages.payment');
        return view('master')
                        ->with('menu', $menu)
                        ->with('master-content', $content);
    }

    public function save_order(Request $request) {
        $payment_type = $request->payment_type;

        if ($payment_type == 'cash') {
            $data = array();
            $data['payment_type'] = $payment_type;
            $payment_id = DB::table('tbl_payment')->insertGetId($data);
            session()->put('payment_id', $payment_id);

            $odata = array();
            $odata['customer_id'] = session()->get('customer_id');
            $odata['shipping_id'] = session()->get('shipping_id');
            $odata['payment_id'] = session()->get('payment_id');
            $odata['g_total'] = session()->get('total');
            $order_id = DB::table('tbl_order')->insertGetId($odata);

            session()->put('order_id', $order_id);
            $cart_info = DB::table('tbl_cart')->where('session_id', session_id())->get();

            foreach ($cart_info as $v_cart) {
                $oddata = array();
                $oddata['order_id'] = session()->get('order_id');
                $oddata['product_id'] = $v_cart->product_id;
                $oddata['product_name'] = $v_cart->product_name;
                $oddata['product_qty'] = $v_cart->product_qty;
                $oddata['product_price'] = $v_cart->unit_price;
                DB::table('tbl_order_details')->insert($oddata);
            }

            return redirect('/order-confirm');
        } else {
            
        }
    }

    public function order_confirm() {

        DB::table('tbl_cart')->where('session_id', session_id())->delete();

        $all_cart = DB::table('tbl_cart')->where('session_id', session_id())->get();
        $all_category = DB::table('categories')->where('category_status', 1)->get();
        $menu = view('pages.menu')->with('all_category', $all_category)->with('all_cart', $all_cart);

        session()->put('total', 0);
        session()->put('items', 0);

        $content = view('pages.confirm');
        return view('master')
                        ->with('menu', $menu)
                        ->with('master-content', $content);
    }

    public function customer_logout() {

        session()->forget('customer_id');
        session()->forget('customer_name');
        session()->forget('customer_email');
        session()->forget('go_for_shiping');
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
