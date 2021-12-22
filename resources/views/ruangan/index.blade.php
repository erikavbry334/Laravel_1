@extends('layouts.app')
@section('ruangan', 'Tampilkan Data Ruangan')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Tampilkan Data Ruangan</h1>

  @if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
    @endif
    
  <table style="width:100%">
    <thead>
    <tr>
        <th>Nomor ruangan</th>
        <th>Nama ruangan</th>
        <th>Lantai ruangan</th>
        <th colspan="2">Edit</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($ruangan as $rg)
      <tr>
        <td style="width: 200px" >{{ $rg->Nomor_ruangan}}</td>
        <td style="width: 500px" >{{ $rg->Nama_ruangan}}</td>
        <td style="width: 500px" >{{ $rg->Lantai_ruangan}}</td>
        <td style="width: 100px"><button class="btn-green"><a href="{{ route('ruangan.edit', $rg->id) }}">Edit</a></button></td>
        <form method="POST" action="{{ url('ruangan', $rg->id ) }}">
    @csrf
    @method('DELETE')
    <td style="width: 100px"><button class="btn-red">Hapus</button></td>
  </form>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
