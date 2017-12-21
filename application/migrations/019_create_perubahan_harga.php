<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_perubahan_harga extends CI_Migration
{

    /**
     * up (create table)
     *
     * @return void
     */
    public function up()
    {

        // Add Fields.
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
            ),
			'transaksi' => array(
				'type' => 'VARCHAR',
                'constraint' => '255',
            ),
			'nomor_transaksi' => array(
				'type' => 'VARCHAR',
                'constraint' => '255',
				'null' => TRUE,
            ),
			'barang' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
            ),
			'panjang' => array(
                'type' => 'FLOAT'
            ),
			'finish' => array(
				'type' => 'VARCHAR',
                'constraint' => '255',
            ),
			'harga_sebelum' => array(
				'type' => 'FLOAT',
            ),
			'harga_koreksi' => array(
				'type' => 'FLOAT',
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ),
            'deleted_at' => array(
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ),
            'created_by' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => TRUE,
            ),
            'updated_by' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => TRUE,
            ),
        ));

        // Add Primary Key.
        $this->dbforge->add_key("id", TRUE);

        // Table attributes.

        $attributes = array();
		$this->dbforge->add_field('FOREIGN KEY (barang) REFERENCES barang(id)');

        // Create Table perubahan_harga
        $this->dbforge->create_table("perubahan_harga", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table perubahan_harga
        $this->dbforge->drop_table("perubahan_harga", TRUE);
    }

}
