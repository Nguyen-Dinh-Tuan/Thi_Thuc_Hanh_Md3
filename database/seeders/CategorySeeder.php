<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Category();
        $role->type_category = 'Ca phe Vy';
        $role->name ='dam da huong vi';
        $role->describe ='dam da huong vi';

        $role->save();

        $role = new Category();
        $role->type_category = 'Ca phe Moc';
        $role->name ='ngon bo re';
        $role->describe ='dam da huong vi';
        $role->save();

        $role = new Category();
        $role->type_category = 'Ca phe Kem Sua';
        $role->name ='ngon bo re';
        $role->describe ='dam da huong vi';

        $role->save();
        ;
    }
}
