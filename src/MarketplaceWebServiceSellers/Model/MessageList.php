<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Sellers
 * @version  2011-07-01
 * Library Version: 2015-06-18
 * Generated: Thu Jun 18 20:37:51 GMT 2015
 */

/**
 *  @see MarketplaceWebServiceSellers_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceSellers_Model_MessageList
 * 
 * Properties:
 * <ul>
 * 
 * <li>Message: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceSellers_Model_MessageList extends MarketplaceWebServiceSellers_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Message' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceSellers_Model_Message')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Message property.
     *
     * @return MarketplaceWebServiceSellers_Model_Message[] Message.
     */
    public function getMessage()
    {
        if ($this->_fields['Message']['FieldValue'] == null)
        {
            $this->_fields['Message']['FieldValue'] = array();
        }
        return $this->_fields['Message']['FieldValue'];
    }

    /**
     * Set the value of the Message property.
     *
     * @param array message
     * @return MarketplaceWebServiceSellers_Model_MessageList instance
     */
    public function setMessage($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Message']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Message.
     */
    public function unsetMessage()
    {
        $this->_fields['Message']['FieldValue'] = array();
    }

    /**
     * Check to see if Message is set.
     *
     * @return true if Message is set.
     */
    public function isSetMessage()
    {
                return !empty($this->_fields['Message']['FieldValue']);
            }

    /**
     * Add values for Message, return this.
     *
     * @param message
     *             New values to add.
     *
     * @return MarketplaceWebServiceSellers_Model_MessageList instance.
     */
    public function withMessage()
    {
        foreach (func_get_args() as $Message)
        {
            $this->_fields['Message']['FieldValue'][] = $Message;
        }
        return $this;
    }

}
