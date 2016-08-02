  <?php

use Illuminate\Database\Seeder;
use App\Posts;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('PostsSeeder');
    }
}

/**
* 
*/

/**
* 
*/
class PostsSeeder extends Seeder
{
    
    public function run()
    {
        // DB::table('posts')->delete();
        Posts::create([
                'title' => 'first title',
                'content' => 'text'
            ]);
    }
}