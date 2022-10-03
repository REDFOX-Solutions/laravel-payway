<?php

namespace App\Http\Livewire;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class ManageCardForm extends Component
{
    use AuthorizesRequests;

    public $user = [];


    public function mount()
    {
        $this->user = auth()->user()->withoutRelations()->toArray();
    }

    public function addCard()
    {
        $this->authorize('auth_profile_edit');

        $this->resetErrorBag();


        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.manage-card-form');
    }

    protected function rules()
    {
        return [];
    }
}
