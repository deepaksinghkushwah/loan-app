<?php

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
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("cell");
            $table->string("email");
            $table->text("address");
            $table->double("loan_amount")->default(0.00);
            $table->string("loan_purpose")->nullable(true);
            $table->string("loan_tenure")->nullable(true);
            $table->text('reason_for_loan')->nullable(true);
            $table->enum('loan_type',['personal','home'])->default('personal');
            $table->enum('status',['applied','passed','rejected'])->default('applied');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_applications');
    }
};
