<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Gate;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{


    public function index()
    {
        $user = Auth::user();
        return view('admin.card.index', compact('user'));
    }

    public function create()
    {

    }

    public function edit(User $user)
    {

    }

    public function show(User $user)
    {

    }

}
