<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;

Loader::includeModule("highloadblock");
$entity = HL\HighloadBlockTable::compileEntity(1);
$entity_data_class = $entity->getDataClass();
$rsData = $entity_data_class::getList();
while ($arData = $rsData->Fetch()): ?>

	</main>

	<footer class="footer">
		<div class="footer__plashka">
			<div class="container">
				<p><?= GetMessage(name: "WARNING") ?></p>
			</div>
		</div>

		<div class="footer__inner">
			<div class="container">
				<div class="footer__top footer__separator">
					<div class="footer__top_row">
						<div class="footer__top_left">
							<? if ($arData['UF_LOGO_FOOTER']) : ?>
								<a href="/" class="footer__top_logo logo">
									<picture class="logo__picture">
										<source srcset="<?= CFile::GetPath($arData['UF_LOGO_FOOTER']); ?>" type="image/svg+xml">
										<img src="<?= CFile::GetPath($arData['UF_LOGO_FOOTER']); ?>" alt="Logo">
									</picture>
								</a>
							<? endif; ?>
							<div class="footer__top_networks">
								<? if ($arData['UF_TG']) : ?>
									<a href="<?= $arData['UF_TG']; ?>">
										<svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M19.7097 0.150081C19.7097 0.150081 21.6523 -0.585776 21.4904 1.20131C21.4365 1.93717 20.9508 4.51267 20.5731 7.29843L19.278 15.5506C19.278 15.5506 19.1701 16.7595 18.1987 16.9697C17.2274 17.1799 15.7704 16.2339 15.5006 16.0236C15.2847 15.8659 11.4534 13.5007 10.1043 12.3443C9.72655 12.0289 9.29486 11.3982 10.1583 10.6623L15.8244 5.40624C16.4719 4.77549 17.1195 3.30378 14.4213 5.09086L6.86655 10.0842C6.86655 10.0842 6.00315 10.6098 4.3843 10.1368L0.876711 9.08552C0.876711 9.08552 -0.418395 8.29711 1.79408 7.50865C7.19035 5.03826 13.8278 2.51532 19.7097 0.150081Z" fill="#37384C" />
										</svg>
									</a>
								<? endif ?>
								<? if ($arData['UF_VK']) : ?>
									<a href="<?= $arData['UF_VK']; ?>">
										<svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M19.0701 0.893727C18.8563 1.66641 18.5681 2.33898 18.207 2.94966L18.222 2.92236C17.8673 3.60191 17.4437 4.38703 16.9512 5.27772C16.5289 5.98093 16.3054 6.34498 16.2805 6.36985C16.1713 6.5273 16.0953 6.72025 16.0691 6.9323L16.0683 6.93867C16.0897 7.13162 16.1673 7.29999 16.2805 7.42558L16.5973 7.83149C18.2917 9.83312 19.2448 11.2128 19.4565 11.9707C19.4842 12.0544 19.5 12.1509 19.5 12.2519C19.5 12.4285 19.4509 12.5914 19.3678 12.7251L19.3694 12.7224C19.23 12.8871 19.0352 12.9891 18.8198 12.9891C18.7961 12.9891 18.7715 12.9882 18.7486 12.9854H18.7518H16.6685C16.6677 12.9854 16.6662 12.9854 16.6646 12.9854C16.3977 12.9854 16.1523 12.878 15.9599 12.6997L15.9622 12.7015C15.6819 12.4366 15.4325 12.15 15.2092 11.8387L15.2021 11.8278C14.8374 11.3539 14.5138 10.955 14.2314 10.631C13.2907 9.60317 12.5966 9.08926 12.1489 9.08926C12.1323 9.08744 12.1133 9.08653 12.0935 9.08653C11.9629 9.08653 11.8409 9.13295 11.7404 9.21212L11.7427 9.2103C11.6604 9.32862 11.6105 9.48152 11.6105 9.64625C11.6105 9.67901 11.6121 9.70995 11.6161 9.74181V9.73817C11.5947 10.0239 11.582 10.3561 11.582 10.692C11.582 10.8003 11.5836 10.9077 11.586 11.0151V10.9996V12.0544C11.5939 12.0972 11.5986 12.1463 11.5986 12.1964C11.5986 12.4166 11.5115 12.6132 11.3754 12.7433L11.3746 12.7443C11.0681 12.9053 10.7102 13 10.3326 13C10.2518 13 10.1726 12.9954 10.0942 12.9873L10.1045 12.9882C8.85823 12.9609 7.7022 12.5413 6.71958 11.8341L6.74729 11.8524C5.55088 11.0169 4.55955 9.92929 3.80418 8.64422L3.7828 8.60599C3.06543 7.51204 2.39636 6.27611 1.82626 4.97284L1.77084 4.83268C1.43749 4.10277 1.09227 3.2054 0.794549 2.28255L0.747041 2.11418C0.625896 1.69917 0.538006 1.21682 0.501584 0.717166L0.5 0.694413C0.5 0.234505 0.735428 0.00455065 1.20628 0.00455065H3.28871C3.30772 0.00273043 3.32989 0.00182009 3.35285 0.00182009C3.54922 0.00182009 3.73054 0.0791795 3.87385 0.209325L3.87227 0.207505C4.03063 0.406819 4.14782 0.651638 4.20562 0.924671L4.20799 0.935592C4.59122 2.17971 4.99742 3.22452 5.46458 4.22564L5.41153 4.10095C5.79317 4.98376 6.2152 5.7437 6.69662 6.44539L6.67841 6.41718C7.1007 7.013 7.43009 7.31091 7.66657 7.31091C7.6737 7.31182 7.68241 7.31182 7.69191 7.31182C7.80909 7.31182 7.91123 7.23901 7.96666 7.1298L7.96745 7.12797C8.02605 6.95505 8.06009 6.75392 8.06009 6.54459C8.06009 6.5 8.05851 6.4554 8.05534 6.41172V6.41718V2.88687C8.03871 2.47095 7.95003 2.08233 7.80197 1.73376L7.8083 1.75105C7.71012 1.51078 7.59214 1.30328 7.45199 1.11852L7.45437 1.12216C7.32451 0.972907 7.23583 0.777233 7.20812 0.558807L7.20733 0.553346C7.20733 0.398628 7.26909 0.259381 7.36569 0.16837L7.36648 0.16746C7.46229 0.066438 7.59056 0.00546069 7.73071 0.00546069H7.73704H11.0198C11.0373 0.00273037 11.0571 0.00182009 11.0776 0.00182009C11.232 0.00182009 11.3706 0.08191 11.4625 0.207505L11.4632 0.208415C11.5448 0.379516 11.5931 0.58429 11.5931 0.800896C11.5931 0.83548 11.5915 0.869154 11.5891 0.902828V0.898278V5.60627C11.5876 5.62811 11.5868 5.6536 11.5868 5.67908C11.5868 5.84654 11.6271 6.00399 11.6968 6.13778L11.6952 6.13414C11.753 6.23243 11.8496 6.29614 11.9589 6.29614C12.0983 6.28521 12.2257 6.23243 12.3326 6.1487L12.3303 6.15052C12.5456 5.98033 12.7309 5.78647 12.8916 5.56714L12.8948 5.56259C13.3754 4.93825 13.8188 4.24839 14.2052 3.51484L14.2361 3.45113C14.5085 2.93237 14.8031 2.29347 15.0699 1.63729L15.119 1.5035L15.4721 0.691683C15.5948 0.285774 15.9242 0 16.3114 0C16.3265 0 16.3415 -6.60073e-08 16.3566 0.000910043H16.3542H18.4374C19.0001 0.000910043 19.2113 0.298516 19.0708 0.893727H19.0701Z" fill="#37384C" />
									</a>
								<? endif ?>
								<? if ($arData['UF_OK']) : ?>
									<a href="<?= $arData['UF_TG']; ?>">
										<svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.02227 7.59262C7.1136 7.59262 8.80859 5.89304 8.80859 3.79613C8.80856 1.69922 7.11357 0 5.02227 0C2.93021 0 1.23452 1.69922 1.23452 3.79613C1.23449 5.89304 2.93021 7.59262 5.02227 7.59262ZM5.02227 1.92845C6.05094 1.92845 6.88489 2.76451 6.88489 3.7961C6.88489 4.82772 6.05094 5.66376 5.02227 5.66376C3.99252 5.66376 3.15889 4.82772 3.15889 3.7961C3.15889 2.76451 3.99249 1.92845 5.02227 1.92845ZM9.3868 8.05588C9.17348 7.62523 8.58134 7.26708 7.79409 7.88853C6.72999 8.72862 5.02224 8.72862 5.02224 8.72862C5.02224 8.72862 3.31338 8.72862 2.24928 7.88853C1.46242 7.26708 0.870648 7.62523 0.656956 8.05588C0.283624 8.80626 0.704801 9.16917 1.65532 9.78076C2.46701 10.3034 3.58262 10.4985 4.30263 10.5714L3.70135 11.1742C2.85461 12.0227 2.03743 12.8426 1.47012 13.4114C1.13075 13.7512 1.13075 14.3024 1.47012 14.6422L1.57201 14.7451C1.91138 15.085 2.46081 15.085 2.80014 14.7451L5.03138 12.5079C5.87886 13.3568 6.69603 14.1764 7.26331 14.7451C7.60268 15.085 8.15211 15.085 8.49144 14.7451L8.59334 14.6422C8.93271 14.302 8.93271 13.7512 8.59334 13.411L6.36211 11.1742L5.75939 10.5696C6.48011 10.4949 7.5833 10.2989 8.3884 9.78079C9.33895 9.16914 9.75942 8.80623 9.3868 8.05588Z" fill="#37384C" />
										</svg>
									</a>
								<? endif ?>

							</div>
						</div>

						<div class="footer__top_right">
							<div class="footer__top_search-btns">
								<?/*
								<button class="footer__top_btn-eye" data-path="popup-change">
									<picture>
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/eye.svg" type="image/svg+xml">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/eye.png" alt="eye" loading="lazy">
									</picture>
								</button>
								*/ ?>
								<button class="footer__top_btn-search popup-btn" data-path="popup-search">
									<span>Поиск</span>
									<picture>
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/search.svg" type="image/svg+xml">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/search.png" alt="search" loading="lazy">
									</picture>
								</button>
							</div>

							<div class="footer__top_btns">
								<button class="primary-btn popup-btn" data-path="popup-change"><?= GetMessage(name: "ORDER_SERVICES") ?></button>
								<button class="secondary-btn popup-btn" data-path="popup-change"><?= GetMessage(name: "ASK_QUESTION") ?></button>
							</div>
						</div>
					</div>
				</div>

				<div class="footer__info footer__separator">
					<div class="footer__info_row">

						<? if ($arData['UF_CITY'] &&  $arData['UF_ADRESS']) : ?>
							<div class="footer__info_item">
								<p><?= GetMessage(name: "ADRESS") ?></p>
								<div class="footer__info_text">
									<picture class="footer__info_icon">
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/location.svg" type="image/svg+xml">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/location.png" alt="location" loading="lazy">
									</picture>
									<p><button class="popup-btn" data-path="popup-city"><?= $arData['UF_CITY']; ?>,</button> <span><?= $arData['UF_ADRESS']; ?></span></p>
								</div>
							</div>
						<? endif; ?>

						<? if ($arData['UF_EMAIL']) : ?>
							<div class="footer__info_item">
								<p><?= GetMessage(name: "EMAIL") ?></p>
								<div class="footer__info_text">
									<picture class="footer__info_icon">
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/mail.svg" type="image/svg+xml">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/mail.png" alt="mail" loading="lazy">
									</picture>
									<a href="mailto:<?= $arData['UF_EMAIL']; ?>"><?= $arData['UF_EMAIL']; ?></a>
								</div>
							</div>
						<? endif; ?>

						<? if ($arData['UF_OPERATING']) : ?>
							<div class="footer__info_item">
								<p><?= GetMessage(name: "OPERATING") ?></p>

								<div class="footer__info_text">
									<picture class="footer__info_icon">
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/time.svg" type="image/svg+xml">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/time.png" alt="time" loading="lazy">
									</picture>
									<p><?= $arData['UF_OPERATING']; ?></p>
								</div>
							</div>
						<? endif; ?>

						<? if ($arData['UF_PHONE']) : ?>
							<div class="footer__info_item">
								<p><?= GetMessage(name: "MOBILE") ?></p>
								<div class="footer__info_text footer__info_phone">
									<picture class="footer__info_icon">
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/phone.svg" type="image/svg+xml">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/phone.png" alt="phone" loading="lazy">
									</picture>
									<a href="tel:<?= preg_replace("/[^0-9]/", "", $arData["UF_PHONE"]); ?>"><?= $arData['UF_PHONE']; ?></a>
								</div>
							</div>
						<? endif; ?>

					</div>
				</div>

				<nav class="footer__nav footer__separator">
					<? $APPLICATION->IncludeComponent(
						"bitrix:menu",
						"footer_link",
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
							"ROOT_MENU_TYPE" => "footer",
							"USE_EXT" => "Y",
							"COMPONENT_TEMPLATE" => "footer_link",
							"WHERE" => 'FOOTER'
						),
						false,
						["HIDE_ICONS" => "Y"]
					); ?>
				</nav>

				<div class="footer__bottom footer__separator">
					<div class="footer__bottom_links">
						<a href="/karta-sayta">Карта сайта</a>
						<a href="#">Политика конфиденциальности</a>
						<a href="#">Пользовательское соглашение</a>
						<button class="footer__top_btn-eye--mobile" data-path="popup-change">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/eye.svg" type="image/svg+xml">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/eye.png" alt="eye" loading="lazy">
							</picture>
						</button>
					</div>

					<div class="footer__bottom_payment">
						<p><?= GetMessage(name: "PAYMENT_METHODS") ?></p>
						<div class="footer__bottom_pays">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/pay-remittance.svg" type="image/svg+xml">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/pay-remittance.png" alt="Банковский перевод" loading="lazy">
							</picture>

							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/pay-card.svg" type="image/svg+xml">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/pay-card.png" alt="Банковская карта" loading="lazy">
							</picture>

							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/pay-cash.svg" type="image/svg+xml">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/footer/footer-icon-1/pay-cash.png" alt="Наличный расчет" loading="lazy">
							</picture>
						</div>
					</div>
				</div>

				<? if ($arData['UF_FOOTER']) : ?>
					<div class="footer__copy">
						<?= $arData['UF_FOOTER']; ?>
					</div>
				<? endif; ?>

			</div>
		</div>
	</footer>

	</div>

	<?
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/modals/popup_change.php', array('data' => $arData), array('SHOW_BORDER' => false));
	?>

	<?
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/modals/popup_change_ok.php', array(), array('SHOW_BORDER' => false));
	?>

	<?
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/modals/popup_change_error.php', array(), array('SHOW_BORDER' => false));
	?>


	<?/* ?> 
	<?
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/modal/popup_city.php', array(), array('SHOW_BORDER' => false));
	?>
	<?
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/modal/popup_call_simple.php', array(), array('SHOW_BORDER' => false));
	?>
	<?
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/modal/popup_copy.php', array(), array('SHOW_BORDER' => false));
	?>
	<?
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/footer/to_top.php', array(), array('MODE' => 'php'));
	?>

	<? */ ?>


	</body>
<? endwhile; ?>

</html>