<?php

namespace SchemaBuilders\Templates;

use Illuminate\Database\Schema\Blueprint;

class Issue extends Basic
{
    public function modify(Blueprint &$table)
    {
        parent::modify($table);

        $table->integer('case_number');
        $table->string('type')->nullable();
        $table->string('status')->nullable();
        $table->string('priority')->nullable();

        $table->index(['case_number']);
    }
}