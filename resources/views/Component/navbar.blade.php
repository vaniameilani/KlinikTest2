<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- css -->
        <!-- <link rel="stylesheet" href="/public/styles.css"> -->
        <link rel="stylesheet" href="{{ asset('/styles.css') }}">
    </head>

    <body>
        <header>       
            <div style="width: 100%; padding-left: 176px; padding-right: 176px; padding-top: 16px; padding-bottom: 16px; background: white; box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.25); justify-content: space-between; align-items: center; display: inline-flex">
                <!-- <a href="/" class="nav nav-link">
                    <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Yayasan Raycare Nusantara</div>
                </a> -->
                <!-- <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Yayasan Raycare Nusantara</div> -->
                <div style="flex: 1 1 0;  align-items: center; display: flex">
                    <a href="/" class="menu nav-link">Dashboard</a>
                    <a href="/acara" class="menu nav-link">Acara</a>
                </div>
                <div class="text-end">
                    <a href="#" class="btn d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle"> -->
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.0002 3.33331C10.8002 3.33331 3.3335 10.8 3.3335 20C3.3335 29.2 10.8002 36.6666 20.0002 36.6666C29.2002 36.6666 36.6668 29.2 36.6668 20C36.6668 10.8 29.2002 3.33331 20.0002 3.33331ZM20.0002 9.99998C23.2168 9.99998 25.8335 12.6166 25.8335 15.8333C25.8335 19.05 23.2168 21.6666 20.0002 21.6666C16.7835 21.6666 14.1668 19.05 14.1668 15.8333C14.1668 12.6166 16.7835 9.99998 20.0002 9.99998ZM20.0002 33.3333C16.6168 33.3333 12.6168 31.9666 9.76683 28.5333C12.6862 26.2428 16.2895 24.998 20.0002 24.998C23.7108 24.998 27.3142 26.2428 30.2335 28.5333C27.3835 31.9666 23.3835 33.3333 20.0002 33.3333Z" fill="#394E91"/>
                        </svg>
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="/register">Daftar Akun Baru</a></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        <!-- <li><hr class="dropdown-divider"></li> -->
                    </ul>
                </div>
                <!-- <div style="flex: 1 1 0; justify-content: end; align-items: center; display: flex; gap: 8px;">
                    <a href='/logout' class="button-fill btn-logout">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_425_430)">
                                <path d="M3.33333 3.33333H7.33333C7.7 3.33333 8 3.03333 8 2.66667C8 2.3 7.7 2 7.33333 2H3.33333C2.6 2 2 2.6 2 3.33333V12.6667C2 13.4 2.6 14 3.33333 14H7.33333C7.7 14 8 13.7 8 13.3333C8 12.9667 7.7 12.6667 7.33333 12.6667H3.33333V3.33333Z" fill="white"/>
                                <path d="M13.7667 7.76669L11.9067 5.90669C11.8603 5.85906 11.8008 5.82635 11.7357 5.81274C11.6706 5.79913 11.603 5.80525 11.5414 5.8303C11.4799 5.85536 11.4272 5.89822 11.3901 5.9534C11.353 6.00857 11.3333 6.07355 11.3333 6.14003V7.33336H6.66667C6.3 7.33336 6 7.63336 6 8.00003C6 8.36669 6.3 8.66669 6.66667 8.66669H11.3333V9.86003C11.3333 10.16 11.6933 10.3067 11.9 10.0934L13.76 8.23336C13.8933 8.10669 13.8933 7.89336 13.7667 7.76669Z" fill="white"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_425_430" x="-4" y="0" width="24" height="24" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_425_430"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_425_430" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                        <div style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Register</div>
                    </a>
                    <a href='/logout' class="button-ghost btn-logout">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.33333 3.33333H7.33333C7.7 3.33333 8 3.03333 8 2.66667C8 2.3 7.7 2 7.33333 2H3.33333C2.6 2 2 2.6 2 3.33333V12.6667C2 13.4 2.6 14 3.33333 14H7.33333C7.7 14 8 13.7 8 13.3333C8 12.9667 7.7 12.6667 7.33333 12.6667H3.33333V3.33333Z" fill="#394E91"/>
                            <path d="M13.7667 7.76669L11.9067 5.90669C11.8603 5.85906 11.8008 5.82635 11.7357 5.81274C11.6706 5.79913 11.603 5.80525 11.5414 5.8303C11.4799 5.85536 11.4272 5.89822 11.3901 5.9534C11.353 6.00857 11.3333 6.07355 11.3333 6.14003V7.33336H6.66667C6.3 7.33336 6 7.63336 6 8.00003C6 8.36669 6.3 8.66669 6.66667 8.66669H11.3333V9.86003C11.3333 10.16 11.6933 10.3067 11.9 10.0934L13.76 8.23336C13.8933 8.10669 13.8933 7.89336 13.7667 7.76669Z" fill="#394E91"/>
                        </svg>
                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Logout</div>
                    </a>
                </div> -->
            </div>
        </header>
        
        <main>
            @yield('content')
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>