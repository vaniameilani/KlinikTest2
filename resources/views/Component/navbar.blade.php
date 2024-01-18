<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- css -->
        <!-- <link rel="stylesheet" href="/public/styles.css"> -->
        <link rel="stylesheet" href="{{ asset('/styles.css') }}">
    </head>

    <body>
        <header>       
            <div style="width: 100%; padding-left: 40px; padding-right: 40px; padding-top: 16px; padding-bottom: 16px; background: white; box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.25); justify-content: space-between; align-items: center; display: inline-flex">
                <a href="/" class="nav nav-link">
                    <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Yayasan Raycare Nusantara</div>
                </a>
                <div style="flex: 1 1 0; justify-content: center; align-items: center; display: flex">
                    <a href="/" class="menu nav-link">Dashboard</a>
                    <a href="/acara" class="menu nav-link">Acara</a>
                </div>
                <!-- <div class="btn body-medium" style="color:#394E91; padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">Logout</div> -->
                <a href='/logout' class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex" href="/login" role="button">
                    <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Logout</div>
                </a>
            </div>
        </header>
        
        <main>
            @yield('content')
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>