<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Insertar cuatro usuarios
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Gerente',
                'email' => 'gerente@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('contraseña1'),
            ],
            [
                'id' => 2,
                'name' => 'Compras',
                'email' => 'compras@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('contraseña2'),
            ],
            [
                'id' => 3,
                'name' => 'Ventas',
                'email' => 'ventas@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('contraseña3'),
            ],
            [
                'id' => 4,
                'name' => 'Almacen',
                'email' => 'almacen@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('contraseña4'),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
