<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
        <!-- css -->
        <!-- <link rel="stylesheet" href="/css/styles.css"> -->
        <link rel="stylesheet" href="{{ asset('/styles.css') }}">

        <title>Klinik Raycare - Tambah Loyalty Card</title>

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
                    @if(Route::current()->getName() == 'add-lc')
                    <a href="/detail-anggota/{{$lc->nik_lc}}" class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex" role="button">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Button-Icons">
                                <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                            </g>
                        </svg>
                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kembali ke Halaman Detail Anggota</div>
                    </a>
                    @else
                    <a href="/" class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex" role="button">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Button-Icons">
                                <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                            </g>
                        </svg>
                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kembali ke Halaman Detail Anggota</div>
                    </a>
                    @endif
                    <div style="justify-content: center; align-items: center; display: inline-flex">
                        <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Edit Loyalty Card</div>
                    </div>
                </div>
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex; border: 1px #DADDE5 solid;">
                    <form method="POST" 
                            @if(Route::current()->getName() == 'add-lc')
                            action="/update-anggota-lc/{{$lc->nik_lc}}" 
                            @else
                            action="/update-lc/{{$lc->nik_lc}}" 
                            @endif
                            style="align-self: stretch; padding: 40px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
                        @method('PUT')
                        @csrf
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <!-- Nama Anggota -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="nama" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama</label>
                                <input readonly type="text" class="form-control @error('nama') is-invalid @enderror disable-bg" id="nama" placeholder="Masukkan Nama Anggota" name="nama" value="{{ $nama[0]->nama }}" style="align-self: stretch; padding: 16px; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                @error('nama')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- Nama & No HP Koor -->
                            <div class="input-col">
                                <div class="input-col-row">
                                    <label for="nama_koor" class="form-label b-medium name" >Nama Koordinator</label>
                                    <input type="text" class="input-name form-control @error('nama_koor') is-invalid @enderror" id="nama_koor" placeholder="Masukkan Nama Koordinator" name="nama_koor" value="{{ old('nama_koor') }}" required>
                                    @error('nama_koor')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="input-col-row">
                                    <label for="telp_koor" class="form-label b-medium name" >Nomor Telepon Koordinator</label>
                                    <input type="text" class="input-name form-control @error('telp_koor') is-invalid @enderror" id="telp_koor" placeholder="Masukkan Nomor Telepon Koordinator" name="telp_koor" value="{{ old('telp_koor') }}" required>
                                    @error('telp_koor')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Sumber Data -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="sumber_data" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Sumber Data</label>
                                <select class="form-select p-3 align-self-stretch" name="sumber_data" style="border-radius: 5px; border: 1px #DADDE5 solid;" required>
                                    <option>Pilih salah satu</option>
                                    <option value="Gaple" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ old('sumber_data') == 'Gaple' ? 'selected' : '' }}>
                                       Gaple
                                    </option>
                                    <option value="Bazar" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ old('sumber_data') == 'Bazar' ? 'selected' : '' }}>
                                       Bazar
                                    </option>
                                    <option value="Rekomendasi" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ old('sumber_data') == 'Rekomendasi' ? 'selected' : '' }}>
                                       Rekomendasi
                                    </option>
                                </select>
                                @error('sumber_data')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- Jenis LC -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="jenis_kartu" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</label>
                                <select class="form-select p-3 align-self-stretch" id="jenis_kartu" name="jenis_kartu" style="border-radius: 5px; border: 1px #DADDE5 solid;" required>
                                    <option >Pilih salah satu</option>
                                    <option value="L" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ old('jenis_kartu') == 'L' ? 'selected' : '' }}>L</option>
                                    <option value="R" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ old('jenis_kartu') == 'R' ? 'selected' : '' }}>R</option>
                                    <option value="LR" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ old('jenis_kartu') == 'LR' ? 'selected' : '' }}>LR</option>
                                    <option value="LN" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ old('jenis_kartu') == 'LN' ? 'selected' : '' }}>LN</option>
                                    <option value="PADI" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ old('jenis_kartu') == 'PADI' ? 'selected' : '' }}>PADI</option>
                                </select>
                                @error('jenis_kartu')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- Nomor Kartu -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="no_kartu" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Kartu</label>
                                <input type="text" class="form-control @error('no_kartu') is-invalid @enderror" id="no_kartu" placeholder="Masukkan Nama Koor" name="no_kartu" value="{{ old('no_kartu') }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                @error('no_kartu')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- Tanggal Pembuatan -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label for="tanggal_pembuatan" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Pembuatan</label>
                                <input type="date" class="form-control @error('tanggal_pembuatan') is-invalid @enderror" id="tanggal_pembuatan" placeholder="Masukkan Tanggal Pembuatan Kartu Lc" name="tanggal_pembuatan" value="{{ old('tanggal_pembuatan') }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                                @error('tanggal_pembuatan')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- Upload LC -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label class="form-label" for="scan_lc" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Unggah Scan LC</label>
                                <div style="align-self: stretch; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                    <input class="form-control @error('scan_lc') is-invalid @enderror p-3 pr-5" type="file" name="scan_lc" id="scan_lc" value="{{ old('scan_lc') }}" style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex; border-radius: 5px; border: 1px #DADDE5 solid;">
                                    <div style="padding-right: 110px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Format: JPG atau PDF</div>
                                    </div>
                                </div>
                                @error('scan_lc')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <div style="align-self: stretch; justify-content: flex-end; align-items: flex-start; gap: 8px; display: inline-flex">
                            <button type="submit" class="btn btn-primary mb-3" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; color: white;  font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Simpan</div>
                            </button>
                        </div>
                    </form>
                    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script>
                        jQuery(document).ready(function() {
	                        jQuery('#nama_koor').keyup(function() 
                            {
                                var str = jQuery('#nama_koor').val();
                            
                                
                                var spart = str.split(" ");
                                for ( var i = 0; i < spart.length; i++ )
                                {
                                    var j = spart[i].charAt(0).toUpperCase();
                                    spart[i] = j + spart[i].substr(1);
                                }
                            jQuery('#nama_koor').val(spart.join(" "));
                            });
                        });
                    </script> -->
                </div>
            </div>
        </main>
    </body>
</html>