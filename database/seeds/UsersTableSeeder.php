<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Le especificamos que nos cree 20usuarios
        factory(App\User::class, 20)->create();

        //Aprovechando vamos a crear de una vez un rol que seria el administrador,
        //para ello debemos agregar una lina use use Caffeinated\Shinobi\Models\Role;

        Role::create([
            'name'      => 'Admin',
            'slug'      => 'admin',
            'special'   => 'all-access' // ca,po especial donde definimos que tiene todos los accesos.
        ]);
    }
}
