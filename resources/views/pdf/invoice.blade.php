<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid black;
            padding: 8px;
        }

        .table-bordered th {
            background-color: #f2f2f2;
        }

        .text-right {
            text-align: right;
        }

        .header-utama-2 {
            font-size: 16pt !important;
        }

        .header-title {
            font-size: 12pt !important;
        }
    </style>
</head>

<body>
    <table width="100%" class="print">
        <tr>
            <td width="10%" align="center" vAlign="middle" style="border:none">
                <img src="assets/images/logo.png" width="150px">
            </td>
            <td align="center" width="80%" style="border:none"><br>
                <b class="header-utama-2"> X-CLUS MOTOCARE </b><br>
                <font class="header-title"> Jl. Soekarno - Hatta No.4, Labuh Baru Tim Kec. Payung Sekaki, Kota
                    Pekanbaru, Riau 28292<br>
                    <br>
                </font>
            </td>
            <td width="10%" align="center"style="border:none">
                &nbsp;&nbsp;
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Tipe Kendaraan</th>
                <th>Tipe Paket</th>
                <th>Nama Paket</th>
                <th>Harga Paket</th>
                <th>Katalog</th>
                <th>Harga Katalog</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukuTamus as $bukuTamu)
                <tr>
                    <td>{{ $bukuTamu->user->email }}</td>
                    <td>{{ $bukuTamu->alamat }}</td>
                    <td>{{ $bukuTamu->no_hp }}</td>
                    <td>{{ $bukuTamu->tipe_mobil }}</td>
                    <td>{{ $bukuTamu->tipe_motor }}</td>
                    <td>{{ $bukuTamu->kategori->nama }}</td>
                    <td>{{ number_format($bukuTamu->kategori->harga, 0) }}</td>
                    <td>{{ $bukuTamu->katalogs->nama }}</td>
                    <td>{{ number_format($bukuTamu->katalogs->harga, 0) }}</td>
                    <td>{{ $bukuTamu->tanggal }}</td>
                    <td>{{ $bukuTamu->status }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="6" class="text-right">Total</td>
                <td>{{ number_format($totalHargaPaket, 0) }}</td>
                <td>&nbsp;</td>
                <td>{{ number_format($totalHargaKatalog, 0) }}</td>
                <td colspan="4"></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
