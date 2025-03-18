<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>




<section class="legal-docs section-offset">
	<div class="container">
		<div class="legal-docs__top">
			<p>Полный список юридических документов вы можете скачать по ссылке</p>
			<a href="#" id="download_with_request" download class="primary-btn">Скачать документы</a>
		</div>

		<div class="legal-docs__list">
			<?
			foreach ($arResult["ITEMS"] as $arItem) {
				foreach ($arItem["PROPERTIES"]["LEGAL_DOCS"]["VALUE"] as $key => $pictures) {
					$photo .= CFile::GetPath($pictures);
					$desc = "<p class='page-gallery__label'>{$arItem["PROPERTIES"]["PHOTO"]["DESCRIPTION"][$key]}</p>";
				}
				$res = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 3, 'ID' => $arItem["PROPERTIES"]["WHICH_DOCTOR"]["VALUE"]], false, false, []);
				while ($row = $res->GetNextElement()) {
					$ar_fields = $row->GetFields();
				}
				var_dump($photo);

			?>
				<div class="legal-docs__item">
					<p class="legal-docs__item_name"><?= $arItem["NAME"] ?></p>
					<div class="legal-docs__item_info">
						<p>Документ размещен: <span><?= explode(" ", $arItem["FIELDS"]["DATE_CREATE"])[0] ?></span></p>
						<p>Разместил: <span><?= $ar_fields["NAME"] ?></span></p>
					</div>
					<a href="<?= $photo ?>" download class="legal-docs__item_link">
						Скачать документ
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/licenses-download.svg" alt="download">
					</a>
				</div>
			<? } ?>
		</div>
	</div>
</section>










<script>
	document.getElementById('download_with_request').addEventListener('click', function() {
		var files = [

			<?
			foreach ($arResult["ITEMS"] as $arItem) {
				foreach ($arItem["PROPERTIES"]["LEGAL_DOCS"]["VALUE"] as $name) {
					echo CFile::GetPath($name);
				}
			}
			?>

		];
		console.log(files);

		files.forEach(function(file) {
			var a = document.createElement('a');
			a.innerHTML = file;
			document.body.appendChild(a);
			a.click();
			document.body.removeChild(a);
		});
	});
</script>