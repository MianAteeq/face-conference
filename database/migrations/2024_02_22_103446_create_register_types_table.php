<?php

use Carbon\Carbon;
use App\Models\RegisterType;
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
        Schema::create('register_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->double('price')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });

        RegisterType::create([
            "name" => "FACE / IADSR Member",
            "type"=>"Conference",
            "price" => 5000.00,
            'start_date'=>Carbon::parse('01-02-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('14-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "General ",
            "type"=>"Conference",
            "price" => 8000.00,
            'start_date'=>Carbon::parse('01-02-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('14-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "PG Trainee",
            "type"=>"Conference",
            "price" => 5500.00,
            'start_date'=>Carbon::parse('01-02-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('14-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "Student ",
            "type"=>"Conference",
            "price" => 4500.00,
            'start_date'=>Carbon::parse('01-02-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('14-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "Pharma Representative",
            "type"=>"Conference",
            "price" => 6000.00,
            'start_date'=>Carbon::parse('01-02-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('14-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "Spouse Accompanying (Including Children)",
            "type"=>"Conference",
            "price" => 5000.00,
            'start_date'=>Carbon::parse('01-02-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('14-03-2024')->format('Y-m-d H:i:s')

        ]);


        RegisterType::create([
            "name" => "FACE / IADSR Member",
            "type"=>"Conference",
            "price" => 6500.00,
            'start_date'=>Carbon::parse('15-03-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('31-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "General ",
            "type"=>"Conference",
            "price" => 10400.00,
            'start_date'=>Carbon::parse('15-03-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('31-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "PG Trainee",
            "type"=>"Conference",
            "price" => 7150.00,
            'start_date'=>Carbon::parse('15-03-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('31-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "Student ",
            "type"=>"Conference",
            "price" => 5850.00,
            'start_date'=>Carbon::parse('15-03-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('31-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "Pharma Representative",
            "type"=>"Conference",
            "price" => 7800.00,
            'start_date'=>Carbon::parse('15-03-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('31-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "Spouse Accompanying (Including Children)",
            "type"=>"Conference",
            "price" => 6500.00,
            'start_date'=>Carbon::parse('15-03-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('31-03-2024')->format('Y-m-d H:i:s')

        ]);

        RegisterType::create([
            "name" => "Full Face Filler & Anatomy Master Class",
            "type"=>"Workshop",
            "price" => 100000.00,
            'start_date'=>Carbon::parse('01-02-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('14-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "Full Face Filler & Anatomy Master Class",
            "type"=>"Workshop",
            "price" => 115000.00,
            'start_date'=>Carbon::parse('15-03-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('31-03-2024')->format('Y-m-d H:i:s')

        ]);

        RegisterType::create([
            "name" => "APTOS Thread Lifting",
            "type"=>"Workshop",
            "price" => 80000.00,
            'start_date'=>Carbon::parse('01-02-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('14-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "APTOS Thread Lifting",
            "type"=>"Workshop",
            "price" => 95000.00,
            'start_date'=>Carbon::parse('15-03-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('31-03-2024')->format('Y-m-d H:i:s')

        ]);

        RegisterType::create([
            "name" => "Facial Fat Grafting Master Class",
            "type"=>"Workshop",
            "price" => 80000.00,
            'start_date'=>Carbon::parse('01-02-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('14-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "Facial Fat Grafting Master Class",
            "type"=>"Workshop",
            "price" => 95000.00,
            'start_date'=>Carbon::parse('15-03-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('31-03-2024')->format('Y-m-d H:i:s')

        ]);

        RegisterType::create([
            "name" => "Laser & Aesthetic Skin Therapy",
            "type"=>"Workshop",
            "price" => 80000.00,
            'start_date'=>Carbon::parse('01-02-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('14-03-2024')->format('Y-m-d H:i:s')

        ]);
        RegisterType::create([
            "name" => "Laser & Aesthetic Skin Therapy",
            "type"=>"Workshop",
            "price" => 95000.00,
            'start_date'=>Carbon::parse('15-03-2024')->format('Y-m-d H:i:s'),
            'end_date'=>Carbon::parse('31-03-2024')->format('Y-m-d H:i:s')

        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_types');
    }
};
