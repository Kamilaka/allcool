<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;
$dir = $APPLICATION->GetCurDir();


if( $dir != SITE_DIR ){
	$dir = preg_replace('/^\//is', '', $dir);
	$dir = preg_replace('/\/$/is', '', $dir);
	$cur_dir = explode("/", $dir);
	if( $cur_dir[0] == 'catalog' && $cur_dir[1]=='bytovaya-tekhnika' && preg_match('/[0-9]/is', $cur_dir[3]) ){

		$dir1 = explode("_", $cur_dir[1]);
		$cur_dir[1] = implode("-", $dir1);

		$dir2 = explode("_", $cur_dir[2]);
		$cur_dir[2] = implode("-", $dir2);

		$cur_dir[3] = preg_replace('/[0-9]/is', '', $cur_dir[3]);
		$dir_separated = 'https://' . $_SERVER["SERVER_NAME"] . '/' . implode("/", $cur_dir) . '/';
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: $dir_separated");
		exit;
	}
	
}

if($GET["debug"] == "y"){
	error_reporting(E_ERROR | E_PARSE);
}
IncludeTemplateLangFile(__FILE__);
global $APPLICATION, $TEMPLATE_OPTIONS, $arSite, $USER;

/** @var string Добавочный класс к body если админ */
$admin_class = ( $USER->IsAdmin() ) ? 'is-admin' : '';

$arSite = CSite::GetByID(SITE_ID)->Fetch();
$htmlClass = ($_REQUEST && isset($_REQUEST['print']) ? 'print' : false);
?>
<!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>" xmlns="http://www.w3.org/1999/xhtml" <?=($htmlClass ? 'class="'.$htmlClass.'"' : '')?>>
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowMeta("viewport");?>
	<?$APPLICATION->ShowMeta("HandheldFriendly");?>
	<?$APPLICATION->ShowMeta("apple-mobile-web-app-capable", "yes");?>
	<?$APPLICATION->ShowMeta("apple-mobile-web-app-status-bar-style");?>
	<?$APPLICATION->ShowMeta("SKYPE_TOOLBAR");?>
	<?$APPLICATION->ShowHead();?>
	<?$APPLICATION->AddHeadString('<script>BX.message('.CUtil::PhpToJSObject( $MESS, false ).')</script>', true);?>
	<?if(CModule::IncludeModule("aspro.optimus")) {COptimus::Start(SITE_ID);}?>
	<!--[if gte IE 9]><style type="text/css">.basket_button, .button30, .icon {filter: none;}</style><![endif]-->
	<link href='<?=CMain::IsHTTPS() ? 'https' : 'http'?>://fonts.googleapis.com/css?family=Ubuntu:400,500,700,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/perfect-scrollbar/css/perfect-scrollbar.min.css">
	<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/additional.css">
	<meta name="google-site-verification" content="HDzdBKWBUWNLwj-TG-ZCZW0-2Ukax23dLeUln5LC7YM" />
	<meta name='wmail-verification' content='8604c6e34f28aa645a8d50ef49549f85' />
</head>
	<body id="main" class="<?= $admin_class ?> all-cool">
<?$APPLICATION->IncludeComponent( "abricos:antisovetnik", "", array(  "ANTI_TIMEOUT" => "2500"), false);?>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<?if(!CModule::IncludeModule("aspro.optimus")){?><center><?$APPLICATION->IncludeFile(SITE_DIR."include/error_include_module.php");?></center></body></html><?die();?><?}?>
		<?$APPLICATION->IncludeComponent("aspro:theme.optimus", ".default", array("COMPONENT_TEMPLATE" => ".default"), false);?>
		<?COptimus::SetJSOptions();?>
		<div class="wrapper <?=(COptimus::getCurrentPageClass());?> basket_<?=strToLower($TEMPLATE_OPTIONS["BASKET"]["CURRENT_VALUE"]);?> <?=strToLower($TEMPLATE_OPTIONS["MENU_COLOR"]["CURRENT_VALUE"]);?> banner_auto">
			<div class="header_wrap <?=strtolower($TEMPLATE_OPTIONS["HEAD_COLOR"]["CURRENT_VALUE"])?>">
				<?if($TEMPLATE_OPTIONS["BASKET"]["CURRENT_VALUE"]=="NORMAL"){?>
					<div class="top-h-row">
						<div class="wrapper_inner">
							<div class="top_inner">
								<div class="content_menu">
									<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
										array(
											"COMPONENT_TEMPLATE" => ".default",
											"PATH" => SITE_DIR."include/topest_page/menu.top_content_row.php",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "",
											"AREA_FILE_RECURSIVE" => "Y",
											"EDIT_TEMPLATE" => "standard.php"
										),
										false
									);?>
								</div>
								<div class="phones">
									<div class="phone_block">
										<span class="phone_wrap">
											<span class="icons fa fa-phone"></span>
											<span class="phone_text">
												<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
													array(
														"COMPONENT_TEMPLATE" => ".default",
														"PATH" => SITE_DIR."include/phone.php",
														"AREA_FILE_SHOW" => "file",
														"AREA_FILE_SUFFIX" => "",
														"AREA_FILE_RECURSIVE" => "Y",
														"EDIT_TEMPLATE" => "standard.php"
													),
													false
												);?>
											</span>
										</span>
										<span class="order_wrap_btn">
											<span class="callback_btn"><?=GetMessage("CALLBACK")?></span>
										</span>
									</div>
								</div>
								<div class="h-user-block" id="personal_block">
									<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
										array(
											"COMPONENT_TEMPLATE" => ".default",
											"PATH" => SITE_DIR."include/topest_page/auth.top.php",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "",
											"AREA_FILE_RECURSIVE" => "Y",
											"EDIT_TEMPLATE" => "standard.php"
										),
										false
									);?>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				<?}?>
				<header id="header">
					<div class="wrapper_inner">
						<div class="top_br"></div>
						<table class="middle-h-row">
							<tr>
								<td class="logo_wrapp">
									<div class="logo nofill_<?=strtolower(\Bitrix\Main\Config\Option::get('aspro.optimus', 'NO_LOGO_BG', 'N'));?>">
										<?COptimus::ShowLogo();?>
									</div>
								</td>
								<!--<td class="text_wrapp">
									<div class="slogan">
										<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
											array(
												"COMPONENT_TEMPLATE" => ".default",
												"PATH" => SITE_DIR."include/top_page/slogan.php",
												"AREA_FILE_SHOW" => "file",
												"AREA_FILE_SUFFIX" => "",
												"AREA_FILE_RECURSIVE" => "Y",
												"EDIT_TEMPLATE" => "standard.php"
											),
											false
										);?>
									</div>
								</td>-->
								<td  class="center_block">
									<div class="search">
										<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/top_page/search.title.catalog.php",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "standard.php",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
									</div>
								</td>
								<td class="basket_wrapp">
									<?if($TEMPLATE_OPTIONS["BASKET"]["CURRENT_VALUE"] == "NORMAL"){?>
										<div class="wrapp_all_icons">
											<a href="#callback" class="b-btn b-btn_callback callback_btn">Получить консультацию</a>
											<?php if ( true ) : ?>
												<div class="header-compare-block icon_block iblock" id="compare_line" >
													<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
														array(
															"COMPONENT_TEMPLATE" => ".default",
															"PATH" => SITE_DIR."include/top_page/catalog.compare.list.compare_top.php",
															"AREA_FILE_SHOW" => "file",
															"AREA_FILE_SUFFIX" => "",
															"AREA_FILE_RECURSIVE" => "Y",
															"EDIT_TEMPLATE" => "standard.php"
														),
														false
													);?>
												</div>
											<?php endif; ?>
											<div class="header-cart" id="basket_line">
												<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
													array(
														"COMPONENT_TEMPLATE" => ".default",
														"PATH" => SITE_DIR."include/top_page/comp_basket_top.php",
														"AREA_FILE_SHOW" => "file",
														"AREA_FILE_SUFFIX" => "",
														"AREA_FILE_RECURSIVE" => "Y",
														"EDIT_TEMPLATE" => "standard.php"
													),
													false
												);?>
											</div>
										</div>
									<?}else{?>
										<div class="header-cart fly" id="basket_line">
											<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
												array(
													"COMPONENT_TEMPLATE" => ".default",
													"PATH" => SITE_DIR."include/top_page/comp_basket_top.php",
													"AREA_FILE_SHOW" => "file",
													"AREA_FILE_SUFFIX" => "",
													"AREA_FILE_RECURSIVE" => "Y",
													"EDIT_TEMPLATE" => "standard.php"
												),
												false
											);?>
										</div>
										<div class="middle_phone">
											<div class="phones">
												<span class="phone_wrap">
													<span class="phone">
														<span class="icons fa fa-phone"></span>
														<span class="phone_text">
															<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
																array(
																	"COMPONENT_TEMPLATE" => ".default",
																	"PATH" => SITE_DIR."include/phone.php",
																	"AREA_FILE_SHOW" => "file",
																	"AREA_FILE_SUFFIX" => "",
																	"AREA_FILE_RECURSIVE" => "Y",
																	"EDIT_TEMPLATE" => "standard.php"
																),
																false
															);?>
														</span>
													</span>
													<span class="order_wrap_btn">
														<span class="callback_btn"><?=GetMessage("CALLBACK")?></span>
													</span>
												</span>
											</div>
										</div>
									<?}?>
									<div class="clearfix"></div>
								</td>
							</tr>
						</table>
					</div>
<div class="tizers_block_restorator">
			<div id="bx_3218110189_463" class="item">
							<div class="img"><img src="/upload/iblock/1.png" alt="Консультация онлайн на сайте круглосуточно" title="Консультация онлайн на сайте круглосуточно"></div>
						<div class="title">
							Консультация онлайн на сайте круглосуточно
			</div>

		</div>
			<div id="bx_3218110189_464" class="item">
							<div class="img"><img src="/upload/iblock/2.png" alt="Доставляем товары по всей России и снг" title="Доставляем товары по всей России и снг"></div>
						<div class="title">
							<a class="name" href="/help/delivery/">
							Доставляем товары по всей России и снг				</a>
			</div>

		</div>
			<div id="bx_3218110189_465" class="item">
							<div class="img"><img src="/upload/iblock/3.png" alt="Нашли дешевле? Снизим цену на товар!" title="Нашли дешевле? Снизим цену на товар!"></div>
						<div class="title">
							Нашли дешевле? Снизим цену на товар!
			</div>

		</div>
	</div>
					<div class="catalog_menu menu_<?=strToLower($TEMPLATE_OPTIONS["MENU_COLOR"]["CURRENT_VALUE"]);?>">
						<div class="wrapper_inner">
							<div class="wrapper_middle_menu wrap_menu">
								<ul class="menu adaptive">
									<li class="menu_opener"><div class="text">
										<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
											array(
												"COMPONENT_TEMPLATE" => ".default",
												"PATH" => SITE_DIR."include/menu/menu.mobile.title.php",
												"AREA_FILE_SHOW" => "file",
												"AREA_FILE_SUFFIX" => "",
												"AREA_FILE_RECURSIVE" => "Y",
												"EDIT_TEMPLATE" => "standard.php"
											),
											false
										);?>
								</div></li>
								</ul>
								<div class="catalog_menu_ext">
									<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
										array(
											"COMPONENT_TEMPLATE" => ".default",
											"PATH" => SITE_DIR."include/menu/menu.catalog.php",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "",
											"AREA_FILE_RECURSIVE" => "Y",
											"EDIT_TEMPLATE" => "standard.php"
										),
										false
									);?>
								</div>
								<div class="inc_menu">
									<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
										array(
											"COMPONENT_TEMPLATE" => ".default",
											"PATH" => SITE_DIR."include/menu/menu.top_content_multilevel.php",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "",
											"AREA_FILE_RECURSIVE" => "Y",
											"EDIT_TEMPLATE" => "standard.php"
										),
										false
									);?>
								</div>
							</div>
						</div>
					</div>
				</header>
			</div>
			<div class="wraps" id="content">
				<div class="wrapper_inner <?=(COptimus::IsMainPage() ? "front" : "");?> <?=((COptimus::IsOrderPage() || COptimus::IsBasketPage()) ? "wide_page" : "");?>">
					<?if(!COptimus::IsOrderPage() && !COptimus::IsBasketPage()){?>
						<div class="left_block">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/left_block/menu.left_menu.php",
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => "standard.php"
								),
								false
							);?>

							<?$APPLICATION->ShowViewContent('left_menu');?>

							<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/left_block/comp_banners_left.php",
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => "standard.php"
								),
								false
							);?>
							<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/left_block/comp_news_articles(1).php",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "standard.php"
	),
	false
);?>
							<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/left_block/comp_news.php",
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => "standard.php"
								),
								false
							);?>
							<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/left_block/comp_news_articles.php",
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => "standard.php"
								),
								false
							);?>
						</div>
						<div class="right_block">
					<?}?>
						<div class="middle">
							<?if(!COptimus::IsMainPage()):?>
								<div class="container">
									<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "optimus", array(
										"START_FROM" => "0",
										"PATH" => "",
										"SITE_ID" => "-",
										"SHOW_SUBSECTIONS" => "N"
										),
										false
									);?>
									<div class="pcp__col pcp__col_12 pcp__col_p_6 pcp__col_title">
										<h1 id="pagetitle" class="pcp__title"><?=$APPLICATION->ShowTitle(false);?></h1>
									</div>
							<?endif;?>
<?if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == "xmlhttprequest") $APPLICATION->RestartBuffer();?>