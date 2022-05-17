<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     /*  Admin => all
         Abogado => casos
         Cliente => index
     */

        
       $admin = Role::create(['name' => 'admin']);
      $abogado = Role::create(['name'=> 'abogado']);
      $cliente = Role::create(['name'=> 'cliente']);

    
      Permission::create(['name'=>'dashboard'])->syncRoles([$admin,$abogado,$cliente]);
      Permission::create(['name'=>'casos.index'])->syncRoles([$admin,$abogado]);
      Permission::create(['name'=>'casos.create'])->syncRoles([$admin]);
      Permission::create(['name'=>'casos.show'])->syncRoles([$admin]);
      Permission::create(['name'=>'casos.edit'])->syncRoles([$admin]);
      Permission::create(['name'=>'casos.destroy'])->syncRoles([$admin]);



    Permission::create(['name'=>'abogados.index'])->syncRoles([$admin,$abogado,$cliente]);
    Permission::create(['name'=>'abogados.create'])->syncRoles([$admin]);
    Permission::create(['name'=>'abogados.show'])->syncRoles([$admin,$abogado,$cliente]);
    Permission::create(['name'=>'abogados.edit'])->syncRoles([$admin]);
    Permission::create(['name'=>'abogados.destroy'])->syncRoles([$admin]);



    Permission::create(['name'=>'estados.index'])->syncRoles([$admin,$abogado]);
    Permission::create(['name'=>'estados.create'])->syncRoles([$admin]);
    Permission::create(['name'=>'estados.show'])->syncRoles([$admin]);
    Permission::create(['name'=>'estados.edit'])->syncRoles([$admin]);
    Permission::create(['name'=>'estados.destroy'])->syncRoles([$admin]);


    Permission::create(['name'=>'categorias.index'])->syncRoles([$admin]);
    Permission::create(['name'=>'categorias.create'])->syncRoles([$admin]);
    Permission::create(['name'=>'categorias.show'])->syncRoles([$admin]);
    Permission::create(['name'=>'categorias.edit'])->syncRoles([$admin]);
    Permission::create(['name'=>'categorias.destroy'])->syncRoles([$admin]);
    }
}
