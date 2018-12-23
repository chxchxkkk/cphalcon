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

namespace Phalcon\Test\Unit\Cli\Dispatcher;

use UnitTester;

/**
 * Class SetActionNameCest
 */
class SetActionNameCest
{
    /**
     * Tests Phalcon\Cli\Dispatcher :: setActionName()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cliDispatcherSetActionName(UnitTester $I)
    {
        $I->wantToTest('Cli\Dispatcher - setActionName()');
        $I->skipTest('Need implementation');
    }
}
