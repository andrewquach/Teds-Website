<?php
class MagentoPycho_Lightboxes_Model_Config_Lightboxtypes
{
    public function toOptionArray()
    {
        return array(
            'fancybox'    => Mage::helper('lightboxes')->__('FancyBox'),   
            'pirobox'    => Mage::helper('lightboxes')->__('PiroBox'),
            'lightboxclone' => Mage::helper('lightboxes')->__('Lightbox Clone'),          
        );
    }
}