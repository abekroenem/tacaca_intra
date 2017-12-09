<?php
use Migrations\AbstractMigration;

class CreateUsuario extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('usuario');

        $table->addColumn('nome', 'string');
        $table->addColumn('email', 'string');
        $table->addColumn('senha', 'string');

        $table->create();
    }
}
