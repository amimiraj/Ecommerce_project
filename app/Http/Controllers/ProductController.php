<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller {

    public function index() {
        
    }

    public function create() {

        $select_category = DB::table('categories')->get();
        $select_manufacturer = DB::table('manufacturer')->get();

        return view('admin.pages.product.add_product')->with('select_category', $select_category)->with('select_manufacturer', $select_manufacturer);
    }

    public function save_product(Request $request) {

        $product = new Product;
        $product ['product_name'] = $request->product_name;
        $product ['category_id'] = $request->category_id;
        $product ['manufacturer_id'] = $request->manufacturer_id;
        $product ['product_price'] = $request->product_price;
        $product ['product_discount_price'] = $request->product_discount_price;
        $product ['product_quantity'] = $request->product_quantity;
        $product ['product_sku'] = $request->product_sku;
        $product ['product_description'] = $request->product_description;
        $product['meta_title'] = $request->meta_title;
        $product['meta_keywords'] = $request->meta_keywords;
        $product['meta_description'] = $request->meta_description;
        $product ['product_status'] = $request->product_status;

        // ----------1
        if ($request->hasFile('product_img_one')) {

            $file = $request->file('product_img_one');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(500, 400);
            $image_resize->save('./storage/app/images/product/product_image/' . $file_name, 100);
            $product['product_img_one'] = $file_name;

            // -------product details image
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(800, 500);
            $image_resize->save('./storage/app/images/product/product_details_image/' . $file_name, 100);
            $product['product_details_img_one'] = $file_name;
        }
        //  ----------2
        if ($request->hasFile('product_img_two')) {

            $file = $request->file('product_img_two');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(500, 400);
            $image_resize->save('./storage/app/images/product/product_image/' . $file_name, 100);
            $product['product_img_two'] = $file_name;
            // -------product details image
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(800, 500);
            $image_resize->save('./storage/app/images/product/product_details_image/' . $file_name, 100);
            $product['product_details_img_two'] = $file_name;
        }
        // ----------3
        if ($request->hasFile('product_img_three')) {

            $file = $request->file('product_img_three');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(500, 400);
            $image_resize->save('./storage/app/images/product/product_image/' . $file_name, 100);
            $product['product_img_three'] = $file_name;
            // -------product details image
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(800, 500);
            $image_resize->save('./storage/app/images/product/product_details_image/' . $file_name, 100);
            $product['product_details_img_three'] = $file_name;
        }
        // ----------4
        if ($request->hasFile('product_img_four')) {

            $file = $request->file('product_img_four');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(500, 400);
            $image_resize->save('./storage/app/images/product/product_image/' . $file_name, 100);
            $product['product_img_four'] = $file_name;
            // -------product details image
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(800, 500);
            $image_resize->save('./storage/app/images/product/product_details_image/' . $file_name, 100);
            $product['product_details_img_four'] = $file_name;
        }

        $product->save();
        session()->put('p_msg', 'Product information has been saved successfully!!');
        
        return redirect('all-product');
    }

    public function all_product() {



        $all_product = DB::table('products')
                ->join('manufacturer', 'products.manufacturer_id', '=', 'manufacturer.id')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->select('products.*', 'manufacturer.manufacturer_name', 'categories.category_name')
                ->get();

        return view('admin.pages.product.all_product')->with('all_product', $all_product);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $product_info = Product::find($id);
        $select_category = DB::table('categories')->get();
        $select_manufacturer = DB::table('manufacturer')->get();

        return view('admin.pages.product.edit_product')->with('product_info', $product_info)->with('select_category', $select_category)->with('select_manufacturer', $select_manufacturer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $product = Product::find($id);
        $product ['product_name'] = $request->product_name;
        $product ['category_id'] = $request->category_id;
        $product ['manufacturer_id'] = $request->manufacturer_id;
        $product ['product_price'] = $request->product_price;
        $product ['product_discount_price'] = $request->product_discount_price;
        $product ['product_quantity'] = $request->product_quantity;
        $product ['product_sku'] = $request->product_sku;
        $product ['product_description'] = $request->product_description;
        $product['meta_title'] = $request->meta_title;
        $product['meta_keywords'] = $request->meta_keywords;
        $product['meta_description'] = $request->meta_description;
        $product ['product_status'] = $request->product_status;

        if ($request->hasFile('product_img_one')) {

            if (File::exists('storage/app/images/product/product_image/' . $product->product_img_one)) {
                File::delete('storage/app/images/product/product_image/' . $product->product_img_one);
                File::delete('storage/app/images/product/product_details_image/' . $product->product_details_img_one);
            }

            $file = $request->file('product_img_one');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(500, 400);
            $image_resize->save('./storage/app/images/product/product_image/' . $file_name, 100);
            $product['product_img_one'] = $file_name;

//              -------product details image
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(800, 400);
            $image_resize->save('./storage/app/images/product/product_details_image/' . $file_name, 100);
            $product['product_details_img_one'] = $file_name;
        }
//        -------------2
        if ($request->hasFile('product_img_two')) {

            if (File::exists('storage/app/images/product/product_image/' . $product->product_img_two)) {
                File::delete('storage/app/images/product/product_image/' . $product->product_img_two);
                File::delete('storage/app/images/product/product_details_image/' . $product->product_details_img_two);
            }

            $file = $request->file('product_img_two');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(500, 400);
            $image_resize->save('./storage/app/images/product/product_image/' . $file_name, 100);
            $product['product_img_two'] = $file_name;
            // -------product details image
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(800, 400);
            $image_resize->save('./storage/app/images/product/product_details_image/' . $file_name, 100);
            $product['product_details_img_two'] = $file_name;
        }

//        ----------3
        if ($request->hasFile('product_img_three')) {

            if (File::exists('storage/app/images/product/product_image/' . $product->product_img_three)) {
                File::delete('storage/app/images/product/product_image/' . $product->product_img_three);
                File::delete('storage/app/images/product/product_details_image/' . $product->product_details_img_three);
            }

            $file = $request->file('product_img_three');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(500, 400);
            $image_resize->save('./storage/app/images/product/product_image/' . $file_name, 100);
            $product['product_img_three'] = $file_name;
            // -------product details image
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(800, 500);
            $image_resize->save('./storage/app/images/product/product_details_image/' . $file_name, 100);
            $product['product_details_img_three'] = $file_name;
        }
//        -------------4
        if ($request->hasFile('product_img_four')) {

            if (File::exists('storage/app/images/product/product_image/' . $product->product_img_four)) {
                File::delete('storage/app/images/product/product_image/' . $product->product_img_four);
                File::delete('storage/app/images/product/product_details_image/' . $product->product_details_img_four);
            }
            $file = $request->file('product_img_four');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(500, 400);
            $image_resize->save('./storage/app/images/product/product_image/' . $file_name, 100);
            $product['product_img_four'] = $file_name;
            // -------product details image
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(800, 500);
            $image_resize->save('./storage/app/images/product/product_details_image/' . $file_name, 100);
            $product['product_details_img_four'] = $file_name;
        }

        $product->save();
        session()->put('p_msg', 'Product Updated successfully!!!');
        return redirect('/all-product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
    }

    public function delete($id) {
        $product = Product::find($id);
        File::delete('storage/app/images/product/product_image/' . $product->product_img_one);
        File::delete('storage/app/images/product/product_image/' . $product->product_img_two);
        File::delete('storage/app/images/product/product_image/' . $product->product_img_three);
        File::delete('storage/app/images/product/product_image/' . $product->product_img_four);
        File::delete('storage/app/images/product/product_details_image/' . $product->product_details_img_one);
        File::delete('storage/app/images/product/product_details_image/' . $product->product_details_img_two);
        File::delete('storage/app/images/product/product_details_image/' . $product->product_details_img_three);
        File::delete('storage/app/images/product/product_details_image/' . $product->product_details_img_four);
        $product->delete();
        session()->put('p_msg', 'Product deleted successfully!!!');
        return redirect('/all-product');
    }

}
