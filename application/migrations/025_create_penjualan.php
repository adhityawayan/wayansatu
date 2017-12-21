<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_penjualan extends CI_Migration
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
			'nomor_transaksi' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
            ),
			'customer' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
            ),
			'tanggal' => array(
                'type' => 'TIMESTAMP'
            ),
			'total' => array(
                'type' => 'FLOAT',
                'null' => TRUE,
            ),
			'diskon' => array(
                'type' => 'FLOAT',
                'null' => TRUE,
            ),
			'diskon_type' => array(
                'type' => 'INT',
				'constraint' => '11',
                'null' => TRUE,
            ),
			'ppn' => array(
                'type' => 'FLOAT',
                'null' => TRUE,
            ),
			'grand_total' => array(
                'type' => 'FLOAT',
                'null' => TRUE,
            ),
			'jenis_pembayaran' => array(
                'type' => 'INT',
				'constraint' => '11',
                'null' => TRUE,
            ),
			'term_of_payment' => array(
                'type' => 'Char',
				'constraint' => '4',
                'null' => TRUE,
            ),
			'nama_bank' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
            ),
			'nomor_akun' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
            ),
			'catatan' => array(
                'type' => 'TEXT',
				'null' => TRUE,
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
		$this->dbforge->add_field('FOREIGN KEY (customer) REFERENCES customer(id)');
		
        // Create Table user_privilages
        $this->dbforge->create_table("penjualan", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table user
        $this->dbforge->drop_table("penjualan", TRUE);
    }

}
