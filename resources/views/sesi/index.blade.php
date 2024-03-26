@extends('layout.app')

@section('konten')
    <section class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card border-0 rounded-3 shadow-lg">
                        <div class="card-body p-4 p-md-5">
                            <div class="text-center mb-4">
                                <a href="/">
                                    <img src="/img/logo.png" alt="Logo" width="200" height="120">
                                </a>
                            </div>
                            <h2 class="fs-5 fw-bold text-center text-primary mb-4">Selamat Datang Admin ! Silahkan Login</h2>
                            <form action="/sesi/login" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label visually-hidden">Email</label>
                                    <input type="email" value="{{ Session::get('email') }}" name="email"
                                        class="form-control" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label visually-hidden">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label text-secondary" for="rememberMe">Ingat Saya</label>
                                </div>
                                <div class="mb-3 d-grid">
                                    <button name="submit" type="submit" class="btn btn-primary btn-lg">Login</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <p><a href="/" class="link-primary text-decoration-none">Kembali ke Halaman Utama</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
