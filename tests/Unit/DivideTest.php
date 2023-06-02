<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationController;
use PHPUnit\Framework\TestCase;
use Faker\Generator as Faker;

class DivideTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_can_divide(): void
    {
        $faker = new Faker();
        $operatorA = $faker->randomFloat(2, -1000, 1000);
        $operatorB = $faker->randomFloat(2, 1, 1000);

        $expected = [
            "Result" => $operatorA / $operatorB
        ];
        $result = OperationController::divide($operatorA,$operatorB);

        $this->assertEquals($expected,$result);
    }

    /**
     * A basic unit test example.
     */
    public function test_division_by_0(): void
    {
        $faker = new Faker();
        $operatorA = $faker->randomFloat(2, -1000, 1000);
        $operatorB = 0;

        $expected = [
            "Result" => "Can't divide by 0."
        ];
        $result = OperationController::divide($operatorA,$operatorB);

        $this->assertEquals($expected,$result);
    }

}
