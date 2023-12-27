  <!--Modal filter barang -->
  <form action="{{ route('admin/barang/barangKeluar/filter') }}" method="get">
      @csrf
      <div class="modal fade text-left modal-borderless" id="modal_filter" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Filter Barang Keluar</h5>
                      <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
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
