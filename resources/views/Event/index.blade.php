<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- css -->
        <title>Klinik Raycare - Acara</title>

        <style>
            /* button primary */
            a.button-fill {background: #394E91;}
            a.button-fill:hover {background: #293A79;}

            /* card */
            a.card-event:hover { background: #EEEFF4; }
        </style>
    </head>
    <body>
        @include('component.navbar')
        <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
            <div style="width:100%; padding-top: 56px; padding-bottom: 56px; background: #394E91; justify-content: center; align-items: center; display: inline-flex">
                <div style="text-align: justify; color: white; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Acara</div>
            </div>
            <div style="align-self: stretch; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                <div style="align-self: stretch; padding: 40px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
                    <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Daftar Acara</div>
                        <a class="btn button-fill" data-bs-toggle="modal" data-bs-target="#addUser" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex" href="#" role="button">
                            <div style="text-align: justify; color: white;  font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Acara</div>
                        </a>
                    </div>
                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                        <a class="btn card-event" style="align-self: stretch; padding: 16px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div style="align-self: stretch; text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Acara  Ulang Tahun Klink Raycare ke-22</div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                    <div style="width: 20px; position: relative">
                                        <div style="width: 13.33px; left: 3.33px; top: 1.67px; position: absolute; background: #757575"></div>
                                    </div>
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Gedung Serbaguna, Jalan Cakrawala no. 12, Jakarta Selatan</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                    <div style="width: 20px; position: relative">
                                        <div style="width: 11.67px; left: 4.17px; top: 5px; position: absolute; opacity: 0.30; background: #757575"></div>
                                        <div style="width: 15px; left: 2.50px; top: 1.67px; position: absolute; background: #757575"></div>
                                    </div>
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Gedung Serbaguna, Jalan Cakrawala no. 12, Jakarta Selatan</div>
                                </div>
                            </div>
                        </a>
                        <div style="align-self: stretch; padding: 16px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div style="align-self: stretch; text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Acara  Ulang Tahun Klink Raycare ke-22</div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                    <div style="width: 20px; position: relative">
                                        <div style="width: 13.33px; left: 3.33px; top: 1.67px; position: absolute; background: #757575"></div>
                                    </div>
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Gedung Serbaguna, Jalan Cakrawala no. 12, Jakarta Selatan</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                    <div style="width: 20px; position: relative">
                                        <div style="width: 11.67px; left: 4.17px; top: 5px; position: absolute; opacity: 0.30; background: #757575"></div>
                                        <div style="width: 15px; left: 2.50px; top: 1.67px; position: absolute; background: #757575"></div>
                                    </div>
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Gedung Serbaguna, Jalan Cakrawala no. 12, Jakarta Selatan</div>
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; padding: 16px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div style="align-self: stretch; text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Acara  Ulang Tahun Klink Raycare ke-22</div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                    <div style="width: 20px; position: relative">
                                        <div style="width: 13.33px; left: 3.33px; top: 1.67px; position: absolute; background: #757575"></div>
                                    </div>
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Gedung Serbaguna, Jalan Cakrawala no. 12, Jakarta Selatan</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                    <div style="width: 20px; position: relative">
                                        <div style="width: 11.67px; left: 4.17px; top: 5px; position: absolute; opacity: 0.30; background: #757575"></div>
                                        <div style="width: 15px; left: 2.50px; top: 1.67px; position: absolute; background: #757575"></div>
                                    </div>
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Gedung Serbaguna, Jalan Cakrawala no. 12, Jakarta Selatan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>