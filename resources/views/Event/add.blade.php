@include('component.navbar')

@section('content')
<main>
<div style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
    <!-- HEADER -->
    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
        <a href="/acara" class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex" role="button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Button-Icons">
                    <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                </g>
            </svg>
            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kembali ke Halaman Daftar Acara</div>
        </a>
        <div style="justify-content: center; align-items: center; display: inline-flex">
            <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Tambah Acara</div>
        </div>
    </div>

    <!-- FORM -->
    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex; border: 1px #DADDE5 solid;">
        <div style="align-self: stretch; padding-top: 40px; padding-bottom: 24px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
            <form method="POST" action="/save-acara" style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                <!-- @method('PUT') -->
                @csrf
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: flex">
                    <!-- FORM ACARA -->
                    <div style="align-self: stretch; padding-right: 40px; padding-left: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                        <!-- Nama Acara -->
                        <div class="input-field">
                            <label for="nama_acara" class="form-label b-medium name">Nama Acara</label>
                            <input type="text" class="input-name form-control @error('nama_acara') is-invalid @enderror" id="nama_acara" placeholder="Masukkan Nama Acara" name="nama_acara" value="{{ old('nama_acara') }}" required>
                            @error('nama_acara')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
        
                        <!-- Tanggal Acara -->
                        <div class="input-field">
                            <label for="tgl_acara" class="form-label b-medium name">Tanggal Acara</label>
                            <input type="date" class="input-name form-control @error('tgl_acara') is-invalid @enderror" id="tgl_acara" placeholder="Masukkan Tanggal Acara Anggota" name="tgl_acara" value="{{ old('tgl_acara') }}" required>
                            @error('tgl_acara')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <!-- Lokasi Acara -->
                        <div class="input-field">
                            <label for="lokasi_acara" class="form-label b-medium name">Lokasi Acara</label>
                            <input type="textarea" class="input-name form-control @error('lokasi_acara') is-invalid @enderror" id="lokasi_acara" placeholder="Masukkan Lokasi Acara" name="lokasi_acara" value="{{ old('lokasi_acara') }}" required>
                            @error('lokasi_acara')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div style="align-self: stretch; padding-right: 40px; padding-left: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                        <!-- Daftar Anggota -->
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                            <label class="h5 form-label" style="text-align: justify; color: #1D1B20; word-wrap: break-word">Daftar Anggota</label>
                            <div class="label" style="text-align: justify; color: #9E9E9E; word-wrap: break-word;">Tambahkan anggota yang mengikuti acara ini</div>
                        </div>

                        <!-- Daftar Anggota yang telah ditambahkan -->
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
                            </div>
        
                            <!-- FOREACH HERE -->
                            <div class="table-body">
                                <!-- Nama Anggota -->
                                <div class="table-body-cell">
                                    <div class="body-name b-regular"></div>
                                </div>

                                <!-- Jenis Kartu -->
                                <div class="table-body-cell">
                                    <div class="body-name b-regular"></div>
                                </div>

                                <!-- Nomor Kartu -->
                                <div class="table-body-cell">
                                    <div class="body-name b-regular"></div>
                                </div>
                            </div>
                            <!-- ENDFOREACH HERE -->
                        </div>

                        <!-- Untuk Tambah Anggota -->
                        <input type="text" class="form-control b-regular input-search" value="{{ request('search') }}" name="search" id="search" placeholder="Cari Nomor LC">
                        <div class="table">
                            <div class="table-head">
                                <div class="table-header-cell-checkbox">
                                    <div class="h5 header-name">
                                        <input disabled class="form-check-input me-1" type="checkbox">
                                    </div>
                                </div>
                                <div class="table-header-cell">
                                    <div class="h5 header-name">Nama</div>
                                </div>
                                <div class="table-header-cell">
                                    <div class="h5 header-name">Jenis Kartu</div>
                                </div>
                                <div class="table-header-cell">
                                    <div class="h5 header-name">Nomor Kartu</div>
                                </div>
                            </div>
        
                            @foreach ($ktps as $data)
                            <div class="table-body">
                                <!-- checkbox -->
                                <div >
                                    <div class="h5 header-name">
                                        <input class="form-check-input me2" type="checkbox" value="{{ $data->no_kartu }}" name="daftar_anggota[]">
                                    </div>
                                </div>

                                <!-- Nama Anggota -->
                                <div class="table-body-cell">
                                    <div class="body-name b-regular">{{ $data->nama }}</div>
                                </div>

                                <!-- Jenis Kartu -->
                                <div class="table-body-cell">
                                    <div class="body-name b-regular">{{ $data->jenis_kartu }}</div>
                                </div>

                                <!-- Nomor Kartu -->
                                <div class="table-body-cell">
                                    <div class="body-name b-regular">{{ $data->no_kartu }}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Pemisah : Line -->
                    <div style="align-self: stretch; height: 0px; border: 1px #DADDE5 solid"></div>
                </div>
                <!-- Button Section -->
                <div class="button-section mt-4">
                    <button type="submit" class="btn button-fill button-set-fill">
                        <div class="b-bold name" style="color: white;">Tambah</div>
                    </button>
                </div>
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            jQuery(document).ready(function() {
                jQuery('#nama_acara').keyup(function() 
                {
                    var str = jQuery('#nama_acara').val();
                
                    
                    var spart = str.split(" ");
                    for ( var i = 0; i < spart.length; i++ )
                    {
                        var j = spart[i].charAt(0).toUpperCase();
                        spart[i] = j + spart[i].substr(1);
                    }
                jQuery('#nama_acara').val(spart.join(" "));
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery('#lokasi_acara').keyup(function() 
                {
                    var str = jQuery('#lokasi_acara').val();
                
                    
                    var spart = str.split(" ");
                    for ( var i = 0; i < spart.length; i++ )
                    {
                        var j = spart[i].charAt(0).toUpperCase();
                        spart[i] = j + spart[i].substr(1);
                    }
                jQuery('#lokasi_acara').val(spart.join(" "));
                });
            });
        </script>
        <script type="text/javascript">
            $('body').on('keyup','#search', function(){
                var searchQuest = $(this).val();

                $.ajax({
                    method: 'POST',
                    url: '{{ route("search") }}',
                    dataType: 'json',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        searchQuest: searchQuest,
                    },
                    success: function(res){
                        var tableRow = '';
                        var addRow = '';
                        
                        $('#resultsearch').html('');

                        $.each( res, function(create, value){
                            tableRow = '<div class="table-body"><div class="table-body-cell-checkbox"><input class="form-check-input me-1" type="checkbox" value="'+value.no_kartu+'" id="'+value.no_kartu+'"></div><div class="table-body-cell"><div class="body-name b-regular">'+value.nama+'</div></div><div class="table-body-cell"><div class="body-name b-regular">'+value.jenis_kartu+'</div></div><div class="table-body-cell"><div class="body-name b-regular">'+value.no_kartu+'</div></div></div>'

                        $('#resultsearch').append(tableRow);
                        
                        if($('#cbs'+value.no_kartu+'').val() == $('#'+value.no_kartu+'').val())
                        $('#'+value.no_kartu+'').prop('checked',true)
                        else
                        $('#'+value.no_kartu+'').prop('checked',false)
                        $(function(){
                            $('#'+value.no_kartu+'').click(function() {
                                if($(this).is(':checked')){
                                    addRow = '<div class="table-body" id="cb'+value.no_kartu+'"><div class="table-body-cell-checkbox"><input onclick="return false;" class="form-check-input me-1" type="checkbox" value="'+value.no_kartu+'" name="daftar_anggota[]" id="cbs'+value.no_kartu+'" checked></div><div class="table-body-cell"><div class="body-name b-regular">'+value.nama+'</div></div><div class="table-body-cell"><div class="body-name b-regular">'+value.jenis_kartu+'</div></div><div class="table-body-cell"><div class="body-name b-regular">'+value.no_kartu+'</div></div></div>'
                                    $('#checkboxresult').append(addRow);
                                }else{
                                    $('#cb'+value.no_kartu+'').remove();
                                }
                            });
                            });
                        });
                    }
                });
            });

        </script>
    </div>
</main>