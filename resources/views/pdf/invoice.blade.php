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
    </style>
</head>

<body>
    <h1>Invoice</h1>
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
                    <td>Rp. {{ number_format($bukuTamu->kategori->harga, 0) }}</td>
                    <td>{{ $bukuTamu->katalogs->nama }}</td>
                    <td>Rp. {{ number_format($bukuTamu->katalogs->harga, 0) }}</td>
                    <td>{{ $bukuTamu->tanggal }}</td>
                    <td>{{ $bukuTamu->status }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="6" class="text-right">Total</td>
                <td>Rp. {{ number_format($totalHargaPaket, 0) }}</td>
                <td>&nbsp;</td>
                <td>Rp. {{ number_format($totalHargaKatalog, 0) }}</td>
                <td colspan="4"></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
