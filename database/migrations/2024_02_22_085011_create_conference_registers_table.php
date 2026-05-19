<?php

use App\Models\ConferenceRegister;
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
        Schema::create('conference_registers', function (Blueprint $table) {
            $table->id();
            $table->string('registration_no')->nullable();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('institution')->nullable();
            $table->string('category')->nullable();
            $table->string('package')->nullable();
            $table->string('award')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_proof')->nullable();
            $table->string('receipt_no')->nullable();
            $table->string('cn_register_no')->nullable();
            $table->integer('cn_id')->nullable();
            $table->integer('w_id')->nullable();


            $table->string('registration_type')->nullable();
            $table->string('status')->default('PENDING');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conference_registers');
    }
};
