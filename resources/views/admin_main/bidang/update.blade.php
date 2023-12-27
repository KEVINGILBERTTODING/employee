 <!--Modal ubah data pegawai  -->
 <div class="modal fade text-left modal-borderless" id="modal_update_{{ $dw->id }}" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-scrollable" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Ubah Data Bidang</h5>
                 <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                     <i data-feather="x"></i>
                 </button>
             </div>
             <form action="{{ route('bidang.update') }}" method="post">
                 @csrf
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="basicInput">Nama Bidang</label>

                         <input type="number" class="form-control mt-2" value="{{ $dw->id }}" name="bidang_id"
                             id="basicInput" required>

                         <input type="text" class="form-control mt-2" value="{{ $dw->nama_bidang }}"
                             name="nama_bidang" id="basicInput" required>
                     </div>




                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                         <i class="bx bx-x d-block d-sm-none"></i>
                         <span class="d-none d-sm-block">Batal</span>
                     </button>
                     <button type="submit" class="btn btn-primary ms-1">
                         <i class="bx bx-check d-block d-sm-none"></i>
                         <span class="d-none d-sm-block">Simpan Perubahan</span>
                     </button>
                 </div>
             </form>
         </div>
     </div>
 </div>