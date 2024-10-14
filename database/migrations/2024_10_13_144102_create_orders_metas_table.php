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
        Schema::create('orders_metas', function (Blueprint $table) {
            $table->uuid("id")->pimary();
            $table->uuid("product_id");
            $table->uuid("order_id");
            $table->decimal("price", 15);
            $table->decimal("qty", 15);
            $table->decimal("row_total_price", 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_metas');
    }
};
