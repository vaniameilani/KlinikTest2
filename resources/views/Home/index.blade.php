@include('component.navbar')

@section('content')
<div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
    <!-- HERO SECTION -->
    <div style="align-self: stretch; background: url(photos/hero-image-blur.png); background-size:cover; padding-left: 176px; padding-right: 176px; padding-top: 80px; padding-bottom: 80px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; gap: 8px; display: flex;">
            <div style="text-align: justify; color: white; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Selamat Datang di Yayasan Raycare Nusantara!</div>
            <div style="align-self: stretch; text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Semoga harimu menyenangkan! Ada anggota baru hari ini?</div>
        </div>
        <a class="btn button-fill" href="/tambah-anggota" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
            <div style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Anggota</div>
        </a>
    </div>
    <!-- END HERO SECTION -->

    <!-- MAIN SECTION -->
    <div class="main-card">
        <!-- ADD ANGGOTA -->
        <!-- <div style="align-self: stretch; padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; background: #394E91; border-radius: 10px; justify-content: center; align-items: center; gap: 16px; display: inline-flex">
            <div style="flex: 1 1 0; text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
            <a class="btn button-fill-second" href="/tambah-anggota" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                <div style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Anggota</div>
            </a>
        </div> -->
        <!-- END ADD ANGGOTA -->

        <!-- CONTENT SECTION -->
        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div style="align-self: stretch; padding-left: 40px; padding-right: 40px; padding-top: 40px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: center; align-items: center; gap: 40px; display: flex">

                <!-- CARDS TOTAL LIST -->
                <div class="card-list">
                    <div class="card">
                        <div class="card-content">
                            <div class="b-bold card-title">Keseluruhan Anggota</div>
                            <div class="h2 card-result">{{ $countktp }}</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="b-bold card-title">Jumlah Anggota LC</div>
                            <div class="h2 card-result">{{ $countlc }}</div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <!-- <svg width="36" height="36" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.6667 5.5H8.33333C6.5 5.5 5 7 5 8.83333V32.1667C5 34 6.5 35.5 8.33333 35.5H31.6667C33.5 35.5 35 34 35 32.1667V8.83333C35 7 33.5 5.5 31.6667 5.5ZM18.3333 28.8333H11.6667V22.1667H18.3333V28.8333ZM18.3333 18.8333H11.6667V12.1667H18.3333V18.8333ZM28.3333 28.8333H21.6667V22.1667H28.3333V28.8333ZM28.3333 18.8333H21.6667V12.1667H28.3333V18.8333Z" fill="white"/>
                        </svg> -->
                        <a href="/nulldata" class="btn card-content"> 
                            <div class="b-bold card-title">Data yang Belum Lengkap</div>
                            <div class="h2 card-result">{{ $countnull }}</div>
                        </a>
                    </div>
                    <div class="card-filter">
                        <div class="card-content-sec">
                            <div class="h5 card-title-sec">Cari Berdasarkan Filter?</div>
                            <!-- <div class="h2 card-result-sec">{{ $countnull }}</div> -->
                            <a href="/filter" class="btn button-fill-third card-filter-btn">
                                <div class="b-bold card-result-sec">Lihat Halaman</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END CARDS TOTAL LIST -->
                
                <!-- TABLE -->
                <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: inline-flex">
                    <div style="align-self:stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                        <div style="color: #1D1B20; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Daftar Anggota</div>
                    </div>
                    <!-- SEARCH -->
                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                        <form action="/" method='GET' class="form-search">
                            <input type="text" class="form-control b-regular input-search" value="{{ request('search') }}" name="search" id="search" placeholder="Cari Nomor LC atau Nama">
                            <button class="btn button-fill" type="submit" style="padding: 16px 24px; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                                <div class="b-bold self-stretch" style="word-wrap: break-word; color: white; ">Cari Anggota</div>
                            </button>
                            <!-- <a class="btn button-fill" role="button" type="submit" style="padding: 16px 24px; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                                <div class="b-bold self-stretch" style="word-wrap: break-word;">Cari Anggota</div>
                            </a> -->
                        </form>  
                    </div>
                    <!-- END SEARCH -->

                    <div class="table">
                        <div class="table-head">
                            <div class="fs-5 fw-bold lh-sm text-start header-name" style="font-family: 'Inter', sans-serif;">NIK</div>
                            <div class="fs-5 fw-bold lh-sm text-start header-name" style="font-family: 'Inter', sans-serif;">Nama</div>
                            <div class="fs-5 fw-bold lh-sm text-start header-name" style="font-family: 'Inter', sans-serif;">Kartu Keluarga</div>
                            <div class="fs-5 fw-bold lh-sm text-start header-name" style="font-family: 'Inter', sans-serif;">BPJS</div>
                            <div class="fs-5 fw-bold lh-sm text-start header-name" style="font-family: 'Inter', sans-serif;">LC</div>
                            <div class="fs-5 fw-bold lh-sm text-start header-name" style="font-family: 'Inter', sans-serif;">Aksi</div>
                        </div>
                        @if ($data->count() == 0)
                        <div class="text-center p-3 b-medium self-stretch" style="color:#394E91;">Belum ada data</div>
                        @else
                        @foreach ($data as $row)
                        <div class="table-body">
                            <!-- nik -->
                            <div class="fs-6 fw-normal lh-sm body-name" style="font-family: 'Inter', sans-serif;">{{ $row->nik }}</div>

                            <!-- nama -->
                            <div class="fs-6 fw-normal lh-sm body-name" style="font-family: 'Inter', sans-serif;">{{ $row->nama }}</div>

                            <!-- kk -->
                            @if ($row->kk == "")
                            <div class="body-name table-body-btn empty-bg-cell"">
                                <svg width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.334 13H13.334V18C13.334 18.55 12.884 19 12.334 19C11.784 19 11.334 18.55 11.334 18V13H6.33398C5.78398 13 5.33398 12.55 5.33398 12C5.33398 11.45 5.78398 11 6.33398 11H11.334V6C11.334 5.45 11.784 5 12.334 5C12.884 5 13.334 5.45 13.334 6V11H18.334C18.884 11 19.334 11.45 19.334 12C19.334 12.55 18.884 13 18.334 13Z" fill="#394E91"/>
                                </svg>
                                <a href="/{{ $row->id_kk }}/tambah-kk" class="btn-add" role="button">
                                    <div class="fs-6 fw-bolder lh-sm" style="font-family: 'Inter', sans-serif;">tambah data</div>
                                </a>
                            </div>
                            @else
                            <div class="fs-6 fw-normal lh-sm body-name" style="font-family: 'Inter', sans-serif;">{{ $row->kk }}</div>
                            @endif

                            <!-- bpjs -->
                            @if ($row->no_bpjs == "")
                            <div class="body-name table-body-btn empty-bg-cell"">
                                <svg width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.334 13H13.334V18C13.334 18.55 12.884 19 12.334 19C11.784 19 11.334 18.55 11.334 18V13H6.33398C5.78398 13 5.33398 12.55 5.33398 12C5.33398 11.45 5.78398 11 6.33398 11H11.334V6C11.334 5.45 11.784 5 12.334 5C12.884 5 13.334 5.45 13.334 6V11H18.334C18.884 11 19.334 11.45 19.334 12C19.334 12.55 18.884 13 18.334 13Z" fill="#394E91"/>
                                </svg>
                                <a href="/{{ $row->id_bpjs }}/tambah-bpjs" class="btn-add" role="button">
                                    <div class="fs-6 fw-bolder lh-sm" style="font-family: 'Inter', sans-serif;">tambah data</div>
                                </a>
                            </div>
                            @else
                            <div class="fs-6 fw-normal lh-sm body-name" style="font-family: 'Inter', sans-serif;">{{ $row->no_bpjs }}</div>
                            @endif

                            <!-- lc -->
                            @if ($row->no_kartu == "")
                            <div class="body-name table-body-btn">
                                <svg width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.334 13H13.334V18C13.334 18.55 12.884 19 12.334 19C11.784 19 11.334 18.55 11.334 18V13H6.33398C5.78398 13 5.33398 12.55 5.33398 12C5.33398 11.45 5.78398 11 6.33398 11H11.334V6C11.334 5.45 11.784 5 12.334 5C12.884 5 13.334 5.45 13.334 6V11H18.334C18.884 11 19.334 11.45 19.334 12C19.334 12.55 18.884 13 18.334 13Z" fill="#394E91"/>
                                </svg>
                                <a href="/{{ $row->id_lc }}/tambah-lc" class="btn-add" role="button">
                                    <div class="fs-6 fw-bolder lh-sm" style="font-family: 'Inter', sans-serif;">tambah data</div>
                                </a>
                            </div>
                            @else
                            <div class="fs-6 fw-normal lh-sm body-name" style="font-family: 'Inter', sans-serif;">{{ $row->no_kartu }}</div>
                            @endif

                            <!-- aksi -->
                            <div class="body-name action">
                                <a href="/detail-anggota/{{ $row->nik }}" class="button-fill btn-action" role="button">
                                    <div class="fs-6 fw-bold lh-sm" style="font-family: 'Inter', sans-serif;">Detail</div>
                                </a>
                                <form method="post" action="/detail-anggota/{{ $row->nik }}">
                                    @method('delete')
                                    @csrf
                                    <button role="button" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini?')" class="btn button-ghost-delete btn-action">
                                        <div class="b-bold" style="color: #E8322E">Hapus</div>
                                        <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 19C6 20.1 6.9 21 8 21H16C17.1 21 18 20.1 18 19V9C18 7.9 17.1 7 16 7H8C6.9 7 6 7.9 6 9V19ZM18 4H15.5L14.79 3.29C14.61 3.11 14.35 3 14.09 3H9.91C9.65 3 9.39 3.11 9.21 3.29L8.5 4H6C5.45 4 5 4.45 5 5C5 5.55 5.45 6 6 6H18C18.55 6 19 5.55 19 5C19 4.45 18.55 4 18 4Z" fill="#CF3630"/>
                                        </svg> -->
                                    </button>
                                </form>
                            </div>
                            
                            <!-- <div class="table-body-cell">
                                <div class="body-name b-regular">{{ $row->nik }}</div>
                            </div>

                            <div class="table-body-cell">
                                <div class="body-name b-regular">{{ $row->nama }}</div>
                            </div>

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

                            <div class="table-body-cell-action ps-4">
                                <a href="/detail-anggota/{{ $row->nik }}" role="button" class="btn px-3 button-fill body-btn-detail">
                                    <div class="b-bold header-name" style="color: white;">Detail</div>
                                </a>
                                <form method="post" action="/detail-anggota/{{ $row->nik }}">
                                    @method('delete')
                                    @csrf
                                    <button role="button" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini?')" class="btn px-3 button-ghost-delete body-btn-detail">
                                        <div class="b-bold header-name-delete">Hapus</div>
                                    </button>
                                </form>
                            </div> -->
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
