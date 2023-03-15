<?php

use App\Models\Jetski;
use App\Models\User;
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
        Schema::create('jetski_user', function (Blueprint $table) {
            $table->id();
   
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Jetski::class);
            $table->dateTime("date_in");
            $table->dateTime("date_out");
            $table->double("total_price");
   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jetski_user');
    }
};
