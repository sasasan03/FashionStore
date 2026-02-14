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
        Schema::create('carts', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('ID');
            $table->foreignUuid('user_id')->nullable()->constrained()->cascadeOnDelete()->comment('ユーザーID');
            $table->string('session_id')->nullable()->index()->comment('ゲスト用');
            $table->timestamps();
            $table->softDeletes();
            $table->index(['user_id'])->comment('ユーザー検索スピードを向上');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
