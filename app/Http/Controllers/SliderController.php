<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SliderController extends Controller {

    public function all_slider() {
        $all_slider = DB::table('sliders')->get();
        return view('admin.pages.slider.all_slider')
                        ->with('all_slider', $all_slider);
    }

    public function create() {
        return view('admin.pages.slider.add_slider');
    }

    public function store(Request $request) {
        $slider = new Slider;
        $slider['slider_title'] = $request->slider_title;
        $slider['slider_text'] = 'Slider Text';
        $slider['slider_link'] = 'slider_link';
        $slider['slider_status'] = $request->slider_status;

        if ($request->hasFile('slider_image')) {

            $file = $request->file('slider_image');
            $file_name = time() . '.' . $request->slider_image->extension();
            $destinationPath = 'storage/app/images/slider/slider_image/';
            $thumb_img = Image::make($file->getRealPath())->resize(1140, 855);
            $thumb_img->save($destinationPath . $file_name, 100);
            $slider['slider_image'] = $file_name;
            $file_name1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(800, 300);
            $image_resize->save('./storage/app/images/slider/slider_image/' . $file_name1, 100);
            $slider['slider_image'] = $file_name1;
        }
        $slider->save();

        session()->put('slide_add_msg', 'Slider info saved successfully!!');
        return redirect('sliders/all_slider');
    }

    public function edit($id) {
        $slider_info = DB::table('sliders')->where('id', $id)->get();
        return view('admin.pages.slider.edit_slider')
                        ->with('slider_info', $slider_info);
    }

    public function update(Request $request, $id) {
        $slider = Slider::find($id);
        $slider['slider_title'] = $request->slider_title;
        $slider['slider_text'] ='slider_text';
        $slider['slider_link'] ='slider_link';
        $slider['slider_status'] = $request->slider_status;

        if ($request->hasFile('slider_image')) {
            if (File::exists('storage/app/images/slider/slider_image/' . $slider->slider_image)) {
                File::delete('storage/app/images/slider/slider_image/' . $slider->slider_image);
            }
            $file = $request->file('slider_image');

            $file_name = time() . '.' . $request->slider_image->extension();
            $destinationPath = 'storage/app/images/slider/slider_image/';
            $thumb_img = Image::make($file->getRealPath())->resize(1140, 855);
            $thumb_img->save($destinationPath . $file_name, 100);
            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->resize(800, 300);
            $image_resize->save('./storage/app/images/slider/slider_image/' . $file_name, 100);
            $slider['slider_image'] = $file_name;
        }

        $slider->save();
        session()->put('slide_update_msg', 'Slide info updated successfully!!');
        return redirect('sliders/all_slider');
    }

    public function delete($id) {

        $slider = Slider::find($id);
        File::delete('storage/app/images/slider/slider_image/' . $slider->slider_image);
        $slider->delete();
        return redirect('sliders/all_slider');
    }

}
