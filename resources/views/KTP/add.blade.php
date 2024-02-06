@include('component.navbar')

@section('content')
<div style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
    <!-- HEADER -->
    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
        <a href="/" class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex" role="button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Button-Icons">
                    <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                </g>
            </svg>
            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kembali ke Halaman Utama</div>
        </a>
        <div style="justify-content: center; align-items: center; display: inline-flex">
            <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Tambah KTP</div>
        </div>
    </div>

    <!-- FORM -->
    <div class="card-form">
        <form  action="/ktps" method="POST" enctype="multipart/form-data" style="align-self: stretch; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex; gap: 32px;">
            @csrf
            <div class="form">
                <!-- NIK -->
                <div class="input-field">
                    <label for="nik" class="form-label b-medium name">NIK</label>
                    <input type="text" class="input-name form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukkan NIK Anggota" name="nik" value="{{ old('nik') }}" required>
                    @error('nik')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <!-- Nama -->
                <div class="input-field">
                    <label for="nama" class="form-label b-medium name">Nama</label>
                    <input type="text" class="input-name form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Anggota" name="nama" value="{{ old('nama') }}" required>
                    @error('nama')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <!-- Jenis kelamin pengguna -->
                <div class="input-field">
                    <label for="jenis_kelamin" class="form-label b-medium name" >Jenis Kelamin</label>
                    <select class="form-select dropdown" name="jenis_kelamin" required>
                        <option >Pilih salah satu</option>
                        <option value="LAKI-LAKI" class="name b-regular" {{ old('jenis_kelamin') == 'LAKI-LAKI' ? 'selected' : '' }}>LAKI-LAKI</option>
                        <option value="PEREMPUAN" class="name b-regular" {{ old('jenis_kelamin') == 'PEREMPUAN' ? 'selected' : '' }}>PEREMPUAN</option>
                    </select>
                    @error('jenis_kelamin')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <!-- Tempat dan tinggal lahir pengguna -->
                <div class="input-col">
                    <div class="input-col-row">
                        <label for="tempat_lahir" class="form-label b-medium name" >Tempat Lahir</label>
                        <input type="text" class="input-name form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="Masukkan Tempat Lahir Anggota" name="tempat_lahir" value="{{ old('tempat_lahir')}}" required>
                        @error('tempat_lahir')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="input-col-row">
                        <label for="tanggal_lahir" class="form-label b-medium name" >Tanggal Lahir</label>
                        <input type="date" class="input-name form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Anggota" name="tanggal_lahir" value="{{ old('tanggal_lahir')}}" required>
                        @error('tanggal_lahir')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <!-- Status Nikah -->
                <div class="input-field">
                    <label for="status_perkawinan" class="form-label b-medium name" >Status Pernikahan</label>
                    <select class="form-select dropdown" id="status_perkawinan" name="status_perkawinan" required>
                        <option >Pilih salah satu</option>
                        <option value="KAWIN" class="name b-regular" {{ old('status_perkawinan') == 'KAWIN' ? 'selected' : '' }}>KAWIN</option>
                        <option value="BELUM KAWIN" class="name b-regular" {{ old('status_perkawinan') == 'BELUM KAWIN' ? 'selected' : '' }}>BELUM KAWIN</option>
                        <option value="CERAI HIDUP" class="name b-regular" {{ old('status_perkawinan') == 'CERAI HIDUP' ? 'selected' : '' }}>CERAI HIDUP</option>
                        <option value="CERAI MATI" class="name b-regular" {{ old('status_perkawinan') == 'CERAI MATI' ? 'selected' : '' }}>CERAI MATI</option>
                    </select>
                    @error('status_perkawinan')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <!-- Agama -->
                <div class="input-field">
                    <label for="agama" class="form-label b-medium name" >Agama</label>
                    <select class="form-select dropdown" id="agama" name="agama" required>
                        <option >Pilih salah satu</option>
                        <option value="Islam" class="name b-regular" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option value="Kristen" class="name b-regular" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                        <option value="Katolik" class="name b-regular" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                        <option value="Hindu" class="name b-regular" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Budha" class="name b-regular" {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                        <option value="Kong Hu Chu" class="name b-regular" {{ old('agama') == 'Kong Hu Chu' ? 'selected' : '' }}>Kong Hu Chu</option>
                    </select>
                    @error('agama')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <!-- Pekerjaan -->
                <div class="input-field">
                    <label for="pekerjaan" class="form-label b-medium name" >Pekerjaan</label>
                    <input type="text" class="input-name form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" placeholder="Masukkan Pekerjaan Anggota" name="pekerjaan" value="{{ old('pekerjaan') }}" required>
                    @error('pekerjaan')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <!-- Alamat -->
                <div class="input-field">
                    <label for="alamat" class="form-label b-medium name" >Alamat</label>
                    <div style="align-self: stretch; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                        <input type="textarea" class="input-name form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat Anggota" name="alamat" value="{{ old('alamat')}}" required>
                        <!-- <div style="padding-right: 110px; justify-content: flex-start; align-items: center; display: inline-flex">
                            <div style="text-align: justify; color: #757575; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Isi secara lengkap mulai dari nama jalan/desa hingga kode pos</div>
                        </div> -->
                    </div>
                    @error('alamat')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <!-- Provinsi & Kota/Kabupaten -->
                <div class="input-col">
                    <div class="input-col-row">
                        <label for="provinsi" class="form-label b-medium name" >Provinsi</label>
                        <select class="form-select dropdown" id="provinsi" name="provinsi" required>
                            <option >Pilih salah satu</option>
                            @foreach($prov as $data)
                                <option class="name b-regular" value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                            <!-- <option value="Kepulauan Bangka Belitung" class="name b-regular" {{ old('provinsi') == 'Kepulauan Bangka Belitung' ? 'selected' : '' }}>Kepulauan Bangka Belitung</option>
                            <option value="Jawa Barat" class="name b-regular" {{ old('provinsi') == 'Jawa Barat' ? 'selected' : '' }}>Jawa Barat</option> -->
                        </select>
                        @error('provinsi')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="input-col-row">
                        <label for="kota_kab" class="form-label b-medium name" >Kota/Kabupaten</label>
                        <select class="form-select dropdown" id="kota_kab" name="kota_kab" required>
                            <option >Pilih salah satu</option>
                            <!-- <option >Pilih salah satu</option>
                            <option value="BELITUNG" class="name b-regular" {{ old('kota_kab') == 'BELITUNG' ? 'selected' : '' }}>BELITUNG</option>
                            <option value="BELITUNG TIMUR" class="name b-regular" {{ old('kota_kab') == 'BELITUNG TIMUR' ? 'selected' : '' }}>BELITUNG TIMUR</option> -->
                        </select>
                        @error('kota_kab')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <!-- Kecamatan & Desa/Kel -->
                <div class="input-col">
                    <div class="input-col-row">
                        <label for="kecamatan" class="form-label b-medium name" >Kecamatan</label>
                        <select class="form-select dropdown" id="kecamatan" name="kecamatan" required>
                            <option >Pilih salah satu</option>
                            <!-- <option >Pilih salah satu</option>
                            <option value="MEMBALONG" class="name b-regular" {{ old('kecamatan') == 'MEMBALONG' ? 'selected' : '' }}>MEMBALONG</option>
                            <option value="SELAT NASIK" class="name b-regular" {{ old('kecamatan') == 'SELAT NASIK' ? 'selected' : '' }}>SELAT NASIK</option> -->
                        </select>
                        @error('kecamatan')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="input-col-row">
                        <label for="desa_kel" class="form-label b-medium name" >Desa/Kelurahan</label>
                        <select class="form-select dropdown" id="desa_kel" name="desa_kel" required>
                            <option >Pilih salah satu</option>
                            <!-- <option value="BANTAN" class="name b-regular" {{ old('desa_kel') == 'BANTAN' ? 'selected' : '' }}>BANTAN</option>
                            <option value="MEMBALONG" class="name b-regular" {{ old('desa_kel') == 'MEMBALONG' ? 'selected' : '' }}>MEMBALONG</option> -->
                        </select>
                        <!-- <label for="desa_kel" class="form-label b-medium name" >Desa/Kelurahan</label>
                        <input type="text" class="form-control @error('desa_kel') is-invalid @enderror" id="desa_kel" placeholder="Masukkan Nama Desa/Kelurahan" name="desa_kel" value="{{ old('desa_kel')}}" required> -->
                        @error('desa_kel')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <!-- RT, RW, Kode Pos -->
                <div class="input-col">
                    <div style="flex: 1 0 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                        <label for="rt" class="form-label b-medium name" >RT</label>
                        <input type="text" class="input-name form-control @error('rt') is-invalid @enderror" id="rt" placeholder="Masukkan Nomor RT" name="rt" value="{{ old('rt')}}" required>
                        @error('rt')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div style="flex: 1 0 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                        <label for="rw" class="form-label b-medium name" >RW</label>
                        <input type="text" class="input-name form-control @error('rw') is-invalid @enderror" id="rw" placeholder="Masukkan Nomor RW" name="rw" value="{{ old('rw')}}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-staw; align-items: center; display: inline-flex" required>
                        @error('rw')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div style="flex: 1 0 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                        <label for="kode_pos" class="form-label b-medium name" >Kode Pos</label>
                        <input type="text" class="input-name form-control @error('kode_pos') is-invalid @enderror" id="kode_pos" placeholder="Masukkan Kode Pos" name="kode_pos" value="{{ old('kode_pos')}}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-staw; align-items: center; display: inline-flex" required>
                        @error('kode_pos')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <!-- Warna Negara & Asal Negara -->
                <div class="input-col">
                    <div class="input-col-row">
                        <label for="kewarganegaraan" class="form-label b-medium name" >Kewarganegaraan</label>
                        <select class="form-select dropdown" id="kewarganegaraan" name="kewarganegaraan" required>
                            <option >Pilih salah satu</option>
                            <option value="WNI" class="name b-regular" {{ old('kewarganegaraan') == 'WNI' ? 'selected' : '' }}>WNI</option>
                            <option value="WNA" class="name b-regular" {{ old('kewarganegaraan') == 'WNA' ? 'selected' : '' }}>WNA</option>
                        </select>
                        @error('kewarganegaraan')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="input-col-row">
                        <label for="asal_negara" class="form-label b-medium name" >Asal Negara</label>
                        <input type="text" class="input-name form-control @error('asal_negara') is-invalid @enderror" id="asal_negara" placeholder="Masukkan Asal Negara Anggota" name="asal_negara" value="{{ old('asal_negara')}}" required>
                        @error('asal_negara')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <!-- Unggah foto KTP -->
                <div class="input-field">
                    <label for="scan_ktp" class="form-label b-medium name" >Unggah Scan KTP</label>
                    <div style="align-self: stretch; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                        <input class="form-control @error('scan_ktp') is-invalid @enderror p-3 pr-5" type="file" name="scan_ktp" id="scan_ktp" style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex; border-radius: 5px; border: 1px #DADDE5 solid;">
                        <div style="padding-right: 110px; justify-content: flex-start; align-items: center; display: inline-flex">
                            <div style="text-align: justify; color: #757575; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Format: JPG, JPEG, PNG | Maks: 1MB</div>
                        </div>
                    </div>
                    @error('scan_ktp')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
            </div>
            <div class="button-set">
                <button type="submit" class="btn button-fill button-set-fill">
                    <div class="b-bold name" style="color: white;">Tambah</div>
                </button>
            </div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            jQuery(document).ready(function() {
                jQuery('#nama').keyup(function() 
                {
                    var str = jQuery('#nama').val();
                
                    
                    var spart = str.split(" ");
                    for ( var i = 0; i < spart.length; i++ )
                    {
                        var j = spart[i].charAt(0).toUpperCase();
                        spart[i] = j + spart[i].substr(1);
                    }
                jQuery('#nama').val(spart.join(" "));
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery('#pekerjaan').keyup(function() 
                {
                    var str = jQuery('#pekerjaan').val();
                
                    
                    var spart = str.split(" ");
                    for ( var i = 0; i < spart.length; i++ )
                    {
                        var j = spart[i].charAt(0).toUpperCase();
                        spart[i] = j + spart[i].substr(1);
                    }
                jQuery('#pekerjaan').val(spart.join(" "));
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery('#desa_kel').keyup(function() 
                {
                    var str = jQuery('#desa_kel').val();
                
                    
                    var spart = str.split(" ");
                    for ( var i = 0; i < spart.length; i++ )
                    {
                        var j = spart[i].charAt(0).toUpperCase();
                        spart[i] = j + spart[i].substr(1);
                    }
                jQuery('#desa_kel').val(spart.join(" "));
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery('#tempat_lahir').keyup(function() 
                {
                    var str = jQuery('#tempat_lahir').val();
                
                    
                    var spart = str.split(" ");
                    for ( var i = 0; i < spart.length; i++ )
                    {
                        var j = spart[i].charAt(0).toUpperCase();
                        spart[i] = j + spart[i].substr(1);
                    }
                jQuery('#tempat_lahir').val(spart.join(" "));
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery('#alamat').keyup(function() 
                {
                    var str = jQuery('#alamat').val();
                
                    
                    var spart = str.split(" ");
                    for ( var i = 0; i < spart.length; i++ )
                    {
                        var j = spart[i].charAt(0).toUpperCase();
                        spart[i] = j + spart[i].substr(1);
                    }
                jQuery('#alamat').val(spart.join(" "));
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery('#asal_negara').keyup(function() 
                {
                    var str = jQuery('#asal_negara').val();
                
                    
                    var spart = str.split(" ");
                    for ( var i = 0; i < spart.length; i++ )
                    {
                        var j = spart[i].charAt(0).toUpperCase();
                        spart[i] = j + spart[i].substr(1);
                    }
                jQuery('#asal_negara').val(spart.join(" "));
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery('#provinsi').change(function(event){
                    var idProv = this.value;
                    jQuery('#kota_kab').html('');
                    jQuery.ajax({
                        url: "/api/fetch-regencies",
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
                        url: "/api/fetch-districts",
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
            });
        </script>
    </div>
</div>
