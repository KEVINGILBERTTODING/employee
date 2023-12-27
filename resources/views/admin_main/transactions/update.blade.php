 <!--Modal  -->
 <form action="{{ route('setTidakValid') }}" method="post">
     @csrf
     <div class="modal fade text-left modal-borderless" id="modal_update" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-scrollable" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Konfirmasi Permohonan</h5>
                     <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                         <i data-feather="x"></i>
                     </button>
                 </div>

                 <div class="modal-body">
                     <div class="form-group">
                         <label for="basicInput">Bukti Persetujuan</label>
                         <br>
                         <a href="{{ route('downloadEvidence', $dataTransaction['evidence']) }}"
                             class="btn btn-success mt-2">Download</a>
                     </div>


                     @if ($dataTransaction['status'] == 2)
                         <div class="form-group">
                             <label for="basicInput">Status</label>

                             <input type="number" name="user_id" hidden value="{{ $dataTransaction['user_id'] }}">
                             <input type="text" name="kode_transaksi" hidden
                                 value="{{ $dataTransaction['kode_transaksi'] }}">

                             <select name="status" id="status" class="form-control">
                                 <option value="1">Valid</option>
                                 <option value="0">Tidak Valid</option>
                             </select>
                         </div>
                     @endif


                     @if ($dataTransaction['status'] == 2)
                         <div class="form-group" id="alasan">
                             <label for="basicInput">Alasan Penolakan</label>

                             <textarea type="text" class="form-control mt-2" name="alasan" id="basicInput" placeholder="Keterangan barang"
                                 rows="3">{{ $dataTransaction['alasan'] }}</textarea>

                         </div>
                     @else
                         <div class="form-group" id="alasan">
                             <label for="basicInput">Alasan Penolakan</label>

                             <textarea type="text" class="form-control mt-2" name="alasan" readonly id="basicInput"
                                 placeholder="Keterangan barang" rows="3">{{ $dataTransaction['alasan'] }}</textarea>

                         </div>
                     @endif





                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                         <i class="bx bx-x d-block d-sm-none"></i>
                         <span class="d-none d-sm-block">Batal</span>
                     </button>
                     @if ($dataTransaction['status'] == 2)
                         <button type="submit" class="btn btn-primary ms-1">
                             <i class="bx bx-check d-block d-sm-none"></i>
                             <span class="d-none d-sm-block">Konfirmasi</span>
                         </button>
                     @endif
                 </div>

             </div>
         </div>
     </div>
 </form>
