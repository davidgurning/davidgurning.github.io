<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Portofolio-Website</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="https://unpkg.com/feather-icons"></script>
    
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://unpkg.com/feather-icons"> --}}
    
        {{-- Add the lines in the layout file --}}
        <link rel="stylesheet" href="style/style.css" />
        <link rel="stylesheet" href="style/styleprog.css">
        <link rel="stylesheet" href="style/timeline.css">
        <link rel="stylesheet" href="responsive/responsive.css">
        {{-- <link rel="stylesheet" href="modals/modals.css"> --}}
        <link rel="stylesheet" href="contact/contact.css">
        <link rel="stylesheet" href="style/slideshow.css">
        {{-- <link rel="stylesheet" href="style/modal.css"> --}}
      </head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('post.login') }}">
                            @csrf
                            @if(Session::get("success"))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get("success")}}
                                </div>
                            @endif

                            <div class="form-group mb-2">
                                <label for="email">Alamat Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <div class="d-flex justify-content-between">
                                    <label for="password">Kata Sandi</label>
                                    
                                </div>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    Ingat Saya
                                </label>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Masuk
                                </button>
                            </div>

                            <hr />

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/bootstrap-5.2.3-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>