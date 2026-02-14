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
            $table->uuid('id')->primary()->comment('ID');
            $table->foreignUuid('category_id')
                ->constrained()
                ->cascadeOnDelete()
                ->comment('カテゴリーID');
            $table->string('name')->comment('商品名');
            $table->integer('price')->comment('商品の値段');
            $table->boolean('is_active')->default(true)->comment('販売中 / 停止中');
            $table->string('slug')->unique()->comment('URLに出すための英語のあだ名');
            $table->text('description')->nullable()->comment('商品詳細');
            $table->timestamps();
            $table->softDeletes();
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
