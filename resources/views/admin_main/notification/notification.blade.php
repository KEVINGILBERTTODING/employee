<div class="modal fade text-left modal-borderless" id="modal_notification" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('Notifikasi') }}</h4>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>

            <div class="modal-body">

                @foreach ($dataNotification as $dn)
                    <a href="{{ route('adminGetDetailTransactions', $dn->kode_transaksi) }}">
                        <div class="notification-item d-flex align-items-start">

                            <div class="notification-text">
                                <h4 class="notification-title text-sm">
                                    {{ $dn->name }} mengajukan permohonan baru
                                </h4>
                                <p class="notification-subtitle text-sm text-muted">Klik untuk melihat detail
                                    permohonan.
                                </p>

                                <p class="notification-subtitle text-sm text-muted">
                                    {{ $dn->created_at }}
                                </p>


                            </div>



                        </div>
                    </a>
                @endforeach

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                </button>

                @if (!$dataNotification->isEmpty())
                    <a class="btn btn-primary ms-1" href="{{ route('deleteNotifAdmin') }}">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Hapus Semua</span>
                    </a>
                @endif
            </div>

        </div>
    </div>
</div>
