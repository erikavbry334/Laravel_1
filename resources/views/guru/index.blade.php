@extends('layouts.bostrap')
@section('guru','tampilkan data guru')
@section('content')
<div class="wrapper">
  <h1 class="text-center">Tampilkan Data Guru</h1>
     @if (session('success'))
        <div class=" alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="guru/create" class="btn btn-primary mb-3">Tambah Data</a>

  <table class="table table-striped table-hover">
    <thead>
      <tr class="bg-warning text-center text-white">
        <th>NIP</th>
        <th>Nama Guru</th>
        <th>Mata Pelajaran</th>
        <th colspan="2">Edit</th>
      </tr>
    </thead>
</tabel>
    <tbody>
      @foreach ($guru as $gr)
      <tr class="text-center text-capitalize">
        <th style="width: 300px">{{ $gr->nip}}</th>
        <th style="width: 500px">{{ $gr->nama_guru }}</th>
        <th style="width: 500px">{{ $gr->mapel }}</th>
        <th style="width: 100px"><button class="btn btn-success" style="width:100px;"><a href="{{ route('guru.edit', $gr->id) }}" class="text-white" style="text-decoration:none;">Edit</a></button></th>
  <form method="POST" action="{{ url('guru', $gr->id ) }}">
    @csrf
    @method('DELETE')
    <td style="width: 100px"><button class=" btn btn-danger" style="width:100px;">Hapus</button></td>
  </form>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
@endsection