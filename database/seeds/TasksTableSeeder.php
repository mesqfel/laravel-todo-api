<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = array();
        $tasks[] = [
        			'description' => 'Wash car',
        			'day' => 'monday',
        			'finished' => 0
        ];
        $tasks[] = [
        			'description' => 'Pay bills',
        			'day' => 'tuesday',
        			'finished' => 0
        ];
        $tasks[] = [
        			'description' => 'Do homework',
        			'day' => 'wednesday',
        			'finished' => 0
        ];
        $tasks[] = [
        			'description' => 'Do laundry',
        			'day' => 'thursday',
        			'finished' => 0
        ];
        $tasks[] = [
        			'description' => 'Take kids to the beach',
        			'day' => 'saturday',
        			'finished' => 0
        ];

        foreach ($tasks as $task) {
	        DB::table('tasks')->insert($task);	
        }
    }
}
