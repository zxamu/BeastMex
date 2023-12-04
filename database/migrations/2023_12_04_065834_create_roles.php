<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
        // Crear roles
        $role1 = Role::create(['name' => 'gerente']);
        $role2 = Role::create(['name' => 'coord_compras']);
        $role3 = Role::create(['name' => 'coord_ventas']);
        $role4 = Role::create(['name' => 'auxiliar_almacen']);

        // Crear permisos generales
        $generalPermissions = [
            'ver-gerencia',
            'ver-compras',
            'ver-ventas',
            'ver-almacen',
            // ... agregar otros permisos generales según sea necesario
        ];

        foreach ($generalPermissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Asignar permisos generales al rol 'gerente'
        $gerente = Role::findByName('gerente');
        $gerente->syncPermissions($generalPermissions);

        // Asignar permisos específicos a cada rol
        $coordComprasPermissions = [
            'ver-compras',
            // ... agregar otros permisos específicos para 'coord_compras'
        ];

        $coordVentasPermissions = [
            'ver-ventas',
            // ... agregar otros permisos específicos para 'coord_ventas'
        ];

        $auxiliarAlmacenPermissions = [
            'ver-almacen',
            // ... agregar otros permisos específicos para 'auxiliar_almacen'
        ];

        // Asignar permisos específicos a cada rol
        Role::findByName('coord_compras')->syncPermissions($coordComprasPermissions);
        Role::findByName('coord_ventas')->syncPermissions($coordVentasPermissions);
        Role::findByName('auxiliar_almacen')->syncPermissions($auxiliarAlmacenPermissions);

        // Asignar roles a usuarios
        User::find(1)->assignRole('gerente');
        User::find(2)->assignRole('coord_compras');
        User::find(3)->assignRole('coord_ventas');
        User::find(4)->assignRole('auxiliar_almacen');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Puedes deshacer las asignaciones y eliminaciones de roles y permisos aquí si es necesario
    }
};

