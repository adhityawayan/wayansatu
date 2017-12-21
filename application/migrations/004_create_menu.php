<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_menu extends CI_Migration
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
            'menu' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
			'index' => array(
                'type' => 'INT',
                'constraint' => '11'
            ),
			'parent' => array(
                'type' => 'INT',
                'constraint' => '11',
				'null' => TRUE
            ),
			'url' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
				'null' => TRUE
            ),
			'icon' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
				'null' => TRUE
            ),
			'color' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
				'null' => TRUE
            ),
			'id_element' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
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
		

        // Create Table tipe_user
        $this->dbforge->create_table("menu", TRUE, $attributes);
		
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table s_user_type
        $this->dbforge->drop_table("menu", TRUE);
    }

}
