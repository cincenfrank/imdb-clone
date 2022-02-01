<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditTypesToMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            //
            $table->dropColumn('duration');
            $table->integer('duration_minutes')->after('published_at');;
            $table->bigInteger('pegi_id')->change();
            $table->decimal('rating', 4, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            //
            $table->dropColumn('duration_minutes');
            $table->string('duration')->after('published_at');
            $table->string('pegi_id')->change();
            $table->string('rating', 4, 2)->change();
        });
    }
}
