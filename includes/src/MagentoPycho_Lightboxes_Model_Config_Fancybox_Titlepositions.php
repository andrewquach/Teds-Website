<?php
class MagentoPycho_Lightboxes_Model_Config_Fancybox_Titlepositions
{
    public function toOptionArray()
    {
        return array(
            'outside'    => Mage::helper('lightboxes')->__('outside'),   
            'inside'    => Mage::helper('lightboxes')->__('inside'), 
            'over'    => Mage::helper('lightboxes')->__('over'),          
        );
    }
}