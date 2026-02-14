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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('ID');
            $table->foreignUuid('cart_id')->constrained()->cascadeOnDelete()->comment('カートID');
            $table->foreignUuid('variant_id')->constrained('product_variants')->restrictOnDelete()->comment('商品バリエーションID'); //restrict親の削除不可
            $table->unsignedInteger('qty')->default(1)->comment('注文数量');
            $table->unsignedInteger('unit_price')->comment('注文時の価格'); //注文時とそれ以降の注文時の価格の違い
            $table->timestamps();
            $table->unique(['cart_id', 'variant_id'])->comment('同一カート内で同一バリアントの重複登録を防止');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
