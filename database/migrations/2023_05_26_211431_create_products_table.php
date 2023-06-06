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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categories_id')->constrained();
            $table->string('name');
            $table->longText('description');
            $table->string('img');
            $table->decimal('price',20,2);
            $table->integer('condition_scale');
            $table->integer('qty');
            $table->string('year');
            $table->boolean('is_best')->default(0);
            $table->enum('status',['accepted','waiting','rejected'])->default('waiting');
            $table->foreignId('created_by')->nullable()->constrained(table: 'users',indexName: 'products_created_by');
            $table->foreignId('verified_by')->nullable()->constrained(table: 'users',indexName: 'products_verified_by');
            $table->dateTime('verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
