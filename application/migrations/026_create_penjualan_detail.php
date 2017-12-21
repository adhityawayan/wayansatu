<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_penjualan_detail extends CI_Migration
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
			'parent' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
            ),
			'barang' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
            ),
			'panjang' => array(
                'type' => 'FLOAT'
            ),
			'finishing' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
            ),
			'harga' => array(
                'type' => 'FLOAT'
            ),
			'stok' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
			'jumlah' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
			'total' => array(
                'type' => 'FLOAT'
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
		$this->dbforge->add_field('FOREIGN KEY (parent) REFERENCES penjualan(id)');
		$this->dbforge->add_field('FOREIGN KEY (barang) REFERENCES barang(id)');
		
        // Create Table user_privilages
        $this->dbforge->create_table("penjualan_detail", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table user
        $this->dbforge->drop_table("penjualan_detail", TRUE);
    }

}
