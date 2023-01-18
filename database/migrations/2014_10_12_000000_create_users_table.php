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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('hs_id');
            $table->integer('director_id');
            $table->integer('mec_id');
            $table->integer('country_id');
            $table->integer('region_id');
            $table->integer('city_id');
            $table->integer('postal');
            $table->string('name');
            $table->string('phone', 30);
            $table->string('email')->unique();
            $table->string('email2');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            $table->string('website');
            $table->string('fax');
            $table->string('address');
            $table->string('address_short');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('plan_preference');
            $table->integer('leads');
            $table->string('business_status');
            $table->integer('google_user_ratings_total');
            $table->decimal('google_rating',8,2);
            $table->string('revisor');
            $table->boolean('active')->default(false);
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
