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
        //🍺product_variants　→ 商品のバリエーション
        Schema::create('product_variants', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('ID');
            $table->foreignUuid('product_id')
                ->constrained()
                ->cascadeOnDelete()
                ->comment('製品ID');
            $table->string('sku')->unique()->comment('在庫管理');
            $table->integer('price')->comment('商品の値段');
            $table->string('size')->comment('サイズ');
            $table->string('color')->comment('カラー');
            $table->integer('stock')->comment('ストック');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
