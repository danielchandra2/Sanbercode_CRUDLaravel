@extends('master')

@section('content')
<div class="ml-3 mt-3">
	<h1>Detail Jawaban</h3>
  <p> Id Pertanyaan : {{ $jawaban->id_pertanyaan }}</p><br>
	<p> Pemberi Jawaban : {{ $jawaban->pemberi_jawaban}}</p><br>
	<p> Isi : {{ $jawaban->isi}}</p>
</div>

@endsection