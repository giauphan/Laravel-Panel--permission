<?php

use App\Models\CategoryProduct;
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
        Schema::create('imports_products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CategoryProduct::class,"category_id")->index();
            $table->dateTime('entry_date');
            $table->integer('quantity');
            $table->dateTime('expiration_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imports_products');
    }
};
