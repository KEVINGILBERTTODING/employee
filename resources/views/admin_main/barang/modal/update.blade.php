 <!--Modal ubah data barang -->
 <form action="{{ route('updateBarang') }}" method="post">
     @csrf
     <div class="modal fade text-left modal-borderless" id="modal_update" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel1" aria="true">
         <div class="modal-dialog modal-dialog-scrollable" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Ubah Data Barang</h5>
                     <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                         <i data-feather="x"></i>
                     </button>
                 </div>

                 <div class="modal-body">

                     <div class="form-group">
                         <label for="basicInput">Aksi</label>
                         <select name="aksi" class="form-control" required>
                             <option value="" disabled selected>Pilih Aksi</option>
                             <option value="1">Ubah Data Barang</option>
                             <option value="2">Ubah Stok Barang</option>

                         </select>
                         <span class="text text-sm text-warning">Jika memilih aksi "Ubah Stok Barang," maka akan
                             ditambahkan
                             barang sebagai baru.</span>
                     </div>

                     <hr>
                     <div class="form-group">
                         <label for="basicInput">Supplier</label>
                         <select name="supplier_id" class="form-control" required>
                             @foreach ($dataSupplier as $ds)
                                 <option value="{{ $ds->id }}">{{ $ds->nama }}</option>
                             @endforeach

                         </select>
                     </div>
                     <div class="form-group">
                         <label for="basicInput">Nama Barang</label>

                         <input type="text" id="nama_barang" class="form-control mt-2" name="nama_barang"
                             id="basicInput" required>


                     </div>


                     <div class="form-group">
                         <label for="basicInput">Stok</label>

                         <input type="number" hidden id="barang_id" class="form-control mt-2" name="id"
                             id="basicInput" required>
                         <input type="number" id="stok" class="form-control mt-2" name="stok" id="basicInput"
                             required>

                     </div>

                     <div class="form-group">
                         <label for="basicInput">Satuan</label>

                         <input type="text" id="satuan" class="form-control mt-2" name="satuan" id="basicInput"
                             required>

                     </div>

                     <div class="form-group">
                         <label for="basicInput">Keterangan</label>

                         <textarea type="text" id="keterangan" class="form-control mt-2" name="keterangan" id="basicInput"
                             placeholder="Keterangan barang" rows="3"></textarea>

                     </div>

                     <div class="form-group">
                         <label for="basicInput">Harga Satuan</label>

                         <input type="text" id="harga_satuan" class="form-control mt-2 rupiahInput"
                             name="harga_satuan" id="basicInput rupiahInput" required>

                     </div>

                     <div class="form-group">
                         <label for="basicInput">Total</label>

                         <input type="text" id="total" class="form-control mt-2 rupiahInput" name="total"
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
                         <span class="d-none d-sm-block">Simpan Perubahan</span>
                     </button>
                 </div>

             </div>
         </div>
     </div>
 </form>
