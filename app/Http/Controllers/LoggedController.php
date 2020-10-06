<?php

namespace App\Http\Controllers;

use App\Card;
use App\Mail\UserAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class LoggedController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function destroy($id) {
    $card = Card::findorfail($id);
    $card -> delete();
    $user = Auth::user();
    $action = "DELETE";
    Mail::to('admin@admin.com')->send(new UserAction($user,$card,$action));
    return redirect() -> route('index');
  }
  public function create() {
    $card = Card::all();
    return view('create',compact('card'));
  }
  public function edit($id) {
    $card = Card :: findorfail($id);
    return view('edit',compact('card'));
  }
  public function store(Request $request) {
    $data = $request -> all();
    Card :: create($data);
    return redirect() -> route('index');
  }
  public function update(Request $request ,$id ) {
  $data = $request -> all();
  $card = Card::findOrFail($id);
  $card -> update($data);
  $user = Auth::user();
  $action = "EDIT";
  Mail::to('admin@admin.com')->send(new UserAction($user,$card,$action));
  return redirect() -> route('index');
}
}
