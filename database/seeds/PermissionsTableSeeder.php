<?php

use Illuminate\Database\Seeder;
use Caffe\Alcomponente\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([

            'name'=>'Navegar usuarios',
            'slug'=>'users.index',
            'description'=>'lista y navega todos los usuarios del sistema '
        ]);

        Permission::create([

            'name'=>'Ver detalle  de un usuarios',
            'slug'=>'users.show',
            'description'=>'ver un detalle en cada usuario '
        ]);

        Permission::create([

            'name'=>'edicion de usuarios',
            'slug'=>'users.edit',
            'description'=>'edita cualquier dato de un usuario del sistema'
        ]);

        Permission::create([

            'name'=>'Eliminar usuario',
            'slug'=>'users.destroy',
            'description'=>'elimina cualquier usuario del sistema '
        ]);
                // roles 
        Permission::create([

            'name'=>'Navegar roles',
            'slug'=>'roles.index',
            'description'=>'lista y navega todos los rol del sistema '
        ]);

        Permission::create([

            'name'=>'Ver detalle  de un roles',
            'slug'=>'roles.show',
            'description'=>'ver un detalle en cada rol '
        ]);

        Permission::create([

            'name'=>'creacion de roles',
            'slug'=>'roles.create',
            'description'=>'edita cualquier dato de un rol del sistema'
        ]);

        Permission::create([

            'name'=>'edicion de roles',
            'slug'=>'roles.edit',   
            'description'=>'edita cualquier dato de un rol del sistema'
        ]);

        Permission::create([

            'name'=>'Eliminar roles',
            'slug'=>'roles.destroy',
            'description'=>'elimina cualquier rol del sistema '
        ]);

         // Productos 
         Permission::create([

            'name'=>'Navegar productos',
            'slug'=>'products.index',
            'description'=>'lista y navega todos los productos del sistema '
        ]);

        Permission::create([

            'name'=>'Ver detalle  de un productos',
            'slug'=>'products.show',
            'description'=>'ver un detalle en cada productos '
        ]);

        Permission::create([

            'name'=>'creacion de productos',
            'slug'=>'products.create',
            'description'=>'edita cualquier dato de un productos del sistema'
        ]);

        Permission::create([

            'name'=>'edicion de productos',
            'slug'=>'products.edit',   
            'description'=>'edita cualquier dato de un productos del sistema'
        ]);

        Permission::create([

            'name'=>'Eliminar productos',
            'slug'=>'products.destroy',
            'description'=>'elimina cualquier productos del sistema '
        ]);
    }
}
