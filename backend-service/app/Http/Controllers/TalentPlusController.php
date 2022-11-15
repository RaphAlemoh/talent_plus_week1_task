<?php

namespace App\Http\Controllers;

class TalentPlusController extends Controller
{
    public function talent(){

        $data = response()->json([
            'success' => true,
            'data' => 'TALENT PLUS'
        ], 200);

        return $data;
    }
}
