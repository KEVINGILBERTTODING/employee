<!--Modal tambah barang -->
<div class="modal fade text-left modal-borderless" id="modal_update" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Supplier</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('updateSupplier') }}" method="post">
                @csrf
                <div class="modal-body">


                    <div class="form-group">
                        <label for="basicInput">Nama Supplier</label>
                        <input type="text" class="form-control mt-2" name="id" id="id_supplier" hidden required>
                        <input type="text" class="form-control mt-2" id="nama_supplier" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="basicInput">No Handphone</label>
                        <input type="number" class="form-control mt-2" id="no_hp_supplier" name="no_hp" required>
                    </div>

                    <div class="form-group">
                        <label for="basicInput">Email</label>
                        <input type="email" class="form-control mt-2" id="email_supplier" name="email" required>
                    </div>


                    <div class="form-group">
                        <label for="basicInput">Alamat</label>
                        <textarea type="email" rows="3" class="form-control mt-2" id="alamat_supplier" name="alamat" required
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
