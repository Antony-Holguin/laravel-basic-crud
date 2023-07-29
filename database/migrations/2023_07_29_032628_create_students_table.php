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
            $table->id();
            $table->string('identification_number', 10);
            $table->string('names', 75);
            $table->string('lastname', 75);
            $table->string('email', 100)->unique();
            $table->string('description');
            $table->date('date_birth');
            $table->integer('age')->unsigned(); //unsigned = no negative values
            $table->decimal('weight',10,2);
            $table->float('scholarship'); 
            $table->boolean('status');
            $table->timestamps();
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