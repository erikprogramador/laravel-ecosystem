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
            'description' => 'O Sales City é um sistema com foco em organizar e compartilhar informação entre membros da sua equipe, para o processo de marketing e vendas. Pois quando a informação é de fácil acesso pelos membros de sua equipe o processo fica muito mais rápido e eficaz.',
        ]);

        $author->projects()->create([
            'name' => 'SimulaImob',
            'company' => 'Adalov',
            'link' => 'https://simulaimob.com.br',
            'description' => 'O SimulaImob é uma plataforma de simulação de valores de financiamento imobiliário.',
        ]);
    }
}
