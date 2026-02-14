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
        Schema::create('order_items', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('ID');
            $table->foreignUuid('order_id')->constrained()->cascadeOnDelete()->comment('オーダーID');
            $table->foreignUuid('variant_id')->nullable()
                ->constrained('product_variants')->nullOnDelete()->comment('product_variantsへの外部キー（削除時にNULL化）');
            $table->json('variant_snapshot')->comment('size/color/sku等をjsonで保存');
            $table->unsignedInteger('qty')->comment('注文数量');
            $table->unsignedInteger('unit_price')->comment('円');
            $table->unsignedInteger('tax')->default(0)->comment('消費税額');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
