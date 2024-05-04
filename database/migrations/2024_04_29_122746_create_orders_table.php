<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('s_first_name')->nullable();
            $table->string('s_last_name')->nullable();
            $table->string('s_zip')->nullable();
            $table->string('s_address')->nullable();
            $table->string('s_city')->nullable();
            $table->string('s_state')->nullable();
            $table->string('s_dob')->nullable();
            $table->string('s_email')->nullable();
            $table->string('s_phone')->nullable();
            $table->string('s_passport')->nullable();
            $table->string('s_eid')->nullable();
            $table->string('s_salary')->nullable();
            $table->boolean('s_type')->default(0);

            $table->string('r_first_name')->nullable();
            $table->string('r_last_name')->nullable();
            $table->string('r_zip')->nullable();
            $table->string('r_address')->nullable();
            $table->string('r_city')->nullable();
            $table->string('r_state')->nullable();
            $table->string('r_dob')->nullable();
            $table->string('r_email')->nullable();
            $table->string('r_phone')->nullable();
            $table->string('r_passport')->nullable();
            $table->string('r_eid')->nullable();
            $table->string('r_salary')->nullable();
            $table->boolean('r_type')->default(0);

            $table->string('amount')->nullable();
            $table->string('description')->nullable();
            $table->string('type')->nullable();
            $table->string('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
