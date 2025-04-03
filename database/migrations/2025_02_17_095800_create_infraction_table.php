<?php

use Illuminate\Support\Facades\DB;
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
        Schema::create('infraction', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("descr", 45);
            $table->string("health_grade");
            $table->string("penalty_points");
        });

DB::table("infraction")->insert([
    ["descr" => "Smelling Kitchen", "health_grade" => "76%", "penalty_points" => "5"],
    ["descr" => "Expired Ingredients", "health_grade" => "72%", "penalty_points" => "8"],
    ["descr" => "Unsanitary Cooking Area", "health_grade" => "65%", "penalty_points" => "10"],
    ["descr" => "Improper Food Storage", "health_grade" => "80%", "penalty_points" => "3"],
    ["descr" => "Pest Infestation", "health_grade" => "50%", "penalty_points" => "15"],
    ["descr" => "Dirty Utensils", "health_grade" => "78%", "penalty_points" => "4"],
    ["descr" => "Cross-Contamination", "health_grade" => "69%", "penalty_points" => "9"],
    ["descr" => "Unclean Employee Hands", "health_grade" => "81%", "penalty_points" => "2"],
    ["descr" => "Improper Waste Disposal", "health_grade" => "74%", "penalty_points" => "6"],
    ["descr" => "Spoiled Meat", "health_grade" => "55%", "penalty_points" => "12"],
    ["descr" => "No Hairnets", "health_grade" => "85%", "penalty_points" => "1"],
    ["descr" => "Clogged Sinks", "health_grade" => "79%", "penalty_points" => "3"],
    ["descr" => "Unlabeled Chemicals", "health_grade" => "70%", "penalty_points" => "7"],
    ["descr" => "Refrigerator Too Warm", "health_grade" => "68%", "penalty_points" => "8"],
    ["descr" => "Food Left Uncovered", "health_grade" => "75%", "penalty_points" => "5"],
    ["descr" => "Expired Dairy Products", "health_grade" => "62%", "penalty_points" => "11"],
    ["descr" => "Rodent Droppings", "health_grade" => "48%", "penalty_points" => "16"],
    ["descr" => "Overcrowded Storage", "health_grade" => "73%", "penalty_points" => "6"],
    ["descr" => "No Handwashing Signs", "health_grade" => "83%", "penalty_points" => "2"],
    ["descr" => "Mold in Ice Machine", "health_grade" => "60%", "penalty_points" => "13"],
]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infraction');
    }
};
