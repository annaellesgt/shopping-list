<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if(Auth::user() != null){

        $id = Auth::user()->id;

        }else{
            $id = 4;
        }

        $lists = DB::select('select * from listitem where user_id = ?', [$id]);
        return view('frontend.index', ['lists' => $lists]);
    }

    public function map()
    {
        return view('frontend.map');
    }
}
