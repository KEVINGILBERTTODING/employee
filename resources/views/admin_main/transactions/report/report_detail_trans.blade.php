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
            <h3>Laporan Permohonan Barang</h3>
            <h3>Kejaksaan Tinggi Jawa Tengah</h3>
            <p style="font-style: italic">{{ $address }}</p>
            <hr>
        </div>
    </div>

    <table>
        <tr>
            <td>Nama</td>
            <td>: </td>
            <td>{{ $dataTransaction['name'] }}</td>
        </tr>
        <tr>
            <td>NRP</td>
            <td>: </td>
            <td>{{ $dataTransaction['npp'] }}</td>
        </tr>

        <tr>
            <td>Bidang</td>
            <td>: </td>
            <td>{{ $dataTransaction['nama_bidang'] }}</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>: </td>
            <td>{{ $dataTransaction['created_at'] }}</td>
        </tr>
    </table>

    <br>

    <table class="table">

        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>QTY</th>
            <th>Satuan</th>
            <th>Status</th>
        </tr>

        <?php
		$no = 1;
		foreach ($dataPermintaan as $p) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td>
                @if ($p->nama_barang != null)
                    {{ $p->nama_barang }}
                @else
                    Barang telah dihapus.
                @endif
            </td>
            <td>
                @if ($p->qty != null)
                    {{ $p->qty }}
                @else
                    -
                @endif
            </td>
            <td>
                @if ($p->satuan != null)
                    {{ $p->satuan }}
                @else
                    -
                @endif
            </td>
            <td>
                <?php if ($dataTransaction['status'] == 1) {
                    echo 'Valid';
                } elseif ($dataTransaction['status'] == 2) {
                    echo 'Proses';
                } else {
                    echo 'Tidak valid';
                }
                
                ?>
            </td>
        </tr>
        <?php endforeach; ?>



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
