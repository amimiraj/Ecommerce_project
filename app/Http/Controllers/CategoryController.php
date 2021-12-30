<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.pages.category.all_category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $all_category = DB::table('categories')->get();

        return view('admin.pages.category.add_category')
                        ->with('all_category', $all_category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $category = new Category;
        $category['category_name'] = $request->category_name;
        $category['category_description'] = $request->category_description;
        $category['meta_title'] = $request->meta_title;
        $category['category_status'] = $request->category_status;
        $category['meta_keywords'] = $request->meta_keywords;
        $category['meta_description'] = $request->meta_description;
        $category['parent_id'] = 0;



        if ($request->hasFile('category_menu_image')) {
            $file = $request->file('category_menu_image');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(300, 400);
            $image_resize->save('./storage/app/images/category/category_menu_image/' . $file_name, 100);
            $category['category_menu_image'] = $file_name;
        }


        if ($request->hasFile('category_cover_image')) {
            $file = $request->file('category_cover_image');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(300, 400);
            $image_resize->save('./storage/app/images/category/category_cover_image/' . $file_name, 100);
            $category['category_cover_image'] = $file_name;
        }

        $category->save();
        session()->put('c_msg', 'Category Added successfully!!!');
        return redirect('/all-category');
    }

    public function all_category() {
        $all_category = DB::table('categories')->get();
        return view('admin.pages.category.all_category')
                        ->with('all_category', $all_category);
    }

    public function delete_category($id) {

        $category = Category::find($id);
        File::delete('storage/app/images/category/category_menu_image/' . $category->category_menu_image);
        File::delete('storage/app/images/category/category_cover_image/' . $category->category_cover_image);
        $category->delete();
        session()->put('c_msg', 'Category deleted successfully!!!');
        return redirect('/all-category');
    }

    public function edit_category($id) {

        $select_category = DB::table('categories')->where('id', $id)
                ->get();


        return view('admin.pages.category.edit_category')->with('select_category', $select_category);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {


        $category = Category::find($id);
        $category['category_name'] = $request->category_name;
        $category['category_description'] = $request->category_description;
        $category['meta_title'] = $request->meta_title;
        $category['category_status'] = $request->category_status;

        $category['meta_keywords'] = $request->meta_keywords;
        $category['meta_description'] = $request->meta_description;
        $category['parent_id'] = 0;


        if ($request->hasFile('category_menu_image')) {

            if (File::exists('storage/app/images/category/category_menu_image/' . $category->category_menu_image)) {
                File::delete('storage/app/images/category/category_menu_image/' . $category->category_menu_image);
            }

            $file = $request->file('category_menu_image');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(300, 400);
            $image_resize->save('./storage/app/images/category/category_menu_image/' . $file_name, 100);
            $category['category_menu_image'] = $file_name;
        }

        if ($request->hasFile('category_cover_image')) {

            if (File::exists('storage/app/images/category/category_cover_image/' . $category->category_cover_image)) {
                File::delete('storage/app/images/category/category_cover_image/' . $category->category_cover_image);
            }

            $file = $request->file('category_cover_image');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(300, 400);
            $image_resize->save('./storage/app/images/category/category_cover_image/' . $file_name, 100);
            $category['category_cover_image'] = $file_name;
        }

        $category->save();
        session()->put('c_msg', 'Category updated successfully!!!');
        return redirect('/all-category');
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
