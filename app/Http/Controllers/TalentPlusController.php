<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalentPlusController extends Controller
{
    public function talent(){

        $data = response()->json([
            'success' => true,
            'data' => 'TALENT PLUS'
        ], 200);

        // return $data;
        return view('welcome', ['data' => $data]);
    }
}
