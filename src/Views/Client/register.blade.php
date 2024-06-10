<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salessa Shop - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @include('layouts.partials.css')
</head>

<body>
    <header class="header_area">
        @include('layouts.partials.nav')
    </header>

    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h1>Đăng ký tài khoản</h1>

                        @if (!empty($_SESSION['errors']))
                        <div class="alert alert-warning">
                            <ul>
                                @foreach ($_SESSION['errors'] as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                            @php
                            unset($_SESSION['errors']);
                            @endphp
                        </div>
                        @endif

                        <form action="{{ url('auth/register') }}" enctype="multipart/form-data" method="POST">
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            </div>

                            <input type="hidden" id="type_member" value="member" name="type" checked>

                            <div class="mb-3 mt-3">
                                <label for="avatar" class="form-label">Avatar:</label>
                                <input type="file" class="form-control" id="avatar" name="avatar">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="confirm_password" class="form-label">Confirm Password:</label>
                                <input type="password" class="form-control" id="confirm_password" placeholder="Confirm password" name="confirm_password" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.partials.footer')
    @include('layouts.partials.js')
</body>

</html>