<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_posts', function (Blueprint $table) {
            $table->id();
            $table->string('publication')->nullable()->default('text');
            $table->text('content')->nullable();
            $table->enum('state', ['received', 'in_evaluation', 'accepted'])->nullable()->default('received');
            $table->bigInteger('category_id')->nullable();
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
        Schema::dropIfExists('_posts');
    }
}
