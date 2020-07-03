@extends('master')

@section('content')
<div class="ml-3 mt-3">
	<h1>Detail Pertanyaan</h3>
	<p> Pertanyaan : {{ $pertanyaan->pemberi_pertanyaan}}</p>
	<h2> Judul : {{ $pertanyaan->judul}}</h2><br>
	<p> Isi : {{ $pertanyaan->isi}}</p>
</div>
@endsection