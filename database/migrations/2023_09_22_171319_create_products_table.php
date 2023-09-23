<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('Code')->nullable();
            $table->string('pro_name');
            $table->string('cat_id')->nullable();
            $table->string('sub_catID')->nullable();
            $table->string('sku');
            $table->string('cost_price');
            $table->string('retail_price');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
