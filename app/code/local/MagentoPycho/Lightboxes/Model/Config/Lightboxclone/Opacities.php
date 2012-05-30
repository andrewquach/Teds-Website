<?php
class MagentoPycho_Lightboxes_Model_Config_Lightboxclone_Opacities
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