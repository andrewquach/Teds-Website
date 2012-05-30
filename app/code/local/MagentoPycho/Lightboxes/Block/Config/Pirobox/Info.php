<?php
/**
 * @company    GuruWebSoft-Guru In Web Solutions <www.guruwebsoft.com> 
 * @author     Rajendra K Bhatta <rajen_k_bhtt@hotmail.com>
 *
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes 
 */
class MagentoPycho_Lightboxes_Block_Config_Pirobox_Info
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{
    
    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $html = '<div style="border:1px solid #CCCCCC;margin-bottom:10px;padding:10px 10px 10px 10px;">
    <h4>About PiroBox</h4>
    <p>PiroBox is yet another cool jQuery LightBox plugin.<br /><br />
    Click <a href="http://www.pirolab.it/pirobox" target="_blank" >here</a> for more details
    </p>
    </div>
';
        
        return $html;
    }
}
