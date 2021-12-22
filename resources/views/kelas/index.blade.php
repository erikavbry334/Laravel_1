@extends('layouts.app')
@section('kelas', 'Tampilkan Data Kelas')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Tampilkan Data Kelas</h1>

    @if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
    @endif

  <table style="width:100%">
    <thead>
      <tr>
        <th>Nomor kelas</th>
        <th>Nama kelas</th>
        <th colspan="2">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kelas as $kl)
      <tr>
        <td style="width: 200px" >{{ $kl->Nomor_kelas}}</td>
        <td style="width: 500px" >{{ $kl->Nama_kelas }}</td>
        <td style="width: 100px"><button class="btn-green"><a href="{{ route('kelas.edit', $kl->id) }}">Edit</a></button></td>
  <form method="POST" action="{{ url('kelas', $kl->id ) }}">
     @csrf
     @method('DELETE')
    <td style="width: 100px"><button class="btn-red">Hapus</button></td>
  </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
