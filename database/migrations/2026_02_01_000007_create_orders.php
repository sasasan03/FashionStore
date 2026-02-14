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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('ID');
            $table->string('order_no')->unique()->comment('オーダーNo');
            $table->foreignUuid('user_id')->nullable()->constrained()->nullOnDelete()->comment('ユーザーID');
            $table->string('status')->default('pending')->comment('注文状態'); // pending, paid, shipped, cancelled
            $table->unsignedInteger('subtotal')->default(0)->comment('小計金額（単価 × 数量）');
            $table->unsignedInteger('shopping_fee')->default(0)->comment('送料');
            $table->unsignedInteger('discount')->default(0)->comment('割引');
            $table->unsignedInteger('total')->default(0)->comment('合計金額');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
