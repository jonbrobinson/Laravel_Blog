<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('PostsTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = Hash::make('adminPass123!');
        $user->first_name = 'Jonathan';
        $user->last_name = 'Robinson';
        $user->save();
    }

}

class PostsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        for ($i = 0; $i <= 10; $i++)
        {
        $post = new Post();
        $post->user_id = 1;
        $post->title = "Title $i";
        $post->body = "This is body text for post $i";
        $post->save();
    	}
    }

}