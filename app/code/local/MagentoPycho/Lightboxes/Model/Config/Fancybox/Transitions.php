<?php
class MagentoPycho_Lightboxes_Model_Config_Fancybox_Transitions
{
    public function toOptionArray()
    {
        return array(
            'fade'    => Mage::helper('lightboxes')->__('fade'),   
            'elastic'    => Mage::helper('lightboxes')->__('elastic'), 
            'none'    => Mage::helper('lightboxes')->__('none'),          
        );
    }
}