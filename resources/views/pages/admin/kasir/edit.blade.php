@extends('layouts.admin.main')
@section('title', 'Admin Edit Kasir ')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Admin</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}" style="color: #1A5F3C; ">Dashboard</a>
                </div>
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.kasir') }}" style="color: #1A5F3C; ">Kasir</a>
                </div>
                <div class="breadcrumb-item">Edit Admin</div>
            </div>
        </div>

        <a href="{{ route('admin.kasir') }}" style="background-color: #1A5F3C; color: #fff; box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);" class="btn btn-icon icon-left">Kembali</a>

        <div class="card mt-4">
            <form action="{{ route('admin.kasir.update', $kasirs->id) }}" class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama">Nama Kasir</label>
                                <input id="nama" type="text" class="form-control" name="nama" required="" value="{{ $kasirs->nama }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" type="text" class="form-control" name="username" required="" value="{{ $kasirs->username }}" disabled>
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Kosongkan jika tidak ingin mengubah password">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-secondary" id="togglePassword">
                                            <i class="fas fa-eye" id="passwordIcon"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="invalid-feedback">
                                    Password minimal 8 karakter jika diisi.
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" style="background-color: #1A5F3C; color: #fff; box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);" class="btn btn-icon icon-left">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#password');
    const passwordIcon = document.querySelector('#passwordIcon');

    togglePassword.addEventListener('click', function () {
        // Toggle tipe input antara 'password' dan 'text'
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        // Ubah ikon mata
        passwordIcon.classList.toggle('fa-eye');
        passwordIcon.classList.toggle('fa-eye-slash');
    });
</script>

@endsection
