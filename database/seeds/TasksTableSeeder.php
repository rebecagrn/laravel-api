<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\Task::Class)->create([
            'name'=>'Estudar PHP 7',
            'complete'=>false
        ]);

        factory(App\Task::Class)->create([
            'name'=>'Estudar JS',
            'complete'=>false
        ]);

        factory(App\Task::Class)->create([
            'name'=>'Estudar Laravel',
            'complete'=>false
        ]);

    }
}
