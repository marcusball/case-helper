CaseHelper
==========

Easily convert between camelCase, PascalCase, kebab-case, snake_case, SCREAMING_SNAKE_CASE, Train-Case, and string case!

#How to use

    use CaseHelper\CaseHelperFactory;
    
    $ch = CaseHelperFactory::make(CaseHelperFactory::INPUT_TYPE_CAMEL_CASE);

    $ch->toPascalCase('myStr');

    // => returns 'MyStr'

You need to specify which type your input has when calling the factories' make()-method. To do that, use one of the following constants:

  * CaseHelperFactory::INPUT_TYPE_SPACE_CASE for `space case`
  * CaseHelperFactory::INPUT_TYPE_CAMEL_CASE for `camelCase`
  * CaseHelperFactory::INPUT_TYPE_PASCAL_CASE for `PascalCase`
  * CaseHelperFactory::INPUT_TYPE_KEBAB_CASE for `kebab-case`
  * CaseHelperFactory::INPUT_TYPE_SNAKE_CASE for `snake_case`
  * CaseHelperFactory::INPUT_TYPE_SCREAMING_SNAKE_CASE for `SCREAMING_SNAKE_CASE`
  * CaseHelperFactory::INPUT_TYPE_TRAIN_CASE for `Train-Case`

#Tests

This project was mainly (although not completely) written using TDD. Tests can be run using phpunit.

#Contributing

If you want to contribute, please follow the used standards and add or extend tests.
