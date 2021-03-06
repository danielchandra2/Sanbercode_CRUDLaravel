@extends('master')

@section('content')
<div class="ml-3 mt-3">
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action='/pertanyaan' method='post'>
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="pemberi_pertanyaan">Nama</label>
                    <input class="form-control" id="pemberi_pertanyaan" name='pemberi_pertanyaan' placeholder="Masukkan Nama ...." type="text">
                  </div>
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input class="form-control" id="judul" name='judul' placeholder="Masukkan Judul.." type="text">
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