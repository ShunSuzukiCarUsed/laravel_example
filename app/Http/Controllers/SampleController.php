<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    const PAGINATE = 5;

    public function index(Request $request)
    {
        $users = User::query()->paginate(self::PAGINATE);
        return view('sample', compact('users'));
    }
}
