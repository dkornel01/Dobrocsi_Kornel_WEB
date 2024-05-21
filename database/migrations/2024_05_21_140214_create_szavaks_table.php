<?php

use App\Models\szavak;
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
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->references('id')->on("temas");
            $table->timestamps();
        });
        szavak::create([
            "id"=>1,
            "angol"=>"Dog",
            "magyar"=>"kutya",
            "temaId"=>1
        ]);
        szavak::create([
            "id"=>2,
            "angol"=>"bus",
            "magyar"=>"busz",
            "temaId"=>2
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
