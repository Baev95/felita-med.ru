<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="legal-docs section-offset">
	<div class="container">
		<div class="legal-docs_top">
			<p>Полный список юридических документов вы можете скачать по ссылке</p>
			<a href="#" id="download_with_request" download class="primary-btn">Скачать документы</a>
		</div>

		<div class="tab">

			<div class="legal-docs__tabs">
				<div class="legal-docs__tab_btns">

					<?
					$index_id = '';
					foreach ($arResult['TAB_BUTTONS'] as $index => $button):
						$index_id = $index == 0 ? $button['ID'] : $index_id; ?>
						<button class="legal-docs__tab_btn tab__btn <?= $index == 0 ? "tab__btn--active" : "" ?>" data-id="<?= $button['ID'] ?>">
							<?= $button['NAME'] ?>
						</button>
					<? endforeach; ?>

				</div>
			</div>

			<div class="tab-contents">
				<? foreach ($arResult['ITEMS_HTML'] as $index => $html): ?>

					<div class="tabcontent <?= $index == $index_id ? "tabcontent--active" : "" ?>" data-id="<?= $index ?>">

						<div class="legal-docs__content">
							<div class="legal-docs__content_text">
								<p class="legal-docs__content_title">Выписка из ЕГРЮЛ</p>
								<!-- <a href="#" download>
									Скачать лицензию
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/licenses-download.svg" alt="download">
								</a> -->
							</div>

							<div class="legal-docs__images">
								<?= $html ?>
							</div>

						</div>
					</div>
				<? endforeach; ?>

			</div>

		</div>
	</div>
</section>

<script>
	document.getElementById('download_with_request').addEventListener('click', function() {
		var files = [
			<? foreach ($arResult['ITEMS_PHOTO'] as $name) {
				echo <<<OED
                        '$name',
                    OED;
			} ?>

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