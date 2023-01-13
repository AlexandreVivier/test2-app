<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         // Truncate() permet d'éviter les répétitions en cas de reseed
         \App\Models\User::truncate();
         \App\Models\Category::truncate();
         \App\Models\Post::truncate();

         //\App\Models\User::factory(1)->create();

        /* \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);
        */

        $user = \App\Models\User::create([
            'name'=> 'Auteur',
            'email'=>'personal@internet.com',
            'password'=>'topSecret'
         ]);

         $personal = \App\Models\Category::create([
            'name'=> 'Personal',
            'slug'=>'personal'
         ]);

         $family = \App\Models\Category::create([
            'name'=> 'Family',
            'slug'=>'family'
         ]);

         $work = \App\Models\Category::create([
            'name'=> 'Work',
            'slug'=>'work'
         ]);

         \App\Models\Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'Mon article sur la famille',
            'slug' => 'mon-article-sur-la-famille',
            'excerpt' => 'Family blabla fast and furious, lorem ipsum...',
            'body' => ' <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed urna purus. Mauris hendrerit sodales purus, a aliquet purus pharetra et. Suspendisse interdum tristique purus sit amet tincidunt. Ut semper convallis egestas. In id massa et lectus efficitur ullamcorper et at velit. Ut pharetra scelerisque tincidunt. Phasellus lobortis id ex at lobortis. Praesent ullamcorper finibus finibus. Fusce in placerat lacus. Duis gravida nisi id nisi viverra laoreet. Fusce commodo ultrices enim eget lacinia. In eu neque orci. Aliquam placerat tristique rhoncus. Maecenas non lorem eu felis vulputate bibendum. Aenean lacinia commodo rutrum. Donec non feugiat est, non feugiat lectus. Maecenas maximus luctus mauris et cursus. Sed leo magna, vulputate at libero in, luctus maximus eros. Aenean sed erat eget justo posuere venenatis ac a nisi. Vestibulum et neque mattis, vehicula diam in, vestibulum orci. Curabitur lorem augue, interdum a lacus sed, fringilla tincidunt diam. Mauris sodales aliquet diam, vel venenatis leo feugiat nec.</p> ',
         ]);

         \App\Models\Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'Mon article sur moi',
            'slug' => 'mon-article-sur-moi',
            'excerpt' => 'Rien de personnel, lorem ipsum...',
            'body' => ' <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed urna purus. Mauris hendrerit sodales purus, a aliquet purus pharetra et. Suspendisse interdum tristique purus sit amet tincidunt. Ut semper convallis egestas. In id massa et lectus efficitur ullamcorper et at velit. Ut pharetra scelerisque tincidunt. Phasellus lobortis id ex at lobortis. Praesent ullamcorper finibus finibus. Fusce in placerat lacus. Duis gravida nisi id nisi viverra laoreet. Fusce commodo ultrices enim eget lacinia. In eu neque orci. Aliquam placerat tristique rhoncus. Maecenas non lorem eu felis vulputate bibendum. Aenean lacinia commodo rutrum. Donec non feugiat est, non feugiat lectus. Maecenas maximus luctus mauris et cursus. Sed leo magna, vulputate at libero in, luctus maximus eros. Aenean sed erat eget justo posuere venenatis ac a nisi. Vestibulum et neque mattis, vehicula diam in, vestibulum orci. Curabitur lorem augue, interdum a lacus sed, fringilla tincidunt diam. Mauris sodales aliquet diam, vel venenatis leo feugiat nec.</p> ',
         ]);

         \App\Models\Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'Mon article sur le boulot',
            'slug' => 'mon-article-sur-le-boulot',
            'excerpt' => 'Du travail, encore du travail, lorem ipsum...',
            'body' => ' <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed urna purus. Mauris hendrerit sodales purus, a aliquet purus pharetra et. Suspendisse interdum tristique purus sit amet tincidunt. Ut semper convallis egestas. In id massa et lectus efficitur ullamcorper et at velit. Ut pharetra scelerisque tincidunt. Phasellus lobortis id ex at lobortis. Praesent ullamcorper finibus finibus. Fusce in placerat lacus. Duis gravida nisi id nisi viverra laoreet. Fusce commodo ultrices enim eget lacinia. In eu neque orci. Aliquam placerat tristique rhoncus. Maecenas non lorem eu felis vulputate bibendum. Aenean lacinia commodo rutrum. Donec non feugiat est, non feugiat lectus. Maecenas maximus luctus mauris et cursus. Sed leo magna, vulputate at libero in, luctus maximus eros. Aenean sed erat eget justo posuere venenatis ac a nisi. Vestibulum et neque mattis, vehicula diam in, vestibulum orci. Curabitur lorem augue, interdum a lacus sed, fringilla tincidunt diam. Mauris sodales aliquet diam, vel venenatis leo feugiat nec. </p>',
         ]);
    }
}
