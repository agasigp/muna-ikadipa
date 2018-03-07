@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('failed'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Pendaftaran Muna IKADIPA</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('registration.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nama_kk">Nama Kepala Keluarga</label>
                            <input type="text" class="form-control" id="nama_kk" aria-describedby="namaKkHelp" placeholder="Nama Kepala Keluarga" name="name" required>
                            {{--  <small id="namaKkHelp" class="form-text text-muted">Nama Kepala Keluarga</small>  --}}
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" aria-describedby="alamatHelp" placeholder="Alamat" name="address" required>
                            {{--  <small id="alamatHelp" class="form-text text-muted">Alamat</small>  --}}
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" class="form-control" id="no_hp" aria-describedby="noHpHelp" placeholder="No Handphone" name="telephone" required>
                            {{--  <small id="noHpHelp" class="form-text text-muted">No Handphone</small>  --}}
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" required>
                            {{--  <small id="noHpHelp" class="form-text text-muted">No Handphone</small>  --}}
                        </div>
                        <div class="form-group">
                            <label for="nama_ortu">Nama Orang Tua (Yang termasuk trah Kartadipa)</label>
                            <input type="text" class="form-control" id="nama_ortu" aria-describedby="namaOrtuHelp" placeholder="Nama Orang Tua Yang Termasuk Trah Kartadipa" name="parent" required>
                            {{--  <small id="namaOrtuHelp" class="form-text text-muted">Nama Orang Tua (Yang termasuk trah Kartadipa)</small>  --}}
                        </div>
                        <div class="form-group">
                            <label for="">Daftar anggota keluarga yang ikut (termasuk kepala keluarga)</label>
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Umur</th>
                                        <th scope="col">Jenis Kelamin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><input type="text" class="form-control" name="participant_detail_name[]"></td>
                                        <td><input type="number" name="participant_detail_age[]" class="form-control"></td>
                                        <td>
                                            <select name="participant_detail_sex[]" class="form-control">
                                                <option>-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="0">Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><input type="text" class="form-control" name="participant_detail_name[]"></td>
                                        <td><input type="number" name="participant_detail_age[]" class="form-control"></td>
                                        <td>
                                            <select name="participant_detail_sex[]" class="form-control">
                                                <option>-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="0">Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><input type="text" class="form-control" name="participant_detail_name[]"></td>
                                        <td><input type="number" name="participant_detail_age[]" class="form-control"></td>
                                        <td>
                                            <select name="participant_detail_sex[]" class="form-control">
                                                <option>-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="0">Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td><input type="text" class="form-control" name="participant_detail_name[]"></td>
                                        <td><input type="number" name="participant_detail_age[]" class="form-control"></td>
                                        <td>
                                            <select name="participant_detail_sex[]" class="form-control">
                                                <option>-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="0">Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td><input type="text" class="form-control" name="participant_detail_name[]"></td>
                                        <td><input type="number" name="participant_detail_age[]" class="form-control"></td>
                                        <td>
                                            <select name="participant_detail_sex[]" class="form-control">
                                                <option>-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="0">Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td><input type="text" class="form-control" name="participant_detail_name[]"></td>
                                        <td><input type="number" name="participant_detail_age[]" class="form-control"></td>
                                        <td>
                                            <select name="participant_detail_sex[]" class="form-control">
                                                <option>-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="0">Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td><input type="text" class="form-control" name="participant_detail_name[]"></td>
                                        <td><input type="number" name="participant_detail_age[]" class="form-control"></td>
                                        <td>
                                            <select name="participant_detail_sex[]" class="form-control">
                                                <option>-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="0">Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td><input type="text" class="form-control" name="participant_detail_name[]"></td>
                                        <td><input type="number" name="participant_detail_age[]" class="form-control"></td>
                                        <td>
                                            <select name="participant_detail_sex[]" class="form-control">
                                                <option>-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="0">Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="agreement">
                            <label class="form-check-label" for="exampleCheck1">Setuju dengan <a href="url('terms-condition')">ketentuan yang berlaku</a>.</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
