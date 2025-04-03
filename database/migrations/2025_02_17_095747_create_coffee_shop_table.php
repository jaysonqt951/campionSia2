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
        Schema::create('coffeeshop', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name", 45);
            $table->unsignedBigInteger("owner_id");
            $table->string("phone_number", 15);
            $table->foreign("owner_id")->references("id")->on("owner")->onDelete("cascade")->onUpdate("cascade");
        });



        DB::table("coffeeshop")->insert([
            ["name" => "Udangs Starbucks", "owner_id" => 1, "phone_number" => "12345678001"],
            ["name" => "Beans & Brews", "owner_id" => 2, "phone_number" => "12345678002"],
            ["name" => "Caffeine Haven", "owner_id" => 3, "phone_number" => "12345678003"],
            ["name" => "The Roastery", "owner_id" => 4, "phone_number" => "12345678004"],
            ["name" => "Java Junction", "owner_id" => 5, "phone_number" => "12345678005"],
            ["name" => "Daily Grind Café", "owner_id" => 6, "phone_number" => "12345678006"],
            ["name" => "Espresso Express", "owner_id" => 7, "phone_number" => "12345678007"],
            ["name" => "Morning Bliss Coffee", "owner_id" => 8, "phone_number" => "12345678008"],
            ["name" => "Steamy Sips", "owner_id" => 9, "phone_number" => "12345678009"],
            ["name" => "Mug Life", "owner_id" => 10, "phone_number" => "12345678010"],
            ["name" => "Cup & Joy", "owner_id" => 11, "phone_number" => "12345678011"],
            ["name" => "Brewtopia", "owner_id" => 12, "phone_number" => "12345678012"],
            ["name" => "Cuppa Comfort", "owner_id" => 13, "phone_number" => "12345678013"],
            ["name" => "Latte Love", "owner_id" => 14, "phone_number" => "12345678014"],
            ["name" => "Perk Up Café", "owner_id" => 15, "phone_number" => "12345678015"],
            ["name" => "Grounds & Beans", "owner_id" => 16, "phone_number" => "12345678016"],
            ["name" => "The Cozy Bean", "owner_id" => 17, "phone_number" => "12345678017"],
            ["name" => "Café Serenity", "owner_id" => 18, "phone_number" => "12345678018"],
            ["name" => "Hearth & Roast", "owner_id" => 19, "phone_number" => "12345678019"],
            ["name" => "Velvet Brew", "owner_id" => 20, "phone_number" => "12345678020"],
        ]);


    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffeeshop');
    }
};
