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
        Schema::create('categories', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('ID');
            $table->string('name')->comment('カテゴリー名');
            $table->string('slug')->unique()->comment('URLに出すための英語のあだ名（Tシャツ→t-shirts）');
            $table->boolean('is_active')->default(true)->comment('販売中 / 停止中');
            $table->integer('sort_order')->default(0)->comment('表示順序');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
