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
            $table->bigInteger('store_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('photo')->nullable();
            $table->decimal('cost_usd',10,2)->nullable();
            $table->decimal('cost_khr',10,2)->nullable();
            $table->longText('description');
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
