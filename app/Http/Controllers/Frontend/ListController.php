<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    public function detailList($id)
    {
        $listDetail = DB::select('select name, user_id  from listitem where id = ?', [$id]);
        return view('frontend.list.detailList', ['listDetail' => $listDetail]);
    }

    public function addItem()
    {
        return view('frontend.list.addItem');
    }

    public function send(Request $request)
    {
        //Mail::send(new SendContact($request));
        DB::insert('insert into listItem (name, description, user_id) values (?, ?, ?)', [$request->get('inputName'), $request->get('inputDescription'), Auth::user()->id]);

        return redirect()->back()->withFlashSuccess("Your list was successfully created.");
    }
}
