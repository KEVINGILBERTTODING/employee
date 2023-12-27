<!--Modal tambah barang -->
<div class="modal fade text-left modal-borderless" id="modal_insert" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Barang Baru</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('importBarang') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="basicInput">Supplier</label>
                        <select name="supplier_id" class="form-control" required>
                            @foreach ($dataSupplier as $ds)
                                <option value="{{ $ds->id }}">{{ $ds->nama }}</option>
                            @endforeach

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="basicInput">File Excel</label>
                        <input type="file" class="form-control mt-2" accept=".xls,.xlsx" name="file_barang"
                            id="basicInput" required>
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
