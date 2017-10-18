<?php

/**
 * @package      Oneall Single Sign-On
 * @copyright    Copyright 2017-Present http://www.oneall.com
 * @license      GNU/GPL 2 or later
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU General Public License" (GPL) is available at http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Oneall\Test\Exception;

use Oneall\Exception\BadResponseException;

/**
 * Class BasResponseExceptionTest
 *
 * @package Oneall\Test\Exception
 */
class BasResponseExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorWithoutMessage()
    {
        $sut = new BadResponseException('/my/path');
        $this->assertEquals('Unable to decode response received from path "/my/path".', $sut->getMessage());
    }

    public function testConstructorWithMessage()
    {
        $sut = new BadResponseException('/my/path', 'custom message');
        $this->assertEquals('Unable to decode response received from path "/my/path". Error : custom message',
                            $sut->getMessage());
    }
}