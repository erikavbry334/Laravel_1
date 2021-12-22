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
  
  <form method="POST" action="{{ url('ruangan', $ruangan->id ) }}">
    @csrf
    @method('PUT')
    <input name="Nomor_ruangan" value="{{ $ruangan->Nomor_ruangan }}" type="text" placeholder="Nomor ruangan..."> 
    <input name="Nama_ruangan" value="{{ $ruangan->Nama_ruangan }}" type="text" placeholder="Nama ruangan...">
    <input name="Lantai_ruangan" value="{{ $ruangan->Lantai_ruangan }}" type="text" placeholder="lantai ruangan...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
