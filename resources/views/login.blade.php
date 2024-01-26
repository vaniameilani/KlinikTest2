<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Klinik Raycare - Login</title>

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- css -->
        <link rel="stylesheet" href="css/login.css">
        <style>
            body {  
                width: auto; 
                height: auto; 
                background-image: url(/public/images/login-bg.png); background-size: cover;
            }
        </style>
    </head>

    <body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div style="width: 500px; flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: center; display: blox;">
            <div style="padding: 40px; background: #E8EAF2; border-radius: 10px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex; gap: 24px;"> 
            
                <!-- Alert Registrasi Berhasil -->
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: center; display: flex; gap: 8px;">
                    <div style="align-self: stretch; text-align: center; color: #394E91; font-size: 40px; font-family:'Inter', Sans-serif; font-weight: 700; line-height: 40px; word-wrap: break-word">Yayasan Raycare Nusantara</div>
                    <!-- <div style="align-self: stretch; text-align: center; color: #5C6EA8; font-size: 20px; font-family:'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Born to Serve</div> -->
                </div>
                <!-- <div style="align-self: stretch; height: 100%; border: 1px #DADDE5 solid"></div> -->
                <div style="align-self: stretch; height: 100%; padding: 24px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex;">
                        <form action="/login" method="post" style="align-self: stretch;">
                            @csrf
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex;">
                                <div style="align-self: stretch; justify-content: center; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">LOGIN</div>
                                </div>
                                <!-- <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex;">
                                </div> -->
                            </div>

                            <!-- USERNAME -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family:'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Username</div>
                                    <input class="form-control @error('username') is-invalid @enderror" type="text" style="width: 100%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="username" id="username" placeholder="Masukkan username" value="{{ old('username') }}" required autofocus>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <medium>{{ $message }}</medium>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- PASSWORD -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family:'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Password</div>
                                <input class="form-control" type="password" style="width: 100%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="password" id="password" placeholder="Masukkan Password" value="" required>
                            </div>

                            <!--  -->
                            <button type="submit" class="btn btn-primary" style="align-self: stretch; padding: 16px; background: #394E91; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                <div style="text-align: justify; color: white; font-size: 16px; font-family:'Inter', Sans-serif; font-weight: 600; line-height: 24px; word-wrap: break-word">Masuk</div>
                            </button>
                        </form>
                        <small style="align-self: stretch; justify-content: center; font-family:'Inter', Sans-serif; align-items: center; display: flex;gap: 4px;">Belum punya akun? <a href="/register">Register Disini!</a></small>
                    </div>  
                </div>
                              
                <!-- <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                    <form action="/login" method="post" style="align-self: stretch;">
                    @csrf
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family:'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Username</div>
                                <input class="form-control @error('username') is-invalid @enderror" type="text" style="width: 100%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="username" id="username" placeholder="Masukkan username" value="{{ old('username') }}" required autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <medium>{{ $message }}</medium>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family:'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Password</div>
                            <input class="form-control" type="password" style="width: 100%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="password" id="password" placeholder="Masukkan Password" value="" required>
                        </div>
                        <button type="submit" class="btn btn-primary" style="align-self: stretch; padding: 16px; background: #394E91; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                            <div style="text-align: justify; color: white; font-size: 16px; font-family:'Inter', Sans-serif; font-weight: 600; line-height: 24px; word-wrap: break-word">Masuk</div>
                        </button>
                    </form>
                </div> -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>