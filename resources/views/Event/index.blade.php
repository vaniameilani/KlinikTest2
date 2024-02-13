@include('component.navbar')

@section('content')
<main>
    <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
        <div style="align-self: stretch; padding-top: 56px; padding-bottom: 56px; background: #394E91; justify-content: center; align-items: center; display: inline-flex">
            <div style="text-align: justify; color: white; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Acara</div>
        </div>
        @if (session('status'))
            <div style="align-self: stretch; margin-left: 176px; margin-right: 176px; margin-top: 40px;">
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="align-self: stretch;">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <div style="align-self: stretch; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div style="align-self: stretch; padding: 40px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Daftar Acara</div>
                    <a class="btn button-fill" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex" href="/tambah-acara" role="button">
                        <div style="text-align: justify; color: white;  font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Acara</div>
                    </a>
                </div>

                @foreach ($events as $data)
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                    <a class="btn card-event" href="/detail-acara/{{ $data->id_acara }}" style="align-self: stretch; padding: 16px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex" role="button">
                        <div style="align-self: stretch; text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">{{ $data->nama_acara }} | {{count(json_decode($data->daftar_anggota))}} Anggota</div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                            <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <!-- <div style="align-self: stretch; position: relative">
                                    <div style="align-self: stretch; left: 3.33px; top: 1.67px; position: absolute; background: #757575"></div>
                                </div> -->
                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $data->tgl_acara }}</div>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <!-- <div style="align-self: stretch; position: relative">
                                    <div style="align-self: stretch; left: 4.17px; top: 5px; position: absolute; opacity: 0.30; background: #757575"></div>
                                    <div style="align-self: stretch; left: 2.50px; top: 1.67px; position: absolute; background: #757575"></div>
                                </div> -->
                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $data->lokasi_acara }}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            {{ $events->links() }}
            
        </div>
    </div>
</main>