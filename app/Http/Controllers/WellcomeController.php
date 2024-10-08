<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $user = User::find(1);

        dd($user->name);

        return view("test.jeremias", compact("users"));
    }
}
