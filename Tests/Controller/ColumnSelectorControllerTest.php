<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2013 Michael Knoll <knoll@punkt.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * Class implements a testcase for the column selector controller
 *
 * @author Michael Knoll <knoll@punkt.de>
 * @package Tests
 * @subpackage Controller
 * @see Tx_PtExtlist_Controller_ColumnSelectorController
 */
class Tx_PtExtlist_Tests_Controller_ColumnSelectorControllerTest extends Tx_PtExtlist_Tests_BaseTestcase
{
    /** @test */
    public function classExists()
    {
        $this->isTrue(class_exists('Tx_PtExtlist_Controller_ColumnSelectorController'));
    }
}
