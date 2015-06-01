<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

JApplication::registerEvent( 'jnewsbot_virtuemartproduct', 'virtuemartproduct' );
//JApplication::registerEvent( 'jnewsbot_transformfinal', 'loadvmproduct' );
JApplication::registerEvent( 'jnewsbot_transformall', 'loadvmproduct' );

 function virtuemartproduct($forms, $params = null){
		$vmproducts = new virtuemartProducts();
		$limit = -1;
		$limittotal = $vmproducts->_countVMProducts();
		$setLimit = jnews::setLimitPagination($limittotal);
		$action = JRequest::getVar( 'act', '', '', 'WORD' );
		$task = JRequest::getVar('task');
		$vmproductsearch = JRequest::getVar('vmproductsearch', '' );
		echo $forms['main'];
		$hidden = '<input type="hidden" name="option" value="'.JNEWS_OPTION.'" />';
	   	$hidden .= '<input type="hidden" name="limit" value="'.$limit.'" />';
		$toSearch = new stdClass;
		$toSearch->forms = '';
		$toSearch->hidden = $hidden;
		$toSearch->listsearch = $vmproductsearch;
		$toSearch->id = 'vmproductsearch';
?>

<div id="element-box">
	<div class="t">
		<div class="t">
			<div class="t"></div>
		</div>
	</div>
	<div class="m">
<?php
	echo jnews::setTop( $toSearch, null);
		$js = 'function insertjnewstag(tag){';
	if( version_compare(JVERSION,'1.6.0','<') ){//1.5
		$js .= ' if(window.top.insertTag(tag)){window.top.document.getElementById(\'sbox-window\').close();}';
	}else{
		$js .= ' if(window.top.insertTag(tag)) window.parent.SqueezeBox.close();';
	}
		$js .= '}';
		$doc = JFactory::getDocument();
		$doc->addScriptDeclaration($js);
?>
	<table class="<?php echo jnews::myTheme(); ?>" cellpadding="0" cellspacing="0">
		<tbody>
			<thead>
				<tr>
					<th class="title"> Tag
					</th>
					<th class="title">
						<?php echo 'Product Name'; ?>
					</th>
					<th width="80px" class="title">
						<?php echo 'Product Description'; ?>
					</th>
					<th  width="60px" class="title">
						<?php echo 'Product ID'; ?>
					</th>
				</tr>
			</thead>
<?php
				$products = $vmproducts->_getVMProducts($vmproductsearch, $setLimit);
				$k = 0;
				$html = '';
				foreach($products as $product){
					if(empty($product->product_s_desc) && !empty($product->product_desc) ) {
						$product->product_s_desc =substr(strip_tags($product->product_desc), 0, 100);
					} else {
						$product->product_s_desc = '';
					}
					$insertTag = '{vmprod='.$product->virtuemart_product_id.'}';
					$html .= '<tr style="cursor:pointer" class="row'.$k.'" onclick="insertjnewstag(\''.$insertTag.'\')" ><td><strong>{vmprod='.$product->virtuemart_product_id.'}</strong></td><td>'.$product->product_name.'</td><td nowrap="nowrap" align="left">'.$product->product_s_desc.'</td><td align="center" nowrap="nowrap">'.$product->virtuemart_product_id.'</td></tr>';
					$k = 1-$k;
				}
				echo $html;
?>
		</tbody>
	</table>
<?php
		$css = 'margin:auto;';
		echo jnews::setPaginationBot($setLimit, $css);
?>
	</div>
	<div class="b">
		<div class="b">
			<div class="b"></div>
		</div>
	</div>
</div>
	<input type="hidden" value="<?php echo JNEWS_OPTION; ?>" name="option"/>
	<input type="hidden" value="<?php echo $action; ?>" name="act"/>
	<input type="hidden" value="<?php echo $task; ?>" name="task"/>
  	</form>
<?php
 }

class virtuemartProducts {

		/**
	 * <p>Function to get the Virtuemart Products</p>
	 * @param string $vmproductsearch - the string to be search
	 * @param object $setLimit - limits for the pagination
	 */
	function _getVMProducts($vmproductsearch='', $setLimit = null){
		$db = JFactory::getDBO();
		$query = 'SELECT a.product_name, a.virtuemart_product_id, a.product_s_desc, a.product_sku FROM #__virtuemart_products AS a ';
		$query .= ' LEFT JOIN #__virtuemart_products_en_gb AS b ON a.virtuemart_product_id = b.virtuemart_product_id ';
		
		if (!empty($vmproductsearch)){
			$query .= ' WHERE a.virtuemart_product_id LIKE  \'%' . $vmproductsearch . '%\' OR b.product_s_desc LIKE  \'%' . $vmproductsearch . '%\' OR b.product_name LIKE \'%' . $vmproductsearch . '%\' OR a.product_sku LIKE \'%' . $vmproductsearch . '%\'';
		}

		$query .= ' ORDER BY a.`virtuemart_product_id`';
		if (!is_null($setLimit) && $setLimit->start != -1 && $setLimit->end) $query .= ' LIMIT ' . $setLimit->start . ', ' . $setLimit->end;
		$db->setQuery($query);

		$products =$db->loadObjectList();
		return $products;
	}

		/**
	 * <p>Function to count the total number of joomla modules</p>
	 * @param $modAccess

	 */
	 function _countVMProducts(){
		static $db=null;
		if( !isset($db) ) $db = JFactory::getDBO();
		$query = "SELECT count(`virtuemart_product_id`) FROM `#__virtuemart_products`";
		$db->setQuery( $query );
		$result = $db->loadResultArray();
		$count = ( !empty($result) ) ? $result[0] : 0;
		return $count;
	 }
}

	function loadvmproduct($html, $text){

		$regex = '#{vmprod *=(.*)}#Ui';
		if(!preg_match_all($regex, $html.$text, $matches)) return;

		$tags = array();

		foreach($matches[0] as $num => $tag){
			if(isset($tags[$tag])) continue;
			$tags[$tag] = _replaceProduct($matches,$num);
		}

		if(!empty($tags)){
			$html = str_replace(array_keys($tags),$tags,$html);
			$text = str_replace(array_keys($tags),$tags,$text);
		}

	}

	 function _replaceProduct(&$allresults,$i){

	 	$plugin = JPluginHelper::getPlugin('jnews', 'virtuemartproduct');
		$params = new JParameter( $plugin->params );

	 	$productId = (int) $allresults[1][$i];
		$query = 'SELECT  b.*, a.* FROM `#__virtuemart_products` as a ';	// c.*,
		$query .= 'LEFT JOIN `#__virtuemart_product_prices` as b on a.virtuemart_product_id = b.virtuemart_product_id ';
//		$query .= 'LEFT JOIN `#__vm_tax_rate` as c on a.product_tax_id = c.tax_rate_id ';
		$query .= 'WHERE a.virtuemart_product_id = '.$productId.' LIMIT 1';
		$db = JFactory::getDBO();
		$db->setQuery($query);
		$product = $db->loadObject();
		if(empty($product)){
			$app = JFactory::getApplication();
			if($app->isAdmin()){
				$app->enqueueMessage('The product "'.$productId.'" could not be loaded','notice');
			}
			return '';
		}
		if(!empty($allresults[3][$i])){
			$langid = (int) substr($allresults[3][$i],strpos($allresults[3][$i],',')+1);
			if(!empty($langid)){
				$query = "SELECT reference_field, value FROM `#__jf_content` WHERE `published` = 1 AND `reference_table` = 'virtuemart_products' AND `language_id` = $langid AND `reference_id` = ".$productId;
				$db->setQuery($query);
				$translations = $db->loadObjectList();
				if(!empty($translations)){
					foreach($translations as $oneTranslation){
						if(!empty($oneTranslation->value)){
							$translatedfield =  $oneTranslation->reference_field;
							$product->$translatedfield = $oneTranslation->value;
						}
					}
				}
			}
		}
		if($product->product_currency == 'EUR') $product->product_currency = '&euro';
		elseif($product->product_currency == 'USD') $product->product_currency = '$';
		if($params->get('vat',1) AND !empty($product->tax_rate)) $product->product_price = $product->product_price * (1 + $product->tax_rate);
		$description = ($params->get('description','short') == 'short') ?  $product->product_s_desc : $product->product_desc;
		$link = JNEWS_JPATH_LIVE.'/index.php?option=com_virtuemart&page=shop.product_details&product_id='.$product->product_id;
		$taxRate = ( 1 + $product->tax_rate ); 
		$result = '<div class="jnews_content"><a style="text-decoration:none;" name="product-'.$product->virtuemart_product_id.'" target="_blank" href="'.$link.'"><h2 style="color: rgb(138, 138, 138); font-weight: normal; font-size: 14px; margin: 0pt; border-bottom: 5px solid rgb(159, 211, 159);">'.$product->product_name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$product->product_currency.round( $product->product_price * $taxRate, 2 ).'</h2></a>';
		if(!empty($product->product_thumb_image)){
			$result .= '<table><tr><td valign="top" style="padding-right:5px"><a style="text-decoration:none; color:transparent; border:0" href="'.$link.'" ><img src="'.JNEWS_JPATH_LIVE.'/components/com_virtuemart/shop_image/product/'.$product->product_thumb_image.'" height= "50" width= "50" /></a></td><td>'.$description.'</td></tr></table>';
		}else{
			$result .= $description;
		}
		$result .= '</div>';
		return $result;
	}
?>
