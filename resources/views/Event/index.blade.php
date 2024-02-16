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
        <div style="align-self: stretch; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
            <div style="align-self: stretch; padding: 40px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Daftar Acara</div>
                    <a class="btn button-fill" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex" href="/tambah-acara" role="button">
                        <div style="text-align: justify; color: white;  font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Acara</div>
                    </a>
                </div>
                <div class="card-event">
                    @foreach ($events as $data)
                    <a href="/detail-acara/{{ $data->id_acara }}" role="button" class="card-event-list">
                        <div class="d-flex justify-content-between">
                            <div class="h5 card-event-title">{{ $data->nama_acara }}</div>
                            <div class="label" style="color: #1D1B20;">{{ $data->tgl_acara }}</div>
                        </div>
                        <div class="gap-2">
                            <div class="card-event-desc">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99967 1.66675C6.49967 1.66675 3.33301 4.35008 3.33301 8.50008C3.33301 11.1501 5.37467 14.2667 9.44967 17.8584C9.76634 18.1334 10.2413 18.1334 10.558 17.8584C14.6247 14.2667 16.6663 11.1501 16.6663 8.50008C16.6663 4.35008 13.4997 1.66675 9.99967 1.66675ZM9.99967 10.0001C9.08301 10.0001 8.33301 9.25008 8.33301 8.33342C8.33301 7.41675 9.08301 6.66675 9.99967 6.66675C10.9163 6.66675 11.6663 7.41675 11.6663 8.33342C11.6663 9.25008 10.9163 10.0001 9.99967 10.0001Z" fill="#757575"/>
                                </svg>
                                <div class="b-regular card-event-date">{{ $data->lokasi_acara }}</div>
                            </div>
                            <div class="card-event-desc">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.333 9.16675C14.7163 9.16675 15.8247 8.05008 15.8247 6.66675C15.8247 5.28341 14.7163 4.16675 13.333 4.16675C11.9497 4.16675 10.833 5.28341 10.833 6.66675C10.833 8.05008 11.9497 9.16675 13.333 9.16675ZM6.66634 9.16675C8.04967 9.16675 9.15801 8.05008 9.15801 6.66675C9.15801 5.28341 8.04967 4.16675 6.66634 4.16675C5.28301 4.16675 4.16634 5.28341 4.16634 6.66675C4.16634 8.05008 5.28301 9.16675 6.66634 9.16675ZM6.66634 10.8334C4.72467 10.8334 0.833008 11.8084 0.833008 13.7501V15.0001C0.833008 15.4584 1.20801 15.8334 1.66634 15.8334H11.6663C12.1247 15.8334 12.4997 15.4584 12.4997 15.0001V13.7501C12.4997 11.8084 8.60801 10.8334 6.66634 10.8334ZM13.333 10.8334C13.0913 10.8334 12.8163 10.8501 12.5247 10.8751C12.5413 10.8834 12.5497 10.9001 12.558 10.9084C13.508 11.6001 14.1663 12.5251 14.1663 13.7501V15.0001C14.1663 15.2917 14.108 15.5751 14.0163 15.8334H18.333C18.7913 15.8334 19.1663 15.4584 19.1663 15.0001V13.7501C19.1663 11.8084 15.2747 10.8334 13.333 10.8334Z" fill="#757575"/>
                                </svg>
                                <div class="b-regular card-event-loc">{{count(json_decode($data->daftar_anggota))}} Anggota</div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
                <!-- <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: grid">
                    <a class="btn card-event" href="/detail-acara/{{ $data->id_acara }}" style="align-self: stretch; padding: 16px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex" role="button">
                        <div style="align-self: stretch; text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">{{ $data->nama_acara }} | {{count(json_decode($data->daftar_anggota))}} Anggota</div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                            <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $data->tgl_acara }}</div>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $data->lokasi_acara }}</div>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>
            {{ $events->links() }}
        </div>
    </div>
</main>