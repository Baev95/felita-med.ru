<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
?>
<? foreach ($arResult as $item) : ?>

	<? // var_dump($item); 
	?>




	<nav class="footer__nav footer__separator">

		<div class="footer__nav_item">
			<p class="footer__nav_acc">Психолог</p>
			<ul>
				<li><a href="#">Консультация сексолога</a></li>
				<li><a href="#">Психолог сексолог</a></li>
				<li><a href="#">Лечение бессонницы</a></li>
				<li><a href="#">Психологическая помощь</a></li>
				<li><a href="#">Консультация сексолога</a></li>
				<li><a href="#">Психолог сексолог</a></li>
			</ul>
		</div>
		<div class="footer__nav_item">
			<p class="footer__nav_acc">Врач-психиатр</p>
			<ul>
				<li><a href="#">Консультация сексолога</a></li>
				<li><a href="#">Психолог сексолог</a></li>
				<li><a href="#">Лечение бессонницы</a></li>
				<li><a href="#">Психологическая помощь</a></li>
				<li><a href="#">Консультация сексолога</a></li>
				<li><a href="#">Психолог сексолог</a></li>
			</ul>
		</div>
		<div class="footer__nav_item">
			<p class="footer__nav_acc">Лечение зависимостей</p>
			<ul>
				<li><a href="#">Консультация сексолога</a></li>
				<li><a href="#">Психолог сексолог</a></li>
				<li><a href="#">Лечение бессонницы</a></li>
				<li><a href="#">Психологическая помощь</a></li>
				<li><a href="#">Консультация сексолога</a></li>
				<li><a href="#">Психолог сексолог</a></li>
			</ul>
		</div>
		<div class="footer__nav_item">
			<p class="footer__nav_acc">Психиатрическая помощь</p>
			<ul>
				<li><a href="#">Консультация сексолога</a></li>
				<li><a href="#">Психолог сексолог</a></li>
				<li><a href="#">Лечение бессонницы</a></li>
				<li><a href="#">Психологическая помощь</a></li>
				<li><a href="#">Консультация сексолога</a></li>
				<li><a href="#">Психолог сексолог</a></li>
			</ul>
		</div>
		<div class="footer__nav_item">
			<p class="footer__nav_acc">Психические расстройства</p>
			<ul>
				<li><a href="#">Консультация сексолога</a></li>
				<li><a href="#">Психолог сексолог</a></li>
				<li><a href="#">Лечение бессонницы</a></li>
				<li><a href="#">Психологическая помощь</a></li>
				<li><a href="#">Консультация сексолога</a></li>
				<li><a href="#">Психолог сексолог</a></li>
			</ul>
		</div>
		<div class="footer__nav_item footer__nav_item-menu">
			<ul>
				<li><a href="#">О клинике</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Отзывы</a></li>
				<li><a href="#">Врачи</a></li>
				<li><a href="#">Услуги</a></li>
				<li><a href="#">Контакты</a></li>
				<li><a href="#">Статьи</a></li>
				<li><a href="#">Цены</a></li>
				<li><a href="#">Акции</a></li>
			</ul>
		</div>


	</nav>










	<li><a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a></li>
<? endforeach ?>