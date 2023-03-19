<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use Carbon\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['novel', 'fiction', 'classic', 'children', 'wealth', 'women', 'autobiography', 'nonfiction'];

        foreach ($tags as $tagName) {
            $tag = new Tag();
            $tag->name = $tagName;
            $tag->save();
        }
    }
}
