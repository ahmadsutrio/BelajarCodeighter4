<?php

namespace Tests\Support\Models;

use CodeIgniter\Model;

class BukuPenghubung extends Model
{
    protected $table          = 'buku_penghubung';
    protected $primaryKey     = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [
                                'nama_siswa',
                                'pesan_guru',
                                'ttd_guru',
                                'pesan_orang_tua',
                                'ttd_orang_tua',
                                'tanggal',
                            ];

    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    // protected $validationRules      = [
    //     'nama_siswa' =>[
    //         'rules'=> 'required|min_length[3]',
    //         'errors'=>[
    //             'required'=> '{field} Wajib di isi',
    //             'min_length'=>'{field} Minimal 3 karakter'
    //         ]
    //         ],
    //         'pesan_guru'=>[
    //             'rules'=>'required',
    //             'errors'=>[
    //                 'required' => '{field} Wajib di isi'
    //             ]
    //         ]
    // ];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
    
}
