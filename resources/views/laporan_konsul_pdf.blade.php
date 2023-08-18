<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Konseling Individu</title>
</head>

<?php
$tgl_lahir = date_create(Auth::user()->tgl_lahir);
?>

<body>
    <div style="text-transform: capitalize; text-align: center;">
        <h2 style="margin: 0px;">Laporan Konseling Individu</h2>
        <h3 style="margin: 0px;">Kecenderungan {{$hasilAkhir->konsul->kecenderungan}}</h3>
    </div>
    <div style="text-transform: capitalize;">
        <h4>A. Identitas Konseli</h4>
        <table>
            <tr>
                <td>Nama</td>
                <td>: {{ Auth::user()->nama }}</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>: {{ $umur }} Tahun</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>: {{ Auth::user()->tempat_lahir }}, {{ date_format($tgl_lahir, 'd F Y') }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: {{Auth::user()->jk }}</td>
            </tr>
        </table>
        {{-- <ul>
            <li>Nama : {{ Auth::user()->nama }}</li>
            <li>Umur : {{ $umur }} Tahun</li>
            <li>Tempat, Tanggal Lahir : {{ Auth::user()->tempat_lahir }}, {{ date_format($tgl_lahir, 'd F Y') }}</li>
            <li>Jenis Kelamin : {{Auth::user()->jk }}</li>
        </ul> --}}
    </div>
    <div style="text-transform: capitalize;">
        <h4>B. Gambaran Kondisi Psikologis</h4>
        <p>{!! nl2br($hasilAkhir->kondisi_psikologis) !!}</p>
        <h4>C. Diagnosis</h4>
        <p>{!! nl2br($hasilAkhir->diagnosis) !!}</p>
        <h4>D. PPDGJ</h4>
        <p>{!! nl2br($hasilAkhir->ppdgj) !!}</p>
    </div>
</body>

</html>
