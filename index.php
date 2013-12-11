<?php
require ('vendor/autoload.php');

$header = new \mymd\views\MyHeader();
$header -> header();


$markdown = new \mymd\model\MarkdownFile();
$content = $markdown -> getFileContents();

use Michelf\Markdown;
echo Markdown::defaultTransform( $content );



$footer = new \mymd\views\MyFooter();
$footer -> showFooter();


?>
