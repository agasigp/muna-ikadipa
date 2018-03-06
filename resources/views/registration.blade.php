@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pendaftaran Muna IKADIPA</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="#">
                        @csrf
                        <div class="form-group">
                            <label for="nama_kk">Nama Kepala Keluarga</label>
                            <input type="text" class="form-control" id="nama_kk" aria-describedby="namaKkHelp" placeholder="Nama Kepala Keluarga" required>
                            {{--  <small id="namaKkHelp" class="form-text text-muted">Nama Kepala Keluarga</small>  --}}
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" aria-describedby="alamatHelp" placeholder="Alamat" required>
                            {{--  <small id="alamatHelp" class="form-text text-muted">Alamat</small>  --}}
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" class="form-control" id="no_hp" aria-describedby="noHpHelp" placeholder="No Handphone" required>
                            {{--  <small id="noHpHelp" class="form-text text-muted">No Handphone</small>  --}}
                        </div>
                        <div class="form-group">
                            <label for="nama_ortu">Nama Orang Tua (Yang termasuk trah Kartadipa)</label>
                            <input type="text" class="form-control" id="nama_ortu" aria-describedby="namaOrtuHelp" placeholder="Nama Orang Tua Yang Termasuk Trah Kartadipa" required>
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
                                        <td><input type="text" class="form-control" name="anggota_nama[]"></td>
                                        <td><input type="number" name="anggota_umur[]" class="form-control"></td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1" selected>
                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><input type="text" class="form-control" name="anggota_nama[]"></td>
                                        <td><input type="number" name="anggota_umur[]" class="form-control"></td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1" selected>
                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><input type="text" class="form-control" name="anggota_nama[]"></td>
                                        <td><input type="number" name="anggota_umur[]" class="form-control"></td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1" selected>
                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td><input type="text" class="form-control" name="anggota_nama[]"></td>
                                        <td><input type="number" name="anggota_umur[]" class="form-control"></td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1" selected>
                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td><input type="text" class="form-control" name="anggota_nama[]"></td>
                                        <td><input type="number" name="anggota_umur[]" class="form-control"></td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1" selected>
                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td><input type="text" class="form-control" name="anggota_nama[]"></td>
                                        <td><input type="number" name="anggota_umur[]" class="form-control"></td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1" selected>
                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td><input type="text" class="form-control" name="anggota_nama[]"></td>
                                        <td><input type="number" name="anggota_umur[]" class="form-control"></td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1" selected>
                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td><input type="text" class="form-control" name="anggota_nama[]"></td>
                                        <td><input type="number" name="anggota_umur[]" class="form-control"></td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1" selected>
                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Setuju dengan ketentuan yang berlaku.</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
