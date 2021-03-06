<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTranslationIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->integer('locale_id')->unsigned();
            $table->integer('translation_id')->unsigned();
            $table->unique(['translation_id', 'locale_id']);
            $table->foreign('translation_id')->references('id')->on('translations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('locale_id')->references('id')->on('locales')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
