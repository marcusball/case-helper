<?php

namespace CaseHelper;


/**
 * Converts snake_case strings to other formats.
 */
class SnakeCaseHelper implements CaseHelperInterface {

    public function toSpaceCase($str) {
        return str_replace('_', ' ', $str);
    }

    public function toCamelCase($str) {
        return preg_replace_callback('/_[a-z0-9]/', function($el) {
            return strtoupper(substr($el[0], 1));
        }, $str);
    }

    public function toKebabCase($str) {
        return preg_replace_callback('/_[a-z0-9]/', function($el) {
            return '-' . substr($el[0], 1);
        }, $str);
    }

    public function toPascalCase($str) {
        return ucfirst($this->toCamelCase($str));
    }

    public function toScreamingSnakeCase($str) {
        return strtoupper($str);
    }

    public function toSnakeCase($str) {
        return $str;
    }

    public function toTrainCase($str) {

        return ucfirst(preg_replace_callback('/_[a-z0-9]/', function($el) {
            return '-' . strtoupper(substr($el[0], 1));
        }, $str));
    }
}
