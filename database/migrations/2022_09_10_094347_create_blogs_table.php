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
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements ('id');
            $table->string('title');
            $table->text('content');
            $table->dateTime ('published_at')->nullable();
            $table->integer('author_id')->unsigned();
            $table->string('featured image')->nullable();
            $table->string('slug', 191)->nullable();
            $table->enum ('status', ['Published', 'Draft', 'InActive', 'Scheduled'])->default('Draft');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
