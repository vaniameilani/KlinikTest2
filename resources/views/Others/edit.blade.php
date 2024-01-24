<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
        <!-- css -->
        <link rel="stylesheet" href="/css/styles.css">
        <title>Klinik Raycare - Edit Informasi Lainnya</title>

        <style>
             /*button kembali  */
             a.button-underline { text-decoration: none; }
             a.button-underline:hover { text-decoration: underline; text-decoration-color: #394E91; }

            /* button tambah */
            a.button-fill {background: #394E91;}
            a.button-fill:hover {background: #293A79;}
        </style>
    </head>
    <body>
        @include('component.navbar')
        <main>
            <div style="width: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                    <a href="/detail-anggota/{{$other->nik_other}}" class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex" role="button">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Button-Icons">
                                <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                            </g>
                        </svg>
                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kembali ke Halaman Detail Anggota</div>
                    </a>
                    <div style="justify-content: center; align-items: center; display: inline-flex">
                        <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Edit Informasi Lainnya</div>
                    </div>
                </div>
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex; border: 1px #DADDE5 solid;">
                    <form method="POST" action="/update-anggota-lainnya/{{$other->nik_other}}" style="align-self: stretch; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex; gap: 32px;">
                        @method('PUT')
                        @csrf
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="no_hp" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Telepon</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Masukkan Nomor Telepon Anggota" name="no_hp" value="{{ $other->no_hp }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                @error('no_hp')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="disabilitas" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Penyandang Disabilitas</label>
                                <select class="form-select p-3 align-self-stretch" id="disabilitas" name="disabilitas" style="border-radius: 5px; border: 1px #DADDE5 solid;" required>
                                    <option >Pilih salah satu</option>
                                    <option value="Iya" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $disabilitas == 'Iya' ? 'selected' : '' }}> Iya </option>
                                    <option value="Tidak" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $disabilitas == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                </select>
                                @error('disabilitas')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <div style="align-self: stretch; height: 0px; border: 1px #DADDE5 solid"></div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Bank</div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <label for="nama_bank" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Bank</label>
                                    <input type="text" class="form-control @error('nama_bank') is-invalid @enderror" id="nama_bank" placeholder="Masukkan Nama Bank Anggota" name="nama_bank" value="{{ $other->nama_bank }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                    @error('nama_bank')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <label for="no_rek" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Rekening</label>
                                    <input type="text" class="form-control @error('no_rek') is-invalid @enderror" id="no_rek" placeholder="Masukkan Nomor Rekening Anggota" name="no_rek" value="{{ $other->no_rek }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                    @error('no_rek')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; height: 0px; border: 1px #DADDE5 solid"></div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi TPS</div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <!-- PROVINSI -->
                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                        <label for="provinsi" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Provinsi</label>
                                        <select class="form-select p-3 self-stretch" id="provinsi" name="provinsi" style="border-radius: 5px; border: 1px #DADDE5 solid; gap: 2px;" required>
                                            <<option >Pilih salah satu</option>
                                            @foreach($ssprov as $data)
                                                <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="{{ $data->id }}" {{ $prov == $data->name ? 'selected' : '' }}>{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('provinsi')
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <!-- KOTA/KABUPATEN -->
                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                        <label for="kota_kab" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Kota/Kabupaten</label>
                                        <select class="form-select p-3 align-self-stretch" id="kota_kab" name="kota_kab" style="border-radius: 5px; border: 1px #DADDE5 solid; gap: 2px;" required>
                                            <!-- option kota/kabupaten -->
                                            @foreach($sskotakab as $data)
                                                <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="{{ $data->id }}" {{ $kota_kab == $data->name ? 'selected' : '' }}>{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('kota_kab')
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <!-- KECAMATAN -->
                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                        <label for="kecamatan" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Kecamatan</label>
                                        <select class="form-select p-3" id="kecamatan" name="kecamatan" style="align-self: stretch; border-radius: 5px; border: 1px #DADDE5 solid; gap: 2px;" required>
                                            <!-- option -->
                                            @foreach($sskec as $data)
                                                <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="{{ $data->id }}" {{ $kec == $data->name ? 'selected' : '' }}>{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('kecamatan')
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <!-- DESA/KELURAHAN -->
                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                        <label for="desa_kel" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Desa/Kelurahan</label>
                                        <select class="form-select p-3 align-self-stretch" id="desa_kel" name="desa_kel" style="border-radius: 5px; border: 1px #DADDE5 solid; gap: 2px;" required>
                                            <!-- option desa/kelurahan -->
                                            @foreach($ssdesa_kel as $data)
                                                <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="{{ $data->id }}" {{ $desa_kel == $data->name ? 'selected' : '' }}>{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('desa_kel')
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                                    <label for="no_tps" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor TPS</label>
                                    <select class="form-select p-3 self-stretch" id="no_tps" name="no_tps" onChange="getTps(this.value)" style="border-radius: 5px; border: 1px #DADDE5 solid; gap: 2px;" required>
                                        <option >Pilih salah satu</option>
                                        <!-- option -->
                                            @foreach($ssno_tps as $data)
                                                <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="{{ $data->id }}" {{ $tps == $data->no_tps ? 'selected' : '' }}>{{ $data->no_tps }}</option>
                                            @endforeach
                                    </select>
                                    @error('no_tps')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <!-- alamat tps -->
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <label for="alamat_tps" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat Lengkap TPS</label>
                                    <!-- <div style="align-self: stretch; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                        <input readonly type="textarea" class="form-control @error('alamat_tps') is-invalid @enderror" id="alamat_tps" placeholder="Alamat TPS Lengkap" name="alamat_tps" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                    </div> -->
                                    <select class="form-select p-3 align-self-stretch" id="alamat_tps" name="alamat_tps" style="border-radius: 5px; border: 1px #DADDE5 solid; gap: 2px;" required>
                                        @foreach($ssalamat_tps as $data)
                                            <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="{{ $data->id }}" > {{ $data->alamat_tps }}</option>
                                        @endforeach
                                    </select>
                                    @error('alamat_tps')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; justify-content: flex-end; align-items: flex-start; gap: 8px; display: inline-flex">
                            <button type="submit" class="btn btn-primary mb-3" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; color: white;  font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Simpan</div>
                            </button>
                        </div>
                    </form>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script>
                        jQuery(document).ready(function() {
	                        jQuery('#nama_bank').keyup(function() 
                            {
                                var str = jQuery('#nama_bank').val();
                            
                                
                                var spart = str.split(" ");
                                for ( var i = 0; i < spart.length; i++ )
                                {
                                    var j = spart[i].charAt(0).toUpperCase();
                                    spart[i] = j + spart[i].substr(1);
                                }
                            jQuery('#nama_bank').val(spart.join(" "));
                            });
                        });
                    </script>
                    <script>
                        jQuery(document).ready(function() {
                            jQuery('#provinsi').change(function(event){
                                var idProv = this.value;
                                jQuery('#kota_kab').html('');
                                jQuery.ajax({
                                    url: "/api/fetch-tps-regencies",
                                    type: 'POST',
                                    dataType: 'json',
                                    data: {province_id: idProv,_token:"{{ csrf_token() }}"},
                                    success:function(response){
                                        jQuery('#kota_kab').html('<option style="align-self:stretch; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option>');
                                        jQuery.each(response.regencies, function(create, val){
                                            jQuery('#kota_kab').append('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="'+val.id+'"> '+val.name+' </option>')
                                        });
                                        jQuery('#kecamatan').html('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option>');
                                    }
                                })
                            });

                            jQuery('#kota_kab').change(function(event){
                                var idReg = this.value;
                                jQuery('#kecamatan').html('');
                                jQuery.ajax({
                                    url: "/api/fetch-tps-districts",
                                    type: 'POST',
                                    dataType: 'json',
                                    data: {regency_id: idReg,_token:"{{ csrf_token() }}"},
                                    success:function(response){
                                        jQuery('#kecamatan').html('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option>');
                                        jQuery.each(response.districts, function(create, val){
                                            jQuery('#kecamatan').append('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="'+val.id+'"> '+val.name+' </option>')
                                        });
                                        jQuery('#desa_kel').html('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option>');
                                    }
                                })
                            });

                            jQuery('#kecamatan').change(function(event){
                                var idDist = this.value;
                                jQuery('#desa_kel').html('');
                                jQuery.ajax({
                                    url: "/api/fetch-tps-villages",
                                    type: 'POST',
                                    dataType: 'json',
                                    data: {district_id: idDist,_token:"{{ csrf_token() }}"},
                                    success:function(response){
                                        jQuery('#desa_kel').html('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option>');
                                        jQuery.each(response.villages, function(create, val){
                                            jQuery('#desa_kel').append('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="'+val.id+'"> '+val.name+' </option>')
                                        });
                                        jQuery('#no_tps').html('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option>');
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

                            jQuery('#no_tps').change(function(event){
                                var idtps = this.value;
                                jQuery('#alamat_tps').html('');
                                jQuery.ajax({
                                    url: "/api/fetch-alamat-tps",
                                    type: 'POST',
                                    dataType: 'json',
                                    data: {notps_id: idtps,_token:"{{ csrf_token() }}"},
                                    success:function(response){
                                        jQuery.each(response.tps_addresses, function(create, val){
                                            jQuery('#alamat_tps').append('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="'+val.id+'"> '+val.alamat_tps+' </option>')
                                        });
                                    }
                                })
                            });

                            // jQuery('#no_tps').change(function(event){
                            //     var idtps = this.value;
                            //     jQuery('#alamat_tps').html('');
                            //     jQuery.ajax({
                            //         url: "/api/fetch-alamat-tps",
                            //         type: 'POST',
                            //         dataType: 'json',
                            //         data: {notps_id: idtps,_token:"{{ csrf_token() }}"},
                            //         success:function(response){
                            //             function getTps(value) {
                            //                 document.querySelector("#alamat_tps input").value = value;
                            //             }
                            //         }
                            //     })
                            // });
                        });
                    </script>
                    <!-- <script>
                        function getTps(value) {
                            document.querySelector("#alamat_tps input").value = value;
                        }
                    </script> -->
                </div>
            </div>
        </main>
    </body>
</html>