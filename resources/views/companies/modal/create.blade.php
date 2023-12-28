<!--Modal tambah pegawai-->
<div class="modal fade text-left modal-borderless" id="modal_insert" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Baru</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('companies.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="basicInput">Name</label>

                        <input type="text" class="form-control mt-2" name="name" id="basicInput" required>
                    </div>

                    <div class="form-group">
                        <label for="basicInput">Email</label>

                        <input type="text" class="form-control mt-2" name="email" id="basicInput" required>
                    </div>

                    <div class="form-group">
                        <label for="basicInput">Address</label>
                        <textarea name="address"rows="4" class="form-control"></textarea>
                    </div>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
