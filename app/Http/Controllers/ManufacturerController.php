<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ManufacturerController extends Controller {

    public function add_manufacturer() {
        return view('admin.pages.manufacturer.add_manufacturer');
    }

    public function save_manufacturer(Request $request) {
        $data = new Manufacturer;
        $data['manufacturer_name'] = $request->manufacturer_name;
        $data['manufacturer_description'] = $request->manufacturer_description;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keywords'] = $request->meta_keywords;
        $data['meta_description'] = $request->meta_description;
        $data['manufacturer_status'] = $request->manufacturer_status;

        if ($request->hasFile('manufacturer_image')) {

            $file = $request->file('manufacturer_image');
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(800, 400);
            $image_resize->save('./storage/app/images/manufacturer/manufacturer_image/' . $file_name, 100);
            $data['manufacturer_image'] = $file_name;
        }else{           
             $data['manufacturer_image'] = 'No_Image_Available.jpg';
        }
        
        
//       
        $data->save();
        session()->put('m_msg', 'Manufacturer information has been saved successfully!!');
        return redirect('/all-manufacturer');
    }

    public function all_manufacturer() {
        $all_manufacturer = DB::table('manufacturer')->get();
        return view('admin.pages.manufacturer.all_manufacturer')->with('all_manufacturer', $all_manufacturer);
    }

    public function edit_manufacturer($id) {

        $manufacturer_info = DB::table('manufacturer')->where('id', $id)->get();
        return view('admin.pages.manufacturer.edit_manufacturer')->with('manufacturer_info', $manufacturer_info);
    }

    public function update_manufacturer(Request $request, $id) {

        $data = Manufacturer::find($id);
        $data['manufacturer_name'] = $request->manufacturer_name;
        $data['manufacturer_description'] = $request->manufacturer_description;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keywords'] = $request->meta_keywords;
        $data['meta_description'] = $request->meta_description;
        $data['manufacturer_status'] = $request->manufacturer_status;

        if ($request->hasFile('manufacturer_image')) {

            if (File::exists('storage/app/images/manufacturer/manufacturer_image/' . $data->manufacturer_image)) {
                File::delete('storage/app/images/manufacturer/manufacturer_image/' . $data->manufacturer_image);
            }

            if ($request->hasFile('manufacturer_image')) {

                $file = $request->file('manufacturer_image');
                $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $image_resize = Image::make($file->getRealPath())->resize(800, 400);
                $image_resize->save('./storage/app/images/manufacturer/manufacturer_image/' . $file_name, 100);
                $data['manufacturer_image'] = $file_name;
            }
        }

        $data->save();
        session()->put('m_msg', 'Manufacturer updated successfully!!!');
        return redirect('/all-manufacturer');
    }

    public function delete_manufacturer($id) {

        $manufacturer = Manufacturer::find($id);
        File::delete('storage/app/images/manufacturer/manufacturer_image/' . $manufacturer->manufacturer_image);
        $manufacturer->delete();

        session()->put('m_msg', 'Manufacturer deleted successfully!!!');
        return redirect('/all-manufacturer');
    }

}
