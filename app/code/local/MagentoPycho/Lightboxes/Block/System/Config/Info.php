<?php
/**
 * @company    GuruWebSoft-Guru In Web Solutions <www.guruwebsoft.com> 
 * @author     Rajendra K Bhatta <rajen_k_bhtt@hotmail.com>
 *
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes 
 */
class MagentoPycho_Lightboxes_Block_System_Config_Info
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
        $html = '<div style="background:url(\'http://www.guruwebsoft.com/magentopycho-logo.jpg\') no-repeat scroll 15px center #EAF0EE;border:1px solid #CCCCCC;margin-bottom:10px;padding:10px 5px 5px 90px;">
    <h4>About MagentoPycho</h4>
    <p>Professional Web Developer / Freelancer with specialization in CMS + E-Commerce Solutions.<br />
    View more extensions @ <a href="http://www.magentocommerce.com/magento-connect/developer/MagentoPycho" target="_blank">MagentoConnect</a><br />
    <a href="http://www.magentocommerce.com/boards/member/messages/pm/163318/" target="_blank">Request a Quote / Hire Me</a><br />
    skype me @ magentopycho</p>
</div>';
        
        return $html;
    }
}
