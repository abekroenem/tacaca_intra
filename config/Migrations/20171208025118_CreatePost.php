<?php
use Migrations\AbstractMigration;

class CreatePost extends AbstractMigration
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
        $table = $this->table('post');

        $table->addColumn('titulo', 'string');
        $table->addColumn('descricao', 'text');
        $table->addColumn('imagem', 'text');
        $table->addColumn('created', 'timestamp');
        $table->addColumn('usuario_id', 'integer');
        $table->addIndex(['usuario_id']);

        $table->addForeignKey('usuario_id', 'usuario', 'id');
    
        $table->create();
    }
}
