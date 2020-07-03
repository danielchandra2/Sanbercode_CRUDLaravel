@extends('master')

@section('content')
<div class="ml-3 mt-3">
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action='/pertanyaan/{{ $pertanyaan->id }}' method='post'>
              	@csrf
              	@method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="pemberi_pertanyaan">Nama</label>
                    <input class="form-control" id="pemberi_pertanyaan" name='pemberi_pertanyaan' value="{{ $pertanyaan->pemberi_pertanyaan }}"placeholder="Masukkan Nama ...." type="text">
                  </div>
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input class="form-control" id="judul" name='judul' value="{{ $pertanyaan->judul }}" placeholder="Masukkan Judul.." type="text">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea class="form-control" name="isi" rows="3" value="{{ $pertanyaan->isi }}" placeholder="{{ $pertanyaan->isi }}"></textarea>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
    </div>
</div>

@endsection