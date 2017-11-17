<?php

use Illuminate\Database\Seeder;
use App\Reference;

class ReferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reference::create([
            'title' => 'Documentação Laravel',
            'link' => 'https://laravel.com/docs'
        ]);
    }
}
