<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="{{asset('cssext/bootstrap.min.css')}}" rel="stylesheet">

    <style>
        .login {
            min-height: 85vh;
            background-color: #fff;
        }

        .bg-image {
            background-image: url('images/bank.png');
            background-size: cover;
            background-position: center;
        }


        .login-heading {
            font-weight: 300;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }

        .rounded-row {
            border-radius: 178px;
            /* Tambahkan border-radius sesuai keinginan Anda */
            overflow: hidden;
            /* Gunakan overflow: hidden untuk memastikan sudut terlihat */
        }

        .container-fluid {
            background-color: #007bff;
            /* Ganti dengan kode warna biru yang Anda inginkan */
        }
    </style>
</head>

<body>
    <div class="container-fluid ps-md-0">
        <div class=" rounded-row row g-0 p-5 rounded-row">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Welcome back!</h3>

                                <!-- Sign In Form -->
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                        <label class="form-check-label" for="rememberPasswordCheck">
                                            Remember password
                                        </label>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Sign in</button>
                                        <div class="text-center">
                                            <a class="small" href="#">Forgot password?</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>