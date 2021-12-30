@extends('admin.dashboard')

@section('main-content')

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Invoice #842393</title>
        <script type="text/css" >

            body,td,input,select {
                font-family: Tahoma;
                font-size: 11px;
                color: #000000;
            }

            form {
                margin: 0px;
            }

            a {
                color: #000000;
            }

            #wrapper {
                width: 600px;
            }

            #invoicetoptables {
                width: 100%;
                background-color: #cccccc;
                border-collapse: seperate;
            }

            td#invoicecontent {
                background-color: #ffffff;
                color: #000000;
            }

            .unpaid {
                font-size: 16px;
                color: #cc0000;
                font-weight: bold;
            }

            .paid {
                font-size: 16px;
                color: #779500;
                font-weight: bold;
            }

            .refunded {
                font-size: 16px;
                color: #224488;
                font-weight: bold;
            }

            .cancelled {
                font-size: 16px;
                color: #cccccc;
                font-weight: bold;
            }

            .collections {
                font-size: 16px;
                color: #ffcc00;
                font-weight: bold;
            }

            #invoiceitemstable {
                width: 100%;
                background-color: #cccccc;
                border-collapse: seperate;
            }

            td#invoiceitemsheading {
                background-color: #efefef;
                color: #000000;
                font-weight: bold;
                text-align: center;
            }

            td#invoiceitemsrow {
                background-color: #ffffff;
                color: #000000;
            }

            .creditbox {
                border: 1px dashed #cc0000;
                font-weight: bold;
                background-color: #FBEEEB;
                text-align: center;
                width: 100%;
                padding: 10px;
                color: #cc0000;
                margin-left: auto;
                margin-right: auto;
            }
        </script>
    </head>
    <body bgcolor="#efefef" onload="window.print();">


        <table id="wrapper" cellspacing="1" width="100%" cellpadding="10" bgcolor="#cccccc" align="center"><tbody><tr><td bgcolor="#ffffff">

                        <h2 style="text-align: center">Order View</h2>
                        <hr>
                        <h1>Alal's GK</h1>
                        <h1>Hotline:(+88)019-11578340</h1>
                        <hr/>


                        <br>


                        <table width="100%" id="invoicetoptables" cellspacing="0"><tbody><tr>
                                    <td colspan="2" id="invoicecontent" style="border:1px solid #cccccc">

                                        <table width="100%" height="100" cellspacing="0" cellpadding="10" id="invoicetoptables"><tbody><tr>
                                                    <td width="50%" valign="top" id="invoicecontent" style="border:1px solid #cccccc">

                                                        <strong>Invoice To</strong><br>
                                                        Name:   <?php echo $customer_info[0]->customer_name ?><br>
                                                        Phone Number:<?php echo $customer_info[0]->customer_phone ?><br>
                                                        Email:  <?php echo $customer_info[0]->customer_email ?><br>
                                                        Address: <?php echo $customer_info[0]->customer_address ?><br>
                                                    </td>
                                                    <td width="50%" valign="top" id="invoicecontent" style="border:1px solid #cccccc">

                                                        <strong>Ship To</strong><br>
                                                        Name:   <?php echo $shipping_info[0]->shipping_name ?><br>
                                                        Phone Number:<?php echo $shipping_info[0]->shipping_phone ?><br>
                                                        Email:  <?php echo $shipping_info[0]->shipping_email ?><br>
                                                        Address:  <?php echo $shipping_info[0]->shipping_address ?>, <br>
                                                    </td>
                                                </tr>
                                            </tbody></table>

                                    </td>


                                </tr></tbody></table>

                        <p><strong>Invoice #inv-000 <?php echo $select_order[0]->order_id ?></strong><br>
                            Invoice Date: <?php echo date('d/m/Y', strtotime($select_order[0]->created_at)) ?><br>
                            Due Date: <?php echo date('d/m/y', strtotime($select_order[0]->created_at . ' + 7 day')) ?></p>
                        <hr/>
                        <h2>Order Details</h2>
                        <hr/>
                        <table border="1" width="100%" id="invoicetoptables" cellspacing="0">
                            <thead>
                                <tr>


                                    <td class="name">Product Name</td>

                                    <td class="quantity">Quantity</td>
                                    <td class="price">Unit Price</td>
                                    <td class="total">Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total = 0;
                                foreach ($order_details_info as $v_order_info[0]) {
                                    ?>
                                    <tr>


                                        <td class="name"><a href="product.html"><?php echo $v_order_info[0]->product_name; ?></a> <span class="stock">***</span>
                                            <div> </div></td>

                                        <td class="quantity">
                                            <?php echo $v_order_info[0]->product_qty; ?>

                                        </td>
                                        <td class="price">TK. <?php echo $v_order_info[0]->product_price; ?></td>
                                        <td class="total">TK. <?php echo $v_order_info[0]->product_qty * $v_order_info[0]->product_price; ?></td>
                                    </tr>
                                    <?php
                                    $total = $total + $v_order_info[0]->product_qty * $v_order_info[0]->product_price;
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                        <div class="cart-module">

                            <div class="cart-total">
                                <table  align="right">
                                    <tbody>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td class="right"><b>Sub-Total:</b></td>
                                            <td class="right numbers">TK. <?php echo $total; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td class="right"><b>VAT 00%:</b></td>
                                            <td class="right numbers">
                                                <?php
                                                $vat = (15 * $total) / 100;
                                                echo 'TK.  ' . 0;
                                                ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td class="right numbers_total"><b>Grand Total:</b></td>
                                            <td class="right numbers_total"><?php
//                                                $g_total = $total + $vat;
                                                $g_total = $total;
//
                                                echo 'TK.  &nbsp; ' . $g_total
                                                ?></td>
                                        </tr>
                                    </tbody>
                                </table>



                                </td></tr></tbody></table>




                                </body>
                                </html>

                                @endsection