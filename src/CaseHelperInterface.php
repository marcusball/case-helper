<?php

namespace CaseHelper;


/**
 * This interface ensures methods for conversion to specific cases.
 */
interface CaseHelperInterface {

    /**
     * Converts the specified string to space case.
     *
     * @param string $str
     * @return string
     */
    public function toSpaceCase($str);

    /**
     * Converts the specified string to camelCase.
     *
     * @param string $str
     * @return string
     */
    public function toCamelCase($str);

    /**
     * Converts the specified string to PascalCase.
     *
     * @param string $str
     * @return string
     */
    public function toPascalCase($str);

    /**
     * Converts the specified string to kebab-case.
     *
     * @param string $str
     * @return string
     */
    public function toKebabCase($str);

    /**
     * Converts the specified string to snake_case.
     *
     * @param string $str
     * @return string
     */
    public function toSnakeCase($str);

    /**
     * Converts the specified string to SCREAMING_SNAKE_CASE.
     *
     * @param string $str
     * @return string
     */
    public function toScreamingSnakeCase($str);

    /**
     * Converts the specified string to Train-Case.
     *
     * @param string $str
     * @return string
     */
    public function toTrainCase($str);
}
