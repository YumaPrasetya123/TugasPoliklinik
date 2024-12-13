@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Dokter</h1>

    <!-- Form Edit Pasien -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Pasien</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $dokter->nama }}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dokter->alamat }}" required>
                </div>

                <div class="form-group">
                    <label for="no_hp">Telepon</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $pasien->no_hp }}">
                </div>
                <div class="form-group">
                    <label for="id_poli">No Rw</label>
                    <input type="text" class="form-control" id="no_rw" name="no_rw" value="{{ $pasien->no_rw }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Pasien</button>
                <a href="{{ route('data.pasien') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</div>
@endsection
