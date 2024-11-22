<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVOICE</title>
    <style>
        /* Gaya umum untuk tampilan layar */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }

        h1, h2, h3 {
            color: #333;
        }

        .btn {
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        .signature-section {
            margin-top: 40px;
            border-top: 1px solid #000;
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .signature-section div {
            width: 45%;
            text-align: center;
        }

        .signature-section div.signature-line {
            border-top: 1px solid #000;
            margin-top: 50px;
        }

        /* Gaya khusus untuk media cetak */
        @media print {
            body {
                margin: 0;
                padding: 0;
                font-size: 12pt;
            }

            .container {
                width: 100%;
                margin: 0;
                padding: 0;
                box-shadow: none;
            }

            .btn {
                display: none; /* Sembunyikan tombol saat dicetak */
            }

            h1, h2, h3 {
                color: #000; /* Pastikan teks cetak berwarna hitam */
            }

            @page {
                margin: 20mm;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Invoice</h1>
        <p>Nama Pemesan: {{ $print->nama_pemesan }} </p>
        <p>Tanggal: <span id="live-date"></span></p>

        <h2>Detail Pemesanan</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Alamat</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>No Kamar</th>
                    <th>Admin</th>
                    <th>Total Pembayaran</th>
                    
                </tr>
            </thead>
            <td>{{ $print->nama_pemesan }}</td>
            <td>{{ $print->alamat }}</td>
            <td>{{ date('d-m-Y', strtotime($print->tglmasuk)) }}</td>
            <td>{{ date('d-m-Y', strtotime($print->tglkeluar)) }}</td>
            <td>{{ $print->no_kamar }}</td>
                <td>{{ $print->admin }}</td>
            <td>Rp {{ number_format($print->total_pembayaran, 0, ',', '.') }}</td>
            <tfoot>
                    <td colspan="3"><strong>Total</strong></td>
                    <td colspan="4" style="text-align: center;"><strong>Rp {{ number_format($print->total_pembayaran, 0, ',', '.') }}</strong></td>
                </tr>
            </tfoot>
        </table>
        
        <div class="signature-section">
            <div>
                <p>Mengetahui,</p>
                <div class="signature-line"></div>
                <p>Admin</p>

            <script type="text/javascript">
            window.print();
                
            </script>
            </div>
            <div>
            </div>
        </div>
    </div>
    <script>
        function updateDateTime() {
            const now = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric'};
            const formattedDate = now.toLocaleDateString('id-ID', options);
            document.getElementById('live-date').innerHTML = formattedDate;
        }
    
        setInterval(updateDateTime, 1000);
            updateDateTime();
    </script>
</body>
</html>
