<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommunityModulesController extends Controller
{
    public function index()
    {
        $modules = file_get_contents('https://spreadsheets.google.com/feeds/list/1nTVVCNTPO6bj9pjBcMHdV5dRLSBClIrCENyQduwOu1w/od6/public/values?alt=json');
        return view('pages/community-modules/index', [
            'modules' => json_decode(modules),
        ]);
    }
}
