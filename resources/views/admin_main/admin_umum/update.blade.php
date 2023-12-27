 <!--Modal ubah data daskrimti umum -->
 <div class="modal fade text-left modal-borderless" id="modal_update_{{ $dw->id }}" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-scrollable" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Ubah Data Daskrimti Umum</h5>
                 <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                     <i data-feather="x"></i>
                 </button>
             </div>
             <form action="{{ route('editAdminUmum') }}" method="post">
                 @csrf
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="basicInput">NRP</label>

                         <input type="number" class="form-control mt-2" value="{{ $dw->npp }}" name="npp"
                             id="basicInput" required>
                     </div>

                     <div class="form-group">
                         <label for="basicInput">Nama Lengkap</label>
                         <input type="text"readonly hidden class="form-control mt-2" value="{{ $dw->id }}"
                             name="id" id="basicInput" required>
                         <input type="text" class="form-control mt-2" value="{{ $dw->name }}" name="name"
                             id="basicInput" required>
                     </div>



                     <div class="form-group">
                         <label for="basicInput">Status</label>

                         <select type="text" class="form-control mt-2" name="status" id="basicInput" required>
                             @if ($dw->status == 1)
                                 <option value="1">Aktif</option>
                                 <option value="0">Tidak Aktif</option>
                             @else
                                 <option value="0">Tidak Aktif</option>
                                 <option value="1">Aktif</option>
                             @endif

                         </select>
                     </div>


                     <div class="form-group">
                         <label for="basicInput">Kata Sandi</label>

                         <input type="password" class="form-control mt-2" value="" name="password"
                             id="basicInput">
                         <span class="text text-sm text-warning">Kosongkan jika tidak ingin mengubah kata sandi.</span>
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
