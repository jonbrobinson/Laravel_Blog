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
        $user->email = $_ENV['ADMIN_USER'];
        $user->password = Hash::make($_ENV['ADMIN_USER']);
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
            $post->slug = '';
            $post->save();
    	}
    }

}