@extends('layouts.app')
@section('title', 'Post Edit')
@section('content')
<div class="wrapper">
  <h1>Edit Data Baru</h1>

  <!-- tombol -->
  <a href="/guru" class="btn-blue">Kembali</a>
  
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
  <form method="POST" action="{{ url('guru', $guru->id ) }}" style="margin-top:20px;">
    @csrf
    @method('PUT')
    <div class="container-fluid">
    <label for="exampleInputnip" class="form-label">Masukan Nip</label><br>
    <input name="nip" value="{{ $guru->nip }}" type="text" placeholder="nip..."> 
    </div>
    <div class="mt-3">
    <label for="exampleInputnip" class="form-label">Nama</label><br>
    <input name="nama_guru" value="{{ $guru->nama_guru }}" type="text" placeholder="nama_guru...">
    </div>
    <div class="mt-3">
    <label for="exampleInputnip" class="form-label">Mengajar Mapel</label><br>
    <input name="mapel" value="{{ $guru->mapel }}" type="text" placeholder="mapel...">
    </div>
    <br>
    <button class="btn-blue">Submit</button>
    </div>
  </form>
</table>
</div>
@endsection
