ТЕСТ

<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)	die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;

Loader::includeModule("highloadblock");
$entity = HL\HighloadBlockTable::compileEntity(1);
$entity_data_class = $entity->getDataClass();
$rsData = $entity_data_class::getList();
while ($arData = $rsData->Fetch()): ?>


	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="noindex, nofollow" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='keywords' content='' />
		<meta name='description' content='' />

		<title><? $APPLICATION->ShowTitle(false); ?></title>
		<link rel='icon' href='<?= SITE_TEMPLATE_PATH ?>/images/icons/favicon.png' type='image/png' sizes='32x32'>
		<link rel='shortcut con' href='<?= SITE_TEMPLATE_PATH ?>/images/icons/favicon.ico' type='image/png' sizes='16x16'>
		<?
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/build/swiper.min.css');
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/build/fancybox.min.css');
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/styles.css');
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles.css');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/build/swiper-bundle.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/build/fancybox.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/swipers.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/sourcebuster.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/request.js');
		?>
		<? $APPLICATION->ShowHead(); ?>
	</head>

	<body>
		<div id="panel">
			<? $APPLICATION->ShowPanel(); ?>
		</div>
		<div class="page">
			<header class="header" id="header">
				<div class="plashka header__plashka">
					<div class="container">
						<div class="header__plashka_row">
							<div class="header__plashka_text">
								<p><?= GetMessage(name: "WARNING") ?></p>
							</div>
							<div class="header__links">
								<div class="header__links_btns">
									<button class="header__eye">
										<svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.7305 5.78633C7.57656 6.20273 3.77305 8.42187 0.670312 12.2457C0.0457031 13.0125 0 13.1039 0 13.5152C0 13.9012 0.0761719 14.0332 0.782031 14.8914C4.16914 19.0098 8.4957 21.2695 13 21.2695C17.5602 21.2695 21.902 18.9742 25.3297 14.7543C25.9543 13.9875 26 13.8961 26 13.4848C26 13.0988 25.9238 12.9668 25.218 12.1086C21.8004 7.94961 17.4383 5.69492 12.9035 5.73555C12.4973 5.74062 11.9691 5.76094 11.7305 5.78633ZM14.1477 8.18828C15.9402 8.57422 17.4434 9.88945 18.1035 11.6414C18.3422 12.2762 18.4031 12.6469 18.398 13.5254C18.398 14.2414 18.3828 14.3988 18.266 14.8305C17.7531 16.7551 16.2551 18.2531 14.3305 18.766C13.8988 18.8828 13.7414 18.898 13.0254 18.898C12.1469 18.9031 11.7762 18.8422 11.1414 18.6035C9.38945 17.9434 8.09961 16.4656 7.6832 14.6477C7.55117 14.0738 7.56641 12.8348 7.70859 12.266C8.25195 10.1027 9.89727 8.55898 12.1062 8.1375C12.5582 8.05117 13.65 8.07656 14.1477 8.18828Z" fill="#625B5A" />
											<path d="M12.1113 10.6766C11.5883 10.8492 11.2887 11.0371 10.8926 11.4434C10.3187 12.0223 10.0547 12.6723 10.0547 13.5C10.0547 14.3531 10.3187 14.993 10.9129 15.5871C11.507 16.1813 12.1469 16.4453 13 16.4453C13.8277 16.4453 14.4777 16.1813 15.0566 15.6074C15.6762 14.998 15.9453 14.3633 15.9453 13.5051C15.9453 13.2309 15.9098 12.8855 15.8691 12.723C15.6102 11.7277 14.7723 10.8898 13.777 10.6309C13.3199 10.5141 12.543 10.5344 12.1113 10.6766Z" fill="#625B5A" />
										</svg>
									</button>
								</div>
								<div class="header__networks">
									<? if ($arData['UF_TG']) : ?>
										<a href="<?= $arData['UF_TG']; ?>" class="header__network">
											<svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1.0825 6.98177C2.77049 5.97136 4.65475 5.12807 6.41531 4.28046C9.44416 2.89215 12.485 1.5279 15.5566 0.2578C16.1542 0.0413872 17.228 -0.170253 17.3333 0.792163C17.2757 2.15445 17.0385 3.50877 16.8758 4.86308C16.4629 7.84134 15.9856 10.8094 15.5203 13.7779C15.3599 14.7666 14.2201 15.2785 13.4908 14.6457C11.738 13.3591 9.97181 12.0851 8.24145 10.7687C7.67463 10.1428 8.20024 9.24403 8.70647 8.79709C10.1501 7.25107 11.681 5.93756 13.0492 4.31165C13.4183 3.34315 12.3278 4.15938 11.9682 4.40946C9.99184 5.88944 8.0639 7.45977 5.98025 8.76047C4.91593 9.39716 3.67543 8.85305 2.61159 8.49777C1.65771 8.06861 0.260035 7.63617 1.0825 6.98177Z" fill="#625B5A" />
											</svg>
										</a>
									<? endif ?>
									<? if ($arData['UF_VK']) : ?>
										<a href="<?= $arData['UF_VK']; ?>" class="header__network">
											<svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M17.1435 7.61218C15.6035 6.11577 15.8001 6.34348 17.6678 3.77356C18.7818 2.21209 19.2406 1.23617 19.1095 0.813267C19.044 0.553022 18.1593 0.618083 18.1593 0.618083H15.4069C15.4069 0.618083 14.981 0.618083 14.8172 0.910859C14.5223 1.46388 14.3912 2.14703 13.8014 3.15548C12.5563 5.33503 12.0648 5.46516 11.8682 5.33503C11.4095 5.00973 11.5078 4.06634 11.5078 3.38319C11.5078 1.2687 11.8027 0.390368 10.918 0.130123C10.7214 0.0650613 10.5576 0.0650609 10.2627 0.0325302C9.90226 -4.96864e-07 9.54184 0 9.21418 0C8.39503 0 7.77247 0.0325303 7.34652 0.227714C7.01886 0.390368 6.7895 0.748206 6.95333 0.780736C7.14992 0.813267 7.54311 0.910859 7.77247 1.20364C8.06737 1.594 8.0346 2.50486 8.0346 2.50486C8.0346 2.50486 8.19843 5.00973 7.64141 5.3025C7.28098 5.53022 6.75673 5.07479 5.67545 3.09042C5.11843 2.08196 5.0529 1.39882 4.69247 0.94339C4.46311 0.650614 4.03716 0.553021 4.03716 0.553021H1.41588C1.41588 0.553021 0.957157 0.520491 0.891625 0.650614C0.760561 0.813267 0.891625 1.13857 0.891625 1.13857C0.891625 1.13857 2.95588 6.18083 5.28226 8.71823C7.34652 11.1255 9.7712 10.9954 9.7712 10.9954C9.7712 10.9954 11.1801 11.0604 11.3767 10.7026C11.5078 10.5725 11.5406 10.1821 11.5406 10.1821C11.5406 10.1821 11.5078 8.62063 12.1959 8.39292C12.884 8.1652 13.7359 9.88933 14.6533 10.5399C15.3414 11.0604 15.538 10.9954 15.8657 10.9954C16.521 10.9954 18.3231 10.9954 18.3231 10.9954C18.3231 10.9954 19.601 10.8653 19.0112 9.79174C18.9129 9.72668 18.618 9.04353 17.1435 7.61218Z" fill="#625B5A" />
											</svg>
										</a>
									<? endif ?>
									<? if ($arData['UF_OK']) : ?>
										<a href="<?= $arData['UF_TG']; ?>" class="header__network">
											<svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M4.989 8.78143C2.74679 8.78143 0.883169 6.84596 0.883169 4.55573C0.883169 2.1863 2.74679 0.25 4.98979 0.25C7.309 0.25 9.09562 2.18547 9.09562 4.55573C9.09163 5.68026 8.65825 6.75713 7.89073 7.54967C7.12321 8.3422 6.08435 8.78554 5.00249 8.78226L4.989 8.78143V8.78143ZM4.989 2.73906C4.03973 2.73906 3.31746 3.56819 3.31746 4.55655C3.31746 5.54327 4.03973 6.29403 4.98979 6.29403C5.97796 6.29403 6.66213 5.54327 6.66213 4.55655C6.66292 3.56737 5.97796 2.73906 4.989 2.73906ZM6.62403 12.2976L8.94403 14.6283C9.40041 15.1406 9.40041 15.8914 8.94403 16.3658C8.45034 16.8781 7.68918 16.8781 7.309 16.3658L4.98979 13.9955L2.74679 16.3658C2.51899 16.6025 2.21421 16.7205 1.87133 16.7205C1.60544 16.7205 1.30145 16.6017 1.03477 16.3658C0.578387 15.8914 0.578387 15.1406 1.03477 14.6275L3.39207 12.2968C2.54077 12.0348 1.72413 11.6637 0.960952 11.1921C0.390279 10.8761 0.276779 10.0866 0.580768 9.49342C0.960952 8.90106 1.64513 8.74348 2.2539 9.13866C3.07823 9.66156 4.02527 9.93821 4.99098 9.93821C5.9567 9.93821 6.90373 9.66156 7.72807 9.13866C8.33684 8.74348 9.05832 8.90106 9.40041 9.49342C9.74329 10.0866 9.5901 10.8753 9.05753 11.1921C8.33605 11.6665 7.49949 12.0221 6.62482 12.2985L6.62403 12.2976V12.2976Z" fill="#625B5A" />
											</svg>
										</a>
									<? endif ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="header__inner">
					<div class="container">
						<div class="header__main">
							<? if ($arData['UF_LOGO']) : ?>
								<a href="/" class="header__logo logo">
									<picture class="logo__picture">
										<source srcset="<?= CFile::GetPath($arData['UF_LOGO']); ?>" type="image/svg+xml">
										<img src="<?= CFile::GetPath($arData['UF_LOGO']); ?>" alt="Logo">
									</picture>
								</a>
							<? endif; ?>

							<div class="header__menu">
								<nav class="header__nav">
									<ul class="header__nav_list">
										<?
										$APPLICATION->IncludeComponent(
											"bitrix:menu",
											"services_link",
											array(
												"ALLOW_MULTI_SELECT" => "N",
												"MAX_LEVEL" => "3",
												"MENU_CACHE_GET_VARS" => array(
													0 => "arElements",
													1 => "",
												),
												"MENU_CACHE_TIME" => "3600",
												"MENU_CACHE_TYPE" => "N",
												"MENU_CACHE_USE_GROUPS" => "Y",
												"ROOT_MENU_TYPE" => "left",
												"CHILD_MENU_TYPE" => "left",
												"USE_EXT" => "Y",
												"EDIT_TEMPLATE" => "",
												"HIDE_ICONS" => "Y",
												"COMPONENT_TEMPLATE" => "services_link",
												"DELAY" => "N"
											),
											false
										);
										?>
										<? $APPLICATION->IncludeComponent(
											"bitrix:menu",
											"main_link",
											array(
												"ALLOW_MULTI_SELECT" => "Y",
												"CHILD_MENU_TYPE" => "subtop",
												"DELAY" => "N",
												"MAX_LEVEL" => "3",
												"MENU_CACHE_GET_VARS" => array(),
												"MENU_CACHE_TIME" => "3600",
												"MENU_CACHE_TYPE" => "N",
												"MENU_CACHE_USE_GROUPS" => "Y",
												"MENU_THEME" => "site",
												"ROOT_MENU_TYPE" => "top",
												"USE_EXT" => "Y",
												"COMPONENT_TEMPLATE" => "main_link"
											),
											false,
											["HIDE_ICONS" => "Y"]
										); ?>
									</ul>
								</nav>

								<div class="header__btns">
									<button class="tertiary-btn popup-btn" data-path="popup-change"><span><?= GetMessage(name: "ORDER_SERVICES") ?></span></button>
									<button class="primary-btn popup-btn" data-path="popup-change"><span><?= GetMessage(name: "ASK_QUESTION") ?></span></button>
								</div>

								<div class="header-mobile__wrapper header-mobile__info">
									<div class="header__info">
										<form class="header__search">
											<input type="search" placeholder="Поиск по сайту" required class="input">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/search_n.svg" class="header__search-icon">
										</form>

										<? if ($arData['UF_CITY'] &&  $arData['UF_ADRESS']) : ?>
											<div class="header__info_item">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/location_n.svg" alt="" class="header__info_icon">
												<div class="header__info_text header__info_location">
													<!-- <button class="popup-btn" data-path="popup-city"></button> -->
													<p><?= $arData['UF_CITY']; ?>, <?= $arData['UF_ADRESS']; ?></p>
													<p><?= GetMessage(name: "ADRESS") ?></p>
												</div>
											</div>
										<? endif; ?>
										<? if ($arData['UF_PHONE']) : ?>
											<div class="header__info_item">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/phone_n.svg" alt="" class="header__info_icon">
												<div class="header__info_text header__info_phone">
													<a href='tel:<?= preg_replace("/[^0-9]/", "", $arData["UF_PHONE"]); ?>'><?= $arData['UF_PHONE']; ?></a>
													<p><?= GetMessage(name: "ANONYMOUS") ?></p>
												</div>
											</div>
										<? endif; ?>
										<? if ($arData['UF_LICENSE_HEADER']) : ?>
											<div class="header__info_item">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/licenses_n.svg" alt="" class="header__info_icon">
												<div class="header__info_text header__info_location">
													<p><?= $arData['UF_LICENSE_HEADER']; ?></p>
													<p><?= GetMessage(name: "LICENSE_HEADER") ?></p>
												</div>
											</div>
										<? endif; ?>

									</div>

									<div class="header__links">
										<div class="header__links_btns">
											<button class="header__eye">
												<svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.7305 5.78633C7.57656 6.20273 3.77305 8.42187 0.670312 12.2457C0.0457031 13.0125 0 13.1039 0 13.5152C0 13.9012 0.0761719 14.0332 0.782031 14.8914C4.16914 19.0098 8.4957 21.2695 13 21.2695C17.5602 21.2695 21.902 18.9742 25.3297 14.7543C25.9543 13.9875 26 13.8961 26 13.4848C26 13.0988 25.9238 12.9668 25.218 12.1086C21.8004 7.94961 17.4383 5.69492 12.9035 5.73555C12.4973 5.74062 11.9691 5.76094 11.7305 5.78633ZM14.1477 8.18828C15.9402 8.57422 17.4434 9.88945 18.1035 11.6414C18.3422 12.2762 18.4031 12.6469 18.398 13.5254C18.398 14.2414 18.3828 14.3988 18.266 14.8305C17.7531 16.7551 16.2551 18.2531 14.3305 18.766C13.8988 18.8828 13.7414 18.898 13.0254 18.898C12.1469 18.9031 11.7762 18.8422 11.1414 18.6035C9.38945 17.9434 8.09961 16.4656 7.6832 14.6477C7.55117 14.0738 7.56641 12.8348 7.70859 12.266C8.25195 10.1027 9.89727 8.55898 12.1062 8.1375C12.5582 8.05117 13.65 8.07656 14.1477 8.18828Z" fill="#625B5A" />
													<path d="M12.1113 10.6766C11.5883 10.8492 11.2887 11.0371 10.8926 11.4434C10.3187 12.0223 10.0547 12.6723 10.0547 13.5C10.0547 14.3531 10.3187 14.993 10.9129 15.5871C11.507 16.1813 12.1469 16.4453 13 16.4453C13.8277 16.4453 14.4777 16.1813 15.0566 15.6074C15.6762 14.998 15.9453 14.3633 15.9453 13.5051C15.9453 13.2309 15.9098 12.8855 15.8691 12.723C15.6102 11.7277 14.7723 10.8898 13.777 10.6309C13.3199 10.5141 12.543 10.5344 12.1113 10.6766Z" fill="#625B5A" />
												</svg>
											</button>
										</div>




										<div class="header__networks">
											<? if ($arData['UF_TG']) : ?>
												<a href="<?= $arData['UF_TG']; ?>" class="header__network">
													<svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M1.0825 6.98177C2.77049 5.97136 4.65475 5.12807 6.41531 4.28046C9.44416 2.89215 12.485 1.5279 15.5566 0.2578C16.1542 0.0413872 17.228 -0.170253 17.3333 0.792163C17.2757 2.15445 17.0385 3.50877 16.8758 4.86308C16.4629 7.84134 15.9856 10.8094 15.5203 13.7779C15.3599 14.7666 14.2201 15.2785 13.4908 14.6457C11.738 13.3591 9.97181 12.0851 8.24145 10.7687C7.67463 10.1428 8.20024 9.24403 8.70647 8.79709C10.1501 7.25107 11.681 5.93756 13.0492 4.31165C13.4183 3.34315 12.3278 4.15938 11.9682 4.40946C9.99184 5.88944 8.0639 7.45977 5.98025 8.76047C4.91593 9.39716 3.67543 8.85305 2.61159 8.49777C1.65771 8.06861 0.260035 7.63617 1.0825 6.98177Z" fill="#625B5A" />
													</svg>
												</a>
											<? endif ?>
											<? if ($arData['UF_VK']) : ?>
												<a href="<?= $arData['UF_VK']; ?>" class="header__network">
													<svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M17.1435 7.61218C15.6035 6.11577 15.8001 6.34348 17.6678 3.77356C18.7818 2.21209 19.2406 1.23617 19.1095 0.813267C19.044 0.553022 18.1593 0.618083 18.1593 0.618083H15.4069C15.4069 0.618083 14.981 0.618083 14.8172 0.910859C14.5223 1.46388 14.3912 2.14703 13.8014 3.15548C12.5563 5.33503 12.0648 5.46516 11.8682 5.33503C11.4095 5.00973 11.5078 4.06634 11.5078 3.38319C11.5078 1.2687 11.8027 0.390368 10.918 0.130123C10.7214 0.0650613 10.5576 0.0650609 10.2627 0.0325302C9.90226 -4.96864e-07 9.54184 0 9.21418 0C8.39503 0 7.77247 0.0325303 7.34652 0.227714C7.01886 0.390368 6.7895 0.748206 6.95333 0.780736C7.14992 0.813267 7.54311 0.910859 7.77247 1.20364C8.06737 1.594 8.0346 2.50486 8.0346 2.50486C8.0346 2.50486 8.19843 5.00973 7.64141 5.3025C7.28098 5.53022 6.75673 5.07479 5.67545 3.09042C5.11843 2.08196 5.0529 1.39882 4.69247 0.94339C4.46311 0.650614 4.03716 0.553021 4.03716 0.553021H1.41588C1.41588 0.553021 0.957157 0.520491 0.891625 0.650614C0.760561 0.813267 0.891625 1.13857 0.891625 1.13857C0.891625 1.13857 2.95588 6.18083 5.28226 8.71823C7.34652 11.1255 9.7712 10.9954 9.7712 10.9954C9.7712 10.9954 11.1801 11.0604 11.3767 10.7026C11.5078 10.5725 11.5406 10.1821 11.5406 10.1821C11.5406 10.1821 11.5078 8.62063 12.1959 8.39292C12.884 8.1652 13.7359 9.88933 14.6533 10.5399C15.3414 11.0604 15.538 10.9954 15.8657 10.9954C16.521 10.9954 18.3231 10.9954 18.3231 10.9954C18.3231 10.9954 19.601 10.8653 19.0112 9.79174C18.9129 9.72668 18.618 9.04353 17.1435 7.61218Z" fill="#625B5A" />
													</svg>
												</a>
											<? endif ?>
											<? if ($arData['UF_OK']) : ?>
												<a href="<?= $arData['UF_TG']; ?>" class="header__network">
													<svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M4.989 8.78143C2.74679 8.78143 0.883169 6.84596 0.883169 4.55573C0.883169 2.1863 2.74679 0.25 4.98979 0.25C7.309 0.25 9.09562 2.18547 9.09562 4.55573C9.09163 5.68026 8.65825 6.75713 7.89073 7.54967C7.12321 8.3422 6.08435 8.78554 5.00249 8.78226L4.989 8.78143V8.78143ZM4.989 2.73906C4.03973 2.73906 3.31746 3.56819 3.31746 4.55655C3.31746 5.54327 4.03973 6.29403 4.98979 6.29403C5.97796 6.29403 6.66213 5.54327 6.66213 4.55655C6.66292 3.56737 5.97796 2.73906 4.989 2.73906ZM6.62403 12.2976L8.94403 14.6283C9.40041 15.1406 9.40041 15.8914 8.94403 16.3658C8.45034 16.8781 7.68918 16.8781 7.309 16.3658L4.98979 13.9955L2.74679 16.3658C2.51899 16.6025 2.21421 16.7205 1.87133 16.7205C1.60544 16.7205 1.30145 16.6017 1.03477 16.3658C0.578387 15.8914 0.578387 15.1406 1.03477 14.6275L3.39207 12.2968C2.54077 12.0348 1.72413 11.6637 0.960952 11.1921C0.390279 10.8761 0.276779 10.0866 0.580768 9.49342C0.960952 8.90106 1.64513 8.74348 2.2539 9.13866C3.07823 9.66156 4.02527 9.93821 4.99098 9.93821C5.9567 9.93821 6.90373 9.66156 7.72807 9.13866C8.33684 8.74348 9.05832 8.90106 9.40041 9.49342C9.74329 10.0866 9.5901 10.8753 9.05753 11.1921C8.33605 11.6665 7.49949 12.0221 6.62482 12.2985L6.62403 12.2976V12.2976Z" fill="#625B5A" />
													</svg>
												</a>
											<? endif ?>
										</div>
									</div>
									<!-- <div class="plashka header__discount">
								<div class="">
									<div class="header__discount_row">
										<div class="header__discount_text">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/lightning.svg" alt="">
											<p><span> Забронируйте скидку 15% на лечение алкоголизма методом Довженко до <span class="stock-future-js">28 июля</span>. <span class="stock-future-text">Осталось:</span></span> <span class="stock-date-js">4д: 13ч: 28 мин: 49 сек</span></p>
										</div>
					
										<div class="header__discount_btns">
											<a href="#" class="header__discount_more"><?= GetMessage(name: "DETAILED") ?></a>
											<button class="header__discount_close"><span><?= GetMessage(name: "CLOSE") ?></span></button>
										</div>
									</div>
								</div>
							</div> -->
								</div>
							</div>

							<div class="header-mobile__wrapper">
								<div class="header-mobile__burger-btns">

									<? if ($arData['UF_PHONE']) : ?>
										<div class="burger__phone">
											<span class="burger__phone-span"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/phone_n.svg" alt="" class="header__info_icon">
												<p><?= GetMessage(name: "ANONYMOUS_MOBILE") ?></p>
											</span>
											<p><a href="tel:<?= preg_replace("/[^0-9]/", "", $arData["UF_PHONE"]); ?>"><?= $arData['UF_PHONE']; ?></a></p>
										</div>
									<? endif; ?>

									<div class="burger__menu">
										<svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
											<path
												class="line top"
												d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" fill="#fff" />
											<path
												class="line middle"
												d="m 30,50 h 40" />
											<path
												class="line bottom"
												d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
										</svg>
									</div>

								</div>
							</div>
						</div>

						<div class="header-mobile__btns">
							<button class="tertiary-btn popup-btn" data-path="popup-change"><span><?= GetMessage(name: "ORDER_SERVICES") ?></span></button>
							<button class="primary-btn popup-btn" data-path="popup-change"><span><?= GetMessage(name: "ASK_QUESTION") ?></span></button>
						</div>
						<div class="header__top">
							<div class="header__info">

								<? if ($arData['UF_CITY'] &&  $arData['UF_ADRESS']) : ?>
									<div class="header__info_item">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/location_n.svg" alt="" class="header__info_icon">
										<div class="header__info_text header__info_location">
											<!-- <button class="popup-btn" data-path="popup-city"></button> -->
											<p><?= $arData['UF_CITY']; ?>, <?= $arData['UF_ADRESS']; ?></p>
											<p><?= GetMessage(name: "ADRESS") ?></p>


										</div>
									</div>
								<? endif; ?>

								<? if ($arData['UF_PHONE']) : ?>
									<div class="header__info_item">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/phone_n.svg" alt="" class="header__info_icon">
										<div class="header__info_text header__info_phone">
											<a href='tel:<?= preg_replace("/[^0-9]/", "", $arData["UF_PHONE"]); ?>'><?= $arData['UF_PHONE']; ?></a>
											<p><?= GetMessage(name: "ANONYMOUS") ?></p>
										</div>
									</div>
								<? endif; ?>
								<? if ($arData['UF_LICENSE_HEADER']) : ?>
									<div class="header__info_item">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/licenses_n.svg" alt="" class="header__info_icon">
										<div class="header__info_text header__info_location">
											<p><?= $arData['UF_LICENSE_HEADER']; ?></p>
											<p><?= GetMessage(name: "LICENSE_HEADER") ?></p>
										</div>
									</div>
								<? endif; ?>
							</div>

							<div class="header__search-wrapper header__search-none search-wrapper">
								<? $APPLICATION->IncludeComponent(
									"bitrix:search.title",
									"search.title",
									array(
										"CATEGORY_0" => array(
											0 => "iblock_detail_pages",
										),
										"CATEGORY_0_TITLE" => "Услуги",
										"CHECK_DATES" => "N",
										"CONTAINER_ID" => "title-search",
										"INPUT_ID" => "title-search-input",
										"NUM_CATEGORIES" => "3",
										"ORDER" => "date",
										"PAGE" => "#SITE_DIR#search/index.php",
										"SHOW_INPUT" => "Y",
										"SHOW_OTHERS" => "N",
										"TOP_COUNT" => "8",
										"USE_LANGUAGE_GUESS" => "Y",
										"COMPONENT_TEMPLATE" => "search.title_1",
										"CATEGORY_0_iblock_detail_pages" => array(
											0 => "5",
										),
										"TEMPLATE_THEME" => "green",
										"PRICE_CODE" => array(),
										"PRICE_VAT_INCLUDE" => "Y",
										"PREVIEW_TRUNCATE_LEN" => "",
										"SHOW_PREVIEW" => "Y",
										"PREVIEW_WIDTH" => "75",
										"PREVIEW_HEIGHT" => "75",
										"CATEGORY_0_iblock_specialist" => array(
											0 => "3",
										),
										"CATEGORY_1_TITLE" => "Статьи",
										"CATEGORY_1" => array(
											0 => "iblock_detail_pages",
										),
										"CATEGORY_1_iblock_detail_pages" => array(
											0 => "6",
										),
										"CATEGORY_2_TITLE" => "Специалисты",
										"CATEGORY_2" => array(
											0 => "iblock_specialist",
										),
										"CATEGORY_2_iblock_specialist" => array(
											0 => "3",
										)
									),
									false
								); ?>
							</div>

							<? if ($arData['UF_PHONE']) : ?>
								<div class="header-mobile__wrapper header-mobile__wrapper-phone">
									<div class="header-mobile__phone">
										<a href="tel:<?= preg_replace("/[^0-9]/", "", $arData["UF_PHONE"]); ?>">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/phone.svg" alt="">
											<?= $arData['UF_PHONE']; ?>
										</a>
										<p>Круглосуточно, анонимно</p>
									</div>
								</div>
							<? endif; ?>
						</div>

					</div>

				</div>
				<style>
					main.main {
						margin-top: 250px;
					}
				</style>
				<?/*
			<div class="plashka header__discount">
				<div class="container">
					<div class="header__discount_row">
						<div class="header__discount_text">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/lightning.svg" alt="stock">
							<p>Забронируйте скидку 15% на лечение алкоголизма методом Довженко до <span class="stock-future-js">28 июля</span>.
								Осталось: <span class="stock-date-js">4д: 13ч: 28 мин: 49 сек</span></p>
						</div>

						<div class="header__discount_btns">
							<a href="#" class="header__discount_more"><?= GetMessage(name: "DETAILED") ?></a>
							<button class="header__discount_close"><span><?= GetMessage(name: "CLOSE") ?></span></button>
						</div>
					</div>
				</div>
			</div>
		*/ ?>
			</header>

			<main class="main">

				<? if ($APPLICATION->GetCurDir() !== '/') : ?>
					<div class="page-top section-offset">
						<div class="container">
							<?
							$status = http_response_code();

							if ($status !== 404) {
								$APPLICATION->IncludeComponent(
									"bitrix:breadcrumb",
									".default",
									array(
										"PATH" => "",
										"SITE_ID" => "s1",
										"START_FROM" => "0",
										"COMPONENT_TEMPLATE" => ".default"
									),
									false
								);
							}

							$show_title = false;
							$currentDir = $APPLICATION->GetCurDir();
							if ($currentDir === '/articles/' || $currentDir === '/services/' || $currentDir === '/doctors/') {
								$show_title = true;
							} elseif (strpos($currentDir, '/articles/') === 0 || strpos($currentDir, '/services/') === 0 || strpos($currentDir, '/doctors/') === 0) {
								$show_title = false;
							} else {
								$show_title = true;
							}

							if ($show_title) : ?>
								<h1 class='title-h1 page-top__title'><?php $APPLICATION->ShowTitle(false); ?></h1>
							<?php endif; ?>
							<!-- 
						<ul class="breadcrumbs">
							<li><a href="/">Главная</a></li>
							<li>Акции</li>
						</ul> -->

						</div>
						<picture class="page-top__bg">
							<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/breadcrumbs/breadcrumbs-bg.webp" type="image/webp" />
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/breadcrumbs/breadcrumbs-bg.jpg" alt="background" />
						</picture>
					</div>

				<?
				endif;
				?>
			<? endwhile ?>