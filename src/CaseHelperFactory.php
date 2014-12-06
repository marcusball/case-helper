<?php

namespace CaseHelper;

use Exception;


/**
 * Creates CaseHelper CaseHelper\CaseHelperInterface-objects based on the
 * provided Input-Type.
 */
class CaseHelperFactory {

    const INPUT_TYPE_SPACE_CASE = 1;
    const INPUT_TYPE_CAMEL_CASE = 2;
    const INPUT_TYPE_PASCAL_CASE = 3;
    const INPUT_TYPE_KEBAB_CASE = 4;
    const INPUT_TYPE_TRAIN_CASE = 5;
    const INPUT_TYPE_SNAKE_CASE = 6;
    const INPUT_TYPE_SCREAMING_SNAKE_CASE = 7;

    public static function make($inputType) {
        $o = null;

        switch ($inputType) {
            case static::INPUT_TYPE_SPACE_CASE:
                $o = new SpaceCaseHelper();
                break;
            case static::INPUT_TYPE_CAMEL_CASE:
                $o = new CamelCaseHelper();
                break;
            case static::INPUT_TYPE_PASCAL_CASE:
                $o = new PascalCaseHelper();
                break;
            case static::INPUT_TYPE_KEBAB_CASE:
                $o = new KebabCaseHelper();
                break;
            case static::INPUT_TYPE_TRAIN_CASE:
                $o = new TrainCaseHelper();
                break;
            case static::INPUT_TYPE_SNAKE_CASE;
                $o = new SnakeCaseHelper();
                break;
            case static::INPUT_TYPE_SCREAMING_SNAKE_CASE:
                $o = new ScreamingSnakeCaseHelper();
                break;
            default:
                throw new Exception('Unknown input case type: ' . $inputType);
        }

        return $o;
    }
}
