<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Category;
        $user->name = 'Matic';
        $user->image = 'images/categories/matic.png';
        $user->save();

        $user = new Category;
        $user->name = 'Moped';
        $user->image = 'images/categories/moped.png';
        $user->save();

        $user = new Category;
        $user->name = 'Sport';
        $user->image = 'images/categories/sport.png';
        $user->save();

        $user = new Category;
        $user->name = 'Moto GP';
        $user->image = 'images/categories/motogp.png';
        $user->save();
    }
}
