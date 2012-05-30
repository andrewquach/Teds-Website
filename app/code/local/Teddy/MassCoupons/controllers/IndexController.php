<?php
class Teddy_MassCoupons_IndexController extends Mage_Core_Controller_Front_Action{
	
	/*
	Mass delete coupons, range specified via GET parameters
	Usage: /masscoupons/delete?from=10&to=20
	*/
	/*
	public function deleteAction() {
		$collection = Mage::getResourceModel('salesrule/coupon_collection');
		$coupons = $collection->getItems();
		
		$from = (int)$_GET['from'];
		$to = (int)$_GET['to'];
				
		if($coupon->getRuleId() >= $from && $coupon->getRuleId() <= $to)
     	{
			echo 'deleting : ' . $coupon->getRuleId();
			$coupon->delete();
			$model = Mage::getModel('salesrule/rule')->load($coupon->getRuleId());
			$model->delete();
		}
	}
	*/
    public function indexAction() {
    		  
    }
    
   /* protected function number_to_code($codeLen, $codekey,$x,$prefix) {
        $c = md5("$codekey $x");
        $c = substr($c,2,$codeLen);
        $out = "$prefix$x$c";
        return $out;
	}
     //UNCOMMENT FROM HERE TO IMPORT 
	protected $importCodes = "DiscounTeds01,
DiscounTeds02,
DiscounTeds03,
DiscounTeds04,
DiscounTeds05,
DiscounTeds06,
DiscounTeds07,
DiscounTeds08,
DiscounTeds09,
DiscounTeds10,
DiscounTeds11,
DiscounTeds12,
DiscounTeds13,
DiscounTeds14,
DiscounTeds15,
DiscounTeds16,
DiscounTeds17,
DiscounTeds18,
DiscounTeds19,
DiscounTeds20,
DiscounTeds21,
DiscounTeds22,
DiscounTeds23,
DiscounTeds24,
DiscounTeds25,
DiscounTeds26,
DiscounTeds27,
DiscounTeds28,
DiscounTeds29,
DiscounTeds30,
DiscounTeds31,
DiscounTeds32,
DiscounTeds33,
DiscounTeds34,
DiscounTeds35,
DiscounTeds36,
DiscounTeds37,
DiscounTeds38,
DiscounTeds39,
DiscounTeds40,
DiscounTeds41,
DiscounTeds42,
DiscounTeds43,
DiscounTeds44,
DiscounTeds45,
DiscounTeds46,
DiscounTeds47,
DiscounTeds48,
DiscounTeds49,
DiscounTeds50,
DiscounTedsTest123";
	
	protected function getCodeArray($importCodes)
	{
		return explode(",",$importCodes);
	}
	
	// This is the critical function you should modify
	//_createcoupon(code, discount value, type of discount, coupon prefix name, number of days, is standard shirt, stop further processing)
	public function generateCouponsInternalAction()
	{
		$codes = $this->getCodeArray($this->importCodes);
    	foreach($codes as $code)
    	{
    		$this->_createCoupon($code,20,"by_percent","Singapore Polytechnic",45, 0);
    		echo $code . "<br/>";
    	}
	}
	*/
	
	
	/*
    public function generateCouponsAction()
    {
    	// DEFINE ALL KEY INFO HERE
    	$max = 300;
    	$companyname = "WagJag";
    	$code_prefix = "wj";
    	$type = "cart_fixed";
    	$numberofdays = 317;
    	$discountamt = 75;
    	$isStandard = true;
    	$lengthofcode = 8;
    	///////////////////////////
    	$couponarray = array();
    	
    	//2011-11-24 00:00:00
    	for($i=1;$i<=$max;$i++)
    	{
    		$breakout = false;
    		while(!$breakout)
    		{
    			$couponCode = $this->number_to_code($lengthofcode,$companyname, $i,$code_prefix);
    			if(!in_array($couponCode,$couponarray))
    			{
    				array_push($couponarray, $couponCode);
    				$breakout = true;
    				$this->_createCoupon($couponCode,$discountamt,$type,$companyname,$numberofdays);
    				echo $couponCode . "<br/>";
    			} else {
    				$max++;
    				$i++;
    			}
    		}
    		
    		
    	}
    	
    }
    */
	
	/*
	Internal function to generate coupons on the system
	*/
	/*
	protected function _createCoupon($couponCode, $discountAmt, $simpleAction="by_percent",$desc="", $numdays=365, $isProcess=0)
	{
		
		//$writer = new Zend_Log_Writer_Stream('../newsletter_coupon_log.txt');
		//$logger = new Zend_Log($writer);
		//$logger->log("\tprize sku: " . $prizeItem['sku'], Zend_Log::INFO);
		$addedDate = time() + ($numdays * 24 * 60 * 60);
		$fromDate = time() - (2 * 24 * 60 * 60);
		// all coupons are valid for 1 month from generation
		if($simpleAction=="by_percent")
		{
			$prefix = "";
			$suffix = "%";
		} else if($simpleAction=="cart_fixed") {
			$prefix = "$";
			$suffix = "";
		}
		$dataArray = array( 'form_key' => NULL,
						    'rule_id' => NULL,
						    'product_ids' => '',
							'name' => $desc . ' - ' . $couponCode,
							'description' => 'auto generated coupon for '.$desc.' ' . date('l jS \of F Y h:i:s A'),
							'is_active' => 1,
							'website_ids' => array(1),
							'customer_group_ids' => array(0,1,2,3,4),
							'coupon_type' => 2,
							'coupon_code' => $couponCode,
							'uses_per_coupon' => 1,
							'uses_per_customer' => 1,
							'from_date' => date('d/m/Y',$fromDate),
							'to_date' => date('d/m/Y',$addedDate),
							'sort_order' => 0,
							'store_labels'=> array(0=>$desc . ' ' . $prefix . $discountAmt . $suffix . ' Off'),
							'is_rss' => 0,
							'rule' => array('conditions'=>
												array(1=>
													  array('type'=>'salesrule/rule_condition_combine',
															'aggregator'=>'all',
															'value'=>1,
															'new_child'=>'')
													  )
											 ,'actions'=>
												array(1=>
													  array('type'=>'salesrule/rule_condition_product_combine',
															'aggregator'=>'all',
															'value'=>1,
															'new_child'=>'')
													  )
											),
							'simple_action' => $simpleAction,
							'discount_amount' => $discountAmt,
							'discount_qty' => 0,
							'discount_step' => 0,
							'simple_free_shipping' => 0,
							'stop_rules_processing' => $isProcess
						   );
		//$logger->log(var_export($dataArray,true), Zend_Log::INFO);
        if ($dataArray) {
			$data = $dataArray;
            try {
                $model = Mage::getModel('salesrule/rule');

                if (isset($data['simple_action']) && $data['simple_action'] == $simpleAction && isset($data['discount_amount'])) {
                    $data['discount_amount'] = min(100,$data['discount_amount']);
                }
                if (isset($data['rule']['conditions'])) {
                    $data['conditions'] = $data['rule']['conditions'];
                }
                if (isset($data['rule']['actions'])) {
                    $data['actions'] = $data['rule']['actions'];
                }
                unset($data['rule']);

                $model->loadPost($data);
				

                $model->save();

                return true;
            } catch (Exception $e) {

                return false;
            }
        }
        return false;

	
	}
	*/

}
