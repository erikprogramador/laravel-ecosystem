<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Author::create([
            'name' => 'Erik Vanderlei Fernandes',
            'email' => 'erik.vanderlei.programador@outlook.com',
            'twitter' => 'https://twitter.com/erikmbx',
            'github' => 'https://github.com/erikprogramador',
            'avatar' => 'images/avatar.jpeg',
        ]);

        $author->projects()->create([
            'name' => 'Sales City',
            'company' => 'Sales City',
            'link' => 'https://salescity.com.br',
            'description' => 'Sistema de gerenciamento de clientes.',
        ]);

        $author->projects()->create([
            'name' => 'SimulaImob',
            'company' => 'Adalov',
            'link' => 'https://simulaimob.com.br',
            'description' => 'Plataforma de simulação de financiamento imobiliario.',
        ]);
    }
}
