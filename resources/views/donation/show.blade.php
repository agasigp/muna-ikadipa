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
                <div class="card-header">Detail Peserta Ikadipa</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-4">
                                        <input type="text" readonly class="form-control-plaintext" value="{{ $participant->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-4">
                                        <input type="text" readonly class="form-control-plaintext" value="{{ $participant->address }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telephone" class="col-sm-3 col-form-label">No HP</label>
                                    <div class="col-sm-4">
                                        <input type="text" readonly class="form-control-plaintext" value="{{ $participant->telephone }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telephone" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-4">
                                        <input type="text" readonly class="form-control-plaintext" value="{{ $participant->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="parent" class="col-sm-3 col-form-label">Orang tua trah Kartadipa</label>
                                    <div class="col-sm-4">
                                        <input type="text" readonly class="form-control-plaintext" value="{{ $participant->parent_name }}">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5">
                            @if ($participant->participantDetails->isEmpty())
                                Tidak ada data.
                            @else
                                <?php $no = 1; ?>
                                <table class="table table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Umur</th>
                                            <th scope="col">Jenis Kelamin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($participant->participantDetails as $participant_detail)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $participant_detail->name }}</td>
                                                <td>{{ $participant_detail->age }}</td>
                                                <td>{{ $participant_detail->sex == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                    <a class="btn btn-primary" href="{{ route('participant.index') }}" role="button">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
