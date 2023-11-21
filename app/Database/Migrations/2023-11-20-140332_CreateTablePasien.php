<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePasien extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama_pasien' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'no_ktp' => [
                'type' => 'VARCHAR',
                'constraint' => 16,
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
        $this->forge->createTable('pasien');
    }

    public function down()
    {
        $this->forge->dropTable('pasien', true);    
    }
}
