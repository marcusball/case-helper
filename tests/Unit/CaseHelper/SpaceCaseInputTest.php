<?php

namespace CaseHelper\Test\Unit\CaseHelper;

use CaseHelper\CaseHelperFactory;


/**
 * Tests all conversions with input of type space case.
 */
class SpaceCaseInputTest extends TestCase {

    public function setUp() {
        $this->caseHelper = CaseHelperFactory
                ::make(CaseHelperFactory::INPUT_TYPE_SPACE_CASE);
    }

    public function testItConvertsSpaceCaseToSpaceCase() {
        $this->assertCaseHelperConvertsCasesCorrectly('toSpaceCase', array(
            'My space case...' => 'My space case...',
            'You should not change me, okay?!' => 'You should not change me, okay?!',
            '123...Test...321' => '123...Test...321'
        ));
    }

    public function testItConvertsSpaceCaseToCamelCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toCamelCase', array(
            '...convert me to camel, please! ' => 'convertMeToCamelPlease',
            'yeah; me    too :> #yolo' => 'yeahMeTooYolo'
        ));
    }

    public function testItConvertsSpaceCaseToPascalCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toPascalCase', array(
            '  some sentence right here... let\'s see...' => 'SomeSentenceRightHereLetsSee',
            ' another one 23 ' => 'AnotherOne23'
        ));
    }

    public function testItConvertsSpaceCaseToKebabCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toKebabCase', array(
            ' I wanna be kebab... really# ' => 'i-wanna-be-kebab-really',
            'yes dunno what 2 write' => 'yes-dunno-what-2-write',
            '3 is more than 2' => '3-is-more-than-2'
        ));
    }

    public function testItConvertsSpaceCaseToTrainCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toTrainCase', array(
            ' I see #trains ! ' => 'I-See-Trains',
            'let\'s see...' => 'Lets-See',
            '4 equals 2 times 2' => '4-Equals-2-Times-2'
        ));
    }

    public function testItConvertsSpaceCaseToSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSnakeCase', array(
            ' make me snake cased, plz!' => 'make_me_snake_cased_plz',
            'i Just WaNna have phun; ' => 'i_just_wanna_have_phun',
            '42 - that\'s it!' => '42_thats_it'
        ));
    }

    public function testItConvertsSpaceCaseToScreamingSnakeCase() {
        $this->assertCaseHelperConvertsCasesCorrectly('toScreamingSnakeCase', array(
            ' do the Cpt. Capslock for me' => 'DO_THE_CPT_CAPSLOCK_FOR_ME',
            ' i agree ! ' => 'I_AGREE',
            ' 123# Stuff with numbers 456#!' => '123_STUFF_WITH_NUMBERS_456'
        ));
    }
}
