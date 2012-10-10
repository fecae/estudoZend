<?
// adiciona mais um valor no include_path
set_include_path('../libs/ZendFramework/Zend/library/Zend/');

// importa o módulo Zend_Pdf
require_once 'Controller/Front.php';

Zend_Controller_Front::run('/var/www/gamermaniac/application/controllers');
?>