<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\NpcTrainingForm;
use App\Models\NpcTrainingFormApplication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->hasRole('admin')) {
            return view('portal.dashboard.admin');
        } elseif (Auth::user()->hasRole('user')) {
            return view('portal.dashboard.user');
        } elseif (Auth::user()->hasRole('expert')) {
            return view('portal.dashboard.expert');
        } else {
            return view('portal.dashboard.default');
        }
    }
}
