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
        Schema::create('programs', function (Blueprint $table) {
            $table->integer('progid')->nullable(false);
            $table->string('progfullname', 100)->nullable(false);
            $table->string('progshortname', 20)->nullable(true);
            $table->integer('progcollid')->nullable(false);
            $table->integer('progcolldeptid')->nullable(false);

            $table->primary('progid');
            $table->foreign('progcollid')->references('collid')->on('colleges')->onDelete('cascade');
            $table->foreign('progcolldeptid')->references('deptid')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
