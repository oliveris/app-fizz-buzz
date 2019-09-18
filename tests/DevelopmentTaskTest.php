<?php
declare(strict_types=1);

namespace Tests;

include "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use App\DevelopmentTask;

class DevelopmentTaskTest extends TestCase
{
    /**
     * Test correct output
     */
    public function testDivisiblePointToPointCorrect()
    {
        $pointToPoint = new DevelopmentTask();
        $actual = $pointToPoint->divisiblePointToPoint(32, 49);

        $expected = [
            '32', '33', 'fizz', '34', '35', 'buzz', '36', 'fizz', '37', '38', '39', 'fizz',
            '40', 'buzz', '41', '42', 'fizz', '43', '44', '45', 'fizz buzz', '46', '47', '48', 'fizz', '49'
        ];

        $this->assertSame($expected, explode('\n', $actual));
    }

    /**
     * Test incorrect output
     */
    public function testDivisiblePointToPointInCorrect()
    {
        $pointToPoint = new DevelopmentTask();
        $actual = $pointToPoint->divisiblePointToPoint(32, 49);

        $incorrectExpected = [
            '32', '33', '34', '35', 'fizz', '37', '38', 'fizz',
            'buzz', '41', 'fizz', '43', '44', 'fizz buzz', '46', '47', '48'
        ];

        $this->assertNotSame($incorrectExpected, explode('\n', $actual));
    }
}