@include('component.navbar')

<main>
    <div style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <a href="/" class="btn button-underline" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Button-Icons">
                        <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                    </g>
                </svg>
                <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kembali ke Halaman Utama</div>
            </a>
            <div style="justify-content: center; align-items: center; display: inline-flex">
                <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Daftar Anggota Berdasarkan Filter</div>
            </div>
        </div>
        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
            <!-- TABLE SECTION -->
            <div class="filter-main-card">
                <div class="filter">
                    <div class="h5 filter-title">Filter Berdasarkan TPS</div>
                    <div class="filter-list">
                        <div class="filter-dropdown">
                            <label for="kota_kab" class="form-label b-medium filter-label">Kota/Kabupaten</label>
                            <select class="form-select filter-name-place" name="kota_kab" required>
                                <option class="b-regular filter-name">Pilih salah satu</option>
                                <option value="" class="b-regular filter-name">LAKI-LAKI</option>
                            </select>
                        </div>
                        <div class="filter-dropdown">
                            <label for="kecamatan" class="form-label b-medium filter-label">Kecamatan</label>
                            <select class="form-select filter-name-place" name="kecamatan" required>
                                <option class="b-regular filter-name">Pilih salah satu</option>
                                <option value="" class="b-regular filter-name">LAKI-LAKI</option>
                            </select>
                        </div>
                        <div class="filter-dropdown">
                            <label for="desa_kel" class="form-label b-medium filter-label">Desa/Kelurahan</label>
                            <select class="form-select filter-name-place" name="desa_kel" required>
                                <option class="b-regular filter-name">Pilih salah satu</option>
                                <option value="" class="b-regular filter-name">LAKI-LAKI</option>
                            </select>
                        </div>
                        <div class="filter-dropdown">
                            <label for="no_tps" class="form-label b-medium filter-label">Nomor TPS</label>
                            <select class="form-select filter-name-place" name="no_tps" required>
                                <option class="b-regular filter-name">Pilih salah satu</option>
                                <option value="" class="b-regular filter-name">LAKI-LAKI</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="filter">
                    <div class="h5 filter-title">Filter Berdasarkan BPJS</div>
                    <div class="filter-list">
                        <!-- Faskes -->
                        <div class="filter-dropdown">
                            <label for="" class="form-label b-medium filter-label">Faskes</label>
                            <select class="form-select filter-name-place" name="" required>
                                <option class="b-regular filter-name">Pilih salah satu</option>
                                <option value="" class="b-regular filter-name">LAKI-LAKI</option>
                            </select>
                        </div>
                        <!-- Jenis Kartu BPJS -->
                        <div class="filter-dropdown">
                            <label for="jenis_bpjs" class="form-label b-medium filter-label">Jenis Kartu BPJS</label>
                            <select class="form-select filter-name-place" name="jenis_bpjs" required>
                                <option class="b-regular filter-name">Pilih salah satu</option>
                                <option value="" href="" class="b-regular filter-name">LAKI-LAKI</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter-main-card">
                <div style="align-self:stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                    <div style="color: #1D1B20; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Daftar Anggota</div>
                </div>
                <div class="table">
                    <div class="table-head">
                        <div class="h5 header-name d-flex align-items-center pt-2">NIK</div>
                        <div class="h5 header-name d-flex align-items-center pt-2">Nama</div>
                        <div class="h5 header-name d-flex align-items-center pt-2">LC</div>
                        <div class="h5 header-name d-flex align-items-center pt-2">Faskes/Jenis Kartu BPJS</div>
                        <div class="h5 header-name d-flex align-items-center pt-2">Alamat</div>
                        <div class="h5 header-name d-flex align-items-center pt-2">No HP</div>
                    </div>

                    @foreach ($datanull as $row)
                    <div class="table-body">
                        <!-- NIK -->
                        <div class="table-body-cell">
                            <a href="" class="btn button-ghost body-name b-regular">{{ $row->nik }}</a>
                        </div>

                        <!-- NAMA -->
                        <div class="table-body-cell">
                            <div class="body-name b-regular">{{ $row->nama }}</div>
                        </div>

                        <!-- KK -->
                        @if ($row->kk == "")
                        <div class="table-body-cell">
                            <div class="b-regular body-name">-</div>
                        </div>
                        @else
                        <div class="table-body-cell">
                            <div class="b-regular body-name">{{ $row->kk }}</div>
                        </div>
                        @endif

                        <!-- BPJS -->
                        @if ($row->no_bpjs == "")
                        <div class="table-body-cell">
                            <div class="b-regular body-name">-</div>
                        </div>
                        @else
                        <div class="table-body-cell">
                            <div class="b-regular body-name">{{ $row->no_bpjs }}</div>
                        </div>
                        @endif

                        <!-- LC -->
                        @if ($row->no_kartu == "")
                        <div class="table-body-cell">
                            <div class="b-regular body-name">-</div>
                        </div>
                        @else
                        <div class="table-body-cell">
                            <div class="b-regular body-name">{{ $row->no_kartu }}</div>
                        </div>
                        @endif

                        <!-- LC -->
                        @if ($row->no_kartu == "")
                        <div class="table-body-cell">
                            <div class="b-regular body-name">-</div>
                        </div>
                        @else
                        <div class="table-body-cell">
                            <div class="b-regular body-name">{{ $row->no_kartu }}</div>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
                {{ $datanull->withQueryString()->links() }} 
            </div>
        </div>
    </div>
</main>    