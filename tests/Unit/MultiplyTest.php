<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationController;
use PHPUnit\Framework\TestCase;
use Faker\Generator as Faker;

class MultiplyTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_can_multiply(): void
    {
        $faker = new Faker();
        $operatorA = $faker->randomFloat(2, -1000, 1000);
        $operatorB = $faker->randomFloat(2, -1000, 1000);

        $expected = [
            "Result" => $operatorA * $operatorB
        ];
        $result = OperationController::multiply($operatorA,$operatorB);

        $this->assertEquals($expected,$result);
    }
}
