@extends('layouts.admin.main.t_main')

@section('title')
    @if (session('role') == 'admin_daskrimti')
        <title>Admin Daskrimti - Proses Permohonan</title>
    @elseif (session('role') == 'admin_umum')
        <title>Admin Umum - Proses Permohonan</title>
    @endif
@endsection

@section('sidebar')
    <div id="sidebar">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header position-relative">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        {{-- <a href="{{ route('adminDashboard') }}"><img src="{{ asset('data/app/img/' . $dataApp['logo']) }}"
                                alt="Logo" srcset=""></a> --}}
                        <h5>PIATK</h5>

                    </div>
                    <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                            role="img" class="iconify iconify--system-uicons" width="20" height="20"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                            <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                    opacity=".3"></path>
                                <g transform="translate(-210 -1)">
                                    <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                    <circle cx="220.5" cy="11.5" r="4"></circle>
                                    <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <div class="form-check form-switch fs-6">
                            <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                            <label class="form-check-label"></label>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                            </path>
                        </svg>
                    </div>
                    <div class="sidebar-toggler  x">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item ">
                        <a href="{{ route('adminDashboard') }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>


                    </li>

                    <li class="sidebar-title">Permohonan</li>


                    <li class="sidebar-item  has-sub active">
                        <a href="#" class='sidebar-link active'>
                            <i class="bi bi-handbag"></i>
                            <span>Permohonan Barang</span>
                        </a>


                        <ul class="submenu">
                            <li class="submenu-item  ">
                                <a href="{{ route('indexSemuaPermintaanAdmin') }}" class="submenu-link">Seluruh
                                    Permohonan</a>

                            </li>
                            <li class="submenu-item active ">
                                <a href="{{ route('indexProsesPermintaanAdmin') }}" class="submenu-link">Permohonan
                                    Proses</a>
                            </li>

                            <li class="submenu-item  ">
                                <a href="{{ route('indexValidPermintaanAdmin') }}" class="submenu-link">Permohonan Valid</a>

                            </li>
                            <li class="submenu-item  ">
                                <a href="" class="submenu-link">Permohonan Tidak Valid</a>
                            </li>


                        </ul>


                    </li>


                    <li class="sidebar-title">Barang</li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-box"></i>
                            <span>Barang</span>
                        </a>


                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('admin/barang/barangMasuk') }}" class="submenu-link">Barang Masuk</a>

                            </li>


                            <li class="submenu-item ">
                                <a href="{{ route('admin/barang/barangKeluar') }}" class="submenu-link">Barang Keluar</a>
                            </li>



                        </ul>
                    </li>


                    <li class="sidebar-title">Supplier</li>
                    <li class="sidebar-item ">
                        <a href="{{ route('supplier') }}" class='sidebar-link'>
                            <i class="bi bi-boxes"></i>
                            <span>Data Supplier</span>
                        </a>
                    </li>

                    @if (session('role') == 'admin_daskrimti')
                        <li class="sidebar-title ">Pengguna</li>


                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-people"></i>
                                <span>Data Pengguna</span>
                            </a>


                            <ul class="submenu ">
                                <li class="submenu-item  ">
                                    <a href="{{ route('adminEmployee') }}" class="submenu-link">Pegawai</a>

                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('adminAdminUmum') }}" class="submenu-link">Admin Umum</a>
                                </li>



                            </ul>


                        </li>

                        <li class="sidebar-title">Bidang</li>
                        <li class="sidebar-item ">
                            <a href="{{ route('bidang') }}" class='sidebar-link'>
                                <i class="bi bi-diagram-3"></i>
                                <span>Data Bidang</span>
                            </a>
                        </li>
                    @endif




                    <li class="sidebar-title">Profil Saya</li>
                    <li class="sidebar-item ">
                        <a href="{{ route('adminProfile') }}" class='sidebar-link'>
                            <i class="bi bi-person"></i>
                            <span>Profil</span>
                        </a>
                    </li>




                </ul>
            </div>
        </div>
    </div>
@endsection

@section('navbar')
    <header>
        <nav class="navbar navbar-expand navbar-light navbar-top">
            <div class="container-fluid">
                <a href="#" class="burger-btn d-block">
                    <i class="bi bi-justify fs-3"></i>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-lg-0">

                        {{-- <li class="nav-item dropdown me-3" id="btnNotification">
                            <a class="nav-link active text-gray-600" href="#" data-bs-target="#modal_notification"
                                data-bs-toggle="modal" data-bs-display="static" aria-expanded="false">
                                <i class='bi bi-bell bi-sm bi-sub fs-4'>

                                    @if ($totalNotificationRead != 0)
                                        <span class="badge bg-danger rounded-pill text-sm" id="ic_notification">
                                            {{ $totalNotificationRead }}
                                        </span>
                                    @endif
                                </i>
                            </a>

                        </li> --}}


                    </ul>
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-menu d-flex">
                                <div class="user-name text-end me-3">
                                    <h6 class="mb-0 text-gray-600">{{ $dataAdmin['name'] }}</h6>
                                    <p class="mb-0 text-sm text-gray-600">
                                        @if (session('role') == 'admin_daskrimti')
                                            Admin Daskrimti
                                        @elseif (session('role') == 'admin_umum')
                                            Admin Umum
                                        @endif
                                    </p>
                                </div>
                                <div class="user-img d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('data/profile_photo/' . $dataAdmin['profile_photo']) }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                            style="min-width: 11rem;">

                            <li><a class="dropdown-item" href="{{ route('adminProfile') }}"><i
                                        class="icon-mid bi bi-person me-2"></i>Profil
                                    Saya</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            @if (session('role') == 'admin_daskrimti')
                                <li><a class="dropdown-item" href="{{ route('logOutAdminDaskrimti') }}"><i
                                            class="icon-mid bi bi-box-arrow-left me-2"></i> Keluar</a></li>
                            @elseif (session('role') == 'admin_umum')
                                <li><a class="dropdown-item" href="{{ route('logOutAdminUmum') }}"><i
                                            class="icon-mid bi bi-box-arrow-left me-2"></i> Keluar</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Permohonan Proses</h3>

            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Permohonan Proses</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Table Daftar Permohonan Proses
                </h5>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_filter"><i
                            class="fa fa-filter"></i> Filter
                    </button>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive w-100">
                    <table class="table" id="tablePermintaan">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal & Waktu</th>
                                <th>Nama Lengkap</th>
                                <th>NRP</th>
                                <th>Bidang</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                    </table>
                </div>


            </div>
        </div>

        <!--Modal filter transaksi -->
        <form action="{{ route('indexFilterTransactionsAdmin') }}" method="get">
            @csrf
            <div class="modal fade text-left modal-borderless" id="modal_filter" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Filter Transaksi</h5>
                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>

                        <div class="modal-body">

                            <div class="form-group">
                                <label for="basicInput">Tanggal Mulai</label>
                                <input type="date" class="form-control mt-2" name="date_from" required="basicInput">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Tanggal Akhir</label>
                                <input type="date" class="form-control mt-2" name="date_end" required="basicInput">
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Status</label>
                                <select name="status" class="form-control">
                                    <option value="3">Semua</option>
                                    <option value="1">Valid</option>
                                    <option value="2">Proses</option>
                                    <option value="0">Tidak valid</option>
                                </select>
                            </div>




                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Batal</span>
                            </button>
                            <button type="submit" class="btn btn-primary ms-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Filter</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </form>



    </section>
@endsection


@section('js')
    <script>
        $(document).on('click', '.btnDelete', function() {
            var id = $(this).data('id');
            console.log(id);
            Swal.fire({
                title: 'Konfirmasi Hapus Data',
                text: 'Apakah Anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                customClass: {
                    confirmButton: 'confirm-button-class',
                    cancelButton: 'cancel-button-class'
                }
            }).then((result) => {
                if (result.isConfirmed) {

                    window.location.href = '/deleteAdminUmum/' + id;

                }
            });
        });
    </script>

    <script>
        function view(kodeTransaksi) {

            window.location.href = '/adminGetDetailTransactions/' + kodeTransaksi;
        }

        function formatRupiah(value) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0, // Set minimumFractionDigits ke 0 untuk menghilangkan angka dibelakang koma
                maximumFractionDigits: 0 // Set maximumFractionDigits ke 0 juga, meskipun seharusnya sudah menjadi default 0
            }).format(value);
        }



        $(document).ready(function() {
            $('#tablePermintaan').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url('getPermintaanByStatusAdmin/2') }}',
                order: [
                    [1, 'desc']
                ],
                columns: [{
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    {
                        data: 'created_at',
                        render: function(data, type, row) {
                            // Set lokal Bahasa Indonesia
                            moment.locale('id');
                            // Format tanggal menggunakan moment.js
                            return moment(data).format('MMMM Do YYYY, H:mm:ss');
                        },
                    },
                    {
                        data: 'name',
                        render: function(data, type, row) {
                            // Assuming 'id' is a property in the 'row' object that you want to use in the link
                            var userId = row.user_id;

                            // Create a link with the user's name and link it to a specific route or action
                            var link = '<a href="/users/history/' + userId + '">' + data + '</a>';

                            return link;
                        }

                    },
                    {
                        data: 'npp'
                    },
                    {
                        data: 'nama_bidang'
                    },
                    {
                        data: 'status',
                        render: function(data, type, row) {

                            if (data == 2) {
                                return '<span class="badge bg-warning">Proses</span>';
                            } else if (data == 1) {
                                return '<span class="badge bg-success">Valid</span>';
                            } else if (data == 0) {
                                return '<span class="badge bg-danger">Tidak Valid</span>';
                            } else {
                                return data;
                            }
                        }
                    },
                    {
                        render: function(data, type, row) {
                            var buttons =
                                '<button style="margin-right: 10px" class="btn btn-success btn-sm mr-2" onclick="view(\'' +
                                row.kode_transaksi +
                                '\')"><i class="fa-regular fa-eye"></i></button>';

                            return buttons;

                        }
                    }
                ],
            });


        });
    </script>

    {{-- Format rupiah --}}
    <script>
        $(document).ready(function() {
            $('.rupiahInput').on('input', function() {


                // Mengambil nilai tanpa tanda ribuan
                var inputValue = $(this).val();

                // Hapus karakter selain digit
                var numericValue = inputValue.replace(/[^0-9]/g, '');

                // Format sebagai rupiah
                var formattedValue = formatRupiah(numericValue);

                // Update nilai input
                $(this).val(formattedValue);
            });
        });

        function formatRupiah(angka) {
            var reverse = angka.toString().split('').reverse().join('');
            var ribuan = reverse.match(/\d{1,3}/g);
            var formattedValue = ribuan.join('.').split('').reverse().join('');

            return 'Rp ' + formattedValue;
        }
    </script>
@endsection