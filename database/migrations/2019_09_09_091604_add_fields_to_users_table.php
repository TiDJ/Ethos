<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('main_class');
            $table->string('main_role'); 
            $table->string('main_name');
            $table->string('reroll_class')->nullable();
            $table->string('reroll_role')->nullable();
            $table->string('reroll_name')->nullable();
            $table->string('bio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('main_class');
            $table->dropColumn('main_role'); 
            $table->dropColumn('main_name');
            $table->dropColumn('reroll_class');
            $table->dropColumn('reroll_role');
            $table->dropColumn('reroll_name');
            $table->dropColumn('bio');
        });
    }
}
