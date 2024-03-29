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
        Schema::create('sandwiches', function (Blueprint $table) {
            $table->id();
            $table->string("name",50);  // ->unique();
            $table->enum("type", array("normal","vegan","glutenfree"));
            $table->integer("price");
            $table->date("best_before_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sandwiches');
    }
};
