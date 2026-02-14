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
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('ID');
            $table->foreignUuid('order_id')->constrained()->cascadeOnDelete()->comment('オーダーID');;
            $table->string('provider')->comment('決済プロバイダ（stripe / payjp など）');;
            $table->string('status')->comment('決済ステータス（pending / succeeded / failed / refunded）');;
            $table->unsignedInteger('amount')->comment('決済金額（円）');
            $table->string('transaction_id')->nullable()->index()->comment('決済サービス側のトランザクションID');
            $table->json('payload')->nullable()->comment('決済APIレスポンスデータ');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
