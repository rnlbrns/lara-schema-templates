<?php

namespace SchemaBuilders\Templates;

use Illuminate\Database\Schema\Blueprint;

class File extends Basic
{
    public function modify(Blueprint &$table)
    {
        parent::modify($table);

        $table->string('original_file_name')->nullable();
        $table->string('original_file_path')->nullable();
        $table->string('file_name')->nullable();
        $table->string('file_path')->nullable();
        $table->string('file_ext')->nullable();
        $table->string('file_mime_type')->nullable();
        $table->date('active_date')->nullable();
        $table->date('exp_date')->nullable();
    }
}