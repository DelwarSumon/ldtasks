<?php
/**
 * PHP version 8.1.6
 * 
 * @author Delwar Sumon <delwarsumon0@gmail.com>
 */
declare(strict_types=1);

namespace LeadDeskTasks\MaxSubarray;
use LeadDeskTasks\MaxSubarray\MaxSubarray;

/**
 * Implements interface class here
 */
class MaxSubarrayImplement implements MaxSubarray
{
    /**
     * Look for all positive contiguous segments of the 
     * array (max_ending_here is used for this). And keep track of maximum 
     * sum contiguous segment among all positive segments (max_so_far is 
     * used for this). Each time we get a positive-sum compare it with max_so_far 
     * and update max_so_far if it is greater than max_so_far 
     *
     * @param array $arr input values
     * 
     * @author Delwar Sumon <delwarsumon0@gmail.com>
     * @return int the integer value of max subarray sum. 
     * 0 if param is not array or array size is 0.
     */
    public function contiguous($arr):int
    {
        if (!is_array($arr) || count($arr) == 0) {
            return 0;
        }
        $max_so_far = $arr[0]; 
        $max_ending_here = 0;
        $arr_size = count($arr);

        for ($i = 0; $i < $arr_size; $i++) {
            $max_ending_here = $max_ending_here + $arr[$i];
            if ($max_so_far < $max_ending_here) {
                $max_so_far = $max_ending_here;
            }
    
            if ($max_ending_here < 0) {
                $max_ending_here = 0;
            }
        }
        return $max_so_far;
    }
}
