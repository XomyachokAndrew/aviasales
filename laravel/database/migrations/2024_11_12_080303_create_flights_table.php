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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('fight_number');
            $table->string('where_from');
            $table->string('to_where');
            $table->enum('day_of_week', [
                'ПН',
                'ВТ',
                'СР',
                'ЧТ',
                'ПТ',
                'СБ',
                'ВС',
            ]);
            $table->time('execution_time');
            $table->time('travel_time');
            $table->enum('class', [
                'Первый',
                'Бизнес',
                'Эконом'
            ]);
            // $table->time('duration');
            $table->integer('number_seats');
            $table->decimal('cost');
            $table->dateTime('departure_datetime');
            $table->dateTime('actual_departure_datetime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
