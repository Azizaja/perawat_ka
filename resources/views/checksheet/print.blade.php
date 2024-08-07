<!DOCTYPE html>
<html>

<head>
    <title>Checksheet - {{ $detail->nama_kereta }} {{ $bulan }} {{ $tahun }}</title>
    <style>
        /* CSS untuk styling lembar list */
        body {
            font-family: Arial, sans-serif;
            font-size: 13px;
            margin-top: 0.4cm;
            margin-bottom: 0cm;
            margin-left: 0cm;
            margin-left: 0cm;

        }

        @page {
            margin-top: 0cm;
            margin-bottom: 0cm;
            margin-left: 0cm;
        }

        .section_so {
            margin-top: 0.2cm;
            margin-bottom: 0.3cm;
            margin-left: 2.5cm;
            /* margin-right: 1.5cm; */
        }

        .section_checksheet {
            margin-top: 0.5cm;
            margin-bottom: 0.5cm;
            margin-left: 0.5cm;
            margin-right: -0.7cm;
        }

        /* .section_foto {
            margin-top: 0.2cm;
            margin-bottom: 0.5cm;
            margin-left: 0.5cm;
            margin-right: -1.5cm;
        } */


        .text {
            text-transform: uppercase;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .kelas2 th,
        .kelas2 td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .kelas2 th {
            background-color: #f2f2f2;
            text-align: center;
        }

        td>.underline {
            display: inline-block;
            border-bottom: 2px solid black;
        }

        .header-table {
            margin-bottom: 20px;
        }

        .logo-container {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            margin-bottom: 5px;
            /* background-color: aquamarine */
        }

        .logo-container img {
            margin-bottom: 2px;
        }

        .icon {
            width: 28px;
        }

        .page-break {
            page-break-before: always;
        }

        header {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            height: 2cm;
        }

        h3 {
            text-align: center;
            margin-top: 0;
        }

        p {
            text-align: center;
            margin: 5px;
        }

        .container {
            margin-top: 1.8cm;
        }

        .photo img {
            width: 40%;
        }

        .photo {
            border: 1px solid black;
            padding: 8px;
            margin-top: 0.3cm;
            margin-left: 8rem;
            margin-right: 8rem;
            text-align: center;
        }

        .page_break {
            page-break-before: always;
        }

        .text {
            text-transform: uppercase;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .kelas th,
        .kelas td {
            /* border: 1px solid #ccc; */
            padding: 2px;
            text-align: left;
            font-size: 10px;
        }

        .kelas {
            border-collapse: separate;
            border-spacing: 0 0px;
        }

        .kelas th {
            /* background-color: #f2f2f2; */
            text-align: center;
        }

        .kelas td>.underline {
            display: inline-block;
            border-bottom: 2px solid black;
        }

        .header-table {
            /* margin-bottom: 20px; */
        }

        .logo-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 5px;
            /* background-color: aquamarine */
        }

        .logo-container img {
            margin-bottom: 2px;
        }

        .icon {
            width: 12px;
        }

        /* .page-break {
            page-break-before: always;
        } */

        header {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            height: 2cm;
        }

        h3 {
            text-align: center;
            margin-top: 0;
        }

        p {
            text-align: center;
            margin: 5px;
        }

        .container {
            margin-top: 1.8cm;
        }

        .photo img {
            width: 40%;
        }

        .photo {
            border: 1px solid black;
            padding: 8px;
            margin-top: 0.3cm;
            margin-left: 8rem;
            margin-right: 8rem;
            text-align: center;
        }

        /* @page {
            margin-top: 0.3cm;
            margin-bottom: 2.5cm;
        }

        @page :first {
            margin-top: 0.3cm;
            header: first-page-header;
        }

        @page :header {
            content: "DOKUMENTASI PERAWATAN HARIAN PERIODE SEPTEMBER 2023\n{{ $detail->nama_kereta }}";
            margin-top: 0.3cm;
        }

        @page :nth-child(n+4) {
            header: third-page-header;
            margin-top: 0.3cm;
        }

        @page :nth-child(2) {
            header: no-header;
        }

        @page fourth-page {
            margin-top: 5cm;
            content: "Header on the fourth page content";
        } */

        /* .header-on-fourth-page {
            position: unset;
            ;
            top: 0;
            left: 1cm;
            right: 1cm;
            height: 5cm;
        } */

        .bordered tr,
        .bordered td,
        .bordered th {
            border-bottom: 1px solid black;
        }

        .bordered td:first-child,
        .bordered td:nth-child(2),
        .bordered td:nth-child(3) {
            border-right: 1px solid black;
        }

        .tgl tr,
        .tgl td {
            border: none !important;
            font-size: 10px;
        }

        .section_checksheet h3 {
            margin-bottom: 0px !important
        }

        .section_foto h5 {
            font-size: 18px !important;
            font-weight: bold;
        }

        .section_foto h5 {
            margin: 0px;
        }

        p {
            text-align: center;
            margin: 5px;
        }

        img {
            /* width: 100%; */
        }

        .photos {
            border: 1px solid black;
            padding: 18px;
            /* margin-top: 0.7px;
            margin-left: 8rem;
            margin-right: 8rem; */
            text-align: center;
            width: 355px;
            alignt-self: center;
            margin: auto;
        }

        .date {
            font-size: 10px;
            margin-top: 5px;
        }

        .small {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div>
        <div class="section_so">

            <div class="logo-container">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/768px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png"
                    alt="Logo KAI" style="height: 40px;">
                <img src="https://imsservice.co.id/assets/inka-border.png" alt="Logo PT IMSS"
                    style="height: 40px; margin-left: 30em;">
            </div>

            <h3 class="text" style="margin-top: 20px;margin-bottom:20px">
                Laporan Availability<br /> KA {{ $detail->nama_kereta }} {{ $bulan }}
                {{ $tahun }}
            </h3>

            <table class="kelas2">
                <thead>
                    <tr>
                        <th style="text-align: center;" colspan="3">Availability</th>
                        <th style="text-align: center;" colspan="2">Prosentase</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border: 1px solid #ccc;text-align:center;background-color:#f2f2f2;font-weight:bold">
                            Bulan
                        </td>
                        <td style="border: 1px solid #ccc;text-align:center;"> SO</td>
                        <td style="border: 1px solid #ccc;text-align:center;"> TSO</td>
                        <td style="border: 1px solid #ccc;text-align:center;"> SO</td>
                        <td style="border: 1px solid #ccc;text-align:center;"> TSO</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #ccc;text-align:center;background-color:#f2f2f2;font-weight:bold">
                            {{ $bulan }}
                        </td>
                        <td style="border: 1px solid #ccc;text-align:center;"> {{ $availability['so'] }}</td>
                        <td style="border: 1px solid #ccc;text-align:center;"> {{ $availability['tso'] }}</td>
                        <td style="border: 1px solid #ccc;text-align:center;"> {{ $availability['so_p'] }}%</td>
                        <td style="border: 1px solid #ccc;text-align:center;"> {{ $availability['tso_p'] }}%</td>
                    </tr>
                </tbody>
            </table>

            <table style="margin-top: 2rem;margin-left:13rem">
                <tr style="text-align: center;">
                    <td></td>
                    <td></td>
                    {{-- <td>PM PERAWATAN KA</td> --}}
                    <td>Madiun, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td></td>
                    <td></td>
                    <td class="text">PT Inka Multi Solusi service</td>
                </tr>
                <tr>
                    <td style="height: 75px"></td>
                    <td style="height: 75px"></td>
                    <td style="height: 75px"></td>
                    <td style="height: 75px"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><span class="underline"></span></td>
                    <td><span class="underline"></span></td>
                    <td><span class="underline" style="font-weight: bold">HARI SUBEKTI</span></td>
                </tr>
                <tr>
                    <td style="vertical-align: top;text-align: center"></td>
                    <td style="vertical-align: top;text-align: center"></td>
                    <td style="vertical-align: top;text-align: center"> Kepala Divisi Wilayah 2</td>
                </tr>
            </table>

            <div class="page_break"></div>

            <div class="logo-container">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/768px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png"
                    alt="Logo KAI" style="height: 40px;">
                <img src="https://imsservice.co.id/assets/inka-border.png" alt="Logo PT IMSS"
                    style="height: 40px; margin-left: 30em;">
            </div>

            <h3 class="text" style="margin-top: 20px;margin-bottom:20px">
                Laporan Perawatan Harian dan Bulanan <br /> KA {{ $detail->nama_kereta }} {{ $bulan }}
                {{ $tahun }}
            </h3>

            <table class="kelas2">
                <thead>
                    <tr>
                        <th style="text-align: center;width:10%">No</th>
                        <th style="text-align: center;width:20%">Tanggal</th>
                        <th style="text-align: center;width:15%">Jenis Perawatan</th>
                        <th style="text-align: center;width:15%">Status Sarana</th>
                        <th style="text-align: center;">Keterangan</th>
                    </tr>
                </thead>
                @foreach ($detail->checksheet as $key => $item)
                    <tbody>
                        <tr>
                            <td style="border: 1px solid #ccc;text-align:center"> {{ $key + 1 }}
                            </td>
                            <td style="border: 1px solid #ccc;"> {{ $item->tanggal }}</td>
                            <td style="border: 1px solid #ccc;text-align:center">
                                {{ $item->tipe == '0' ? 'Harian' : $item->p }}
                            </td>
                            <td style="border: 1px solid #ccc;text-align:center">
                                @if (isset($item->is_so))
                                    {{ $item->is_so == '1' ? 'SO' : 'TSO' }}
                                @else
                                    -
                                @endif
                            </td>
                            <td style="border: 1px solid #ccc;text-align:center">
                                @if ($item->is_so == '0')
                                    Rencana perbaikan sarana pada hari
                                    {{ \Carbon\Carbon::parse($item->est_tso)->isoFormat('dddd, D MMMM Y') }}
                                @endif
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>

            <table style="margin-top: 2rem;margin-left:13rem">
                <tr style="text-align: center;">
                    <td></td>
                    <td></td>
                    {{-- <td>PM PERAWATAN KA</td> --}}
                    <td>Madiun, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td></td>
                    <td></td>
                    <td class="text">PT Inka Multi Solusi service</td>
                </tr>
                <tr>
                    <td style="height: 75px"></td>
                    <td style="height: 75px"></td>
                    <td style="height: 75px"></td>
                    <td style="height: 75px"></td>
                </tr>
                <tr style="text-align: center;">
                    <td><span class="underline"></span></td>
                    <td><span class="underline"></span></td>
                    <td><span class="underline" style="font-weight: bold">HARI SUBEKTI</span></td>
                </tr>
                <tr>
                    <td style="vertical-align: top;text-align: center"></td>
                    <td style="vertical-align: top;text-align: center"></td>
                    <td style="vertical-align: top;text-align: center"> Kepala Divisi Wilayah 2</td>
                </tr>
            </table>

            {{-- <div class="page_break"></div> --}}
        </div>

        <div class="section_checksheet">

            @foreach ($detail2 as $detail)
                <table>
                    <tr>

                        <td style="border: 1px solid black;">
                            <div class="header-table">
                                <table class="bordered">
                                    <tr>
                                        <td class="padding" style="width:8rem;text-align: center;"">
                                            <img src="https://imsservice.co.id/assets/inka-border.png"
                                                alt="Logo PT IMSS" style="height: 35px;">
                                        </td>
                                        <td class="padding" style="width:14rem;padding-left:25px;padding-right:25px">
                                            <h3 class="text" style="font-size: 13px">
                                                CHECKSHEET PERAWATAN {{ $detail->nama_kereta }}
                                            </h3>
                                        </td>
                                        <td class="padding" style="padding-left:10px;padding-right:10px;width:4rem;">
                                            <h3 class="text" style="font-size: 13px">
                                                {{ $detail->tipe == '0' ? 'HARIAN' : "BULANAN ($detail->p)" }}
                                            </h3>
                                        </td>
                                        <td style="padding:0px!important">
                                            <table class="tgl">
                                                <tr style="border-bottom: 1px solid black!important;padding-bottom:5px">
                                                    <td style="text-align: left;width: 7rem;height:18px">Tgl.
                                                        Pemeriksaan</td>
                                                    <td>:</td>
                                                    <td>{{ $detail->tanggal }} {{ $detail->jam }}</td>
                                                </tr>
                                                <tr style="border-bottom: 1px solid black!important;padding-bottom:5px">
                                                    <td style="text-align: left;width: 7rem;height:18px">No. Rangkaian
                                                        Kereta
                                                    </td>
                                                    <td>:</td>
                                                    <td>{{ $detail->no_kereta }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;width: 7rem;height:18px">Jam Engine
                                                    </td>
                                                    <td>:</td>
                                                    <td>{{ $detail->jam_engine }}</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <table class="kelas" style="margin-top:5px;padding-left:10px;padding-right:10px">
                                <thead>
                                    <tr>
                                        {{-- <th style="text-align: center;" rowspan="2">No</th> --}}
                                        <th style="text-align: center" rowspan="2" colspan="2">Item Perawatan
                                            dan
                                            Pengecekan</th>
                                        <th style="text-align: center;" rowspan="2">Standar</th>
                                        @foreach ($detail->cars as $car)
                                            <th style="text-align: center;padding-right:11px" colspan="3">
                                                {{ $car }}
                                            </th>
                                        @endforeach
                                        {{-- <th style="text-align: center;" rowspan="2"></th> --}}
                                    </tr>
                                    <tr>
                                        @foreach ($detail->cars as $car)
                                            <th style="text-align: center;width:10px">OK</th>
                                            <th style="text-align: center;width:10px">NG</th>
                                            <th style="width:2px"></th>
                                        @endforeach
                                    </tr>
                                </thead>
                                @foreach ($detail->categories as $key => $category)
                                    <tbody>
                                        <tr>
                                            <td style="font-weight:bold;"
                                                colspan="{{ count($detail->cars) * 2 + 3 }}">
                                                {{ $key + 1 }}. {{ $category->nama }}
                                            </td>
                                        </tr>
                                        @forelse ($category->lists as $key => $list)
                                            <tr>
                                                <td style="text-align: right;width:1.3rem;padding-right:5px">
                                                    {{ chr(96 + $loop->iteration) }}.</td>
                                                <td style="width:18rem">{{ $list->nama_item }}</td>
                                                <td>
                                                    @if ($list->standar == null)
                                                    @else
                                                        - {{ $list->standar }}
                                                    @endif
                                                </td>
                                                @if ($list->car_index == null)
                                                    <td colspan="3" class="text-center"></td>
                                                @else
                                                    @if ($list->is_empty_border)
                                                        @foreach ($detail->cars as $key => $car)
                                                            @if (in_array($key, json_decode($list->car_index)))
                                                                <td
                                                                    style="text-center;border: 1px solid black; border-right: none;">
                                                                </td>
                                                                <td style="text-center;border: 1px solid black;">
                                                                </td>
                                                                <td></td>
                                                            @else
                                                                <td colspan="3" class="text-center"></td>
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        @foreach ($detail->cars as $key => $car)
                                                            @if ($list->detail->where('car', $key)->first() == null)
                                                                <td colspan="3" class="text-center"></td>
                                                            @else
                                                                <td
                                                                    style="text-align: center;border: 1px solid black;border-right:none">
                                                                    @if ($list->detail->where('car', $key)->first()->hasil == '1')
                                                                        <img class="icon"
                                                                            src="templates/source/assets/images/check-symbol.png"
                                                                            alt="">
                                                                        {{-- <div style="background-color: black; height: 12px;">
                                                                </div> --}}
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;border: 1px solid black">
                                                                    @if ($list->detail->where('car', $key)->first()->hasil == '0')
                                                                        <img class="icon"
                                                                            src="templates/source/assets/images/check-symbol.png"
                                                                            alt="">
                                                                        {{-- <div style="background-color: black; height: 12px;">
                                                                </div> --}}
                                                                    @endif
                                                                </td>
                                                                <td></td>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endif

                                                {{-- <td>{{ $list->detail->first()->keterangan ?? '' }}</td>= --}}
                                            </tr>
                                            <tr>
                                                <td style="height:2px"></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="{{ count($detail->cars) * 2 + 3 }}"
                                                    style="text-align: center">
                                                    Tidak
                                                    ada
                                                    data
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                @endforeach
                            </table>
                            <table class="kelas" style="margin-top:5px">
                                <tr style="border-top: 1px solid black!important;">
                                    {{-- <td style="text-align: right;width:1.8rem;border-top: 1px solid black!important;">
                            </td> --}}
                                    <td style="border-top: 1px solid black!important;padding-left:13px">
                                        <h4 style="padding:0px;margin:0px;font-size:13px">Kesimpulan</h4>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- <td style="text-align: right;width:1.8rem">
                            </td> --}}
                                    <td style="padding-left: 13px">
                                        <h4 style="font-size:10px;font-weight:normal;padding:0px;margin:0px">-
                                            Berdasarkan
                                            hasil
                                            pemeriksaan,
                                            maka sarana tersebut
                                            diatas
                                            dinyatakan :
                                            @if (isset($detail->is_so))
                                                @if ($detail->is_so == 1)
                                                    SO
                                                @elseif($detail->is_so == 0)
                                                    TSO
                                                @endif
                                            @else
                                                SO/TSO
                                            @endif
                                        </h4>
                                    </td>
                                </tr>
                                @if (isset($detail->is_so))
                                    @if ($detail->is_so == '0')
                                        <tr>
                                            <td style="padding-left: 13px">
                                                <h4 style="font-size:10px;font-weight:normal;padding:0px;margin:0px">-
                                                    Estimasi Perbaikan Sarana :
                                                    {{ \Carbon\Carbon::parse($detail->est_tso)->isoFormat('dddd, D MMMM Y') }}
                                                </h4>
                                            </td>
                                        </tr>
                                    @endif
                                @endif
                            </table>
                            <table class="kelas" style="margin-top:5px">
                                <tr style="border-top: 1px solid black!important;">
                                    {{-- <td style="text-align: right;width:1.8rem;border-top: 1px solid black!important;">
                            </td> --}}
                                    <td style="border-top: 1px solid black!important;padding-left:13px">
                                        <h4 style="padding:0px;margin:0px;font-size:13px">Keterangan</h4>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- <td style="text-align: right;width:1.8rem">
                            </td> --}}
                                    <td style="padding-left: 13px">
                                        <h4 style="font-size:10px;font-weight:normal;padding:0px;margin:0px">-
                                            Pemeriksaan
                                            dilakukan
                                            saat
                                            engine hidup
                                        </h4>
                                    </td>
                                </tr>
                                @foreach ($detail->keterangans as $ket)
                                    <tr>
                                        {{-- <td style="text-align: right;width:1.8rem">
                </td> --}}
                                        <td style="padding-left: 13px">
                                            <h4 style="font-size:10px;font-weight:normal;padding:0px;margin:0px">
                                                {!! nl2br(e($ket)) !!}
                                            </h4>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <table class="kelas" style="margin-top:5px;margin-bottom:10px;">
                                <tr>
                                    <td style="height:10px;border-top: 1px solid black!important;padding-left:13px"">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left:13px">
                                        <table>
                                            <tr style="text-align: center;">
                                                <td style="text-align: center;">Mengetahui:</td>
                                                <td style="text-align: center;">SPV RUAS LUAR</td>
                                                {{-- <td>PM PERAWATAN KA</td> --}}
                                                <td style="text-align: center;">TEKNISI</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td style="text-align: center;">Assman. UPT Depo Lok Solo</td>
                                                <td style="text-align: center;">UPT Depo Lok Solo</td>
                                                {{-- <td>PT Inka Multi Solusi service</td> --}}
                                                <td style="text-align: center;">PT Inka Multi Solusi service</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td style="height: 75px;text-align: center;">
                                                    @if (isset($detail->assman))
                                                        @php $sign_assman = url("verify/".$detail->signature->assman->identity) @endphp
                                                        <img src="data:image/png;base64, {!! base64_encode(QrCode::size(70)->generate($sign_assman)) !!} ">
                                                    @else
                                                    @endif
                                                </td>
                                                <td style="height: 75px;text-align: center;">
                                                    @if (isset($detail->upt))
                                                        @php $sign_upt = url("verify/".$detail->signature->upt->identity) @endphp
                                                        <img src="data:image/png;base64, {!! base64_encode(QrCode::size(70)->generate($sign_upt)) !!} ">
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @php $sign_teknisi = url("verify/".$detail->signature->teknisi->identity) @endphp
                                                    <img src="data:image/png;base64, {!! base64_encode(QrCode::size(70)->generate($sign_teknisi)) !!} ">
                                                </td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td style="text-align: center;"><span class="underline">
                                                        @if (isset($detail->assman))
                                                            {{ $detail->assman->name }}
                                                        @else
                                                        @endif
                                                    </span></td>
                                                <td style="text-align: center;"><span class="underline">
                                                        @if (isset($detail->upt))
                                                            {{ $detail->upt->name }}
                                                        @else
                                                        @endif
                                                    </span></td>
                                                {{-- <td><span class="underline">____________</span> </td> --}}
                                                <td style="text-align: center;"><span
                                                        class="underline">{{ $detail->teknisi->name }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: top;text-align: center">NIP. @if (isset($detail->assman))
                                                        {{ $detail->assman->nip }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td style="vertical-align: top;text-align: center"> NIP. @if (isset($detail->upt))
                                                        {{ $detail->upt->nip }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td style="vertical-align: top;text-align: center"> NIP.
                                                    {{ $detail->teknisi->nip }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <div class="page_break"></div>
            @endforeach
        </div>

        <div class="section_foto">
            <div style="margin-right: -0.5cm">
                <table align="center" style="width: 100%;">
                    <thead>
                        <tr>
                            <th colspan="2" style="text-align: center;height:1.6cm">
                                <h5>DOKUMENTASI PERAWATAN HARIAN PERIODE {{ $bulan }} {{ $tahun }}</h5>
                                <h5>KERETA {{ strtoupper($detail->nama_kereta) }}</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($detail_harian as $item)
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <div class="photos">
                                        @php
                                            $filePath = public_path('foto/' . $item->foto);
                                            $gambar = file_get_contents($filePath);
                                            $gambar = base64_encode($gambar);
                                            $gambar = 'data:image/jpeg;base64,' . $gambar;
                                        @endphp
                                        <img src="{{ $gambar }}" alt="{{ $item->nama_item }}" width="340px"
                                            height="265px" style="object-fit: fill">
                                    </div>
                                    <p class="small">{{ $item->nama_item }}</p>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <p>Tidak ada foto</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                @if (count($detail_bulanan) > 0)

                    <div class="page_break"></div>
                    <table align="center" style="width: 100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center;height:1.6cm">
                                    <h5>DOKUMENTASI PERAWATAN {{ $detail_bulanan[0]->p }} PERIODE {{ $bulan }}
                                        {{ $tahun }}</h5>
                                    <h5>KERETA {{ strtoupper($detail->nama_kereta) }}</h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($detail_bulanan as $item)
                                <tr>
                                    <td colspan="2" style="text-align: center;">
                                        <div class="photos">
                                            @php
                                                $filePath = public_path('foto/' . $item->foto);
                                                $gambar = file_get_contents($filePath);
                                                $gambar = base64_encode($gambar);
                                                $gambar = 'data:image/jpeg;base64,' . $gambar;
                                            @endphp
                                            <img src="{{ $gambar }}" alt="{{ $item->nama_item }}"
                                                width="340px" height="265px" style="object-fit: fill">
                                        </div>
                                        <p class="small">{{ $item->nama_item }}</p>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" style="text-align: center;">
                                        <p>Tidak ada foto</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

    </div>

</body>

</html>
