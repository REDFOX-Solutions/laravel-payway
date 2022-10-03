<?php

namespace App\Http\Livewire;

use Dorkden\Payway\Payway;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class PlanCheckout extends Component
{
    use AuthorizesRequests;

    private $payway;
    public $amount;
    public $merchantId;
    public $reqTime;
    public $trxId;
    public $hash;
    public $items;
    public $successUrl;

    public $checkedOut = false;

    protected $listeners = ['checkout'];


    public function mount()
    {
    }

    public function choosePlan()
    {

    }

    public function checkout($planId, $amount)
    {

        $this->checkedOut = true;
        $this->payway = app(Payway::class);

        $this->reqTime = date("YmdHis");
        $this->trxId = substr(str_shuffle("0123456789"), 0, 4);
        $this->merchantId = $this->payway->merchantId;
        $this->amount = $amount;
        $this->hash = $this->payway->getHash($this->trxId, $this->amount, $this->items);
        $this->successUrl = route('admin.plan.success') . '?params=' . base64_encode($planId);
    }

    public function render()
    {
        return view('livewire.plan-checkout');
    }

    protected function rules()
    {
        return [];
    }
}
