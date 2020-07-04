@extends('master')

@section('content')
<div class="ml-3 mt-3">
	<h1>Detail Pertanyaan</h3>
	<p> Pertanyaan : {{ $pertanyaan->pemberi_pertanyaan}}</p>
	<h2> Judul : {{ $pertanyaan->judul}}</h2><br>
	<p> Isi : {{ $pertanyaan->isi}}</p>
</div>

<div class="ml-3 mt-3">
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tulis Jawaban</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action='/jawaban' method='post'>
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_pertanyaan">Id Pertanyaan</label>
                    <input class="form-control" id="id_pertanyaan" name='id_pertanyaan' value="{{ $pertanyaan->id }}" placeholder="Masukkan Nama ...." type="number">
                  </div>
                  <div class="form-group">
                    <label for="pemberi_jawaban">Nama</label>
                    <input class="form-control" id="pemberi_jawaban" name='pemberi_jawaban' placeholder="Masukkan Nama ...." type="text">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea class="form-control" name="isi" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
    </div>
</div>

@endsection