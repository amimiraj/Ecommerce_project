<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();

class CartController extends Controller {

    public function add_cart($product_id, Request $request) {

        $session_id = session_id();
        $product_qty = $request->product_qty;
        $cart_info = DB::table('tbl_cart')->where('session_id', $session_id)->where('product_id', $product_id)->get();

        if (isset($cart_info[0])) {
            $cart_qty = $request->product_qty + $cart_info[0]->product_qty;
            $all_cart = DB::table('tbl_cart')->where('session_id', $session_id)->where('product_id', $product_id)->update(array('product_qty' => $cart_qty, 'sub_total' => $cart_qty * ((int) $cart_info[0]->unit_price)));
        } else {

            $product_info = DB::table('products')->where('id', $product_id)->get();
            $data = array();
            $data['session_id'] = session_id();
            $data['product_id'] = $product_info[0]->id;
            $data['product_name'] = $product_info[0]->product_name;
            $data['product_img_one'] = $product_info[0]->product_img_one;

            if ($product_info[0]->product_discount_price > 0) {
                $data['unit_price'] = $product_info[0]->product_discount_price;
                $data['sub_total'] = ($product_info[0]->product_discount_price * $product_qty);
            } else {
                $data['unit_price'] = $product_info[0]->product_price;
                $data['sub_total'] = ($product_info[0]->product_price * $product_qty);
            }

            $data['product_qty'] = $request->product_qty;
            $data['total'] = 0;
            $data['added_items'] = 1;
            $data['product_discount_price'] = 0;
            $data['product_sku'] = $product_info[0]->product_sku;
            $all_cart = DB::table('tbl_cart')->insert($data);
        }

        $all_cart = DB::table('tbl_cart', 'sub_total')->where('session_id', $session_id)->get();

        $total = 0;
        $items = count($all_cart);

        foreach ($all_cart as $value) {
            $total = $total + (int) $value->sub_total;
        }
        session()->put('total', $total);
        session()->put('items', $items);

        return back();
    }

    public function show_cart() {

        $all_category = DB::table('categories')->where('category_status', 1)->get();
        $all_cart = DB::table('tbl_cart')->where('session_id', session_id())->get();
        $menu = view('pages.menu')->with('all_category', $all_category)->with('all_cart', $all_cart);
        $content = view('pages.show_cart')->with('all_cart', $all_cart)->with('all_category', $all_category);

        return view('master')->with('menu', $menu)->with('master-content', $content);
    }

    public function remove_cart($product_id) {


        DB::table('tbl_cart')->where('session_id', session_id())->where('product_id', $product_id)->delete();

        $all_cart = DB::table('tbl_cart', 'sub_total')->where('session_id', session_id())->get();

        $total = 0;
        $items = count($all_cart);
        foreach ($all_cart as $value) {
            $total = $total + (int) $value->sub_total;
        }

        session()->put('total', $total);
        session()->put('items', $items);


        return back();
    }

    public function update_cart($product_id, Request $request) {

        $cart_info = DB::table('tbl_cart')->where('product_id', $product_id)->where('session_id', session_id())->get();
        $cart_qty = $request->product_qty;
        $all_cart = DB::table('tbl_cart')->where('session_id', session_id())->where('product_id', $product_id)->update(array('product_qty' => $cart_qty, 'sub_total' => $cart_qty * ((int) $cart_info[0]->unit_price)));

        $cart_subtotal = DB::table('tbl_cart', 'sub_total')->where('session_id', session_id())->get();
        $total = 0;
        $items = 0;

        foreach ($cart_subtotal as $value) {
            $total = $total + (int) $value->sub_total;
            $items++;
        }
        session()->put('total', $total);
        session()->put('items', $items);

        return back();
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
