<?php

namespace Database\Seeders;
use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUser('Alice', 20);
        $this->createUser('Bob', 25);
        $this->createUser('Alice', 20);
        $this->createUser('Alice', 20);
    }

    private function createUser($name, $age)
    {
        return Person::create(compact('name', 'age'));
    }
}
