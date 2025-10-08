<?php
namespace App\Models;

use CodeIgniter\Model;

class OptikModel extends Model{
    protected $table = 'orders';
    protected $primaryKey = 'no_order';
    protected $allowedFields = ['no_ref', 'nama', 'telepon', 'tgl_pesan', 'karyawan', 'total_modal', 'total_jual', 'total_bayar', 'keuntungan'];

    public function getOptik($idoptik = false){
        if($idoptik === false){
            return $this->findAll();
        }
            return $this->where(['no_order' => $idoptik])->first();
    }

    public function findOptik($cari){
        return $this->table('orders')->like('nama', $cari);
    }

}
?>