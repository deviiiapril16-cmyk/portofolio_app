@extends('layout.app')

@section('content')

<div class="container py-5 mt-5">

    <h2 class="mb-4 text-center">Edit Data Pesan</h2>

    <form action="/update_pesan/{{ $pesan->id }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama"
                class="form-control"
                value="{{ $pesan->nama }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email"
                class="form-control"
                value="{{ $pesan->email }}">
        </div>

        <div class="mb-3">
            <label>Subjek</label>
            <input type="text" name="subjek"
                class="form-control"
                value="{{ $pesan->subjek }}">
        </div>

        <div class="mb-3">
            <label>Pesan</label>
            <textarea name="pesan"
                class="form-control"
                rows="4">{{ $pesan->pesan }}</textarea>
        </div>

        <button type="submit"
            class="btn btn-primary">
            Update
        </button>

    </form>

</div>

@endsection