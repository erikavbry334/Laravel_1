@extends('layouts.app')
@section('kelas', 'Buat Post Baru')
@section('content')
<div class="wrapper">
  <h1>Buat Post Baru</h1>
  
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
  
  <form method="POST" action="{{ url('kelas') }}">
    @csrf
    <input name="Nomor_kelas" type="text" placeholder="Nomor kelas.."> 
    <input name="Nama_kelas" type="text" placeholder="Nama kelas...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
