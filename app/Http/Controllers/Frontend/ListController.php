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

        $listDetail = DB::select('select name, user_id, id  from listitem where id = ?', [$id]);
        $items = DB::select('select *  from item  where list_id = ?', [$id]);
        $contributors = DB::select('select *  from contributor  where id_list = ?', [$id]);

        return view('frontend.list.detailList', ['listDetail' => $listDetail[0], 'items' => $items, 'contributors' => $contributors]);
    }


    public function send(Request $request)
    {

        DB::insert('insert into listItem (name, description, user_id) values (?, ?, ?)', [$request->get('inputName'), $request->get('inputDescription'), Auth::user()->id]);

        return redirect()->back()->withFlashSuccess("Your list was successfully created.");
    }

    public function addItem($id)
{
    return view('frontend.list.addItem', ['id' => $id]);
}

    public function addItemSend(Request $request)
    {

        $id = $request->get('hiddenId');

        DB::insert('insert into item (name, price, qte, status, img, list_id) values (?, ?, ?,?,?,?)', [$request->get('inputName'), $request->get('inputPrice'),$request->get('inputQte'), "waiting","http://via.placeholder.com/300", $request->get('hiddenId')]);
        $listDetail = DB::select('select name, user_id, id  from listitem where id = ?', [$id]);
        $item = DB::select('select *  from item  where list_id = ?', [$id]);
        $contributors = DB::select('select *  from contributor  where id_list = ?', [$id]);
        return view('frontend.list.detailList', ['listDetail' => $listDetail[0], 'items' => $item, 'contributors' => $contributors]);
        //return redirect()->back()->withFlashSuccess("Your list was successfully created.");
    }

    public function addContributor($id)
    {
        $users = DB::select('select *  from users');
        return view('frontend.list.addContributor', ['id' => $id, 'users' => $users]);
    }

    public function addContributorSend(Request $request)
    {

        $id = $request->get('hiddenId');

        DB::insert('insert into contributor (user_name, id_list) values ( ?, ?)', [$request->get('email'), $request->get('hiddenId')]);
        $listDetail = DB::select('select name, user_id, id  from listitem where id = ?', [$id]);
        $item = DB::select('select *  from item  where list_id = ?', [$id]);
        $contributors = DB::select('select *  from contributor  where id_list = ?', [$id]);
        return view('frontend.list.detailList', ['listDetail' => $listDetail[0], 'items' => $item, 'contributors' => $contributors]);
        //return redirect()->back()->withFlashSuccess("Your list was successfully created.");
    }
}
