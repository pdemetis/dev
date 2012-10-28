<?
function getParam($param, $httpMethod = 'POST')
{
	switch ($httpMethod) {
	    case 'GET':
	        $return = $_GET[$param];
	        break;
	    case 'POST':
	        $return = $_POST[$param];
	        break;
	}
	return $return;
}