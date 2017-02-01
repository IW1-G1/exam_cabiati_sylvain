<?php

namespace tests\Lib;

use Lib\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase
{
    public function testConcatString()
    {
        $stringFormatter = new StringFormatter();
        $result = $stringFormatter->concatString("Bon", "jour");

        $this->assertSame($result, "Bonjour");
    }

    public function testToCamelCase()
    {
        $stringFormatter = new StringFormatter();
        $result = $stringFormatter->toCamelCase("Bon", "jour");

        $this->assertSame($result, "bonJour");
    }

    public function testSuffixCamelCaseTrue()
    {
        $stringFormatter = new StringFormatter();
        $result = $stringFormatter->suffix("suffix", "hello", true);

        $this->assertSame($result, "helloSuffix");
    }

    public function testSuffixCamelCaseFalse()
    {
        $stringFormatter = new StringFormatter();
        $result = $stringFormatter->suffix("sufFix", "hello");

        $this->assertSame($result, "hellosufFix");
    }

    public function testPrefixCamelCaseTrue()
    {
        $stringFormatter = new StringFormatter();
        $result = $stringFormatter->prefix("prefix", "hello", true);

        $this->assertSame($result, "prefixHello");
    }

    public function testPrefixCamelCaseFalse()
    {
        $stringFormatter = new StringFormatter();
        $result = $stringFormatter->prefix("prefix", "hello");

        $this->assertSame($result, "prefixhello");
    }
}
