<?php

namespace App\Imports;

use App\Models\Barang;
use App\Models\BarangArsip;
use App\Models\BarangMasuk;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class BarangImport implements ToCollection
{

    protected $supplierId;

    public function __construct($supplierId)
    {
        $this->supplierId = $supplierId;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {


        DB::beginTransaction();
        try {
            foreach ($rows->skip(1) as $row) {
                Barang::create([
                    'supplier_id' => $this->supplierId,
                    'nama_barang' => $row[1],
                    'keterangan' => $row[2],
                    'stok' => $row[3],
                    'stok_awal' => $row[3],
                    'satuan' => $row[4],
                    'harga_satuan' => $this->cleanRupiah($row[5]),
                    'total' => $this->cleanRupiah($row[6])
                ]);
            }



            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('failed', $th->getMessage());
        }
    }

    private function cleanRupiah($value)
    {

        return preg_replace('/[^0-9]/', '', str_replace('Rp', '', $value));
    }
}
