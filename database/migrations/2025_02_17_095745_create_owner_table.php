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
        Schema::create('owner', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("names", 45);
            $table->string("contact_phone", 15);
        });

        DB::table("owner")->insert([

    ["names" => "Liam Johnson", "contact_phone" => "12345678001"],
    ["names" => "Olivia Smith", "contact_phone" => "12345678002"],
    ["names" => "Noah Brown", "contact_phone" => "12345678003"],
    ["names" => "Emma Davis", "contact_phone" => "12345678004"],
    ["names" => "Oliver Wilson", "contact_phone" => "12345678005"],
    ["names" => "Ava Martinez", "contact_phone" => "12345678006"],
    ["names" => "Elijah Anderson", "contact_phone" => "12345678007"],
    ["names" => "Charlotte Thomas", "contact_phone" => "12345678008"],
    ["names" => "William Taylor", "contact_phone" => "12345678009"],
    ["names" => "Sophia Moore", "contact_phone" => "12345678010"],
    ["names" => "James Harris", "contact_phone" => "12345678011"],
    ["names" => "Amelia Clark", "contact_phone" => "12345678012"],
    ["names" => "Benjamin Rodriguez", "contact_phone" => "12345678013"],
    ["names" => "Mia Lewis", "contact_phone" => "12345678014"],
    ["names" => "Lucas Walker", "contact_phone" => "12345678015"],
    ["names" => "Harper Hall", "contact_phone" => "12345678016"],
    ["names" => "Henry Allen", "contact_phone" => "12345678017"],
    ["names" => "Evelyn Young", "contact_phone" => "12345678018"],
    ["names" => "Alexander King", "contact_phone" => "12345678019"],
    ["names" => "Isabella Scott", "contact_phone" => "12345678020"],
]);




           
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner');
    }
};
