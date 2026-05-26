<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'product'; //nama table database yang digunakan model
    protected $primaryKey       = 'id'; //primary key table
    protected $useAutoIncrement = true; //status AUTO_INCREMENT dari primary key 
    protected $returnType       = 'array'; //format hasil query
    protected $useSoftDeletes   = true; //status jika data didelete benar2 terhapus/tidak
    protected $protectFields    = true; //status perlindungan field $allowedFields
    protected $allowedFields    = ['nama', 'harga', 'jumlah', 'foto']; //daftar kolom yang boleh diinsert/update

    protected bool $allowEmptyInserts = false; //status insert data kosong boleh/tidak
    protected bool $updateOnlyChanged = true; //status hanya field yang berubah yang diupdate

    protected array $casts = []; //daftar untuk mengubah tipe data otomatis
    protected array $castHandlers = []; //daftar custom handler untuk cast tipe khusus

    // Dates
    protected $useTimestamps = true; // status otomatis terisi kolom created_at/updated_at
    protected $dateFormat    = 'datetime'; //format tanggal
    protected $createdField  = 'created_at'; //nama kolom data created timestamp
    protected $updatedField  = 'updated_at'; //nama kolom data updated timestamp
    protected $deletedField  = 'deleted_at'; //nama kolom data deleted timestamp

    // Validation
    protected $validationRules      = []; //daftar rule validasi otomatis sebelum insert/update
    protected $validationMessages   = []; //daftar custom pesan error
    protected $skipValidation       = true; //status untuk skip validation
    protected $cleanValidationRules = true; //status untuk mengabaikan rule yang tidak digunakan saat update

    // Callbacks
    protected $allowCallbacks = true; //status pakai fungsi callback/tidak
    protected $beforeInsert   = []; //daftar fungsi yang dipanggil sebelum insert
    protected $afterInsert    = []; //daftar fungsi yang dipanggil setelah insert
    protected $beforeUpdate   = []; //daftar fungsi yang dipanggil sebelum update
    protected $afterUpdate    = []; //daftar fungsi yang dipanggil setelah update
    protected $beforeFind     = []; //daftar fungsi yang dipanggil sebelum pencarian
    protected $afterFind      = []; //daftar fungsi yang dipanggil setelah pencarian
    protected $beforeDelete   = []; //daftar fungsi yang dipanggil sebelum hapus
    protected $afterDelete    = []; //daftar fungsi yang dipanggil setelah hapus
}
