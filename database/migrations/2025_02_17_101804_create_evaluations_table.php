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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date("DATE");
            $table->time("TIME");
            $table->unsignedBigInteger("infraction_id");
            $table->unsignedBigInteger("coffeeshop_id");
                $table->foreign("coffeeshop_id")-> references("id")-> on ("coffeeshop")-> onDelete("cascade")-> onUpdate("cascade");
                $table->foreign("infraction_id")-> references("id")-> on ("infraction")-> onDelete("cascade")-> onUpdate("cascade");


            });

            DB::table("evaluations")->insert([
                ["DATE" => "2022/11/11", "TIME" => "12:00:00", "infraction_id" => 1, "coffeeshop_id" => 1],
                ["DATE" => "2022/11/12", "TIME" => "13:30:00", "infraction_id" => 2, "coffeeshop_id" => 2],
                ["DATE" => "2022/11/13", "TIME" => "14:15:00", "infraction_id" => 3, "coffeeshop_id" => 3],
                ["DATE" => "2022/11/14", "TIME" => "15:45:00", "infraction_id" => 4, "coffeeshop_id" => 4],
                ["DATE" => "2022/11/15", "TIME" => "10:20:00", "infraction_id" => 5, "coffeeshop_id" => 5],
                ["DATE" => "2022/11/16", "TIME" => "09:10:00", "infraction_id" => 6, "coffeeshop_id" => 6],
                ["DATE" => "2022/11/17", "TIME" => "08:45:00", "infraction_id" => 7, "coffeeshop_id" => 7],
                ["DATE" => "2022/11/18", "TIME" => "17:20:00", "infraction_id" => 8, "coffeeshop_id" => 8],
                ["DATE" => "2022/11/19", "TIME" => "11:35:00", "infraction_id" => 9, "coffeeshop_id" => 9],
                ["DATE" => "2022/11/20", "TIME" => "16:00:00", "infraction_id" => 10, "coffeeshop_id" => 10],
                ["DATE" => "2022/11/21", "TIME" => "14:50:00", "infraction_id" => 11, "coffeeshop_id" => 11],
                ["DATE" => "2022/11/22", "TIME" => "12:10:00", "infraction_id" => 12, "coffeeshop_id" => 12],
                ["DATE" => "2022/11/23", "TIME" => "13:40:00", "infraction_id" => 13, "coffeeshop_id" => 13],
                ["DATE" => "2022/11/24", "TIME" => "15:55:00", "infraction_id" => 14, "coffeeshop_id" => 14],
                ["DATE" => "2022/11/25", "TIME" => "10:05:00", "infraction_id" => 15, "coffeeshop_id" => 15],
                ["DATE" => "2022/11/26", "TIME" => "09:25:00", "infraction_id" => 16, "coffeeshop_id" => 16],
                ["DATE" => "2022/11/27", "TIME" => "08:15:00", "infraction_id" => 17, "coffeeshop_id" => 17],
                ["DATE" => "2022/11/28", "TIME" => "17:10:00", "infraction_id" => 18, "coffeeshop_id" => 18],
                ["DATE" => "2022/11/29", "TIME" => "11:45:00", "infraction_id" => 19, "coffeeshop_id" => 19],
                ["DATE" => "2022/11/30", "TIME" => "16:30:00", "infraction_id" => 20, "coffeeshop_id" => 20],
            ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
