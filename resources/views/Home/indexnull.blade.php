
@include('component.navbar')
<main>
    <div style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <a href="/" class="btn button-underline" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex" role="button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Button-Icons">
                        <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                    </g>
                </svg>
                <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kembali ke Halaman Utama</div>
            </a>
            <div style="justify-content: center; align-items: center; display: inline-flex">
                <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Daftar Data Anggota yang belum lengkap</div>
            </div>
        </div>
        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
            <!-- TABLE SECTION -->
            <div style="align-self: stretch; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: flex">
                <div id="myDIV" class="table">
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

                    @foreach ($datanull as $row)
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
                        <a href="/{{ $row->id_kk }}/tambah-data/kk" class="btn add-btn table-body-btn empty-bg-cell" role="button">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.334 13H13.334V18C13.334 18.55 12.884 19 12.334 19C11.784 19 11.334 18.55 11.334 18V13H6.33398C5.78398 13 5.33398 12.55 5.33398 12C5.33398 11.45 5.78398 11 6.33398 11H11.334V6C11.334 5.45 11.784 5 12.334 5C12.884 5 13.334 5.45 13.334 6V11H18.334C18.884 11 19.334 11.45 19.334 12C19.334 12.55 18.884 13 18.334 13Z" fill="#394E91"/>
                            </svg>
                            <div class="label body-name-btn">tambah data</div>
                        </a>
                        @else
                        <div class="table-body-cell">
                            <div class="b-regular body-name">{{ $row->kk }}</div>
                        </div>
                        @endif

                        <!-- BPJS -->
                        @if ($row->no_bpjs == "")
                        <a href="/{{$row->id_bpjs}}/tambah-data/bpjs" class="btn add-btn table-body-btn empty-bg-cell" role="button">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.334 13H13.334V18C13.334 18.55 12.884 19 12.334 19C11.784 19 11.334 18.55 11.334 18V13H6.33398C5.78398 13 5.33398 12.55 5.33398 12C5.33398 11.45 5.78398 11 6.33398 11H11.334V6C11.334 5.45 11.784 5 12.334 5C12.884 5 13.334 5.45 13.334 6V11H18.334C18.884 11 19.334 11.45 19.334 12C19.334 12.55 18.884 13 18.334 13Z" fill="#394E91"/>
                            </svg>
                            <div class="label body-name-btn">tambah data</div>
                        </a>
                        @else
                        <div class="table-body-cell">
                            <div class="b-regular body-name">{{ $row->no_bpjs }}</div>
                        </div>
                        @endif

                        <!-- LC -->
                        @if ($row->no_kartu == "")
                        <a href="/{{ $row->id_lc }}/tambah-data/lc" class="btn add-btn table-body-btn empty-bg-cell" role="button">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.334 13H13.334V18C13.334 18.55 12.884 19 12.334 19C11.784 19 11.334 18.55 11.334 18V13H6.33398C5.78398 13 5.33398 12.55 5.33398 12C5.33398 11.45 5.78398 11 6.33398 11H11.334V6C11.334 5.45 11.784 5 12.334 5C12.884 5 13.334 5.45 13.334 6V11H18.334C18.884 11 19.334 11.45 19.334 12C19.334 12.55 18.884 13 18.334 13Z" fill="#394E91"/>
                            </svg>
                            <div class="label body-name-btn">tambah data</div>
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
                </div>
                {{ $datanull->withQueryString()->links() }}
                </div>   
            </div>
        </div>
    </div>
</main>    