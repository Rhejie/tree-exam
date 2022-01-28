<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            [
                'firstname' => 'Rajavel ',
                'lastname' => 'Balasubramanian',
                'designation' => 'CEO',
                'parent_id' => null
            ],
            [
                'firstname' => 'Nisha ',
                'lastname' => 'Haq',
                'designation' => 'Manager',
                'parent_id' => 1
            ],
            [
                'firstname' => 'Manoj',
                'lastname' => 'Kumar',
                'designation' => 'TL',
                'parent_id' => 2
            ],
            [
                'firstname' => 'Shafin',
                'lastname' => 'Shamsu',
                'designation' => 'TL',
                'parent_id' => 2
            ],
            [
                'firstname' => 'Muthu',
                'lastname' => 'Lakshmi',
                'designation' => 'Developer',
                'parent_id' => 4
            ],
            [
                'firstname' => 'Gayathri',
                'lastname' => '',
                'designation' => 'Developer',
                'parent_id' => 4
            ],
            [
                'firstname' => 'Mayur',
                'lastname' => 'Sonawane',
                'designation' => 'Developer',
                'parent_id' => 3
            ],
            [
                'firstname' => 'Rafi',
                'lastname' => 'NK',
                'designation' => 'Developer',
                'parent_id' => 3
            ],
        ];

        foreach($employees as $employee) {
            Employee::create($employee);
        }
    }
}
