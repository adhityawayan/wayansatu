<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_default extends CI_Migration
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
                'type' => 'INT',
                'constraint' => '11',
            ),
            'name' => array(
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

        // Create Table _default
        $this->dbforge->create_table("_default", TRUE, $attributes);

    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table _default
        $this->dbforge->drop_table("_default", TRUE);
    }

}
