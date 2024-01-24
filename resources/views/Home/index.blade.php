@include('component.navbar')

@section('content')
<div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
    <!-- HERO SECTION -->
    <div style="align-self: stretch; background-color:#394E91; padding-left: 176px; padding-right: 176px; padding-top: 80px; padding-bottom: 80px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; gap: 8px; display: flex">
            <div style="text-align: justify; color: white; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Selamat Datang di Yayasan Raycare Nusantara!</div>
            <div style="align-self: stretch; text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
        </div>
    </div>
    <!-- END HERO SECTION -->

    <!-- MAIN SECTION -->
    <div class="main-card">
        <!-- ADD ANGGOTA -->
        <div style="align-self: stretch; padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; background: #394E91; border-radius: 10px; justify-content: center; align-items: center; gap: 16px; display: inline-flex">
            <!-- icon -->
            <div style="flex: 1 1 0; text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
            <a class="btn button-fill-second" href="/tambah-anggota" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                <div style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Anggota</div>
            </a>
        </div>
        <!-- END ADD ANGGOTA -->

        <!-- CONTENT SECTION -->
        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
            <div style="align-self: stretch; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: flex">
                <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                    <div class="h3">Daftar Anggota</div>
                </div>

                <!-- CARDS TOTAL LIST -->
                <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
                    <div class="card">
                        <!-- <svg width="36" height="36" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="ic:baseline-people-alt">
                                <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M27.7832 22.3833C30.0665 23.9333 31.6665 26.0333 31.6665 28.8333V33.8333H38.3332V28.8333C38.3332 25.2 32.3832 23.05 27.7832 22.3833Z" fill="white"/>
                                <path id="Vector_2" d="M15.0007 20.4998C18.6825 20.4998 21.6673 17.5151 21.6673 13.8332C21.6673 10.1513 18.6825 7.1665 15.0007 7.1665C11.3188 7.1665 8.33398 10.1513 8.33398 13.8332C8.33398 17.5151 11.3188 20.4998 15.0007 20.4998Z" fill="white"/>
                                <path id="Vector_3" fill-rule="evenodd" clip-rule="evenodd" d="M24.9993 20.4998C28.6827 20.4998 31.666 17.5165 31.666 13.8332C31.666 10.1498 28.6827 7.1665 24.9993 7.1665C24.216 7.1665 23.4827 7.33317 22.7827 7.5665C24.2169 9.3402 24.9993 11.5522 24.9993 13.8332C24.9993 16.1142 24.2169 18.3261 22.7827 20.0998C23.4827 20.3332 24.216 20.4998 24.9993 20.4998ZM14.9993 22.1665C10.5493 22.1665 1.66602 24.3998 1.66602 28.8332V33.8332H28.3327V28.8332C28.3327 24.3998 19.4493 22.1665 14.9993 22.1665Z" fill="white"/>
                            </g>
                        </svg> -->
                        <div class="card-content">
                            <div class="b-bold card-title">Keseluruhan Anggota</div>
                            <div class="h2 card-result">{{ $countktp }}</div>
                        </div>
                    </div>
                    <div class="card">
                        <!-- <svg width="36" height="36" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="ic:round-stars">
                                <path id="Vector" d="M19.984 3.8335C10.784 3.8335 3.33398 11.3002 3.33398 20.5002C3.33398 29.7002 10.784 37.1668 19.984 37.1668C29.2007 37.1668 36.6673 29.7002 36.6673 20.5002C36.6673 11.3002 29.2007 3.8335 19.984 3.8335ZM25.3673 29.4835L20.0007 26.2502L14.634 29.4835C14.4936 29.5687 14.3312 29.6107 14.1671 29.6042C14.003 29.5977 13.8444 29.5431 13.7111 29.4472C13.5779 29.3512 13.4758 29.2181 13.4176 29.0646C13.3594 28.911 13.3477 28.7437 13.384 28.5835L14.8007 22.4835L10.084 18.4002C9.96146 18.291 9.87352 18.1485 9.83096 17.99C9.7884 17.8315 9.79308 17.6641 9.84444 17.5082C9.89579 17.3524 9.99158 17.215 10.12 17.1129C10.2484 17.0108 10.4039 16.9484 10.5673 16.9335L16.8007 16.4002L19.234 10.6502C19.5173 9.96683 20.484 9.96683 20.7673 10.6502L23.2007 16.3835L29.434 16.9168C29.598 16.9309 29.7543 16.9933 29.8829 17.0961C30.0115 17.1989 30.1068 17.3375 30.1568 17.4944C30.2067 17.6513 30.209 17.8195 30.1634 17.9778C30.1178 18.136 30.0264 18.2772 29.9007 18.3835L25.184 22.4668L26.6007 28.5835C26.7673 29.3002 26.0007 29.8668 25.3673 29.4835Z" fill="white"/>
                            </g>
                        </svg> -->
                        <div class="card-content">
                            <div class="b-bold card-title">Jumlah Anggota LC</div>
                            <div class="h2 card-result">{{ $countlc }}</div>
                        </div>
                    </div>
                    <div class="card">
                        <!-- <svg width="36" height="36" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.6667 5.5H8.33333C6.5 5.5 5 7 5 8.83333V32.1667C5 34 6.5 35.5 8.33333 35.5H31.6667C33.5 35.5 35 34 35 32.1667V8.83333C35 7 33.5 5.5 31.6667 5.5ZM18.3333 28.8333H11.6667V22.1667H18.3333V28.8333ZM18.3333 18.8333H11.6667V12.1667H18.3333V18.8333ZM28.3333 28.8333H21.6667V22.1667H28.3333V28.8333ZM28.3333 18.8333H21.6667V12.1667H28.3333V18.8333Z" fill="white"/>
                        </svg> -->
                        <a href="/nulldata" class="btn self-stretch"> 
                            <div class="card-content">
                                <div class="b-bold card-title">Data yang Belum Lengkap</div>
                                <div class="h2 card-result">{{ $countnull }}</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END CARDS TOTAL LIST -->

                <!-- TABLE -->
                <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: inline-flex">
                    <!-- SEARCH -->
                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                        <form action="/" method='GET' class="form-search">
                            <input type="text" class="form-control b-regular input-search" value="{{ request('search') }}" name="search" id="search" placeholder="Cari Nomor LC atau Nama">
                            <button class="btn button-fill" type="submit" style="padding: 16px 24px; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                                <div class="b-bold self-stretch" style="word-wrap: break-word;">Cari Anggota</div>
                            </button>
                            <!-- <a class="btn button-fill" role="button" type="submit" style="padding: 16px 24px; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                                <div class="b-bold self-stretch" style="word-wrap: break-word;">Cari Anggota</div>
                            </a> -->
                        </form>  
                    </div>
                    <!-- END SEARCH -->

                    <div class="table">
                        <div class="table-head">
                            <div class="table-header-cell">
                                <div class="h5 header-name">NIK</div>
                            </div>
                            <div class="table-header-cell">
                                <div class="h5 header-name">Nama</div>
                            </div>
                            <div class="table-header-cell">
                                <div class="h5 header-name">KK</div>
                            </div>
                            <div class="table-header-cell">
                                <div class="h5 header-name">BPJS</div>
                            </div>
                            <div class="table-header-cell">
                                <div class="h5 header-name">LC</div>
                            </div>
                            <div class="table-header-cell table-header-btn">
                                <div class="h5 header-name">Aksi</div>
                            </div>
                        </div>
                        @if ($data->count() == 0)
                        <div class="text-center p-3 b-medium self-stretch" style="color:#394E91;">Belum ada data</div>
                        @else
                        @foreach ($data as $row)
                        <div class="table-body">
                             <!-- NIK -->
                            <div class="table-body-cell">
                                <div class="body-name b-regular">{{ $row->nik }}</div>
                            </div>

                            <!-- NAMA -->
                            <div class="table-body-cell">
                                <div class="body-name b-regular">{{ $row->nama }}</div>
                            </div>

                            <!-- KK -->
                            @if ($row->kk == "")
                            <a href="/{{ $row->id_kk }}/tambah-kk" class="btn add-btn table-body-btn empty-bg-cell d-flex align-items-center" role="button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.334 13H13.334V18C13.334 18.55 12.884 19 12.334 19C11.784 19 11.334 18.55 11.334 18V13H6.33398C5.78398 13 5.33398 12.55 5.33398 12C5.33398 11.45 5.78398 11 6.33398 11H11.334V6C11.334 5.45 11.784 5 12.334 5C12.884 5 13.334 5.45 13.334 6V11H18.334C18.884 11 19.334 11.45 19.334 12C19.334 12.55 18.884 13 18.334 13Z" fill="#394E91"/>
                                </svg>
                                <div class="label body-name-btn d-flex align-items-center">tambah data</div>
                            </a>
                            @else
                            <div class="table-body-cell">
                                <div class="b-regular body-name">{{ $row->kk }}</div>
                            </div>
                            @endif

                            <!-- BPJS -->
                            @if ($row->no_bpjs == "")
                            <a href="/{{ $row->id_bpjs }}/tambah-bpjs" class="btn add-btn table-body-btn empty-bg-cell d-flex align-items-center" role="button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.334 13H13.334V18C13.334 18.55 12.884 19 12.334 19C11.784 19 11.334 18.55 11.334 18V13H6.33398C5.78398 13 5.33398 12.55 5.33398 12C5.33398 11.45 5.78398 11 6.33398 11H11.334V6C11.334 5.45 11.784 5 12.334 5C12.884 5 13.334 5.45 13.334 6V11H18.334C18.884 11 19.334 11.45 19.334 12C19.334 12.55 18.884 13 18.334 13Z" fill="#394E91"/>
                                </svg>
                                <div class="label body-name-btn d-flex align-items-center">tambah data</div>
                            </a>
                            @else
                            <div class="table-body-cell">
                                <div class="b-regular body-name">{{ $row->no_bpjs }}</div>
                            </div>
                            @endif

                            <!-- LC -->
                            @if ($row->no_kartu == "")
                            <a href="/{{ $row->id_lc }}/tambah-lc" class="btn add-btn table-body-btn empty-bg-cell d-flex align-items-center" role="button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.334 13H13.334V18C13.334 18.55 12.884 19 12.334 19C11.784 19 11.334 18.55 11.334 18V13H6.33398C5.78398 13 5.33398 12.55 5.33398 12C5.33398 11.45 5.78398 11 6.33398 11H11.334V6C11.334 5.45 11.784 5 12.334 5C12.884 5 13.334 5.45 13.334 6V11H18.334C18.884 11 19.334 11.45 19.334 12C19.334 12.55 18.884 13 18.334 13Z" fill="#394E91"/>
                                </svg>
                                <div class="label body-name-btn d-flex align-items-center">tambah data</div>
                            </a>
                            @else
                            <div class="table-body-cell">
                                <div class="b-regular body-name">{{ $row->no_kartu }}</div>
                            </div>
                            @endif

                            <!-- AKSI -->
                            <div class="table-body-cell ps-4">
                                <a href="/detail-anggota/{{ $row->nik }}" role="button" class="btn button-ghost body-btn-detail">
                                    <div class="b-bold header-name">Detail</div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    {{ $data->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
