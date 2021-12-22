@extends('layouts.app')
@section('siswa', 'tampilkan data siswa')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Tampilkan Data Siswa</h1>
  @if (session('success'))
        <div class=" alert alert-">
            {{ session('success') }}
        </div>
    @endif

    <a href="guru/create" class="btn btn-primary mb-3">Tambah Data</a>

  <table style="width:100%">
    <thead> 
      <tr>
        <th>nisn</th>
        <th>nama_siswa</th>
        <th  colspan="2">edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($siswa as $sw)
      <tr>
        <td style="width: 200px" >{{ $sw->nisn}}</td>
        <td style="width: 500px" >{{ $sw->nama_siswa }}</td>
        <td style="width: 100px"><button class="btn-green"><a href="{{ route('Siswa.edit', $sw->id) }}">Edit</a></button></td>
  <form method="POST" action="{{ url('Siswa', $sw->id ) }}">
    @csrf
    @method('DELETE')
    <td style="width: 100px"><button class="btn-red">Hapus</button></td>
  </form>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
