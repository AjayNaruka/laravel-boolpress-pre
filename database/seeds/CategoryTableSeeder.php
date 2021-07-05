<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['HTML','CSS','JS','PHP'];
        foreach($data as $item){
            $new_cat = new Category();
            $new_cat->name = $item;
            $new_cat->slug = Str::slug($item,'-');
            $new_cat->save();
        }
    }
}
