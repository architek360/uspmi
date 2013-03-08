<?php
class UPSMI_Ship_Model_Carrier_Upsmi extends Mage_Usa_Model_Shipping_Carrier_Ups
{
	protected $_code = 'upsmi';
    const CODE = 'upsmi';


    /**
     * Get tracking
     *
     * @param mixed $trackings
     * @return mixed
     */
    public function getTracking($trackings)
    {
        $return = array();

        if (!is_array($trackings)) {
            $trackings = array($trackings);
        }

//        if ($this->getConfigData('type')=='UPS') {
            $this->_getCgiTracking($trackings);
//        } elseif ($this->getConfigData('type')=='UPS_XML'){
//            $this->setXMLAccessRequest();
//            $this->_getXmlTracking($trackings);
//        }

        return $this->_result;
    }

}