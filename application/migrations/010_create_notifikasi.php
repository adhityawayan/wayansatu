<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_notifikasi extends CI_Migration
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
            'text' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'referensi' => array(
                'type' => 'VARCHAR',
				'constraint' => '255'
            ),
            'referensi_id' => array(
                'type' => 'INT',
				'constraint' => '8',
                'null' => TRUE,
            ),
            'link' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
                'null' => TRUE,
            ),
			'status' => array(
                'type' => 'INT',
				'constraint' => '11',
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
            )
        ));

        // Add Primary Key.
        $this->dbforge->add_key("id", TRUE);

        // Table attributes.

        $attributes = array();

        // Create Table notifikasi
        $this->dbforge->create_table("notifikasi", TRUE, $attributes);
		
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table notifikasi
        $this->dbforge->drop_table("notifikasi", TRUE);
    }

}
