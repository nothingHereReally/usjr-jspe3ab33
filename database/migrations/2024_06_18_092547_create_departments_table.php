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
        Schema::create('departments', function (Blueprint $table) {
            $table->integer('deptid')->nullable(false);
            $table->string('deptfullname', 100)->nullable(false);
            $table->string('deptshortname', 20)->nullable(true);
            $table->integer('deptcollid')->nullable(false);

            $table->primary('deptid');
            $table->foreign('deptcollid')->references('collid')->on('colleges')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
