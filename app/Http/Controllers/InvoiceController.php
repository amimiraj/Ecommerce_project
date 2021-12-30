<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller {

    public function order_invoice($order_id) {
        $select_order = DB::table('tbl_order')->where('order_id', $order_id)->get();
        $customer_info = DB::table('tbl_customer')->where('customer_id', $select_order[0]->customer_id)->get();

        $shipping_info = DB::table('tbl_shipping')->where('shipping_id', $select_order[0]->shipping_id)->get();

        $order_details_info = DB::table('tbl_order_details')->where('order_id', $order_id)->get();


        return view('admin.pages.invoice.invoice')
                        ->with('select_order', $select_order)
                        ->with('customer_info', $customer_info)
                        ->with('shipping_info', $shipping_info)
                        ->with('order_details_info', $order_details_info);
    }

    public function invoice_print($order_id) {
        $select_order = DB::table('tbl_order')->where('order_id', $order_id)->get();
        $customer_info = DB::table('tbl_customer')->where('customer_id', $select_order[0]->customer_id)->get();

        $shipping_info = DB::table('tbl_shipping')->where('shipping_id', $select_order[0]->shipping_id)->get();

        $order_details_info = DB::table('tbl_order_details')->where('order_id', $order_id)->get();


        return view('admin.pages.invoice.invoice_print')
                        ->with('select_order', $select_order)
                        ->with('customer_info', $customer_info)
                        ->with('shipping_info', $shipping_info)
                        ->with('order_details_info', $order_details_info);
    }

}
