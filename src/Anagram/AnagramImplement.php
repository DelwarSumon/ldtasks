<?php

/**
 * PHP version 8.1.6
 * 
 * @author Delwar Sumon <delwarsumon0@gmail.com>
 */
declare(strict_types=1);

namespace LeadDeskTasks\Anagram;
use LeadDeskTasks\Anagram\Anagram;

/**
 * Implements interface class here
 */
class AnagramImplement implements Anagram
{
    /**
     * Check words are Anagram or not
     * Here used inbuilt function in PHP called count_chars which has two parameters 
     * string and return_mode. For return_mode i used 1 to return an array with key 
     * value pairs, where keys are ASCII values and corresponding values will be the 
     * number of occurrences of that ASCII value. The array possess only those keys 
     * as ASCII values whose frequency is more than 0.
     * Used strtolower function to convert all alphabetic characters to lowercase
     *
     * @param string $word1 input values
     * @param string $word2 input values
     * 
     * @author Delwar Sumon <delwarsumon0@gmail.com>
     * @return bool
     */
    public function isAnagram($word1, $word2):bool
    {
        if (count_chars(strtolower($word1), 1) == count_chars(strtolower($word2), 1)) {
            return true;
        } else { 
            return false; 
        }
    }
}