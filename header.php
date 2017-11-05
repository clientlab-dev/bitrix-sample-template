<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
/*error_reporting(E_ALL);
ini_set('display_errors', 1);*/
?>


<html>
<head>
<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>


<style><?php readfile($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/header.css'); ?></style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">

<?$APPLICATION->ShowPanel()?>

<?if($USER->IsAdmin()):?>


<?endif?>
