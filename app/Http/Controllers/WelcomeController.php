<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();

class WelcomeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $all_category = DB::table('categories')->where('category_status', 1)->get();
        $new_product = DB::table('products')->limit(4)->orderby('id', 'DESC')->where('product_status', 1)->get();
        $all_product = DB::table('products')->orderby('id', 'ASC')->where('product_status', 1)->get();
        $slide_table = DB::table('sliders')->where('slider_status', 'Active')->get();

        $all_cart = DB::table('tbl_cart')->where('session_id', session_id())->get();


        $menu = view('pages.menu')->with('all_category', $all_category)->with('all_cart', $all_cart);

        $content = view('pages.home')
                ->with('all_category', $all_category)
                ->with('all_product', $all_product)
                ->with('new_product', $new_product);

        $slide = view('pages.slider')->with('slide_table', $slide_table);
        return view('master')
                        ->with('menu', $menu)
                        ->with('slider', $slide)
                        ->with('master-content', $content);
    }

    public function product_details($product_id, $category_id) {

        $all_cart = DB::table('tbl_cart')->where('session_id', session_id())->get();

        $all_category = DB::table('categories')->where('category_status', 1)->get();
        $select_product = DB::table('products')
                ->join('manufacturer', 'products.manufacturer_id', '=', 'manufacturer.id')
                ->select('products.*', 'manufacturer.manufacturer_name')
                ->where('products.id', $product_id)
                ->get();

        $related_product = DB::table('products')->where('category_id', $category_id)->limit(5)->orderBy('id', 'DESC')->where('product_status', 1)->get();

        $menu = view('pages.menu')->with('all_category', $all_category)->with('all_cart', $all_cart);
        $content = view('pages.product_details')
                ->with('select_product', $select_product)
                ->with('related_product', $related_product);

        return view('master')
                        ->with('menu', $menu)
                        ->with('master-content', $content);
    }

    public function search(Request $request) {


        $search_info = $request->search;

        $all_cart = DB::table('tbl_cart')->where('session_id', session_id())->get();
        $all_category = DB::table('categories')->where('category_status', 1)->get();

        $search_product = DB::table('products')->where('product_name', 'LIKE', "%$search_info%")->orWhere('product_description', 'LIKE', "%{$search_info}%")->get();
        $menu = view('pages.menu')->with('all_category', $all_category)->with('all_cart', $all_cart);
        $content = view('pages.search')->with('all_category', $all_category)->with('search_product', $search_product);


        return view('master')
                        ->with('menu', $menu)
                        ->with('master-content', $content);
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
