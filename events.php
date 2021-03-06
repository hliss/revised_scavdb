<?php
require_once('snaf/all.php');

snaf_load_components(array('events','itemlist','list','layout'));

$data = get_events_data($_REQUEST);
//$layout = array();
//$layout['TITLE'] = 'Events'; 


$list = get_itemlist_data(array('page'=>$page,'status'=>$status,'tag'=>$tag,'sort'=>$_REQUEST['sort'],'status_match' => 'event'));

$layout = array();
$layout['TITLE'] = 'Events';
$itemlist['TITLE'] = $layout['TITLE'];
$layout['BODY'] = array_merge(array($data), array($list));
//$layout['BODY'] = array($data);

$top_layout = array('BODY'=>array($layout));

echo build_layout_html($layout);


//$top_layout = array('BODY'=>array($layout));

//echo build_layout_html($layout);

?>
