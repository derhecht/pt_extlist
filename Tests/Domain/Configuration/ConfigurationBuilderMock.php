<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Daniel Lienert <lienert@punkt.de>, Michael Knoll <knoll@punkt.de>
*  All rights reserved
*
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
 * Class implementing a mock for configuration builder
 *
 * @package Typo3
 * @subpackage pt_extlist
 * @author Michael Knoll <knoll@punkt.de>
 */
class Tx_PtExtlist_Tests_Domain_Configuration_ConfigurationBuilderMock extends Tx_PtExtlist_Domain_Configuration_ConfigurationBuilder {
	
    public function setup() {
        
    }
	
	
	public function getBackendConfiguration() {
		return array('dataBackendClass' => 'Tx_PtExtlist_Domain_DataBackend_DummyDataBackend',
		             'dataMapperClass' => 'Tx_PtExtlist_Domain_DataBackend_Mapper_ArrayMapper',
		             'dataSourceClass' => 'Tx_PtExtlist_Domain_DataBackend_DataSource_DummyDataSource');
	}
	
    /**
     * Returns a singleton instance of this class
     * @param $settings The current settings for this extension.
     * @return Tx_PtExtlist_Domain_Configuration_ConfigurationBuilder   Singleton instance of this class
     */
    public static function getInstance($settings = null) {
    	if ($settings != null) {
    		$configurationBuilderMock = new Tx_PtExtlist_Tests_Domain_Configuration_ConfigurationBuilderMock($settings);
    	} else {
    		
            $configurationBuilderMock = new Tx_PtExtlist_Tests_Domain_Configuration_ConfigurationBuilderMock(array(
	            'listIdentifier' => 'test',
	            'abc' => '1',
	            'listConfig' => array(
	                 'test' => array(
	                     'abc' => '2',
	                     'def' => '3',
	                     'fields' => array(
	                         'field1' => array( 
	                             'table' => 'tableName1',
	                             'field' => 'fieldName1',
	                             'isSortable' => '0',
	                             'access' => '1,2,3,4'
	                         ),
	                         'field2' => array( 
	                             'table' => 'tableName2',
	                             'field' => 'fieldName2',
	                             'isSortable' => '0',
	                             'access' => '1,2,3,4'
	                         )
	                    ),
	                    'columns' => array(
	                        10 => array( 
	                            'columnIdentifier' => 'column1',
	                            'fieldIdentifier' => 'field1',
	                            'label' => 'Column 1'
	                        ),
	                        20 => array( 
	                            'columnIdentifier' => 'column2',
	                            'fieldIdentifier' => 'field2',
	                            'label' => 'Column 2'
	                        )
	                    ),
	                    'filters' => array(
	                         'testfilterbox' => array(
	                             '10' => array(
	                                'filterIdentifier' => 'filter1',
	                                'filterClassName' => 'Tx_PtExtlist_Domain_Model_Filter_StringFilter'
	                             ),
	                             '20' => array(
	                                'filterIdentifier' => 'filter2',
	                                'filterClassName' => 'Tx_PtExtlist_Domain_Model_Filter_StringFilter'
	                             )
	                         )
	                    ),
	                    'pagerConfig' => array(
	                    	'pagerClassName' => 'Tx_PtExtlist_Domain_Model_Pager_DefaultPager'
	                    ),
	                )
	            )
	        ));
            $configurationBuilderMock->settings = $configurationBuilderMock->origSettings['listConfig'][$configurationBuilderMock->origSettings['listIdentifier']];
    	}
    	return $configurationBuilderMock;
    }
    
  
	
}

?>