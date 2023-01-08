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
        Schema::create('p_tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('distance');
            $table->string('right_eye_without_corr');
            $table->string('left_eye_without_corr');
            $table->string('right_eye_with_corr');
             $table->string('left_eye_with_corr');
            $table->date('date');
            // $table->integer('month');
            $table->text('vision_act_test');
            $table->text('correctedBy')->nullable();
             $table->text('addedBy');
            $table->text('report')->nullable();
            $table->integer('cost');
            $table->string('attach')->nullable();
            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id')->references('id')->on('tests')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('p_tests');
    }
};
