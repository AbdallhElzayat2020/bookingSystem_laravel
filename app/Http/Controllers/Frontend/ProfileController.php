<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\UpdateProfileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();
        return view('frontend.dashboard.profile.index', compact('user'));
    }

    public function update(UpdateProfileRequest $request): RedirectResponse
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->about = $request->about;
        $user->website = $request->website;
        $user->fb_link = $request->fb_link;
        $user->x_link = $request->x_link;
        $user->in_link = $request->in_link;
        $user->wa_link = $request->wa_link;
        return redirect()->back();
    }
}
