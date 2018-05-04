<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Le indicamos que me cree 80 productos
        factory(App\Product::class, 80)->create();
    }
}
