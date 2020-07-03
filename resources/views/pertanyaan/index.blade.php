@extends('master')

@section('content')
<div class='ml-3 mt-3'>
<h1>Data Tabel Pertanyaan</h1>

                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Pemberi Pertanyaan</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pertanyaan as $key=> $pertanyaan)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $pertanyaan->pemberi_pertanyaan }}</td>
                        <td>{{ $pertanyaan->judul }}</td>
                        <td>{{ $pertanyaan->isi }}</td>
                        <td>
                          <a href="/pertanyaan/{{ $pertanyaan->id }}" class="btn btn-sm btn-info">Detail Pertanyaan</a>
                          <a href="/pertanyaan/{{ $pertanyaan->id }}/edit" class="btn btn-sm btn-default">Edit Pertanyaan</a>
                          <form action="/pertanyaan/{{ $pertanyaan->id }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              
  <a href="/pertanyaan/create" class="btn btn-primary">Buat Pertanyaan Baru</a> 

</div>
@endsection