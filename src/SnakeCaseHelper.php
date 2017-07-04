<?php

namespace CaseHelper;


/**
 * Converts snake_case strings to other formats.
 */
class SnakeCaseHelper extends AbstractCaseHelper {

    public function toSpaceCase($str) {
        return str_replace('_', ' ', $str);
    }

    public function toCamelCase($str) {
        return $this->mb_lcfirst(preg_replace_callback('/_./u', function($el) {
            return mb_strtoupper(mb_substr($el[0], 1, parent::INT_MAX, $this->encoding), $this->encoding);
        }, $str), $this->encoding);
    }

    public function toKebabCase($str) {
        return preg_replace_callback('/_./u', function($el) {
            return '-' . mb_substr($el[0], 1, parent::INT_MAX, $this->encoding);
        }, $str);
    }

    public function toPascalCase($str) {
        return $this->mb_ucfirst($this->toCamelCase($str), $this->encoding);
    }

    public function toScreamingSnakeCase($str) {
        return mb_strtoupper($str, $this->encoding);
    }

    public function toSnakeCase($str) {
        return $str;
    }

    public function toTrainCase($str) {

        return $this->mb_ucfirst(preg_replace_callback('/_./u', function($el) {
            return '-' . mb_strtoupper(mb_substr($el[0], 1, parent::INT_MAX, $this->encoding), $this->encoding);
        }, $str), $this->encoding);
    }
}
