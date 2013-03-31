<?php
require_once('class.ebay.php');
$ebay = new ebay('YOUR EBAY API KEY', 'EBAY REGION', 'json');
$results = $ebay->findItems('pokemon');

$items = $results['findItemsByKeywordsResponse'][0]['searchResult'][0]['item'];
foreach($items as $i){
	echo $i['title'][0] . "<br/>";
}
?>