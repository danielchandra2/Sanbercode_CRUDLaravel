<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index(){
    	$jawaban = JawabanModel::get_all();
    	return view('jawaban.index', compact('jawaban'));
    }

    public function store(request $request){
        $new_jawaban = JawabanModel::save($request->all());

        return redirect('/jawaban');
    }

    public function show($id){
        $jawaban=JawabanModel::find_by_id($id);

        return view('jawaban.show',compact('jawaban'));
    }
}
