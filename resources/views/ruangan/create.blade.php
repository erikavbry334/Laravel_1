@extends('layouts.app')
@section('ruangan', 'tampilkan data ruangan')
@section('content')
<div class="wrapper">
  <h1>Tampilkan Data Ruangan</h1>
  
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
  <form method="POST" action="{{ url('ruangan') }}">
    @csrf
    <input name="Nomor_ruangan" type="text" placeholder="Nomor ruangan..."> 
    <input name="Nama_ruangan" type="text" placeholder="Nama ruangan...">
    <input name="Lantai_ruangan" type="text" placeholder="Lantai ruangan..." >
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
