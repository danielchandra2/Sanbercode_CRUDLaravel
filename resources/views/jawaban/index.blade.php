@extends('master')

@section('content')
<div class='ml-3 mt-3'>
<h1>Data Tabel Jawaban</h1>

                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Id Pertanyaan</th>
                      <th>Pemberi Jawaban</th>
                      <th>Isi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($jawaban as $key=> $jawaban)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $jawaban->id_pertanyaan}}</td>
                        <td>{{ $jawaban->pemberi_jawaban }}</td>
                        <td>{{ $jawaban->isi }}</td>
                        <td>
                          <a href="/jawaban/{{ $jawaban->id }}" class="btn btn-sm btn-info">Detail Jawaban</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              

</div>
@endsection