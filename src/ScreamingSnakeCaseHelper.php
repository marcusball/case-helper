<?php

namespace CaseHelper;


/**
 * Converts SCREAMING_SNAKE_CASE strings to other formats.
 */
class ScreamingSnakeCaseHelper implements CaseHelperInterface {

    public function toSpaceCase($str) {
        return strtolower(str_replace('_', ' ', $str));
    }

    public function toCamelCase($str) {
        return preg_replace_callback('/_[a-z0-9]/', function($el) {
            return strtoupper(substr($el[0], 1));
        }, strtolower($str));
    }

    public function toKebabCase($str) {
        return strtolower(preg_replace_callback('/_[A-Z0-9]/', function($el) {
            return '-' . substr($el[0], 1);
        }, $str));
    }

    public function toPascalCase($str) {
        return ucfirst($this->toCamelCase($str));
    }

    public function toScreamingSnakeCase($str) {
        return $str;
    }

    public function toSnakeCase($str) {
        return strtolower($str);
    }

    public function toTrainCase($str) {

        return ucfirst(preg_replace_callback('/_[a-z0-9]/', function($el) {
            return '-' . strtoupper(substr($el[0], 1));
        }, strtolower($str)));
    }
}
