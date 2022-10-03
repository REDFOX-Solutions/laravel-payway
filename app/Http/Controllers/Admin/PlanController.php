<?php

namespace App\Http\Controllers\Admin;

use Dorkden\Payway\Payway;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LucasDotVin\Soulbscription\Models\Plan;

class PlanController extends Controller
{
    public function index()
    {
        $payway = app(Payway::class);

        return view('admin.plans.index', [
            'currentSubscription' => auth()->user()->subscription,
            'payway' => $payway
        ]);
    }

    public function update(Request $request)
    {
        $params = $request->query('params');

        if ($params == null) {
            return redirect()->route('admin.plan.index');
        }

        $params = base64_decode($params);

        $plan = Plan::find($params['id']);

        auth()->user()->subscribeTo($plan);

        return redirect()->route('admin.plan.index');
    }

    public function success(Request $request)
    {
        $planId = $request->query('params');

        if ($planId == null) {
            return redirect()->route('admin.plan.index');
        }

        $planId = base64_decode($planId);

        $plan = Plan::find($planId);

        auth()->user()->subscribeTo($plan);

        return redirect()->route('admin.plan.index');
    }

    public function destroy(Plan $plan)
    {
        auth()->user()->subscription->cancel();

        return redirect()->route('admin.plan.index');
    }
}
