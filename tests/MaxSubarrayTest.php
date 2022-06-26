<?php

declare(strict_types=1);

namespace LeadDeskTasks\MaxSubarray;

use LeadDeskTasks\MaxSubarray\MaxSubarrayImplement;
use PHPUnit\Framework\TestCase;

/**
 * Max Subarray Test case class
 */
final class MaxSubarrayTest extends TestCase
{
    /**
     * Test Case 1. Check for array(2, 6, 9, 2, 1, 8, 5, 6, 3) where we can 
     * get actual value of max subarray sum and 42 is expected value. Reports
     * an error if the two variables do not have the same type and value.
     *
     * @return void
     */
    public function testContiguous1(): void
    {
        $getMaxSum = new MaxSubarrayImplement();
        self::assertSame(42, $getMaxSum->contiguous([2, 6, 9, 2, 1, 8, 5, 6, 3]));
    }

    /**
     * Test Case 2. Check for array(-2, -3, 4, -1, -2, 1, 5, -3) where we can 
     * get actual value of max subarray sum and 7 is expected value. Reports 
     * an error if the two variables do not have the same type and value.
     *
     * @return void
     */
    public function testContiguous2(): void
    {
        $getMaxSum = new MaxSubarrayImplement();
        self::assertSame(7, $getMaxSum->contiguous([-2, -3, 4, -1, -2, 1, 5, -3]));
    }

    /**
     * Test Case 3. Check for array(-1, 1, 5, -6, 3) where we can get actual 
     * value of max subarray sum and 6 is expected value. Reports an error 
     * if the two variables do not have the same type and value.
     *
     * @return void
     */
    public function testContiguous3(): void
    {
        $getMaxSum = new MaxSubarrayImplement();
        self::assertSame(6, $getMaxSum->contiguous([-1, 1, 5, -6, 3]));
    }
}