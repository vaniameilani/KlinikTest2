@include('component.navbar')

@section('content')
<main>
<div style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
    <!-- HEADER -->
    <div class="container-fluid" style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
        <a href="/acara" class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex" role="button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Button-Icons">
                    <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                </g>
            </svg>
            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kembali ke Halaman Daftar Acara</div>
        </a>
        <div style="justify-content: center; align-items: center; display: inline-flex">
            <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Detail Acara</div>
        </div>
    </div>

    @if (session('status'))
        <div style="align-self: stretch;">
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="align-self: stretch;">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <!-- FORM -->
    <div class="container-fluid" style="background: white; border-radius: 10px; border: 1px #DADDE5 solid; padding-top: 32px; padding-bottom: 40px;">
        <div class="d-flex justify-content-between align-items-center align-self-center" style="padding-left: 40px; padding-right: 40px;">
            <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">{{ $event->nama_acara }}</div>
            <a class="btn button-fill" href="{{ $event->id_acara }}/edit" style="padding: 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                <div style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Edit Data</div>
            </a>
        </div>
        <div class="my-4" style="align-self: stretch; height: 0px; border: 1px #DADDE5 solid"></div>
        <div class="row" style="padding-left: 40px; padding-right: 40px;">
            <div class="col-3">
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                    <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi lainnya</div>
                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex; gap: 8px;">
                            <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Acara</div>
                            </div>
                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $event->tgl_acara }}</div>
                        </div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex; gap: 8px;">
                            <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lokasi Acara</div>
                            </div>
                            <div style="text-align: start; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $event->lokasi_acara }}</div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                    <div class="d-flex justify-content-between align-items-center align-self-stretch">
                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Daftar Anggota</div>
                        <form method="POST" action="/detail-acara/{{$event->id_acara}}/absen" style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                            @method('PUT')
                            @csrf
                            <button type="submit" class="btn button-fill button-set-fill">
                                <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Simpan Status Kehadiran</div>
                            </button>
                        </div>

                    <div class="table">
                        <div class="table-head">
                            <div class="table-header-cell">
                                <div class="h5 header-name">Nama</div>
                            </div>
                            <div class="table-header-cell">
                                <div class="h5 header-name">Jenis Kartu</div>
                            </div>
                            <div class="table-header-cell">
                                <div class="h5 header-name">Nomor Kartu</div>
                            </div>
                            <div class="table-header-cell ps-2">
                                <div class="h5 header-name">Aksi</div>
                            </div>
                            <div class="table-header-cell">
                                <div class="h5 header-name">Status</div>
                            </div>
                        </div>

                        @foreach ($datas as $data)
                        
                        <div class="table-body">
                             <!-- Nama Anggota -->
                             <div class="table-body-cell">
                                @if ($data[0]->nama == 0)
                                    <div>-</div>
                                @else
                                    <div class="body-name b-regular">{{ $data[0]->nama }}</div>
                                @endif
                            </div>

                            <!-- Jenis Kartu -->
                            <div class="table-body-cell">
                                @if ($data[0]->jenis_kartu == 0)
                                    <div>-</div>
                                @else
                                    <div class="body-name b-regular">{{ $data[0]->jenis_kartu }}</div>
                                @endif
                            </div>

                            <!-- Nomor Kartu -->
                            <div class="table-body-cell">
                                @if ($data[0]->no_kartu == 0)
                                    <div>-</div>
                                @else
                                    <div class="body-name b-regular">{{ $data[0]->no_kartu }}</div>
                                @endif
                            </div>

                            <!-- Aksi Button -->
                            <div class="d-flex align-items-center px-2 pe-2" style="flex: 1 0 0;">
                                <div class="d-flex flex-column">
                                    <div class="d-flex flex-row gap-2">
                                    @if ($status == null)
                                        <input class="form-check-input" type="radio" name="radio{{ $data[0]->no_kartu }}" id="Radio1" value="Hadir">
                                        <label class="form-check-label" for="Radio1"> Hadir </label>
                                    </div>
                                    <div class="d-flex flex-row gap-2">
                                        <input class="form-check-input" type="radio" name="radio{{ $data[0]->no_kartu }}" id="Radio2" value="Tidak Hadir">
                                        <label class="form-check-label" for="Radio2"> Tidak Hadir </label>
                                    @else
                                        <input class="form-check-input" type="radio" name="radio{{ $data[0]->no_kartu }}" {{ ($status[$data[0]->no_kartu]=="Hadir")? "checked" : "" }} id="Radio1" value="Hadir">
                                        <label class="form-check-label" for="Radio1"> Hadir </label>
                                    </div>
                                    <div class="d-flex flex-row gap-2">
                                        <input class="form-check-input" type="radio" name="radio{{ $data[0]->no_kartu }}" {{ ($status[$data[0]->no_kartu]=="Tidak Hadir")? "checked" : "" }} id="Radio2" value="Tidak Hadir">
                                        <label class="form-check-label" for="Radio2"> Tidak Hadir </label>
                                    @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="table-body-cell">
                                <div class="body-name b-regular">
                                    @if ($status == null)
                                    -
                                    @elseif($status[$data[0]->no_kartu] == null)
                                    Kehadiran belum direkap
                                    @else
                                    {{$status[$data[0]->no_kartu]}}
                                    @endif
                                </div>
                            </div>
                        
                        
                        </div>
                        @endforeach
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</main>
