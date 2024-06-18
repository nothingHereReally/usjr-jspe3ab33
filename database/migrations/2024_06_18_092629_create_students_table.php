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
        Schema::create('students', function (Blueprint $table) {
            $table->integer('studid')->nullable(false);
            $table->string('studfirstname', 50)->nullable(false);
            $table->string('studlastname', 50)->nullable(false);
            $table->string('studmidname', 50)->nullable(true);
            $table->integer('studprogid')->nullable(false);
            $table->integer('studcollid')->nullable(false);
            $table->integer('studyear')->nullable(false);

            $table->primary('studid');
            $table->foreign('studprogid')->references('progid')->on('programs')->onDelete('cascade');
            $table->foreign('studcollid')->references('collid')->on('colleges')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
