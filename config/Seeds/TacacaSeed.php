<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;

/**
 * Tacaca seed.
 */
class TacacaSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];

        $data[] = [
            'nome' => 'Kernel, the cat',
            'email' => 'kernel@cat.com',
            'senha' => (new DefaultPasswordHasher)->hash('meow')
        ];
        
        for ($i=0; $i < 10; $i++)
        {
            $data[] = [
                'nome' => $faker->name,
                'email' => $faker->email,
                'senha' => (new DefaultPasswordHasher)->hash($faker->password)
            ];
        }
        $table = $this->table('usuario');

        $this->execute('SET foreign_key_checks=0');
        $table->truncate();
        $this->execute('SET foreign_key_checks=1');

        $table->insert($data)
              ->save();

        $data = [];
        
        for ($i=0; $i < 100; $i++)
        {
            $data[] = [
                'titulo' => $faker->sentence(rand(2, 10), true),
                'descricao' => $faker->paragraph(rand(20, 50), true),
                'imagem' => $faker->imageUrl(1024, 720),
                'usuario_id' => TableRegistry::get('usuario')
                                    ->find('all')
                                    ->order('rand()')
                                    ->first()
                                    ->id,
            ];
        }

        $table = $this->table('post');

        $table->truncate();
        
        $table->insert($data)
            ->save();
    }
}
