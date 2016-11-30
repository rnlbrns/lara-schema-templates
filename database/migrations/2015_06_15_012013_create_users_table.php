<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            \SchemaBuilders\SchemaBuilderManager::getInstance("Person")->modify($table);
            $table->string('account_id')->nullable();
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->string('employee_number')->nullable()->unique();
            $table->date('birth_date')->nullable();
            $table->date('date_hired')->nullable();
            $table->string('position')->nullable();
            $table->string('login_status')->nullable();
            $table->string('username')->nullable()->unique();
            $table->string('password')->nullable();
            $table->dateTime('last_log_in')->nullable();
            $table->dateTime('pwd_last_changed')->nullable();
            $table->string('user_type')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}