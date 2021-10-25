<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title><?= $title; ?></title>
    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }

        .table {
            width: 100%;
            border-spacing: 0;
        }

        .table tr th,
        .table tr td {
            border: 1px solid #000;
        }

        .text-center {
            text-align: center;
        }

        .text-sub-title {
            margin-bottom: 50px;
            ;
        }
    </style>
</head>

<body>

    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1.6; font-weight: bold;">
                    Dinas Komunikasi dan Informatika
                    <br>Kota Pekalongan
                </span>
            </td>
        </tr>
    </table>
    <hr class="line-title">

    <p class="text-sub-title" align="center">
        LAPORAN DATA BULANAN <br>
        <b><?php echo date('F Y') ?></b>
    </p>


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <p>Nama : <?php echo $user_pengguna['name']; ?></p>
                    <table id="datatable" class="table table-striped table-bordered dt-responsive dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0; width: 100%;" role="grid">
                        <thead>
                            <tr role="row">
                                <th width="1%" class="sorting_disabled" rowspan="1" colspan="1">No.</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1">Tanggal</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1">Jam</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1">Kegiatan</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1">Keterangan</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1;
                            foreach ($laporan as $bln) : ?>
                                <tr role="row">
                                    <td class="text-center dtr-control"><?php echo $i++ ?></td>
                                    <td class="text-center dtr-control"><?php echo $bln->tanggal_pengerjaan; ?></td>
                                    <td class="text-center dtr-control"><?php echo $bln->jam_mulai; ?> - <?php echo $bln->jam_selesai; ?></td>
                                    <td><?php echo $bln->kegiatan_harian; ?></td>
                                    <td><?php echo $bln->keterangan; ?></td>
                                    <td align="center">
                                        <span class="badge badge-success">Menunggu</span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <!-- <script type="text/javascript">
        window.print();
    </script> -->
</body>

</html>