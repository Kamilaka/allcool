<?php
/**
 * Боковое меню категорий
 */
if ( ! $arParams['SHOW_WIDGET'] ) return;
?>
<div class="n-sidebar-nav" data-sidebar-nav="closed">
  <div class="n-sidebar-nav__wrap">   

<?$APPLICATION->IncludeComponent("bitrix:menu", "left_front_catalog_new", array(
  "ROOT_MENU_TYPE" => "left",
  "MENU_CACHE_TYPE" => "A",
  "MENU_CACHE_TIME" => "3600000",
  "MENU_CACHE_USE_GROUPS" => "N",
  "MENU_CACHE_GET_VARS" => "",
  "MAX_LEVEL" => \Bitrix\Main\Config\Option::get("aspro.optimus", "MAX_DEPTH_MENU", 2),
  "CHILD_MENU_TYPE" => "left",
  "USE_EXT" => "Y",
  "DELAY" => "N",
  "ALLOW_MULTI_SELECT" => "N" ),
  false, array( "ACTIVE_COMPONENT" => "Y" )
);?>
  </div>
</div><!-- .n-sidebar-nav -->