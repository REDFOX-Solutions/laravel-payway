<?php
$payway = app('Dorkden\Payway\Payway');

$merchantId = $payway->merchantId;
$amount = '40.00';
$reqTime = date("YmdHis");
$trxId = '80';
$hash = $payway->getHash($trxId, $amount);


?>

<div>
    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
        Manage Card
    </h6>

    <div class="flex flex-wrap">
        <div class="container">
            <a href="#" id="add_card_button" class="btn btn-primary add-to-card">Add New Card</a>
        </div>
        <!-- The Modal -->
        <div id="aba_main_modal" class="aba-modal">
            <!-- Modal content -->
            <div class="aba-modal-content">
                <form method="POST" target="aba_webservice"
                      action="https://checkout-sandbox.payway.com.kh/api/payment-gateway/v1/payments/purchase"
                      id="aba_merchant_request" name="aba_merchant_request">
                    <input type="hidden" name="req_time" value="{{$reqTime}}" id="req_time">
                    <input type="hidden" name="merchant_id" value="ec002442" id="merchant_id">
                    <input type="hidden" name="api_version" value="v1">
                    <input type="hidden" name="hash" id="hash" value="{{$hash}}">
                    <input type="hidden" name="tran_id" id="tran_id" value="{{$trxId}}">
                    <input type="hidden" name="amount" value="{{$amount}}">
                    <input type="hidden" value="true" name="is_plugin_js">
                    <input type="hidden" name="payment_option" value="bakong"/>
                </form>
            </div>
        </div>
    </div>
   {{-- <div class="flex flex-wrap">
        <div class="container">
            <a href="#" id="add_card_button" class="btn btn-primary add-to-card">Add New Card</a>
        </div>
        <!-- The Modal -->
        <div id="aba_main_modal" class="aba-modal">
            <!-- Modal content -->
            <div class="aba-modal-content add-card">
                <form method="POST" target="aba_webservice"
                      action="https://checkout-sandbox.payway.com.kh/api/payment-gateway/v1/cof/initial"
                      id="aba_merchant_add_card">
                    <input type="hidden" name="firstname" value="Samnang"/>
                    <input type="hidden" name="lastname" value="Sok"/>
                    <input type="hidden" name="phone" value="0123456789"/>
                    <input type="hidden" name="email" value="sok.samnang@gmail.com"/>
                    <input type="hidden" name="merchant_id" value="{{$merchantId}}"/>
                    <input type="hidden" name="return_param" value="rp-1582083583"/>
                    <input type="hidden" name="hash" value="{{$hash}}"/>
                </form>

            </div>
        </div>
    </div>--}}
</div>
