<?php

namespace App\Http\Controllers\Frontend\User;

/**
 * Class DashboardController.
 */
class DashboardController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $user = auth()->user();
        if ($user->profile === null) {
            return redirect()->route('frontend.welcome')->with('user');
        } else {
            dd($user);
            return view('frontend.user.dashboard', ['user']);
        }
    }
}
