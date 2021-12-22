@extends('layouts.app')
@section('title', 'Post Edit')
@section('content')
<div class="wrapper">
  <h1>Edit Post</h1>
  
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
  
  <form method="POST" action="{{ url('kelas', $kelas->id ) }}">
    @csrf
    @method('PUT')
    <input name="Nomor_kelas" value="{{ $kelas->Nomor_kelas }}" type="text" placeholder="Nomor_kelas..."> 
    <input name="Nama_kelas" value="{{ $kelas->Nama_kelas }}" type="text" placeholder="Nama_kelas...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
