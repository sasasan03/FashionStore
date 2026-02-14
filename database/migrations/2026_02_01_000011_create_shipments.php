<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // 🍺shipments・・発送情報
    public function up(): void
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->foreignUuid('order_id')->constrained()->cascadeOnDelete()->comment('注文ID');
            $table->string('carrier')->nullable()->comment('配送会社（yamato / sagawa など）');
            $table->string('tracking_no')->nullable()->index()->comment('追跡番号');
            $table->timestamp('shipped_at')->nullable()->comment('発送日時');
            $table->timestamp('delivered_at')->nullable()->comment('配達完了日時');
            $table->string('status')->default('pending')->comment('配送ステータス（pending / shipped / delivered / failed など）');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
