
@extends('master')
@section('master-content')
        <div class="page_content_offset">
            <div class="container">
                <h2 class="tt_uppercase color_dark m_bottom_30">Payment</h2>
                <form action="{{URL::to('/save-order')}}" method="post">
                    @csrf
                    <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                        <figure class="block_select clearfix relative m_bottom_15">
                            <input type="radio" checked name="payment_type" value="cash" class="d_none">
                            <img src="images/payment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
                            <figcaption class="d_table d_sm_block">
                                <div class="d_table_cell d_sm_block p_sm_right_0 p_right_45 m_mxs_bottom_5">
                                    <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Cash On Delivery</h5>
                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turp. Donec sit amet eros. </p>
                                </div>
                                <!--                                <div class="d_table_cell d_sm_block discount">
                                                                    <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_0">Discount/Fee</h5>
                                                                    <p class="color_dark">$8.48</p>
                                                                </div>-->
                            </figcaption>
                        </figure>
                        <hr class="m_bottom_20">
                        <figure class="block_select clearfix relative">
                            <input type="radio" name="payment_type" value="others" class="d_none">
                            <img src="images/payment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
                            <figcaption>

                                <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Others</h5>
                                <p>Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. 
                                    Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20">Confirm Purchase</button>
                </form>

                <button class="btn btn-info" id="bKash_button">Pay with bkash</button>

            </div>
        </div>


<script type="text/javascript">

    var accessToken = '';
    $(document).ready(function () {


        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{url('token')}}",
            type: 'POST',
            contentType: 'application/json',
            success: function (data) {
                console.log('got data from token  ..');
                console.log(JSON.stringify(data));

                accessToken = JSON.stringify(data);
            },
            error: function () {
                console.log('error');

            }
        });

        var paymentConfig = {
            createCheckoutURL: "{{url('createpayment')}}",
            executeCheckoutURL: "{{url('executepayment')}}",
        };


        var paymentRequest;
        paymentRequest = {amount: '105', intent: 'sale', invoice: 'inv78'};
        console.log(JSON.stringify(paymentRequest));

        bKash.init({
            paymentMode: 'checkout',
            paymentRequest: paymentRequest,
            createRequest: function (request) {
                console.log('=> createRequest (request) :: ');
                console.log(request);

                $.ajax({
                    url: paymentConfig.createCheckoutURL + "?amount=" + paymentRequest.amount,
                    type: 'GET',
                    contentType: 'application/json',
                    success: function (data) {
                        console.log('got data from create  ..');
                        console.log('data ::=>');
                        console.log(JSON.stringify(data));

                        var obj = JSON.parse(data);

                        if (data && obj.paymentID != null) {
                            paymentID = obj.paymentID;
                            bKash.create().onSuccess(obj);
                        } else {
                            console.log('error');
                            bKash.create().onError();
                        }
                    },
                    error: function () {
                        console.log('error');
                        bKash.create().onError();
                    }
                });
            },

            executeRequestOnAuthorization: function () {
                console.log('=> executeRequestOnAuthorization');
                $.ajax({
                    url: paymentConfig.executeCheckoutURL + "?paymentID=" + paymentID + "&invoice=" + paymentRequest.invoice,
                    type: 'GET',
                    contentType: 'application/json',
                    success: function (data) {
                        console.log('got data from execute  ..');
                        console.log('data ::=>');
                        console.log(JSON.stringify(data));

                        data = JSON.parse(data);
                        if (data && data.paymentID != null) {
                            alert('[SUCCESS] data : ' + JSON.stringify(data));
                            window.location.href = "success.html";
                        } else {
                            bKash.execute().onError();
                        }
                    },
                    error: function () {
                        bKash.execute().onError();
                    }
                });
            }
        });

        console.log("Right after init ");


        function callReconfigure(val) {
            bKash.reconfigure(val);
        }

        function clickPayButton() {
            $("#bKash_button").trigger('click');
        }
    });
</script>

@endsection
