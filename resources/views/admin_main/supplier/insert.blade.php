<!--Modal tambah barang -->
<div class="modal fade text-left modal-borderless" id="modal_insert" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Supplier</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('storeSupplier') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">


                    <div class="form-group">
                        <label for="basicInput">Nama Supplier</label>
                        <input type="text" class="form-control mt-2" name="nama" id="basicInput" required>
                    </div>

                    <div class="form-group">
                        <label for="basicInput">No Handphone</label>
                        <input type="number" class="form-control mt-2" name="no_hp" id="basicInput" required>
                    </div>

                    <div class="form-group">
                        <label for="basicInput">Email</label>
                        <input type="email" class="form-control mt-2" name="email" id="basicInput" required>
                    </div>


                    <div class="form-group">
                        <label for="basicInput">Alamat</label>
                        <textarea type="email" rows="3" class="form-control mt-2" name="alamat" id="basicInput" required
                            placeholder="Alamat supplier"></textarea>
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
