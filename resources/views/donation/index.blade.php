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
                <div class="card-header">List/Daftar Donatur Muna Ikadipa</div>
                <div class="card-body">
                    @if ($donations->isEmpty())
                        Tidak ada data.
                    @else
                        <?php
                            if ($donations->currentPage() == 1) {
                                $no = 1;
                            } else {
                                $no = $donations->perPage() * ($donations->currentPage() - 1) + 1;
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
                                    <th scope="col">Wilayah</th>
                                    <th scope="col">Jumlah Donasi</th>
                                    <th scope="col">Waktu Donasi</th>
                                    <th scope="col">Status Pembayaran</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donations as $donation)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $donation->name }}</td>
                                        <td>{{ $donation->address }}</td>
                                        <td>{{ $donation->telephone }}</td>
                                        <td>{{ $donation->email }}</td>
                                        <td>
                                            <?php
                                                switch ($donation->region) {
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
                                        <td>{{ number_format($donation->amount, 0, ',', '.') }}</td>
                                        <td>{{ $donation->transfered_on }}</td>
                                        <?php
                                            if ($donation->status == 0) {
                                                $message = 'Belum bayar';
                                                $badge = 'danger';
                                                $icon = "<i class=\"fas fa-check\"  style=\"color:green\"></i>";
                                            } else {
                                                $message = 'Sudah bayar';
                                                $badge = 'success';
                                                $icon = "<i class=\"fas fa-times\" style=\"color:red\"></i>";
                                            }
                                        ?>
                                        <td><span class="badge badge-{{ $badge }}">{{ $message }}</span></td>
                                        <td>
                                            <form action="{{ route('donations.update', $donation->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="status" value="{{ $donation->status == 1 ? 0 : 1 }}">
                                                <button type="submit" class="btn btn-light btn-sm">{!! $icon !!}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $donations->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection