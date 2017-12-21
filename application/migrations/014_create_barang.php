<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_barang extends CI_Migration
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
            'tipe_barang' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
            ),
			'supplier' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
            ),
			'section' => array(
                'type' => 'VARCHAR',
				'constraint' => '255'
            ),
			'deskripsi' => array(
                'type' => 'VARCHAR',
				'constraint' => '255'
            ),
			'berat' => array(
                'type' => 'float'
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
		$this->dbforge->add_field('FOREIGN KEY (tipe_barang) REFERENCES tipe_barang(id)');
		$this->dbforge->add_field('FOREIGN KEY (supplier) REFERENCES supplier(id)');
		
        // Create Table barang
        $this->dbforge->create_table("barang", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table barang
        $this->dbforge->drop_table("barang", TRUE);
    }

}
