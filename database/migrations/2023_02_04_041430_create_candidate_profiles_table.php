<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_profiles', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('name');
            $table->foreignId('user_id');
            $table->string('email');
            $table->date('dob')->nullable();
            $table->string('phone_number');
            $table->longText('about')->nullable();
            $table->jsonb('key_skills');
            $table->integer('work_exp_range_from')->nullable();
            $table->integer('work_exp_range_to')->nullable();
            $table->string('salary_currency')->nullable();
            $table->decimal('salary_range_from', 13)->nullable();
            $table->decimal('salary_range_to', 13)->nullable();
            $table->string('location');
            $table->boolean('is_willing_to_relocate')->default(false);
            $table->string('industry')->nullable();
            $table->string('functional_area')->nullable();
            $table->text('address')->nullable();
            $table->longText('resume')->nullable();
            $table->longText('current_company')->nullable();
            $table->longText('current_department')->nullable();
            $table->boolean('is_enabled')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_profiles');
    }
};
