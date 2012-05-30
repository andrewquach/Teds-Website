<?php
class MagentoPycho_Lightboxes_Model_Config_Pirobox_Bgalphas
{
    public function toOptionArray()
    {
        $range = range(0, 1, 0.1);
        $array = array();
        foreach($range as $val){
            $array["$val"] = $val;
        }
        return $array;
    }
}