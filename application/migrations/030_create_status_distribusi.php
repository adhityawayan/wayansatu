<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_status_distribusi extends CI_Migration
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
			'status' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
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
		
        // Create Table t_status_distribusi
        $this->dbforge->create_table("status_distribusi", TRUE, $attributes);
		$data = array(
			array(
				'status' => 'Penawaran diajukan'
			),
			array(
				'status' => 'Penawaran dikonfirmasi'
			),
			array(
				'status' => 'Kirim PO ke Supplier'
			),
			array(
				'status' => 'PO diproses Supplier'
			),
			array(
				'status' => 'Sebagian barang terkirim'
			),
			array(
				'status' => 'Barang telah terkirim'
			),
			array(
				'status' => 'Lunas'
			),
			array(
				'status' => 'Closed'
			),
			array(
				'status' => 'Dibatalkan'
			)
		);
		$this->db->insert_batch('status_distribusi', $data);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table t_status_distribusi
        $this->dbforge->drop_table("status_distribusi", TRUE);
    }

}
