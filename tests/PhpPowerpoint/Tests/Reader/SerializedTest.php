<?php
/**
 * This file is part of PHPPowerPoint - A pure PHP library for reading and writing
 * presentations documents.
 *
 * PHPPowerPoint is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPPowerPoint/contributors.
 *
 * @copyright   2009-2014 PHPPowerPoint contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 * @link        https://github.com/PHPOffice/PHPPowerPoint
 */

namespace PhpOffice\PhpPowerpoint\Tests;

use PhpOffice\PhpPowerpoint\Reader\Serialized;

/**
 * Test class for serialized reader
 *
 * @coversDefaultClass PhpOffice\PhpPowerpoint\Reader\Serialized
 */
class SerializedTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test can read
     */
    public function testCanRead()
    {
        $file = PHPPOWERPOINT_TESTS_BASE_DIR . '/resources/files/serialized.phppt';
        $object = new Serialized();

        $this->assertTrue($object->canRead($file));
    }
}
