<?php

namespace SchemaBuilders;

class SchemaBuilderManager
{
    CONST BASE_TEMPLATE_PATH = "SchemaBuilders\\Templates\\";

    /**
     * @param $type
     * @return Object - \SchemaBuilders\Templates\<type>
     */
    public static function getInstance($type)
    {
        $class = self::BASE_TEMPLATE_PATH . $type;
        return new $class();
    }
}