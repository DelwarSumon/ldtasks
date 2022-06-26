<?php

/**
 * PHP version 8.1.6
 * 
 * @author Delwar Sumon <delwarsumon0@gmail.com>
 */

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';
use LeadDeskTasks\Anagram\AnagramImplement;

$checkingAnagram = new AnagramImplement();
echo $checkingAnagram->isAnagram('RAT', 'TAR');