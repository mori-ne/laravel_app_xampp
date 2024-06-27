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
        Schema::create('prejects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name', 255)->comment('プロジェクト名')->unique();
            $table->text('project_description')->nullable()->default(null)->comment('プロジェクトの説明');
            $table->string('project_author', 50)->comment('プロジェクトの作成者');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prejects');
    }
};
