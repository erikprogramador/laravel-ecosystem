<?php

use Illuminate\Database\Seeder;
use App\Topic;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->first()
            ->second();
    }

    protected function first()
    {
        Topic::create([
            'slug' => 'welcome',
            'title' => 'Bem vindo',
            'time' => '09:00',
            'content' => false,
            'image' => 'welcome.png',
            'viewed' => false,
        ]);

        return $this;
    }

    protected function second()
    {
        Topic::create([
            'slug' => 'welcome-2',
            'title' => 'Bem vindo',
            'time' => '09:20',
            'link' => 'home',
            'content' => true,
            'image' => 'welcome.png',
            'viewed' => false,
        ]);

        return $this;
    }
}
