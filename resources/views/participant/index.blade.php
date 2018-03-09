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
                <div class="card-header">List/Daftar Peserta Ikadipa</div>
                <div class="card-body">
                    @if ($participants->isEmpty())
                        Tidak ada data.
                    @else
                        <?php
                            if ($participants->currentPage() == 1) {
                                $no = 1;
                            } else {
                                $no = $participants->perPage() * ($participants->currentPage() - 1) + 1;
                            }
                        ?>
                        <table class="table table-sm table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nama Orang Tua (Trah Kartadipa)</th>
                                    <th scope="col">Wilayah</th>
                                    <th scope="col">Status Pembayaran</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($participants as $participant)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>
                                            <a href="{{ route('participant.show', $participant->id) }}">{{ $participant->name }}</a>
                                        </td>
                                        <td>{{ $participant->address }}</td>
                                        <td>{{ $participant->telephone }}</td>
                                        <td>{{ $participant->email }}</td>
                                        <td>{{ $participant->parent_name }}</td>
                                        <td>
                                            <?php
                                                switch ($participant->region) {
                                                    case '1':
                                                        echo 'Barat';
                                                        break;
                                                    case '2':
                                                        echo 'Tengah';
                                                        break;
                                                    case '3':
                                                        echo 'Timur';
                                                        break;
                                                    default:
                                                        # code...
                                                        break;
                                                }
                                            ?>
                                        </td>
                                        <?php
                                            if ($participant->status == 0) {
                                                $message = 'Belum bayar';
                                                $badge = 'danger';
                                            } else {
                                                $message = 'Sudah bayar';
                                                $badge = 'success';
                                            }
                                        ?>
                                        <td><span class="badge badge-{{ $badge }}">{{ $message }}</span></td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
