<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
        <!-- css -->
        <link rel="stylesheet" href="/css/styles.css">
        <title>Klinik Raycare - Detail Anggota</title>

        <style>
             /*button kembali  */
             a.button-underline { text-decoration: none; }
             a.button-underline:hover { text-decoration: underline; text-decoration-color: #394E91; }

             /* button edit */
             a.button-line:hover { background: rgba(57, 78, 145, 0.15); }

            a.button-fill { background: #394E91; color: white; }
            a.button-fill:hover { background: #293A79; color: white;}
        </style>
    </head>
    <body>
    @include('component.navbar')
        <main>
            <div style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
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
                        <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Detail Anggota</div>
                    </div>
                </div>

                <!-- DETAIL ANGGOTA -->
                <div style="align-self: stretch; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
                    <div style="align-self: stretch; padding: 24px; background: #394E91; border-radius: 5px; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="text-align: justify; color: white; font-size: 32px; font-family: Inter; font-weight: 500; line-height: 44.80px; word-wrap: break-word">{{ $ktp->nama }}</div>
                            <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                <div style="text-align: justify; color: #C4CBE0; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Nomor Telepon:</div>
                                <div style="text-align: justify; color: white; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">{{ $other[0]->no_hp }}</div>
                            </div>
                        </div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                        <!-- @foreach($lc as $card)     -->
                        <div style="text-align: justify; color: white; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">{{ $lc[0]->sumber_data }}</div>
                            <!-- @endforeach -->
                            <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                <div style="text-align: justify; color: #C4CBE0; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Koordinasi Wilayah:</div>
                                <div style="text-align: justify; color: white; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">{{ $lc[0]->nama_koor }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- KTP -->
                    <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                        <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                            <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Tanda Penduduk (KTP)</div>
                            <a class="btn button-line" href="{{$ktp->nik}}/edit/ktp" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Edit Data</div>
                            </a>
                        </div>
                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                            <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">NIK</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $ktp->nik }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tempat Tanggal Lahir</div>
                                    </div>
                                    <div style="flex: 1 1 0; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $ktp->tempat_lahir }}, {{ $ktp->tanggal_lahir }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kelamin</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $ktp->jenis_kelamin }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Agama</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $ktp->agama }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Pekerjaan</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $ktp->pekerjaan }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Status Nikah</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $ktp->status_perkawinan }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Warga Negara</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $ktp->kewarganegaraan }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Asal Negara</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $ktp->asal_negara }}</div>
                                </div>
                            </div>
                            <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Provinsi</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $prov[0]->name }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Kota/Kabupaten</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $rgc[0]->name }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Kecamatan</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $dist[0]->name }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Desa/Kelurahan</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $ktp->desa_kel }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">RT / RW</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $ktp->rt }} / {{ $ktp->rw }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat</div>
                                    </div>
                                    <div style="flex: 1 1 0; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $ktp->alamat }}</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran KTP</div>
                                    </div>
                                    <a class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; display: flex" href="#" role="button">
                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">File KTP.pdf</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KK -->
                    <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                        <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                            <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Keluarga</div>
                            @if ($listkk->count() == 0)
                            <a class="btn button-fill" href="{{$kk[0]->id}}/edit/kk" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Data</div>
                            </a>
                            @else
                            <a class="btn button-line" href="{{$kk[0]->id}}/edit/kk" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Edit Data</div>
                            </a>
                            @endif
                        </div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Kartu Keluarga</div>
                                </div>
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $kk[0]->kk }}</div>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Dokumen KK</div>
                                </div>
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $kk[0]->dokumen_kk }}</div>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Anggota</div>
                                </div>
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $kk[0]->nama }}</div>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Status</div>
                                </div>
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $kk[0]->status }}</div>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran KK</div>
                                </div>
                                <a class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; display: flex" href="#" role="button">
                                    <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">File KK.pdf</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- LC -->
                    <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                        <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                            <div style="align-self: stretch; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Loyalty Card (LC)</div>
                            <div style="justify-content: flex-start; align-items: center; gap: 4px; display: flex">
                                @if ($changelc->count() == 0)
                                <a class="btn button-fill" href="{{$lc[0]->id}}/add/lc" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                    <div style="text-align: justify; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Data</div>
                                </a>  
                                @else    
                                <a class="btn button-line" href="{{$lc[0]->id}}/edit/lc" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                    <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Edit Data</div>
                                </a>
                                @endif
                                <!-- dropdown: freeze / tarik -->
                                <div>
                                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="ic:round-more-vert">
                                                <path id="Vector" d="M15.9997 10.6668C17.4663 10.6668 18.6663 9.46683 18.6663 8.00016C18.6663 6.5335 17.4663 5.3335 15.9997 5.3335C14.533 5.3335 13.333 6.5335 13.333 8.00016C13.333 9.46683 14.533 10.6668 15.9997 10.6668ZM15.9997 13.3335C14.533 13.3335 13.333 14.5335 13.333 16.0002C13.333 17.4668 14.533 18.6668 15.9997 18.6668C17.4663 18.6668 18.6663 17.4668 18.6663 16.0002C18.6663 14.5335 17.4663 13.3335 15.9997 13.3335ZM15.9997 21.3335C14.533 21.3335 13.333 22.5335 13.333 24.0002C13.333 25.4668 14.533 26.6668 15.9997 26.6668C17.4663 26.6668 18.6663 25.4668 18.6663 24.0002C18.6663 22.5335 17.4663 21.3335 15.9997 21.3335Z" fill="#1D1B20"/>
                                            </g>
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu mt-2">
                                        <li>
                                            <a class="dropdown-item" href="#freezeCard" data-bs-toggle="modal" data-bs-target="#freezeCard">
                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Kartu Freeze</div>
                                            </a>
                                            <!-- INI MASIH BELUM BISA MUNCUL UGH -->
                                            <div class="modal" id="freezeCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Penarikan Kartu</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                            <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Umum</div>
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Kartu</div>
                                        </div>
                                        <span style="color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $lc[0]->no_kartu }}</span>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                        </div>
                                        @if ($changelc->count() == 0)
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                        @else
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $changelc[0]->jenis_kartu }}</div>
                                        @endif
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Ditambahkan</div>
                                        </div>
                                        @if ($changelc->count() == 0)
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                        @else
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $changelc[0]->tanggal_upgrade }}</div>
                                        @endif
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran Form Loyalty Card</div>
                                        </div>
                                        <a class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; display: flex" href="#" role="button">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">File LC.pdf</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Status Kartu</div>
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Status</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Penarikan/Freeze</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alasan Penarikan/Freeze</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                            <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Ganti Kartu</div>
                                <a class="btn button-line" href="/ubah-kartu/{{$lc[0]->id}}" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                    <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ganti Kartu</div>
                                </a>  
                            </div>
                            <div style="align-self: stretch; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor Kartu</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                        <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Jenis Kartu</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                        <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Tanggal Diupgrade</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                        <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Alasan Diupgrade</div>
                                    </div>
                                </div>
                                @foreach ($changelc as $row)
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $row->no_kartu}}</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $row->jenis_kartu}}</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $row->tanggal_upgrade}}</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; background: linear-gradient(0deg,  0%,  100%), linear-gradient(0deg, white 0%, white 100%); flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $row->alasan_upgrade}}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                            <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Penggunaan Kartu</div>
                            </div>
                            <div style="align-self: stretch; height: 114px; padding-top: 40px; padding-bottom: 40px; background: #E8EAF2; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: center; align-items: center; display: flex">
                                <div style="opacity: 0.50; text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Belum mengikuti acara apapun</div>
                            </div>
                        </div>
                    </div>

                    <!-- BPJS -->
                    <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                        <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                            <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">BPJS</div>
                            @if ($bpjs[0]->no_bpjs == "")
                            <a class="btn button-fill" href="{{$bpjs[0]->id}}/edit/bpjs" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Data</div>
                            </a>  
                            @else
                            <a class="btn button-line" href="{{$bpjs[0]->id}}/edit/bpjs" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Edit Data</div>
                            </a>
                            @endif  
                        </div>
                        <div style="align-self: stretch; height: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor BPJS</div>
                                </div>
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $bpjs[0]->no_bpjs }}</div>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                </div>
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $bpjs[0]->jenis_bpjs }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- INFORMASI LAINNYA -->
                    <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                        <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                            <div style="flex: 1 1 0; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Informasi Lainnya</div>
                            @if ($other[0]->no_hp == "")
                            <a class="btn button-fill" href="{{$other[0]->id}}/edit/lainnya" role="button" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Data</div>
                            </a>
                            @else
                            <a class="btn button-line" href="{{$other[0]->id}}/edit/lainnya" role="button" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Edit Data</div>
                            </a>
                            @endif
                        </div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Penyandang Disabilitas</div>
                                </div>
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $other[0]->disabilitas }}</div>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor TPS</div>
                                </div>
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $other[0]->no_tps }}</div>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat TPS</div>
                                </div>
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $other[0]->alamat_tps }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DAFTAR KK -->
                <div style="width: 100%; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
                    <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="justify-content: center; align-items: center; display: flex">
                            <div style="text-align: justify; color: #1D1B20; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Daftar Keluarga</div>
                        </div>
                        @if ($listkk->count() == 0)
                        @else
                        <a class="btn button-fill" href="/tambah-anggota-kk/{{ $kk[0]->kk }}" role="button" style="padding: 12px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                            <div style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Anggota Keluarga</div>
                        </a>
                        @endif
                    </div>
                    <div style="align-self: stretch; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; display: inline-flex">
                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">NIK</div>
                            </div>
                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nama</div>
                            </div>
                                <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">KK</div>
                            </div>
                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">BPJS</div>
                            </div>
                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">LC</div>
                            </div>
                            <div style="flex: 1 1 0; align-self: stretch; padding-left: 16px; justify-content: flex-start; align-items: flex-start; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Aksi</div>
                            </div>
                        </div>
                        @if ($listdata->count() == 0)
                        <div class="text-center" style="align-self: stretch;">Data tidak ditemukan</div>
                        @else
                        @foreach ($listdata as $row)
                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                            <!-- NIK -->
                            <div style="padding-left: 0px; flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                <div style="align-self: stretch; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $row->nik }}</div>
                            </div>
                            
                            <!-- NAMA -->
                            <div style="padding-left: 0px; flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                <div style="align-self: stretch; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $row->nama }}</div>
                            </div>

                            <!-- KK -->
                            @if ($row->kk == "")
                            <a href="/{{ $row->id }}/tambah-kk" class="btn add-btn" style="padding-left: 0px; flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex" role="button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.334 13H13.334V18C13.334 18.55 12.884 19 12.334 19C11.784 19 11.334 18.55 11.334 18V13H6.33398C5.78398 13 5.33398 12.55 5.33398 12C5.33398 11.45 5.78398 11 6.33398 11H11.334V6C11.334 5.45 11.784 5 12.334 5C12.884 5 13.334 5.45 13.334 6V11H18.334C18.884 11 19.334 11.45 19.334 12C19.334 12.55 18.884 13 18.334 13Z" fill="#394E91"/>
                                </svg>
                                <div style="flex: 1 1 0; text-align: justify; color: #394E91; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">tambah data</div>
                            </a>
                            @else
                            <div style="padding-left: 0px; flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                <div style="align-self: stretch; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $row->kk }}</div>
                            </div>
                            @endif

                            <!-- BPJS -->
                            @if ($row->no_bpjs == "")
                            <a href="{{$bpjs[0]->id}}/edit/bpjs" class="btn add-btn" style="padding-left: 0px; flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex" role="button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.334 13H13.334V18C13.334 18.55 12.884 19 12.334 19C11.784 19 11.334 18.55 11.334 18V13H6.33398C5.78398 13 5.33398 12.55 5.33398 12C5.33398 11.45 5.78398 11 6.33398 11H11.334V6C11.334 5.45 11.784 5 12.334 5C12.884 5 13.334 5.45 13.334 6V11H18.334C18.884 11 19.334 11.45 19.334 12C19.334 12.55 18.884 13 18.334 13Z" fill="#394E91"/>
                                </svg>
                                <div style="flex: 1 1 0; text-align: justify; color: #394E91; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">tambah data</div>
                            </a>
                            @else
                            <div style="padding-left: 0px; flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                <div style="align-self: stretch; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $row->no_bpjs }}</div>
                            </div>
                            @endif

                            <!-- LC -->
                            @if ($row->no_kartu == "")
                            <a href="/{{ $row->id }}/tambah-lc" class="btn add-btn" style="padding-left: 0px; flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex" role="button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.334 13H13.334V18C13.334 18.55 12.884 19 12.334 19C11.784 19 11.334 18.55 11.334 18V13H6.33398C5.78398 13 5.33398 12.55 5.33398 12C5.33398 11.45 5.78398 11 6.33398 11H11.334V6C11.334 5.45 11.784 5 12.334 5C12.884 5 13.334 5.45 13.334 6V11H18.334C18.884 11 19.334 11.45 19.334 12C19.334 12.55 18.884 13 18.334 13Z" fill="#394E91"/>
                                </svg>
                                <div style="flex: 1 1 0; text-align: justify; color: #394E91; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">tambah data</div>
                            </a>
                            @else
                            <div style="padding-left: 0px; flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                <div style="align-self: stretch; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $row->no_kartu }}</div>
                            </div>
                            @endif
    
                            <!-- AKSI -->
                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                <a href="/detail-anggota/{{ $row->nik }}" role="button" class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Detail</div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>