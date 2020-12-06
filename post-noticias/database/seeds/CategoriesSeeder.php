<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Futebol', 'description' => 'A maior cobertura do mundo do esporte'],
            ['name' => 'Tecnologia', 'description' => 'Fique por dentro de tudo que há de novo na tecnologia do mundo'],
            ['name' => 'Economia e Negócios', 'description' => 'Uma plataforma que falará de Saúde e Ciência para você que está cansado das fake news.'],
            ['name' => 'Saúde e Ciência', 'description' => 'Uma plataforma que falará de Saúde e Ciência para você que está cansado das fake news.']
        ]);
    }
}
