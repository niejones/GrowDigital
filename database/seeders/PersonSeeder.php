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
        $p = new Person;
        $p->name = "Alice";
        $p->age = 20;
        $p->save();
        $p = new Person;
        $p->name = "Bob";
        $p->age = 25;
        $p->save();
        $p = new Person;
        $p->name = "Carol";
        $p->age = 30;
        $p->save();
        $p = new Person;
        $p->name = "Dave";
        $p->age = 35;
        $p->save();
    }
}
