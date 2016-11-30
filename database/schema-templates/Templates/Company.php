<?php

namespace SchemaBuilders\Templates;

use Illuminate\Database\Schema\Blueprint;

class Company extends Basic
{
    public function modify(Blueprint &$table)
    {
        parent::modify($table);

        $table->string('logo')->nullable();
        $table->string('facebook')->nullable();
        $table->string('twitter')->nullable();
        $table->string('googleplus')->nullable();
        $table->string('industry')->nullable();
        $table->string('website')->nullable();
        $table->string('phone_fax')->nullable();
        $table->string('phone_office')->nullable();
        $table->string('phone_alternate')->nullable();
        $table->string('billing_address_street')->nullable();
        $table->string('billing_address_city')->nullable();
        $table->string('billing_address_state')->nullable();
        $table->string('billing_address_postalcode')->nullable();
        $table->string('billing_address_country')->nullable();
        $table->string('shipping_address_street')->nullable();
        $table->string('shipping_address_city')->nullable();
        $table->string('shipping_address_state')->nullable();
        $table->string('shipping_address_postalcode')->nullable();
        $table->string('shipping_address_country')->nullable();
        $table->string('email_address')->nullable();
    }
}