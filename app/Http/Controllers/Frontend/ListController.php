<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class ListController.
 */
class ListController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createList()
    {
        return view('frontend.list.createList');
    }


    public function detailList()
    {
        return view('frontend.list.detailList');
    }

    public function addItem()
    {
        return view('frontend.list.addItem');
    }
}
