<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string("make");
            $table->string("model");
            $table->year("year");
            $table->string("condition");
            $table->string("mileage");
            $table->string("body_type");
            $table->string("colour");
            $table->string("description");
            $table->string("transmission");
            $table->string("fuel_consumption");
            $table->string("drive");
            $table->integer("code");
            $table->integer("number_of_seats");
            $table->integer("number_of_doors");
            $table->string("fuel_type");
            $table->integer("tank_capacity");
            $table->integer("engine_capacity");
            $table->integer("gears");
            $table->integer("cylinder_layout");
            $table->integer("reserved_price");
            $table->string("status")->default("pending");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
