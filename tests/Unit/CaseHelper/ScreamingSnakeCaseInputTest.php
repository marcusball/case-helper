<?php

namespace CaseHelper\Test\Unit\CaseHelper;

use CaseHelper\CaseHelperFactory;


/**
 * Tests all conversions with input of type SCREAMING_SNAKE_CASE.
 */
class ScreamingSnakeCaseInputTest extends TestCase {

    public function setUp() {
        $this->caseHelper = CaseHelperFactory::make(CaseHelperFactory
                ::INPUT_TYPE_SCREAMING_SNAKE_CASE);
    }

    public function testItConvertsScreamingSnakeCaseToScreamingSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toScreamingSnakeCase', array(
            'LEAVE_ME_ALONE' => 'LEAVE_ME_ALONE',
            '3_NUMBERS_AND_STUFF_4' => '3_NUMBERS_AND_STUFF_4',
            'DONT_L👀K_AT_ME_LIKE_THAT' => 'DONT_L👀K_AT_ME_LIKE_THAT',
            'MY_🍕_IS_GOOD' => 'MY_🍕_IS_GOOD',
            "FRIDAY_🍺S_FOREVER" => 'FRIDAY_🍺S_FOREVER'
        ));
    }

    public function testItConvertsScreamingSnakeCaseToSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSnakeCase', array(
            'OKAY_THEN' => 'okay_then',
            '3_TIMES_4_EQUALS_12' => '3_times_4_equals_12',
            '2_COOL_4_YOU' => '2_cool_4_you',
            'DONT_L👀K_AT_ME_LIKE_THAT' => 'dont_l👀k_at_me_like_that',
            'MY_🍕_IS_GOOD' => 'my_🍕_is_good',
            "FRIDAY_🍺S_FOREVER" => 'friday_🍺s_forever'
        ));
    }

    public function testItConvertsScreamingSnakeCaseToSpaceCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSpaceCase', array(
            'TRY_ME_WITH_SPACES' => 'try me with spaces',
            'I_AM_NUMBER_1' => 'i am number 1',
            '2_NUMBERS_2' => '2 numbers 2',
            'DONT_L👀K_AT_ME_LIKE_THAT' => 'dont l👀k at me like that',
            'MY_🍕_IS_GOOD' => 'my 🍕 is good',
            "FRIDAY_🍺S_FOREVER" => 'friday 🍺s forever'
        ));
    }

    public function testItConvertsScreamingSnakeCaseToTrainCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toTrainCase', array(
            'MAKE_ME_TRAIN_CASE' => 'Make-Me-Train-Case',
            '23_SOME_NUMBERS_12' => '23-Some-Numbers-12',
            '4_REAL' => '4-Real',
            'DONT_L👀K_AT_ME_LIKE_THAT' => 'Dont-L👀k-At-Me-Like-That',
            'MY_🍕_IS_GOOD' => 'My-🍕-Is-Good',
            "FRIDAY_🍺S_FOREVER" => "Friday-🍺s-Forever"
        ));
    }

    public function testItConvertsScreamingSnakeCaseToPascalCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toPascalCase', array(
            'YO_OKAY_NOW' => 'YoOkayNow',
            '7_LUCKY_7' => '7Lucky7',
            '4_ALL_PEOPLE' => '4AllPeople',
            'DONT_L👀K_AT_ME_LIKE_THAT' => 'DontL👀kAtMeLikeThat',
            'MY_🍕_IS_GOOD' => 'My🍕IsGood',
            "FRIDAY_🍺S_FOREVER" => "Friday🍺sForever"
        ));
    }

    public function testItConvertsScreamingSnakeCaseToCamelCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toCamelCase', array(
            'CONVERT_ME_NOW' => 'convertMeNow',
            '3_YUP_YAP_4' => '3YupYap4',
            '24_HOURS' => '24Hours',
            'DONT_L👀K_AT_ME_LIKE_THAT' => 'dontL👀kAtMeLikeThat',
            'MY_🍕_IS_GOOD' => 'my🍕IsGood',
            "FRIDAY_🍺S_FOREVER" => "friday🍺sForever"
        ));
    }

    public function testItConvertsScreamingSnakeCaseToKebabCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toKebabCase', array(
            'MY_CAPSLOCK_DOESNT_WORK_ANYMORE' => 'my-capslock-doesnt-work-anymore',
            '4_REAL_MAN' => '4-real-man',
            '1_NUMBERS_3' => '1-numbers-3',
            'DONT_L👀K_AT_ME_LIKE_THAT' => 'dont-l👀k-at-me-like-that',
            'MY_🍕_IS_GOOD' => 'my-🍕-is-good',
            "FRIDAY_🍺S_FOREVER" => "friday-🍺s-forever"
        ));
    }
}
