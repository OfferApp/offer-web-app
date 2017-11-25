<?php
use App\User;
use App\Vendor;
use App\Category;
use App\Customer;
use App\Offer;
use App\Bookmark;
use App\Role;
use App\Category_has_offer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
<<<<<<< Updated upstream
=======
<<<<<<< refs/remotes/origin/master
    }
=======
>>>>>>> Stashed changes

        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0 ');

        Role::truncate();
        User::truncate();
        Vendor::truncate();
        Customer::truncate();
        Category::truncate();
        Offer::truncate();
        Bookmark::truncate();
        Category_has_offer::truncate();


        $usersQuantity=20;
<<<<<<< master
<<<<<<< Updated upstream
        $vendorsQuantity=20;
        $customersQuantity=20;
        $categoriesQuantity=20;
=======
        $vendorsQuantity=5;
        $customersQuantity=15;
        $categoriesQuantity=5;
>>>>>>> Stashed changes
=======
        $vendorsQuantity=5;
        $customersQuantity=15;
        $categoriesQuantity=5;
>>>>>>> Finale Update done
        $offersQuantity=20;
        $bookmarksQuantity=20;
        $category_has_offersQuantity=20;


        factory(Role::class,2)->create();
        factory(User::class,$usersQuantity)->create();
        factory(Vendor::class,$vendorsQuantity)->create();
        factory(Customer::class,$customersQuantity)->create();
        factory(Category::class,$categoriesQuantity)->create();
        factory(Offer::class,$offersQuantity)->create();
        factory(Bookmark::class,$bookmarksQuantity)->create();
        factory(Category_has_offer::class,$category_has_offersQuantity)->create();

          }
<<<<<<< Updated upstream
=======
>>>>>>> Final Update done
>>>>>>> Stashed changes
}
