<?php
/**
 *  index.php PHPCMS 入口
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-6-1
 */
 //PHPCMS根目录
//header("Content-type: text/html; charset=utf
phpinfo();
require ("test.class.php");
//include("test.php");
class hongbao extends test {
	public function __construct(){
		parent::__construct();

		echo "hongbao function __construct";
	}
	public function one(){
		parent::__construct();
	}
}
$n = new hongbao();
$n->one();


exit;

define('PHPCMS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

include PHPCMS_PATH.'/phpcms/base.php';

pc_base::creat_app();

?>
