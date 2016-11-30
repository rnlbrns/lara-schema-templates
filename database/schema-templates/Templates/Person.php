<?php

namespace SchemaBuilders\Templates;

use Illuminate\Database\Schema\Blueprint;

class Person extends Basic
{
    public function modify(Blueprint &$table)
    {
        parent::modify($table);

        $table->string('picture')->nullable();
        $table->string('salutation')->nullable();
        $table->string('first_name')->nullable();
        $table->string('middle_name')->nullable();
        $table->string('last_name')->nullable();
        $table->string('title')->nullable();
        $table->string('facebook')->nullable();
        $table->string('twitter')->nullable();
        $table->string('googleplus')->nullable();
        $table->string('department')->nullable();
        $table->string('phone_mobile')->nullable();
        $table->string('phone_work')->nullable();
        $table->string('phone_home')->nullable();
        $table->string('phone_other')->nullable();
        $table->string('primary_address_street')->nullable();
        $table->string('primary_address_city')->nullable();
        $table->string('primary_address_state')->nullable();
        $table->string('primary_address_postalcode')->nullable();
        $table->string('primary_address_country')->nullable();
        $table->string('alternate_address_street')->nullable();
        $table->string('alternate_address_city')->nullable();
        $table->string('alternate_address_state')->nullable();
        $table->string('alternate_address_postalcode')->nullable();
        $table->string('alternate_address_country')->nullable();
        $table->string('email_address')->nullable(); //ToDo: Implement a diferrent table for email addresses
    }
}