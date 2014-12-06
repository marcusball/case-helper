<?php

namespace CaseHelper\Test\Unit\CaseHelper;

use CaseHelper\CaseHelperFactory;


/**
 * Tests all conversions with input of type Train-Case.
 */
class TrainCaseInputTest extends TestCase {

    public function setUp() {
        $this->caseHelper = CaseHelperFactory::make(CaseHelperFactory
                ::INPUT_TYPE_TRAIN_CASE);
    }

    public function testItConvertsTrainCaseToTrainCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toTrainCase', array(
            'My-Train-Case-Str' => 'My-Train-Case-Str',
            'Yup' => 'Yup'
        ));
    }

    public function testItConvertsTrainCaseToSpaceCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSpaceCase', array(
            'I-Am-Train-Cased' => 'i am train cased',
            '2-To-Go-4' => '2 to go 4',
            'Ok' => 'ok'
        ));
    }

    public function testItConvertsTrainCaseToPascalCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toPascalCase', array(
            'Some-Train-Case-Stuff' => 'SomeTrainCaseStuff',
            'I-Dont-Know-What-To-Write' => 'IDontKnowWhatToWrite',
            '9-Whatever-9' => '9Whatever9',
            'N8' => 'N8'
        ));
    }

    public function testItConvertsTrainCaseToCamelCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toCamelCase', array(
            'Test-Me-Now-Do-It' => 'testMeNowDoIt',
            'Aww-Alright-Then' => 'awwAlrightThen',
            '1338-Is-One-Step-Ahead' => '1338IsOneStepAhead',
            'Ending-With-Number-3' => 'endingWithNumber3'
        ));
    }

    public function testItConvertsTrainCaseToKebabCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toKebabCase', array(
            'I-Like-Icecream' => 'i-like-icecream',
            'This-Is-Great' => 'this-is-great',
            '4-Eva' => '4-eva'
        ));
    }

    public function testItConvertsTrainCaseToSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSnakeCase', array(
            'Yup-Yup-Ya' => 'yup_yup_ya',
            'I-Like' => 'i_like',
            '2-Cool-4-You' => '2_cool_4_you',
            'Stuff-Times-3' => 'stuff_times_3'
        ));
    }

    public function testItConvertsTrainCaseToScreamingSnakeCase() {
        $this->assertCaseHelperConvertsCasesCorrectly('toScreamingSnakeCase', array(
            'Lets-Look-At-That' => 'LETS_LOOK_AT_THAT',
            'Yup' => 'YUP',
            'I-Like-Testing' => 'I_LIKE_TESTING',
            'Something-1337-Pls' => 'SOMETHING_1337_PLS',
            '1-Yes-1' => '1_YES_1'
        ));
    }
}
