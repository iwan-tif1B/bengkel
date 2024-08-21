<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <style>
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        /* More styling as per your design */
    </style>
</head>

<body>
    <div class="invoice-box">
        <h2>Invoice #{{ $purchase->id ?? '-' }}</h2>
        <p>Nama: {{ $purchase->nama ?? '-' }}</p>
        <p>Pilihan Paket: {{ $purchase->paket_salon_mobil ?? '-' }}</p>
        <p>Tanggal Pembelian: {{ $purchase->tanggal ?? '-' }}</p>
        <p>Status: {{ $purchase->status ?? '-' }}</p>
        <!-- Add more fields as needed -->
    </div>
</body>

</html>