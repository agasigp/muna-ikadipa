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
                    <h4 class="alert-heading">{{ session('success')['title'] }}</h4>
                    <p>{{ session('success')['content'] }}</p>
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
                <div class="card-header">Pendaftaran Donatur Muna IKADIPA Ke XII</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('donation') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" aria-describedby="namaKkHelp" placeholder="Nama Kepala Keluarga" name="name" required>
                            {{--  <small id="namaKkHelp" class="form-text text-muted">Nama Kepala Keluarga</small>  --}}
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" aria-describedby="alamatHelp" placeholder="Alamat" name="address" required>
                            {{--  <small id="alamatHelp" class="form-text text-muted">Alamat</small>  --}}
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="number" class="form-control" id="no_hp" aria-describedby="noHpHelp" placeholder="No Handphone" name="telephone" required>
                            {{--  <small id="noHpHelp" class="form-text text-muted">No Handphone</small>  --}}
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" required>
                            {{--  <small id="noHpHelp" class="form-text text-muted">No Handphone</small>  --}}
                        </div>
                        <div class="form-group">
                            <label for="email">Wilayah</label>
                            <select name="region" class="form-control">
                                <option value="1">Barat</option>
                                <option value="2">Tengah</option>
                                <option value="3">Timur</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="amount">Jumlah Donasi</label>
                            <input type="number" min="0" class="form-control" id="amount" aria-describedby="namaOrtuHelp" placeholder="Jumlah Donasi" name="amount" required>
                        </div>
                        <div class="form-group">
                            <label for="transfered_on">Dibayar/disampaikan ke bendahara tanggal</label>
                            <input type="date" class="form-control" id="transfered_on" aria-describedby="namaOrtuHelp" name="transfered_on" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
