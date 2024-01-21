<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
        <!-- css -->
        <link rel="stylesheet" href="/css/styles.css">
        <title>Klinik Raycare - Edit KTP</title>

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
            <div style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                    <a href="/detail-anggota/{{$ktp->nik}}" class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex" role="button">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Button-Icons">
                                <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                            </g>
                        </svg>
                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kembali ke Halaman Detail Anggota</div>
                    </a>
                    <div style="justify-content: center; align-items: center; display: inline-flex">
                        <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Edit KTP</div>
                    </div>
                </div>
                <!-- FORM -->
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex; border: 1px #DADDE5 solid;">
                    <form method="POST" action="/update-anggota/{{$ktp->nik}}" style="align-self: stretch; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex; gap: 32px;">
                        @method('PUT')
                        @csrf
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex; gap: 24px;">
                            <!-- NIK -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="nik" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">NIK</label>
                                <input disabled type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukkan NIK Anggota" name="nik" value="{{ $ktp->nik }}" style="align-self: stretch; padding: 16px; background: #F3F4F6; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                @error('nik')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <!-- <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama</div>
                                <input type="text" id="nama-pengguna" placeholder="John Doe" style="color: #1D1B20; align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex"> -->
                                <label for="nama" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Anggota" name="nama" value="{{ $ktp->nama }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                @error('nama')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- Jenis kelamin pengguna -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="jenis_kelamin" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kelamin</label>
                                <select class="form-select p-3 align-self-stretch" name="jenis_kelamin" style="border-radius: 5px; border: 1px #DADDE5 solid;" required>
                                    <option>Pilih salah satu</option>
                                    <option value="Laki-laki" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $gender == 'Laki-laki' ? 'selected' : '' }}> 
                                        Laki-laki
                                    </option>
                                    <option value="Perempuan" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $gender == 'Perempuan' ? 'selected' : '' }}>
                                       Perempuan
                                    </option>
                                </select>
                                @error('jenis_kelamin')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- Agama -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="agama" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Agama</label>
                                <select class="form-select p-3 align-self-stretch" value="{{ $ktp->agama }}" id="agama" name="agama" style="border-radius: 5px; border: 1px #DADDE5 solid;" required>
                                    <option >Pilih salah satu</option>
                                    <option value="Islam" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Katolik" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                    <option value="Hindu" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Budha" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                    <option value="Kong Hu Chu" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $agama == 'Kong Hu Chu' ? 'selected' : '' }}>Kong Hu Chu</option>
                                </select>
                                @error('agama')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- Pekerjaan -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="pekerjaan" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Pekerjaan</label>
                                <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" placeholder="Masukkan Pekerjaan Anggota" name="pekerjaan" value="{{ $ktp->pekerjaan }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                @error('pekerjaan')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- Provinsi -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                                <label for="provinsi" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Provinsi</label>
                                <select class="form-select p-3 align-self-stretch" id="provinsi" name="provinsi" style="border-radius: 5px; border: 1px #DADDE5 solid; gap: 2px;" required>
                                    <option >Pilih salah satu</option>
                                    @foreach($ssprov as $data)
                                        <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="{{ $data->id }}" {{ $prov == $data->name ? 'selected' : '' }}>{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('provinsi')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- Kota/Kabupaten & Kecamatan -->
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                    <label for="kota_kab" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Kota/Kabupaten</label>
                                    <select class="form-select p-3 align-self-stretch" id="kota_kab" name="kota_kab" style="border-radius: 5px; border: 1px #DADDE5 solid; gap: 2px;" required>
                                        @foreach($sskotakab as $data)
                                            <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="{{ $data->id }}" {{ $kota_kab == $data->name ? 'selected' : '' }}>{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('kota_kab')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                    <label for="kecamatan" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Kecamatan</label>
                                    <select class="form-select p-3 align-self-stretch" id="kecamatan" name="kecamatan" style="border-radius: 5px; border: 1px #DADDE5 solid; gap: 2px;" required>
                                        @foreach($sskec as $data)
                                            <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="{{ $data->id }}" {{ $kec == $data->name ? 'selected' : '' }}>{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('kecamatan')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Desa/Kelurahan, RT, RW -->
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                    <label for="desa_kel" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Desa/Kelurahan</label>
                                    <input type="text" class="form-control @error('desa_kel') is-invalid @enderror" id="desa_kel" placeholder="Masukkan Nama Desa/Keluarahan" name="desa_kel" value="{{ $ktp->desa_kel }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                    @error('desa_kel')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div style="flex: 1 0 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                    <label for="rt" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">RT</label>
                                    <input type="text" class="form-control @error('rt') is-invalid @enderror" id="rt" placeholder="Masukkan Nomor RT" name="rt" value="{{ $ktp->rt }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                    @error('rt')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div style="flex: 1 0 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                    <label for="rw" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">RW</label>
                                    <input type="text" class="form-control @error('rw') is-invalid @enderror" id="rw" placeholder="Masukkan Nomor RW" name="rw" value="{{ $ktp->rw }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-staw; align-items: center; display: inline-flex" required>
                                    @error('rw')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="alamat" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat Lengkap</label>
                                <div style="align-self: stretch; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                    <input type="textarea" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat Lengkap Anggota" name="alamat" value="{{ $ktp->alamat }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                    <div style="padding-right: 110px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Isi secara lengkap mulai dari nama jalan/desa hingga kode pos</div>
                                    </div>
                                </div>
                                @error('alamat')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- Tempat dan tinggal lahir pengguna -->
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="flex: 1 0 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <!-- <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tempat Lahir</div>
                                    <input type="text" id="tempat-lahir" placeholder="Masukkan Tempat Lahir Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex"> -->
                                    <label for="tempat_lahir" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tempat Lahir</label>
                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="Masukkan Tempat Lahir Anggota" name="tempat_lahir" value="{{ $ktp->tempat_lahir }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                    @error('tempat_lahir')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <!-- <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Lahir</div>
                                    <input type="date" id="tanggal-lahir" placeholder="Masukkan Tanggal Lahir Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex"> -->
                                    <label for="tanggal_lahir" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Lahir</label>
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Anggota" name="tanggal_lahir" value="{{ $ktp->tanggal_lahir }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                    @error('tanggal_lahir')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Status Nikah -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="status_perkawinan" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Status Pernikahan</label>
                                <select class="form-select p-3 align-self-stretch" id="status_perkawinan" name="status_perkawinan" style="border-radius: 5px; border: 1px #DADDE5 solid;" required>
                                    <option >Pilih salah satu</option>
                                    <option value="Kawin" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $marriage == 'Kawin' ? 'selected' : '' }}> Kawin </option>
                                    <option value="Belum Kawin" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $marriage == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                                </select>
                                @error('status_perkawinan')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- Warna Negara & Asal Negara -->
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <label for="kewarganegaraan" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Kewarganegaraan</label>
                                    <select class="form-select p-3 align-self-stretch" value="{{ $ktp->kewarganegaraan }}" id="kewarganegaraan" name="kewarganegaraan" style="border-radius: 5px; border: 1px #DADDE5 solid;" required>
                                        <option >Pilih salah satu</option>
                                        <option value="WNI" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $citizen == 'WNI' ? 'selected' : '' }}>WNI</option>
                                        <option value="WNA" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $citizen == 'WNA' ? 'selected' : '' }}>WNA</option>
                                    </select>
                                    @error('kewarganegaraan')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <label for="asal_negara" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tempat Lahir</label>
                                    <input type="text" class="form-control @error('asal_negara') is-invalid @enderror" id="asal_negara" placeholder="Masukkan Tempat Lahir Anggota" name="asal_negara" value="{{ $ktp->asal_negara }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                    @error('asal_negara')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Unggah foto KTP -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <!-- <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Unggah Foto KTP</div> -->
                                <label class="form-label" for="scan_ktp" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Unggah Scan KTP</label>
                                <div style="align-self: stretch; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                    <input class="form-control @error('scan_ktp') is-invalid @enderror p-3 pr-5" type="file" name="scan_ktp" id="scan_ktp" value="{{ $ktp->scan_ktp }}" style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex; border-radius: 5px; border: 1px #DADDE5 solid;">
                                    <div style="padding-right: 110px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Format: JPG atau PDF</div>
                                    </div>
                                </div>
                                @error('scan_ktp')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-end; display: flex">
                            <button type="submit" class="btn btn-primary mb-3" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; color: white;  font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Simpan</div>
                            </button>
                            <!-- <a class="btn button-fill" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex" href="#" role="button">
                                <div style="text-align: justify; color: white;  font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Simpan</div>
                            </a> -->
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
                                        jQuery('#kota_kab').html('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option>');
                                        jQuery.each(response.regencies, function(create, val){
                                            jQuery('#kota_kab').append('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="'+val.id+'"> '+val.name+' </option>')
                                        });
                                        jQuery('#kecamatan').html('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option>');
                                    }
                                })
                            });

                            jQuery('#kota_kab').change(function(event){
                                var idDist = this.value;
                                jQuery('#kecamatan').html('');

                                jQuery.ajax({
                                    url: "/api/fetch-districts",
                                    type: 'POST',
                                    dataType: 'json',
                                    data: {regency_id: idDist,_token:"{{ csrf_token() }}"},
                                    success:function(response){
                                        jQuery('#kecamatan').html('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="">Pilih salah satu</option>');
                                        jQuery.each(response.districts, function(create, val){
                                            jQuery('#kecamatan').append('<option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" value="'+val.id+'"> '+val.name+' </option>')
                                        });
                                    }
                                })
                            });
                        });
                    </script>
                </div>
            </div>
        </main>
    </body>
</html>