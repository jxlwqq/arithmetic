<?php

namespace Jxlwqq\Arithmetic\Test;

use Jxlwqq\Arithmetic\Arithmetic;
use PHPUnit\Framework\TestCase;

class ArithmeticTest extends TestCase
{
    public $arithmetic;

    public function setUp()
    {
        parent::setUp();
        $this->arithmetic = new Arithmetic();
    }

    public function testSum()
    {
        $x = 1;
        $y = 2;

        $this->assertEquals(3, $this->arithmetic->sum($x, $y));
    }
}
