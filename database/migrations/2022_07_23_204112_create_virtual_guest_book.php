<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Table guest book has to columns name and messaage
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_guest_book', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('message');
            $table->softDeletes();
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
        Schema::dropIfExists('virtual_guest_book');
    }
};
