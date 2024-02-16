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

    @if (session('status'))
        <div style="align-self: stretch; margin-left: 176px; margin-right: 176px; margin-top: 24px;">
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="align-self: stretch;">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

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
                        <div class="card-svg">
                            <svg width="64" height="64" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.7832 22.3833C30.0665 23.9333 31.6665 26.0333 31.6665 28.8333V33.8333H38.3332V28.8333C38.3332 25.2 32.3832 23.05 27.7832 22.3833Z" fill="#394E91"/>
                                <path d="M15.0007 20.4998C18.6825 20.4998 21.6673 17.5151 21.6673 13.8332C21.6673 10.1513 18.6825 7.1665 15.0007 7.1665C11.3188 7.1665 8.33398 10.1513 8.33398 13.8332C8.33398 17.5151 11.3188 20.4998 15.0007 20.4998Z" fill="#394E91"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.9993 20.4998C28.6827 20.4998 31.666 17.5165 31.666 13.8332C31.666 10.1498 28.6827 7.1665 24.9993 7.1665C24.216 7.1665 23.4827 7.33317 22.7827 7.5665C24.2169 9.3402 24.9993 11.5522 24.9993 13.8332C24.9993 16.1142 24.2169 18.3261 22.7827 20.0998C23.4827 20.3332 24.216 20.4998 24.9993 20.4998ZM14.9993 22.1665C10.5493 22.1665 1.66602 24.3998 1.66602 28.8332V33.8332H28.3327V28.8332C28.3327 24.3998 19.4493 22.1665 14.9993 22.1665Z" fill="#394E91"/>
                            </svg>
                        </div>
                        <div class="card-containt">
                            <div class="fs-6 fw-bold card-title" style="font-family: 'Inter', sans-serif;">Keseluruhan Anggota LC</div>
                            <div class="h2 card-result" style="font-family: 'Inter', sans-serif;">{{ $countktp }}</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-svg">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M31.974 5.8335C17.254 5.8335 5.33398 17.7802 5.33398 32.5002C5.33398 47.2202 17.254 59.1668 31.974 59.1668C46.7206 59.1668 58.6673 47.2202 58.6673 32.5002C58.6673 17.7802 46.7206 5.8335 31.974 5.8335ZM40.5873 46.8735L32.0006 41.7002L23.414 46.8735C23.1893 47.0098 22.9295 47.077 22.667 47.0666C22.4044 47.0563 22.1507 46.9689 21.9374 46.8154C21.7242 46.6618 21.5609 46.4489 21.4678 46.2032C21.3747 45.9575 21.356 45.6898 21.414 45.4335L23.6807 35.6735L16.134 29.1402C15.938 28.9655 15.7972 28.7374 15.7291 28.4839C15.661 28.2304 15.6685 27.9624 15.7507 27.7131C15.8329 27.4638 15.9861 27.2439 16.1916 27.0805C16.3971 26.9171 16.6459 26.8174 16.9073 26.7935L26.8806 25.9402L30.774 16.7402C31.2273 15.6468 32.774 15.6468 33.2273 16.7402L37.1206 25.9135L47.094 26.7668C47.3565 26.7894 47.6064 26.8892 47.8122 27.0537C48.0181 27.2182 48.1705 27.4399 48.2504 27.691C48.3303 27.9421 48.334 28.2112 48.2611 28.4643C48.1881 28.7175 48.0419 28.9434 47.8406 29.1135L40.294 35.6468L42.5606 45.4335C42.8273 46.5802 41.6006 47.4868 40.5873 46.8735Z" fill="#394E91"/>
                            </svg>
                        </div>
                        <div class="card-containt">
                            <div class="fs-6 fw-bold card-title" style="font-family: 'Inter', sans-serif;">Jumlah Anggota LC</div>
                            <div class="h2 card-result" style="font-family: 'Inter', sans-serif;">{{ $countlc }}</div>
                        </div>
                    </div>
                    <div class="card card-btn">
                        <div class="card-svg">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M50.6667 8H13.3333C10.4 8 8 10.4 8 13.3333V50.6667C8 53.6 10.4 56 13.3333 56H50.6667C53.6 56 56 53.6 56 50.6667V13.3333C56 10.4 53.6 8 50.6667 8ZM29.3333 45.3333H18.6667V34.6667H29.3333V45.3333ZM29.3333 29.3333H18.6667V18.6667H29.3333V29.3333ZM45.3333 45.3333H34.6667V34.6667H45.3333V45.3333ZM45.3333 29.3333H34.6667V18.6667H45.3333V29.3333Z" fill="#394E91"/>
                            </svg>
                        </div>
                        <a href="/nulldata" class="card-containt btn-card-containt"> 
                            <div class="fs-6 fw-bold card-title" style="font-family: 'Inter', sans-serif;">Data yang Belum Lengkap</div>
                            <div class="h2 card-result" style="font-family: 'Inter', sans-serif;">{{ $countnull }}</div>
                        </a>
                    </div>
                    <div class="card card-filter">
                        <div class="h5" style="color: #DADDE5;">Cari Berdasarkan Filter?</div>
                        <!-- <div class="h2 card-result-sec">{{ $countnull }}</div> -->
                        <a href="/filter" class="btn button-fill-third card-filter-btn">
                            <div class="b-bold card-result-sec">Lihat Halaman</div>
                        </a>
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
                            <div class="body-name table-body-btn empty-bg-cell">
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
                            <div class="body-name table-body-btn empty-bg-cell">
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
                                    </button>
                                </form>
                                <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 19C6 20.1 6.9 21 8 21H16C17.1 21 18 20.1 18 19V9C18 7.9 17.1 7 16 7H8C6.9 7 6 7.9 6 9V19ZM18 4H15.5L14.79 3.29C14.61 3.11 14.35 3 14.09 3H9.91C9.65 3 9.39 3.11 9.21 3.29L8.5 4H6C5.45 4 5 4.45 5 5C5 5.55 5.45 6 6 6H18C18.55 6 19 5.55 19 5C19 4.45 18.55 4 18 4Z" fill="#CF3630"/>
                                </svg> -->
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
