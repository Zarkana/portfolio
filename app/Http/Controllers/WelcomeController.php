<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller {

  public function getIndex(){
    $first = 'Joseph';
    $middle = 'S.';
    $last = 'Campbell';

    $full = $first . " " . $middle . " " . $last;
    return view("welcome")->withFullname($full);
  }

}
