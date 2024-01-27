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
            <form action="/filter" method='GET' class="filter-main-card">
                <div class="filter-row">
                    <div class="filter-col">
                        <div class="filter">
                            <div class="h5 filter-title">Filter Berdasarkan Alamat/TPS</div>
                            <div class="filter-list">
                                <div class="filter-dropdown">
                                    <label for="kecamatan" class="form-label b-medium filter-label">Kecamatan</label>
                                    <select class="form-select filter-name-place" id="kecamatan" name="kecamatan">
                                        <option value="" class="b-regular filter-name"selected>Pilih salah satu</option>
                                        @foreach ($listkec as $kec)
                                            <option value="{{ $kec->id }}" class="b-regular filter-name">{{ $kec->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="filter-dropdown">
                                    <label for="desa_kel" class="form-label b-medium filter-label">Desa/Kelurahan</label>
                                    <select class="form-select filter-name-place" id="desa_kel" name="desa_kel">
                                        <option value="" class="b-regular filter-name"selected>Pilih salah satu</option>
                                    </select>
                                </div>
                                <div class="filter-dropdown">
                                    <label for="no_tps" class="form-label b-medium filter-label">Nomor TPS</label>
                                    <select class="form-select filter-name-place" id="no_tps" name="no_tps">
                                        <option value="" class="b-regular filter-name" selected>Pilih salah satu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="filter">
                            <div class="h5 filter-title">Filter Berdasarkan BPJS</div>
                            <div class="filter-list">
                                <!-- Faskes -->
                                <div class="filter-dropdown">
                                    <label for="faskes" class="form-label b-medium filter-label">Faskes</label>
                                    <select class="form-select filter-name-place" name="faskes">
                                        <option value="" class="b-regular filter-name" selected>Pilih salah satu</option>
                                        <option value="FASKES 1" class="b-regular name"> FASKES 1 </option>
                                        <option value="FASKES 2" class="b-regular name"> FASKES 2 </option>
                                        <option value="FASKES 3" class="b-regular name"> FASKES 3 </option>
                                    </select>
                                </div>
                                <!-- Jenis Kartu BPJS -->
                                <div class="filter-dropdown">
                                    <label for="jenis_bpjs" class="form-label b-medium filter-label">Jenis Kartu BPJS</label>
                                    <select class="form-select filter-name-place" name="jenis_bpjs">
                                        <option value="" class="b-regular filter-name" selected>Pilih salah satu</option>
                                        <option value="PBI APBD" class="b-regular name"> PBI APBD </option>
                                        <option value="PBI APBN" class="b-regular name"> PBI APBN </option>
                                        <option value="MANDIRI" class="b-regular name"> MANDIRI </option>
                                        <option value="PERUSAHAAN" class="b-regular name"> PERUSAHAAN </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="filter">
                        <div class="h5 filter-title">Filter Berdasarkan Dapil</div>
                            <div class="filter-list">
                                <div class="filter-dropdown">
                                    <label for="kota_kab" class="form-label b-medium filter-label">Kota/Kabupaten</label>
                                    <select class="form-select filter-name-place" id="kota_kab" name="kota_kab">
                                        <option value="" class="b-regular filter-name">Pilih salah satu</option>
                                        <option value="KABUPATEN BELITUNG" class="b-regular filter-name">KABUPATEN BELITUNG</option>
                                        <option value="KABUPATEN BELITUNG TIMUR" class="b-regular filter-name">KABUPATEN BELITUNG TIMUR</option>
                                    </select>
                                </div>
                                <div class="filter-dropdown">
                                    <label for="dapil" class="form-label b-medium filter-label">Dapil</label>
                                    <select class="form-select filter-name-place" id="dapil" name="dapil">
                                        <option value="" class="b-regular filter-name">Pilih salah satu</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="button-set">
                    <a href='/filter' class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex" role="button">
                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Reset</div>
                    </a>
                    <button class="btn button-fill" type="submit" style="padding: 16px 24px; border-radius: 10px; justify-content: center; align-items: center; display: flex;">
                        <div class="b-bold self-stretch" style="word-wrap: break-word;">Tampilkan Data</div>
                    </button>
                </div>
            </form>

            <div class="filter-main-card">
                <div style="align-self:stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                    <div style="color: #1D1B20; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Daftar Anggota</div>
                </div>
                <div class="filter-content">
                    <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; gap: 8px; margin: 8px; display: inline-flex">
                        <div style="color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Filter berdasarkan:</div>
                        <div style="justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                            @if(request('kota_kab') != "")
                            <div style="padding-left: 24px; padding-right: 24px; padding-top: 4px; padding-bottom: 4px; background: #C4CBE0; border-radius: 50px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Kota/Kabupaten:</div>
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">{{ request('kota_kab') }}</div>
                            </div>

                            @endif
                            @if(request('kecamatan') != "")
                            <div style="padding-left: 24px; padding-right: 24px; padding-top: 4px; padding-bottom: 4px; background: #C4CBE0; border-radius: 50px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Kecamatan:</div>
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">{{ $kecamatan[0] }}</div>
                            </div>
                            @endif

                            @if(request('dapil') != "")
                            <div style="padding-left: 24px; padding-right: 24px; padding-top: 4px; padding-bottom: 4px; background: #C4CBE0; border-radius: 50px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Dapil:</div>
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">{{ request('dapil') }}</div>
                            </div>
                            @endif

                            @if(request('desa_kel') != "")
                            <div style="padding-left: 24px; padding-right: 24px; padding-top: 4px; padding-bottom: 4px; background: #C4CBE0; border-radius: 50px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Desa/Kelurahan:</div>
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">{{ $desa_kel[0] }}</div>
                            </div>
                            @endif

                            @if(request('no_tps') != "")
                            <div style="padding-left: 24px; padding-right: 24px; padding-top: 4px; padding-bottom: 4px; background: #C4CBE0; border-radius: 50px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Nomor TPS:</div>
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">{{ $no_tps[0] }}</div>
                            </div>
                            @endif

                            @if(request('faskes') != "")
                            <div style="padding-left: 24px; padding-right: 24px; padding-top: 4px; padding-bottom: 4px; background: #C4CBE0; border-radius: 50px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Faskes:</div>
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">{{ request('faskes') }}</div>
                            </div>
                            @endif

                            @if(request('jenis_bpjs') != "")
                            <div style="padding-left: 24px; padding-right: 24px; padding-top: 4px; padding-bottom: 4px; background: #C4CBE0; border-radius: 50px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Jenis BPJS:</div>
                                <div style="color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">{{ request('jenis_bpjs') }}</div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- <div>Filter berdasarkan 
                        @if(request('kecamatan') != "")Kecamatan: {{ $kecamatan[0] }}@endif
                        @if(request('dapil') != "")Dapil ke: {{ request('dapil') }}@endif
                        @if(request('desa_kel') != "")Desa/Kelurahan: {{ $desa_kel[0] }}@endif
                        @if(request('no_tps') != "")Nomor TPS: {{ $no_tps[0] }}@endif
                        @if(request('faskes') != "")Faskes: {{ request('faskes') }}@endif
                        @if(request('jenis_bpjs') != "")Jenis BPJS: {{ request('jenis_bpjs') }}@endif
                    </div> -->

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
                                <a href="" class="btn button-ghost body-name-link b-medium">{{ $row->nik }}</a>
                            </div>

                            <!-- NAMA -->
                            <div class="table-body-cell">
                                <div class="body-name b-regular">{{ $row->nama }}</div>
                            </div>

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

                            <!-- BPJS -->
                            @if ($row->jenis_bpjs == "")
                            <div class="table-body-cell">
                                <div class="b-regular body-name">-</div>
                            </div>
                            @else
                            <div class="table-body-cell">
                                <div class="b-regular body-name">{{ $row->jenis_bpjs }}</div>
                            </div>
                            @endif

                            <!-- ALAMAT -->
                            @if ($row->kecamatan == "")
                            <div class="table-body-cell">
                                <div class="b-regular body-name">-</div>
                            </div>
                            @else
                            <div class="table-body-cell">
                                <div class="b-regular body-name">{{ $row->kecamatan }}, {{ $row->desa_kel }}</div>
                                <div class="b-regular body-name">{{ $row->alamat }}</div>
                                <div class="b-regular body-name">
                                    @foreach ($kecbelitung as $belitung)
                                    
                                    @foreach ($belitung1 as $bel1) @if($row->kecamatan == $belitung->name && $row->desa_kel == $bel1)Dapil Belitung 1 @endif @endforeach  
                                    @foreach ($belitung2 as $bel2) @if($row->kecamatan == $belitung->name && $row->desa_kel == $bel2)Dapil Belitung 2 @endif @endforeach  
                                    @foreach ($belitung3 as $bel3) @if($row->kecamatan == $belitung->name && $row->desa_kel == $bel3)Dapil Belitung 3 @endif @endforeach  
                                    @foreach ($belitung4 as $bel4) @if($row->kecamatan == $belitung->name && $row->desa_kel == $bel4)Dapil Belitung 4 @endif @endforeach  
                                    @endforeach
                                    @foreach ($kecbeltim as $beltim)
                                    @foreach ($beltim1 as $bel_tim1) @if($row->kecamatan == $beltim->name && $row->desa_kel == $bel_tim1)Dapil Belitung Timur 1 @endif @endforeach  
                                    @foreach ($beltim2 as $bel_tim2) @if($row->kecamatan == $beltim->name && $row->desa_kel == $bel_tim2)Dapil Belitung Timur 2 @endif @endforeach  
                                    @foreach ($beltim3 as $bel_tim3) @if($row->kecamatan == $beltim->name && $row->desa_kel == $bel_tim3)Dapil Belitung Timur 3 @endif @endforeach  

                                    @endforeach  
                                </div>  
                            </div>
                            @endif

                            <!-- NOMOR HP -->
                            @if ($row->no_hp == "")
                            <div class="table-body-cell">
                                <div class="b-regular body-name">-</div>
                            </div>
                            @else
                            <div class="table-body-cell">
                                <div class="b-regular body-name">{{ $row->no_hp }}</div>
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                    {{ $datanull->withQueryString()->links() }} 
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('#kecamatan').change(function(event){
            var idDist = this.value;
            jQuery('#desa_kel').html('');
            jQuery.ajax({
                url: "/api/fetch-villages",
                type: 'POST',
                dataType: 'json',
                data: {district_id: idDist,_token:"{{ csrf_token() }}"},
                success:function(response){
                    jQuery('#desa_kel').html('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option>');
                    jQuery.each(response.villages, function(create, val){
                        jQuery('#desa_kel').append('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="'+val.id+'"> '+val.name+' </option>')
                    });
                }
            })
        });

        jQuery('#desa_kel').change(function(event){
            var idVillage = this.value;
            jQuery('#no_tps').html('');
            jQuery.ajax({
                url: "/api/fetch-tps",
                type: 'POST',
                dataType: 'json',
                data: {village_id: idVillage,_token:"{{ csrf_token() }}"},
                success:function(response){
                    jQuery('#no_tps').html('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option>');
                    jQuery.each(response.tps_lists, function(create, val){
                        jQuery('#no_tps').append('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="'+val.id+'"> '+val.no_tps+' </option>')
                    });
                }
            })
        });

        jQuery('#kota_kab').change(function(event){
            var kotakab = this.value;
            jQuery('#dapil').html('');
            if (kotakab == "KABUPATEN BELITUNG") {
                jQuery('#dapil').html(
                '<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option><option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="BELITUNG 1">BELITUNG 1</option><option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="BELITUNG 2">BELITUNG 2</option><option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="BELITUNG 3">BELITUNG 3</option><option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="BELITUNG 4">BELITUNG 4</option>');
            }else{
                jQuery('#dapil').html('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option><option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="BELITUNG TIMUR 1">BELITUNG TIMUR 1</option><option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="BELITUNG TIMUR 2">BELITUNG TIMUR 2</option><option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="BELITUNG TIMUR 3">BELITUNG TIMUR 3</option>');
            }
        });
        
    });
    </script>
</main>    