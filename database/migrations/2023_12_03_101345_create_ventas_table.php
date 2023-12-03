<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
// Tabla: beastmexes
        Schema::create('beastmexes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // Tabla: Estados
        Schema::create('estados', function (Blueprint $table) {
            $table->id('id_estado');
            $table->string('nombre');
        });

        // Tabla: municipios
        Schema::create('municipios', function (Blueprint $table) {
            $table->id('id_municipio');
            $table->string('nombre');
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id_estado')->on('estados');
        });

        // Tabla: colonias
        Schema::create('colonias', function (Blueprint $table) {
            $table->id('id_colonia');
            $table->string('nombre');
            $table->unsignedBigInteger('id_municipio');
            $table->foreign('id_municipio')->references('id_municipio')->on('municipios');
        });

        // Tabla: calles
        Schema::create('calles', function (Blueprint $table) {
            $table->id('id_calle');
            $table->string('nombre');
            $table->unsignedBigInteger('id_colonia');
            $table->foreign('id_colonia')->references('id_colonia')->on('colonias');
        });

        // Tabla: productos
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('nombre_producto');
            $table->string('no_serie');
            $table->string('marca');
            $table->integer('cantidad');
            $table->decimal('costo', 10, 2);
            $table->decimal('compra', 10, 2);
            $table->decimal('precio_venta', 10, 2);
            $table->date('fecha_ingreso');
        });

        // Tabla: desc_repor_product
        Schema::create('desc_repor_product', function (Blueprint $table) {
            $table->id('id_desc_repor_product');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
        });

        // Tabla: personas
        Schema::create('personas', function (Blueprint $table) {
            $table->id('id_persona');
            $table->string('nombre');
            $table->string('ap');
            $table->string('am');
        });

        // Tabla: empresas
        Schema::create('empresas', function (Blueprint $table) {
            $table->id('id_empresa');
            $table->unsignedBigInteger('id_persona');
            $table->string('razon_social');
            $table->string('telefono');
            $table->string('correo');
            $table->foreign('id_persona')->references('id_persona')->on('personas');
        });

        // Tabla: domicilios
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id('id_domicilio');
            $table->unsignedBigInteger('id_calle');
            $table->string('num_domicilio');
            $table->foreign('id_calle')->references('id_calle')->on('calles');
        });

        // Tabla: orden_compras
        Schema::create('orden_compras', function (Blueprint $table) {
            $table->id('id_orden_compra');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
        });

        // Tabla: registros_tickets
        Schema::create('registros_tickets', function (Blueprint $table) {
            $table->id('id_resgistro_ticket');
            $table->date('fecha');
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_producto');
            $table->decimal('total_compra', 10, 2);
        });

        // Tabla: desc_tickets
        Schema::create('desc_tickets', function (Blueprint $table) {
            $table->id('id_desc_ticket');
            $table->unsignedBigInteger('id_registro_ticket');
            $table->foreign('id_registro_ticket')->references('id_resgistro_ticket')->on('registros_tickets');
        });

        // Tabla: ganancias
        Schema::create('ganancias', function (Blueprint $table) {
            $table->id('id_ganancia');
            $table->unsignedBigInteger('id_resgistro_ticket');
            $table->decimal('calculo_ganancia', 10, 2);
            $table->date('fecha');
        });

        // Tabla: Usuarios
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->unsignedBigInteger('id_persona');
            $table->string('correo');
            $table->unsignedBigInteger('id_puesto');
            $table->string('contraseña');
        });

        // Tabla: Puestos
        Schema::create('Puestos', function (Blueprint $table) {
            $table->id('id_puestos');
            $table->string('n_puesto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
                        // Reversión de las tablas
        Schema::dropIfExists('beastmexes');
        Schema::dropIfExists('estados');
        Schema::dropIfExists('municipios');
        Schema::dropIfExists('colonias');
        Schema::dropIfExists('calles');
        Schema::dropIfExists('productos');
        Schema::dropIfExists('desc_repor_product');
        Schema::dropIfExists('personas');
        Schema::dropIfExists('empresas');
        Schema::dropIfExists('domicilios');
        Schema::dropIfExists('orden_compras');
        Schema::dropIfExists('registros_tickets');
        Schema::dropIfExists('desc_tickets');
        Schema::dropIfExists('ganancias');
        Schema::dropIfExists('Usuarios');
        Schema::dropIfExists('Puestos');
    }
};
