<?php
class MagentoPycho_Lightboxes_Model_Config_Fancybox_Scrollings
{
    public function toOptionArray()
    {
        return array(
            'auto'    => Mage::helper('lightboxes')->__('auto'),   
            'yes'    => Mage::helper('lightboxes')->__('yes'), 
            'no'    => Mage::helper('lightboxes')->__('no'),          
        );
    }
}