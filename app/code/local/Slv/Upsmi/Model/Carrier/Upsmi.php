<?php
class Slv_Upsmi_Model_Carrier_Upsmi extends Mage_Usa_Model_Shipping_Carrier_Ups
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
        if (!is_array($trackings)) {
            $trackings = array($trackings);
        }

        $this->_getCgiTracking($trackings);

        return $this->_result;
    }

}