<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Bukti TF</title>
</head>

<body>
    <h1>Bukti Pembayaran</h1>
    @if ($data)
        <img src="{{ $data }}" alt="Bukti TF" style="max-width: 100%; height: auto;">
    @else
        <p>Gambar tidak ditemukan.</p>
    @endif
</body>

</html>
