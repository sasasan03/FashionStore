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
        Schema::create('product_images', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('ID');
            $table->foreignUuid('product_id')
                ->constrained()
                ->cascadeOnDelete()
                ->comment('商品テーブルID');
            $table->string('image_path')->comment('画像格納場所'); // 使用するダミー画像URL：https://placehold.jp/600x400.png?text=No+Image
            $table->unsignedInteger('sort_order')->default(1)->comment('表示順（数値が小さいほど先に表示）'); // 1がメイン
            $table->unique(['product_id', 'sort_order'])->comment('同一商品内で表示順が重複しないようにする制約'); // 同じ商品で表示順が被らないようにする
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
