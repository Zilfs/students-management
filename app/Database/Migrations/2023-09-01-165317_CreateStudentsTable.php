<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			],
			'gender'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 25,
			],
            'majors'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
			],
            'phone'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 25,
			],
            'address'      => [
				'type'           => 'TEXT',
			],
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('students', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
