<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        User::create([
            'id' => 1,
            'unique_id' => Str::uuid()->toString(),
            'name' => 'ADMIN',
            'lastName' => 'GENERAL',
            'identify' => 1111111111,
            'phone' => 111111111111,
            'email' => 'admin@engagement.com',
            'password' => bcrypt('Engagement.2023'),
            'city' => 'NN',
            'dateBirth' => '1999/01/01',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
