<?php

use App\Tag;
use Illuminate\Database\Seeder;
use illuminate\support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Front End','Back End','Laravel','UI','UX'];

        foreach ($data as $item) {
            $new_tag = new Tag();
            $new_tag->title = $item;
            $new_tag->slug = Str::slug($item,'-');
            $new_tag->save();
        }
    }
}
