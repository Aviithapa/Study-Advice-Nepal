<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;

class PortalBaseController extends Controller
{
    /**
     * Render a portal page view.
     *
     * @param string $page
     * @param array $data
     * @return \Illuminate\View\View
     */
    protected function view(string $page, array $data = [])
    {
        return view("portal.pages.{$page}", $data);
    }
}
