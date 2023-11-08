<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BukuPenghubung extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_siswa' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'pesan_guru' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'ttd_guru' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pesan_orang_tua' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'ttd_orang_tua' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal' => [
                'type' => 'DATE', // Tipe data DATE
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('buku_penghubung');
    }

    public function down()
    {
        //
    }
}
