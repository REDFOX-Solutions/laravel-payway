<div id="aba_main_modal" class="aba-modal">
    <!-- Modal content -->
    <div class="aba-modal-content">
        <form method="POST" target="aba_webservice"
              action="https://checkout-sandbox.payway.com.kh/api/payment-gateway/v1/payments/purchase"
              id="aba_merchant_request" name="aba_merchant_request">
            <input type="hidden" name="req_time" value="{{$reqTime}}" id="req_time">
            <input type="hidden" name="merchant_id" value="{{$merchantId}}" id="merchant_id">
            <input type="hidden" name="api_version" value="v1">
            <input type="hidden" name="hash" id="hash" value="{{$hash}}">
            <input type="hidden" name="tran_id" id="tran_id" value="{{$trxId}}">
            <input type="hidden" name="amount" value="{{$amount}}">
            <input type="hidden" name="continue_success_url" value="{{$successUrl}}">
            <input type="hidden" value="true" name="is_plugin_js">
        </form>
    </div>
</div>
