@include('component.navbar')

@section('content')
<main>
    <div style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <a href="/nulldata" class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex" role="button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Button-Icons">
                        <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                    </g>
                </svg>
                <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kembali ke Halaman Detail Anggota</div>
            </a>
            <div style="justify-content: center; align-items: center; display: inline-flex">
                <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Edit BPJS</div>
            </div>
        </div>
        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex; border: 1px #DADDE5 solid;">
            <form method="POST" action="/update-data/bpjs/{{ $bpjs->nik_bpjs }}" style="align-self: stretch; padding: 40px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
                @method('PUT')
                @csrf
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex; gap: 24px;">
                    <!-- Nama Disabled / Autofill -->
                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                        <label for="nama" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama</label>
                        <input readonly type="text" class="form-control @error('nama') is-invalid @enderror disable-bg" id="nama" placeholder="Masukkan Nama Anggota" name="nama" value="{{ $nama[0]->nama }}" style="align-self: stretch; padding: 16px; background: #F3F4F6; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                    </div>

                    <!-- Faskes -->
                    <div class="input-field">
                        <label for="faskes_bpjs" class="form-label b-medium name">Jenis Faskes BPJS</label>
                        <select class="form-select dropdown" id="faskes_bpjs" name="faskes_bpjs" required>
                            <option >Pilih salah satu</option>
                            <option value="FASKES 1" class="b-regular name" {{ $faskes == 'FASKES 1' ? 'selected' : '' }}> FASKES 1 </option>
                            <option value="FASKES 2" class="b-regular name" {{ $faskes == 'FASKES 2' ? 'selected' : '' }}> FASKES 2 </option>
                            <option value="FASKES 3" class="b-regular name" {{ $faskes == 'FASKES 3' ? 'selected' : '' }}> FASKES 3 </option>
                        </select>
                        @error('faskes_bpjs')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>

                    <!-- Kelas -->
                    <div class="input-field">
                        <label for="kelas_bpjs" class="form-label b-medium name">Jenis Kelas BPJS</label>
                        <select class="form-select dropdown" id="kelas_bpjs" name="kelas_bpjs" required>
                            <option >Pilih salah satu</option>
                            <option value="KELAS 1" class="b-regular name" {{ $classtype == 'KELAS 1' ? 'selected' : '' }}> KELAS 1 </option>
                            <option value="KELAS 2" class="b-regular name" {{ $classtype == 'KELAS 2' ? 'selected' : '' }}> KELAS 2 </option>
                            <option value="KELAS 3" class="b-regular name" {{ $classtype == 'KELAS 3' ? 'selected' : '' }}> KELAS 3 </option>
                        </select>
                        @error('kelas_bpjs')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>

                    <!-- Jenis Kartu -->
                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                        <label for="jenis_bpjs" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu BPJS</label>
                        <select class="form-select p-3 align-self-stretch" id="jenis_bpjs" name="jenis_bpjs" style="border-radius: 5px; border: 1px #DADDE5 solid;" required>
                            <option >Pilih salah satu</option>
                            <option value="PBI APBD" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $cardtype == 'PBI APBD' ? 'selected' : '' }}> PBI APBD </option>
                            <option value="PBI APBN" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $cardtype == 'PBI APBN' ? 'selected' : '' }}> PBI APBN </option>
                            <option value="PEGAWAI SWASTA" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $cardtype == 'PEGAWAI SWASTA' ? 'selected' : '' }}>PEGAWAI SWASTA</option>
                            <option value="MANDIRI" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word" {{ $cardtype == 'MANDIRI' ? 'selected' : '' }}>MANDIRI</option>
                        </select>
                        @error('jenis_bpjs')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <!-- Nomor Kartu -->
                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                        <label for="no_bpjs" class="form-label" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor BPJS</label>
                        <input type="text" class="form-control @error('no_bpjs') is-invalid @enderror" id="no_bpjs" placeholder="Masukkan Nomor BPJS Anggota" name="no_bpjs" value="{{ $bpjs->no_bpjs }}" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" required>
                        @error('no_bpjs')
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
        </div>
    </div>
</main>