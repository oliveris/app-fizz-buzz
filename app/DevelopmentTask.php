<?php
declare(strict_types=1);

namespace App;

class DevelopmentTask
{
    /**
     * Gets the range between two integers and iterates each point
     * if a point is divisible by 3 || 5 output fizz || buzz
     *
     * @param int $integerOne
     * @param int $integerTwo
     * @return string
     */
    public function divisiblePointToPoint(int $integerOne, int $integerTwo): string
    {
        $output = [];

        foreach (range($integerOne, $integerTwo) as $integer) {
            array_push($output, (string) $integer);

            switch ($integer) {
                case ($integer % 15 == 0): // Lowest common multiple of 3 and 5
                    array_push($output, 'fizz buzz');
                    break;
                case ($integer % 5 == 0):
                    array_push($output, 'buzz');
                    break;
                case ($integer % 3 == 0):
                    array_push($output, 'fizz');
                    break;
                default:
                    break;
            }
        }

        return implode('\n', $output);
    }
}
