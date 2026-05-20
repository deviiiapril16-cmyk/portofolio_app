@extends('layout.app')

@section('content')

<div class="container py-5 mt-5" style="margin-bottom: 180px;">

    <h2 class="mb-4 text-center">Data Pesan</h2>

    <table class="table table-bordered table-striped">

        <tr class="table-dark">
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Subjek</th>
            <th>Pesan</th>
            <th>Aksi</th>
        </tr>

        @foreach($pesans as $pesan)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pesan->nama }}</td>
            <td>{{ $pesan->email }}</td>
            <td>{{ $pesan->subjek }}</td>
            <td>{{ $pesan->pesan }}</td>

            <td>
                <a href="/edit-pesan/{{ $pesan->id }}"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                <a href="/hapus-pesan/{{ $pesan->id }}"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin menghapus data?')">
                   Hapus
                </a>
            </td>
        </tr>

        @endforeach

    </table>

</div>

@endsection