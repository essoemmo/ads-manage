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
        Schema::create('ad_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ad_id')->nullable()->constrained('ads')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('tag_id')->nullable()->constrained('tags')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('ad_tags');
    }
};
