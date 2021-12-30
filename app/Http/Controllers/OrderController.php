<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller {

    public function show_orders() {
        $all_orders = DB::table('tbl_order')
                ->join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.customer_id')
                ->join('tbl_shipping', 'tbl_order.shipping_id', '=', 'tbl_shipping.shipping_id')
                ->select('tbl_order.*', 'tbl_customer.customer_name', 'tbl_customer.customer_phone', 'tbl_shipping.shipping_name', 'tbl_shipping.shipping_address')
                ->get();

        return view('admin.pages.orders.show_order')
                        ->with('all_orders', $all_orders);
    }

    public function delete_order($order_id) {
        DB::table('tbl_order')->where('order_id', $order_id)->delete();

        session()->put('Order_msg', 'Deleted successfully!!!');
        return redirect('/show-order');
    }

}
