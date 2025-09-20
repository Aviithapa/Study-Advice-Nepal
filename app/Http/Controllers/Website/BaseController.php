<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function view($view, $data = array(), $mergeData = array())
    {
        return View::make('website.' . $view, $data, $mergeData);
    }
}
