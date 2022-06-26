<?php

declare(strict_types=1);

namespace LeadDeskTasks\Anagram;

use LeadDeskTasks\Anagram\AnagramImplement;
use PHPUnit\Framework\TestCase;

/**
 * Anagram Test case class
 */
final class AnagramTest extends TestCase
{
    /**
     * Test case 1. This assertion will return true in the case if the 
     * conditional value is true else return false. In case of true the 
     * asserted test case got passed else test case got failed.
     *
     * @return void
     */
    public function testString1(): void
    {
        $checkingAnagram = new AnagramImplement();
        self::assertFalse($checkingAnagram->isAnagram('RAT', 'CAR'));
    }

    /**
     * Test case 3. This assertion will return true in the case if the 
     * conditional value is true else return false. In case of true the 
     * asserted test case got passed else test case got failed.
     *
     * @return void
     */
    public function testString2(): void
    {
        $checkingAnagram = new AnagramImplement();
        self::assertFalse($checkingAnagram->isAnagram('Beef Roast', 'Goat Roast'));
    }

    /**
     * Test case 3. This assertion will return true in the case if the 
     * conditional value is true else return false. In case of true the 
     * asserted test case got passed else test case got failed.
     *
     * @return void
     */
    public function testString3(): void
    {
        $checkingAnagram = new AnagramImplement();
        self::assertTrue($checkingAnagram->isAnagram('anagram', 'nagaram'));
    }


}