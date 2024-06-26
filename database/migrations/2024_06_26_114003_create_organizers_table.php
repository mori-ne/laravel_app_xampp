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
        Schema::create('organizers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('団体名');
            $table->string('creator', 255)->comment('作成者');
            $table->string('creator_kana', 255)->nullable()->comment('作成者カナ');
            $table->string('email', 100)->comment('メールアドレス');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizers');
    }
};
