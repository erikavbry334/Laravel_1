@extends('layouts.bostrap')
@section('title', 'Buat Post Baru')
@section('content')
<div class="wrapper">
  <h1 class="text-center">Buat Data Baru</h1>

  <!-- tombol -->
  <a href="/guru" class="btn btn-primary mb-3">Kembali</a>
  
  @if (session('success'))
  <div class=" alert alert-success">
      {{ session('success') }}
  </div>
  @endif
  
  @if ($errors->any())
  <div class=" alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        {{ $error }}  
      @endforeach
    </ul>
  </div>
  @endif

<div class="card">
  <div class="card-header bg-success">
      <h5 class="text-center text-white">Tambah Data Guru</h5>
  </div>

  <div class="card-body">
  <form style="margin-top:30px;" method="POST" action="{{ url('guru') }}">
    @csrf
    <label for="" class="form-label text-capitalize">masukan nip</label><br>
    <input name="nip" type="text" class="form-control mb-3" placeholder="Masukan Nip Anda..."> 
  
    
    <label for="" class="form-label text-capitalize">masukan nama</label><br>
    <input name="nama_guru" type="text" class="form-control mb-3" placeholder="Nama Anda...">
    
  
    <label for="" class="form-label text-capitalize">mengajar mapel</label><br>
    <input name="mapel" type="text" class="form-control" placeholder="Mapel...">

  </div>

  <div class="card-footer">
    <button class="btn btn-danger" style="width:100px;">Submit</button>
    </form>
  </div>
</div>

  
     
    
   
</div>
</div>
@endsection
