<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReturningController extends Controller
{
    public function index()
    {
      $data_borrow = \App\Models\Borrow::where('status', 'returned')->get();
      $data_return = \App\Models\Returning::all();
      return view('returnings.index',['data_borrow' => $data_borrow],['data_return' => $data_return]);
    }
    public function returnNow(Request $request, $id)
    {
      DB::table('book')->where('id', $request->book_id)->increment('stock', 1);
      $borrow = \App\Models\Borrow::find($id);
      $borrow->update(array('status' => 'returned'));
      $return = \App\Models\Returning::where('borrow_id', $id)->first();
      $staff = auth()->user()->id;
      $return->update(['staff_id' => $staff]);
      $return->update(['returnDate' => date('Y-m-d')]);
      $return->save();
      return redirect('/borrow');
    }
}
