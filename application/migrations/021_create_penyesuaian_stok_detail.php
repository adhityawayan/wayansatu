<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_penyesuaian_stok_detail extends CI_Migration
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
			'finish' => array(
				'type' => 'VARCHAR',
                'constraint' => '255',
            ),
			'stok_sebelum' => array(
				'type' => 'INT',
                'constraint' => '11',
            ),
			'stok_koreksi' => array(
				'type' => 'INT',
                'constraint' => '11',
            ),
			'catatan' => array(
                'type' => 'text',
				'null' => TRUE
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
		$this->dbforge->add_field('FOREIGN KEY (parent) REFERENCES penyesuaian_stok(id)');
		$this->dbforge->add_field('FOREIGN KEY (barang) REFERENCES barang(id)');

        // Create Table penyesuaian_stok_detail
        $this->dbforge->create_table("penyesuaian_stok_detail", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table penyesuaian_stok_detail
        $this->dbforge->drop_table("penyesuaian_stok_detail", TRUE);
    }

}
