<?php

namespace z7d\firewall;

use App\Http\Controllers\Controller;


class TimezonesController extends Controller
{

    public function index()
    {
        echo '<!-- '.$_SERVER['REMOTE_ADDR'].' -->';
    }

}