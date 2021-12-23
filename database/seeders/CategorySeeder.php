<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
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

        $category = new Category();
        $category->name = "Đời sống";
        $category->save();

        $category = new Category();
        $category->name = "Lịch sử";
        $category->save();

        $category = new Category();
        $category->name = "Xã hội";
        $category->save();

        $category = new Category();
        $category->name = "Văn học";
        $category->save();
    }
}
