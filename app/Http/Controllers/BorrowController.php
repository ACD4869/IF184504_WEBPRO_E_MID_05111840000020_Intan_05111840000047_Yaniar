<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;

class BorrowController extends Controller
{
    public function index()
    {
      $data_borrow = \App\Models\Borrow::where('status', 'accepted')->get();
      return view('staff.borrow-list',['data_borrow' => $data_borrow]);
    }
    public function indexMyReq()
    {
      $myid = auth()->user()->id;
      $data_borrow = \App\Models\Borrow::where('user_id', $myid)->where('status','waiting')->get();
      return view('member.myRequest',['data_borrow' => $data_borrow]);
    }
    public function myHistory()
    {
      $myid = auth()->user()->id;
      $data_borrow = \App\Models\Borrow::where('user_id', $myid)->where('status','!=','waiting')->get();
      return view('member.myHistory',['data_borrow' => $data_borrow]);
    }
    public function createRequest(Request $request, $id)
    {
      $today = date('Y-m-d');
      $returnd = date('Y-m-d', strtotime($today. ' + 10 days'));
      $myid = auth()->user()->id;
      $borrowRequest = new \App\Models\Borrow;
      $borrowRequest->book_id = $id;
      $borrowRequest->user_id = $myid;
      $borrowRequest->staff_id = '1';
      $borrowRequest->borrowDate = $today;
      $borrowRequest->estimatedReturnDate = $returnd;
      $borrowRequest->status = 'waiting';
      $borrowRequest->save();
      return redirect('/books')->with('success','Borrow request has successfully sent!');
    }
    public function deleteRequest($id)
    {
      $myRequest = \App\Models\Borrow::find($id);
      $myRequest->delete();
      return redirect('/borrow/request');
    }
    public function waitingAcc()
    {
      $data_borrow = \App\Models\Borrow::where('status','waiting')->get();
      return view('staff.borrow-waiting',['data_borrow' => $data_borrow]);
    }
    public function accBorrow(Request $request, $id)
    {
      DB::table('book')->where('id', $request->book_id)->decrement('stock', 1);
      $borrow = \App\Models\Borrow::find($id);
      $returns = new \App\Models\Returning;
      $returns->user_id = $borrow->user_id;
      $returns->borrow_id = $id;
      $returns->save();
      $borrow->update(['status' => 'accepted']);
      $borrow->update(['returning_id' => $returns->id]);
      return redirect('/borrow/waiting')->with('success','Borrow request has successfully accepted!');
    }
}
