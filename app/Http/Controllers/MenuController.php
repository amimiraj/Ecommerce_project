<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

session_start();

class MenuController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    public function product_category() {
        $all_cart = DB::table('tbl_cart')->where('session_id', session_id())->get();
        $all_category = DB::table('categories')->where('category_status', 1)->get();
        $menu = view('pages.menu')->with('all_category', $all_category)->with('all_cart', $all_cart);

        return view('pages.product_category')->with('menu', $menu)->with('all_category', $all_category);
//        ->with('new_product', $new_product) ->with('all_product', $all_product);
    }

    public function all_category_product($category_id) {
        $all_cart = DB::table('tbl_cart')->where('session_id', session_id())->get();
        $all_category = DB::table('categories')->where('category_status', 1)->get();

        $all_category_product = DB::table('products')->where('category_id', $category_id)
                        ->where('product_status', 1)->get();


        $my_category = DB::table('categories')->where('id', $category_id)->get();
        $menu = view('pages.menu')->with('all_category', $all_category)->with('all_cart', $all_cart);

        return view('pages.all_category_product')
                        ->with('menu', $menu)
                        ->with('all_category_product', $all_category_product)
                        ->with('my_category', $my_category)
                        ->with('all_category', $all_category);
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
