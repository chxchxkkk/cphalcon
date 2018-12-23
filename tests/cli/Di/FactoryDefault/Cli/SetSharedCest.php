<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Di\FactoryDefault\Cli;

use UnitTester;

/**
 * Class SetSharedCest
 */
class SetSharedCest
{
    /**
     * Tests Phalcon\Di\FactoryDefault\Cli :: setShared()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function diFactorydefaultCliSetShared(UnitTester $I)
    {
        $I->wantToTest('Di\FactoryDefault\Cli - setShared()');
        $I->skipTest('Need implementation');
    }
}
