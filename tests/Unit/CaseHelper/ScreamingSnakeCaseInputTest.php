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
            '3_NUMBERS_AND_STUFF_4' => '3_NUMBERS_AND_STUFF_4'
        ));
    }

    public function testItConvertsScreamingSnakeCaseToSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSnakeCase', array(
            'OKAY_THEN' => 'okay_then',
            '3_TIMES_4_EQUALS_12' => '3_times_4_equals_12',
            '2_COOL_4_YOU' => '2_cool_4_you'
        ));
    }

    public function testItConvertsScreamingSnakeCaseToSpaceCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSpaceCase', array(
            'TRY_ME_WITH_SPACES' => 'try me with spaces',
            'I_AM_NUMBER_1' => 'i am number 1',
            '2_NUMBERS_2' => '2 numbers 2'
        ));
    }

    public function testItConvertsScreamingSnakeCaseToTrainCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toTrainCase', array(
            'MAKE_ME_TRAIN_CASE' => 'Make-Me-Train-Case',
            '23_SOME_NUMBERS_12' => '23-Some-Numbers-12',
            '4_REAL' => '4-Real'
        ));
    }

    public function testItConvertsScreamingSnakeCaseToPascalCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toPascalCase', array(
            'YO_OKAY_NOW' => 'YoOkayNow',
            '7_LUCKY_7' => '7Lucky7',
            '4_ALL_PEOPLE' => '4AllPeople'
        ));
    }

    public function testItConvertsScreamingSnakeCaseToCamelCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toCamelCase', array(
            'CONVERT_ME_NOW' => 'convertMeNow',
            '3_YUP_YAP_4' => '3YupYap4',
            '24_HOURS' => '24Hours'
        ));
    }

    public function testItConvertsScreamingSnakeCaseToKebabCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toKebabCase', array(
            'MY_CAPSLOCK_DOESNT_WORK_ANYMORE' => 'my-capslock-doesnt-work-anymore',
            '4_REAL_MAN' => '4-real-man',
            '1_NUMBERS_3' => '1-numbers-3'
        ));
    }
}
