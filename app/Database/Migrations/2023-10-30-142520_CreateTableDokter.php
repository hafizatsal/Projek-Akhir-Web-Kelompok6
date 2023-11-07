<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableDokter extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'nama_dokter' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'spesialis' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'no_tlp' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => true,
            ],
            'created_at' => [
                'type'  => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'  => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type'  => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('dokter');    }

    public function down()
    {
        $this->forge->dropTable('dokter', true);
    }
}
