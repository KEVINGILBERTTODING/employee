<!--Modal tambah pegawai-->
<div class="modal fade text-left modal-borderless" id="modal_update" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Baru</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('employee.update') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="basicInput">First Name</label>
                        <input type="text" class="form-control mt-2" hidden name="id" id="employee_id" readonly
                            required>
                        <input type="text" class="form-control mt-2" name="first_nm" id="first_nm" required>
                    </div>

                    <div class="form-group">
                        <label for="basicInput">Last Name</label>

                        <input type="text" class="form-control mt-2" name="last_nm" id="last_nm" required>
                    </div>

                    <div class="form-group">
                        <label for="basicInput">Select</label>
                        <select name="company_id" id="company_id" class="form-select" required>
                            @foreach ($dataCompanies as $dc)
                                <option value="{{ $dc->id }}">{{ $dc->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="basicInput">Email</label>

                        <input type="text" class="form-control mt-2" name="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="basicInput">Phone</label>
                        <input type="numeric" class="form-control mt-2" name="phone" id="phone" required>

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
