<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use DB;

class FormController extends Controller
{
    public function records(){
        $record=Book::paginate(5);
        return view('record',compact('record'));
       
    }
}
