<!DOCTYPE html>
<html>

<head>
    <title>Laporan</title>
    <style type="text/css">
        .container {
            display: flex;
            align-items: center;
        }

        .container img {
            max-width: 10%;
            height: auto;
        }

        .header {
            flex-grow: 1;
            text-align: center;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table td,
        .table th {
            border: 1px solid #000000;
            padding: 8px;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: left;
            font-style: italic;
            font-size: 10px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ $main_logo }}" alt="Main Logo">
            <h3>Laporan Barang Masuk</h3>
            <h3>Kejaksaan Tinggi Jawa Tengah</h3>
            <p style="font-style: italic">{{ $address }}</p>
            <hr>
        </div>
    </div>

    <table>
        <tr>
            <td>Periode</td>
            <td>: </td>
            <td>{{ $dateFrom }} s/d {{ $dateEnd }}</td>
        </tr>

    </table>

    <br>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Masuk</th>
                <th>Nama Supplier</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Keterangan</th>
                <th>Harga Satuan</th>
                <th>Total</th>
            </tr>

        </thead>

        <tbody>

            <?php
            $no = 1;
            foreach ($dataBarang as $db) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td>
                    @if ($db->created_at != null)
                        <?= $db->created_at ?>
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if ($db->nama != null)
                        <?= $db->nama ?>
                    @else
                        Supplier telah di hapus.
                    @endif
                </td>

                <td>
                    @if ($db->nama_barang != null)
                        <?= $db->nama_barang ?>
                    @else
                        Barang tidak ada.
                    @endif
                </td>


                <td>
                    @if ($db->stok_awal != null)
                        <?= $db->stok_awal ?>
                    @else
                        -
                    @endif
                </td>


                <td>
                    @if ($db->satuan != null)
                        <?= $db->satuan ?>
                    @else
                        -
                    @endif
                </td>

                <td>
                    @if ($db->keterangan != null)
                        <?= $db->keterangan ?>
                    @else
                        -
                    @endif
                </td>


                <td>
                    @if ($db->harga_satuan != null)
                        {{ formatRupiah($db->harga_satuan) }}
                    @else
                        -
                    @endif
                </td>

                <td>
                    @if ($db->harga_satuan != null && $db->stok_awal != null)
                        {{ formatRupiah($db->harga_satuan * $db->stok_awal) }}
                    @else
                        -
                    @endif
                </td>




            </tr>
            <?php endforeach; ?>



        </tbody>

        <tfoot>
            <tr>
                <td colspan="8" style="text-align: center; font-weight: bold;">Total</td>
                @php
                    $totalHarga = 0;
                    foreach ($dataBarang as $dbb) {
                        $totalHarga += $dbb->harga_satuan * $dbb->stok_awal;
                    }
                @endphp
                <td><b>{{ formatRupiah($totalHarga) }}</b></td>
            </tr>

        </tfoot>





    </table>
    <br><br><br><br>

    <table>
        <table width="0">

            <tr>
                <td width="0"><br><br></td>
                <td>

                    @if (session('role') == 'admin_daskrimti')
                        Admin Daskrimti,
                    @elseif (session('role') == 'admin_umum')
                        Admin Umum,
                    @endif
                    <br>
                    Kejaksaan Tinggi Jawa Tengah
                    <br>

                    <br><br><br><br><br>
                    {{ $dataAdmin['name'] }}

                </td>

            </tr>

            <tr>

            </tr>
            <div class="footer">
                Dicetak pada tanggal {{ now()->format('Y-m-d H:i:s') }}
            </div>

        </table>
</body>

</html>
