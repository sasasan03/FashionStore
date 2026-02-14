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
        Schema::create('addresses', function (Blueprint $table) {
            $table->uuid('id')->primary()->comment('ID');
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete()->comment('ユーザーID');
            $table->string('type')->comment('住所種別（shipping:配送先 / billing:請求先）');
            $table->string('name')->comment('宛名');
            $table->string('postal_code', 20)->comment('郵便番号');
            $table->string('prefecture')->comment('都道府県');
            $table->string('city')->comment('市区町村');
            $table->string('line1')->comment('住所1（番地・建物名など）');
            $table->string('line2')->nullable()->comment('住所2（建物名・部屋番号など）');
            $table->string('phone', 20)->nullable()->comment('電話番号');
            $table->boolean('is_default')->default(false)->comment('デフォルト住所フラグ');
            $table->timestamps();
            $table->softDeletes();
            $table->index(['user_id', 'type'])->comment('ユーザーごとの住所種別検索用');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
