<?php

namespace CaseHelper\Test\Unit\CaseHelper;

use CaseHelper\CaseHelperFactory;


/**
 * Tests all conversions with input of type kebab-case.
 */
class KebabCaseInputTest extends TestCase {

    public function setUp() {
        $this->caseHelper = CaseHelperFactory::make(CaseHelperFactory
                ::INPUT_TYPE_KEBAB_CASE);
    }

    public function testItConvertsKebabCaseToKebabCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toKebabCase', array(
            'my-kebab-input' => 'my-kebab-input',
            'oh-dont-mind' => 'oh-dont-mind',
            'dont-l👀k-at-me-like-that' => 'dont-l👀k-at-me-like-that',
            'my-🍕-is-good' => 'my-🍕-is-good',
            "friday-🍺s-forever" => 'friday-🍺s-forever'
        ));
    }

    public function testItConvertsKebabCaseToSpaceCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSpaceCase', array(
            'i-am-kebab' => 'i am kebab',
            '3-2-1-go' => '3 2 1 go',
            '4-you-2' => '4 you 2',
            'dont-l👀k-at-me-like-that' => 'dont l👀k at me like that',
            'my-🍕-is-good' => 'my 🍕 is good',
            "friday-🍺s-forever" => 'friday 🍺s forever'
        ));
    }

    public function testItConvertsKebabCaseToCamelCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toCamelCase', array(
            'some-kebab' => 'someKebab',
            'are-you-sure-i-mean-look-at-this' => 'areYouSureIMeanLookAtThis',
            'i-got-0-problems' => 'iGot0Problems',
            'dont-l👀k-at-me-like-that' => 'dontL👀kAtMeLikeThat',
            'my-🍕-is-good' => 'my🍕IsGood',
            "Friday-🍺s-forever" => 'friday🍺sForever'
        ));
    }

    public function testItConvertsKebabCaseToPascalCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toPascalCase', array(
            'i-will-be-pascal-so-what' => 'IWillBePascalSoWhat',
            'you-know-youre-right' => 'YouKnowYoureRight',
            '77-try-me-77' => '77TryMe77',
            'dont-l👀k-at-me-like-that' => 'DontL👀kAtMeLikeThat',
            'my-🍕-is-good' => 'My🍕IsGood',
            "friday-🍺s-forever" => 'Friday🍺sForever'
        ));
    }

    public function testItConvertsKebabCaseToTrainCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toTrainCase', array(
            'da-kebab-stuff' => 'Da-Kebab-Stuff',
            'let-me-try-this-one' => 'Let-Me-Try-This-One',
            'youre-my-number-1' => 'Youre-My-Number-1',
            'dont-l👀k-at-me-like-that' => 'Dont-L👀k-At-Me-Like-That',
            'my-🍕-is-good' => 'My-🍕-Is-Good',
            "friday-🍺s-forever" => 'Friday-🍺s-Forever'
        ));
    }

    public function testItConvertsKebabCaseToSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSnakeCase', array(
            'mhh-yes' => 'mhh_yes',
            'another-one-should-be-added' => 'another_one_should_be_added',
            'maybe_we-mix-this_up-a-little_bit' => 'maybe_we_mix_this_up_a_little_bit',
            'dont-l👀k-at-me-like-that' => 'dont_l👀k_at_me_like_that',
            'my-🍕-is-good' => 'my_🍕_is_good',
            "friday-🍺s-forever" => 'friday_🍺s_forever'
        ));
    }

    public function testItConvertsKebabCaseToScreamingSnakeCase() {
        $this->assertCaseHelperConvertsCasesCorrectly('toScreamingSnakeCase', array(
            'wow-this-is-cool' => 'WOW_THIS_IS_COOL',
            'do-you-hear-me?' => 'DO_YOU_HEAR_ME?',
            'dont-l👀k-at-me-like-that' => 'DONT_L👀K_AT_ME_LIKE_THAT',
            'my-🍕-is-good' => 'MY_🍕_IS_GOOD',
            "friday-🍺s-forever" => 'FRIDAY_🍺S_FOREVER'
        ));
    }
}
