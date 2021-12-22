@extends('layouts.app')
@section('tampilkan data siswa', 'Post Edit')
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
  
  <form method="POST" action="{{ url('Siswa', $siswa->id ) }}">
    @csrf
    @method('PUT')
    <input name="nisn" value="{{ $siswa->nisn}}" type="text" placeholder="nisn..."> 
    <input name="nama_siswa" value="{{ $siswa->nama_siswa }}" type="text" placeholder="nama_siswa...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
