<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_customer extends CI_Migration
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
			'nama' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
            ),
			'alamat' => array(
                'type' => 'TEXT'
            ),
			'telepon' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
            ),
			'fax' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
                'null' => TRUE,
            ),
			'email' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
                'null' => TRUE,
            ),
			'contact_person' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
                'null' => TRUE,
            ),
			'inisial' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
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
		
		
        // Create Table user_privilages
        $this->dbforge->create_table("customer", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table user
        $this->dbforge->drop_table("customer", TRUE);
    }

}
