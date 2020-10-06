<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class GuestController extends Controller
{
  public function index() {
    $cards = Card::all();
    return view('cards', compact('cards'));
  }
  public function show($id) {
    $card = Card::findorFail($id);
    return view('card', compact('card'));
  }
}
