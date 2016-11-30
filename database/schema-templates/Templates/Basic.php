<?php

namespace SchemaBuilders\Templates;

use Illuminate\Database\Schema\Blueprint;

class Basic
{
    /**
     * @param Blueprint $table
     */
    public function modify(Blueprint &$table)
    {
        $table->string('id', 36);
        $table->string('name', 255)->nullable();
        $table->text("description")->nullable();
        $table->dateTime('created_at')->nullable();
        $table->string('created_by')->nullable();
        $table->dateTime('updated_at')->nullable();
        $table->string('updated_by')->nullable();
        $table->dateTime('deleted_at')->nullable();
        $table->string('deleted_by')->nullable();

        $table->index(['updated_at']);
        $table->primary('id');
    }
}