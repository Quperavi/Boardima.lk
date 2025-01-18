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
        Schema::create('boadings', function (Blueprint $table) {
            $table->id();
            $table->string('name','200');
            $table->enum('category',['1','2','3']);
            $table->enum('type',['1','2','3','4','5','6','7','8']);
            $table->enum('distance',['1','2','3','4','5','6']);
            $table->string('city','200');
            $table->string('address','300');
            $table->double('latitude');
            $table->double('longitude');
            $table->double('price');
            $table->string('description','2000');
            $table->double('area');
            $table->enum('bathroom',['1','2','3','4','5']);
            $table->enum('rooms',['1','2','3','4','5']);
            $table->unsignedBigInteger('added_by');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boadings');
    }
};
