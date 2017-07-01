<?php

namespace CaseHelper\Test\Unit\CaseHelper;

use CaseHelper\CaseHelperFactory;


/**
 * Tests all conversions with input of type snake_case.
 */
class SnakeCaseInputTest extends TestCase {

    public function setUp() {
        $this->caseHelper = CaseHelperFactory::make(CaseHelperFactory
                ::INPUT_TYPE_SNAKE_CASE);
    }

    public function testItConvertsSnakeCaseToSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSnakeCase', array(
            'my_snake_str' => 'my_snake_str',
            '3_times_yolo' => '3_times_yolo',
            'dont_l👀k_at_me_like_that' => 'dont_l👀k_at_me_like_that',
            'my_🍕_is_good' => 'my_🍕_is_good',
            "friday_🍺s_forever" => 'friday_🍺s_forever'
        ));
    }

    public function testItConvertsSnakeCaseToScreamingSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toScreamingSnakeCase', array(
            'lets_get_loud' => 'LETS_GET_LOUD',
            '1337_is_short_for_31337' => '1337_IS_SHORT_FOR_31337',
            'dont_l👀k_at_me_like_that' => 'DONT_L👀K_AT_ME_LIKE_THAT',
            'my_🍕_is_good' => 'MY_🍕_IS_GOOD',
            "friday_🍺s_forever" => 'FRIDAY_🍺S_FOREVER'
        ));
    }

    public function testItConvertsSnakeCaseToSpaceCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSpaceCase', array(
            'make_me_spaced' => 'make me spaced',
            '1_what_2' => '1 what 2',
            '4_you' => '4 you',
            'dont_l👀k_at_me_like_that' => 'dont l👀k at me like that',
            'my_🍕_is_good' => 'my 🍕 is good',
            "friday_🍺s_forever" => 'friday 🍺s forever'
        ));
    }

    public function testItConvertsSnakeCaseToTrainCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toTrainCase', array(
            'i_want_to_be_train_case' => 'I-Want-To-Be-Train-Case',
            'me_too' => 'Me-Too',
            '4_you_2' => '4-You-2',
            'dont_l👀k_at_me_like_that' => 'Dont-L👀k-At-Me-Like-That',
            'my_🍕_is_good' => 'My-🍕-Is-Good',
            "friday_🍺s_forever" => 'Friday-🍺s-Forever'
        ));
    }

    public function testItConvertsSnakeCaseToPascalCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toPascalCase', array(
            'some_snake_stuff' => 'SomeSnakeStuff',
            '3_whatever_it_may_be_4' => '3WhateverItMayBe4',
            'dont_l👀k_at_me_like_that' => 'DontL👀kAtMeLikeThat',
            'my_🍕_is_good' => 'My🍕IsGood',
            "friday_🍺s_forever" => 'Friday🍺sForever'
        ));
    }

    public function testItConvertsSnakeCaseToCamelCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toCamelCase', array(
            'check_it_out' => 'checkItOut',
            '3_some_numbers_12' => '3SomeNumbers12',
            'good_4_you' => 'good4You',
            'dont_l👀k_at_me_like_that' => 'dontL👀kAtMeLikeThat',
            'my_🍕_is_good' => 'my🍕IsGood',
            "Friday_🍺s_forever" => 'friday🍺sForever'
        ));
    }

    public function testItConvertsSnakeCaseToKebabCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toKebabCase', array(
            'make_me_kebab' => 'make-me-kebab',
            '12_is_equal_to_12' => '12-is-equal-to-12',
            'ya_2' => 'ya-2',
            'dont_l👀k_at_me_like_that' => 'dont-l👀k-at-me-like-that',
            'my_🍕_is_good' => 'my-🍕-is-good',
            "friday_🍺s_forever" => 'friday-🍺s-forever'
        ));
    }
}
