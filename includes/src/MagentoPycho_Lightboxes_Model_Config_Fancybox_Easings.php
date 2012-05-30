<?php
class MagentoPycho_Lightboxes_Model_Config_Fancybox_Easings
{
    public function toOptionArray()
    {
        return array(
            'swing'    => Mage::helper('lightboxes')->__('swing'),
            'easeOutBack' => Mage::helper('lightboxes')->__('easeOutBack'),
            'easeInBack' => Mage::helper('lightboxes')->__('easeInBack'),
        );
    }
}