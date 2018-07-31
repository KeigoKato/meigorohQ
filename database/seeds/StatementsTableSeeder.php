<?php

use Illuminate\Database\Seeder;

class StatementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Statement::class, 150)->create();
    }
}
