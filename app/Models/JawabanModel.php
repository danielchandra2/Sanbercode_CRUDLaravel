<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel{

	public static function get_all(){
		$jawaban = DB::table('jawaban')->get();
		return $jawaban;
	}

	public static function save($data){
		$new_item = DB::table('jawaban')->insert($data);

		return $new_item;
	}

}

 ?>
