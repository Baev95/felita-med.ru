<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Grid\Declension;

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$declension = new Declension('год', 'года', 'лет');
?>
<?
switch ($arParams['CUSTOM']):
	case "services": // Для страницы услуг 
?>
		<section class="doctors section-offset">
			<div class="container">
				<div class="section__flex">
					<div class="section__top doctors__top">
						<h2 class="title-h2">Врачи нашей клиники</h2>
						<a href="#" class="btn-arrow doctors__btn section__btn">Все врачи</a>
					</div>
					<div class="section__inner">
						<div class="doctors__cards">
							<div class="doctors__swiper swiper doctors3Swiper">
								<div class="swiper-wrapper">
									<?
									foreach ($arResult["ITEMS"] as $arItem) :
										$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
										$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
									?>
										<div class="doctors__swiper-slide swiper-slide">
											<div class="doctors__card">
												<div class="doctors__card_inner">
													<div class="doctors__card_content">
														<p class="doctors__card_fio"><?= $arItem["NAME"] ?></p>
														<div class="doctors__card_info">
															<div class="doctors__card_item">
																<p><?= GetMessage(name: "POST") ?></p>
																<p><?= $arItem["PROPERTIES"]["POST"]["VALUE"] ?></p>
															</div>
															<div class="doctors__card_item">
																<p><?= GetMessage(name: "ACADEMIC_DEGREE") ?></p>
																<p><?= $arItem["PROPERTIES"]["ACADEMIC_DEGREE"]["VALUE"] ?></p>
															</div>
														</div>
													</div>
													<div class="doctors__card_btns">
														<button class="primary-btn popup-btn" data-path="popup-call"><?= GetMessage(name: "SIGN_UP") ?></button>
														<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="tertiary-btn"><?= GetMessage(name: "DETAILED") ?></a>
													</div>
												</div>
												<div class="doctors__card_image">
													<p class="doctors__card_experience"><?= GetMessage(name: "WORK_EXPERIENCE") ?> <span><?= $arItem['PROPERTIES']['WORK_EXPERIENCE']['VALUE'] . " " . $declension->get($arItem['PROPERTIES']['WORK_EXPERIENCE']['VALUE']) ?></span></p>
													<picture class="doctors__card_photo">
														<source srcset="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" type="image/webp">
														<img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" loading="lazy" alt="<?= $arItem["NAME"] ?>">
													</picture>
												</div>
											</div>
										</div>
									<? endforeach; ?>
								</div>
							</div>
						</div>
						<div class="doctors__swiper-pagination swiper-pagination"></div>
					</div>
				</div>
			</div>
		</section>
	<?
		break;
	default:  // Для страницы цен 
	?>
		<section class="page-doctors section-offset">
			<div class="container">
				<div class="page-doctors__grid">
					<?
					foreach ($arResult["ITEMS"] as $arItem) :
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
						<div class="doctors__card">
							<div class="doctors__card_inner">
								<div class="doctors__card_content">
									<p class="doctors__card_fio"><?= $arItem["NAME"] ?></p>
									<div class="doctors__card_info">
										<div class="doctors__card_item">
											<p><?= GetMessage(name: "POST") ?></p>
											<p><?= $arItem["PROPERTIES"]["POST"]["VALUE"] ?></p>
										</div>
										<div class="doctors__card_item">
											<p><?= GetMessage(name: "ACADEMIC_DEGREE") ?></p>
											<p><?= $arItem["PROPERTIES"]["ACADEMIC_DEGREE"]["VALUE"] ?></p>
										</div>
									</div>
								</div>
								<div class="doctors__card_btns">
									<button class="primary-btn popup-btn" data-path="popup-call"><?= GetMessage(name: "SIGN_UP") ?></button>
									<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="tertiary-btn"><?= GetMessage(name: "DETAILED") ?></a>
								</div>
							</div>
							<div class="doctors__card_image">
								<p class="doctors__card_experience"><?= GetMessage(name: "WORK_EXPERIENCE") ?> <span><?= $arItem['PROPERTIES']['WORK_EXPERIENCE']['VALUE'] . " " . $declension->get($arItem['PROPERTIES']['WORK_EXPERIENCE']['VALUE']) ?></span></p>
								<picture class="doctors__card_photo">
									<source srcset="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" type="image/webp">
									<img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" loading="lazy" alt="<?= $arItem["NAME"] ?>">
								</picture>
							</div>
						</div>
					<? endforeach; ?>
				</div>
			</div>
		</section>
<?
		break;
endswitch;
?>