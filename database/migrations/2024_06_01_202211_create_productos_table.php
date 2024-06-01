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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->tinyText('nombre');
            $table->text('descripcion')->nullable();
            $table->enum('tamaños', ['1kg', '5kg', '10kg', 'X', 'L', 'M'])->nullable();
            $table->enum('categoria', ['perro', 'gato', ''])->nullable();
            $table->decimal('precio', 6, 2);
            $table->unsignedSmallInteger('cantidad');
            $table->decimal('descuento', 10, 2)->nullable()->default(null);
            $table->string('image', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
