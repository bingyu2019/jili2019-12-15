<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TopicsController extends Controller
{

    public function show()
    {
        return view('topics.show');
    }
    //
    public function create()
    {
        return view('topics.create_and_edit');
    }







}
