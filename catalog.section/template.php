<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die();
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

<?if ($arResult['ITEMS']):?>
<?$count_photo = ($arParams['COUNT_PHOTO'] - 1)?>

<div class="slider_022101__wrap wrap_block <?=$arParams["LINK_ALL_PAGE"] == "Y" ? "butt-all-after" : "" ?>">
    <?=($arParams["TITLE_BLOCK"]) ? '<div class="title_block h2">'.$arParams["TITLE_BLOCK"].'</div>': ""?>

    <?/*if (!empty($arParams["BUTTON_WIZARD"])):?>
    <a class="btn btn-type-18 find_solution <?=$arParams["LINK_ALL_PAGE"] == "Y" ? "butt-all-after" : "Подобрать решение" ?>" data-toggle="modal" data-target="#wizardModal" href="#" >
        <?=$arParams["BUTTON_WIZARD"]?>
    </a>
    <?endif;*/?>
    <div class="" <?=$arParams["COUNT_SLIDES"] ? 'count_slides="'.$arParams["COUNT_SLIDES"].'"' :'count_slides="5"'?>>
        <?foreach ($arResult['ITEMS'] as $item):?>
	        <div class="slider_022101__item">
	            <div class="item__header" id="<?=$item['ID']?>" count="<?=$arParams["COUNT_PHOTO"]?>">

	                <?//<div class = "scr scr - blue" > Есть в наличии</div > ?>
	                <?if ($item['PROPERTIES']['HIT']['VALUE'] == 'Y'):?>
		                <div class="scr scr-yellow">
		                    <?=GetMessage('SLIDER_022101_HIT')?>
		                </div>
	                <?endif?>

	                <a class="img-page" href="<?=$item['DETAIL_PAGE_URL']?>">
	                    <div class="wrap"></div>
	                    <img class="item__img poster" src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>"/>
	                </a>
	                <?foreach ($item['PROPERTIES']['PHOTO']['VALUE'] as $key => $photoId):?>
		                <?if ($key < $count_photo):?>
		                <a class="img-page" href="<?=$item['DETAIL_PAGE_URL']?>">
		                    <div class="wrap"></div>
		                </a>
		                <?endif;?>
	                <?endforeach;?>
	            </div>
	            <a class="link_022101" href="<?=$item['DETAIL_PAGE_URL']?>">
	                <?=!empty($item["PROPERTIES"]["SHORT_NAME"]["VALUE"]) ? $item["PROPERTIES"]["SHORT_NAME"]["VALUE"] : $item["NAME"]?>
	            </a>

	            <?if (array_pop($item["ITEM_PRICES"])["PRICE"]):?>
		            <div class ="price_2921 price_2921 slider_022101_2__price_2921">
		                <span>от</span> <b><?=array_pop($item["ITEM_PRICES"])["PRINT_BASE_PRICE"];?></b>
		                <?/*?><span class ="price_2921__curr"> ₽ </span><?*/?>
		            </div>
	            <?else:?>
	            	<div>Под заказ</div>
	            <?endif;?>

	            <div class="slider_022101_footer">
	                <?
                  /*<div class="slider_022101__icons">
	                    <div class="elem elem-bookmark <?=($item["IN_FAVORITE"] == "Y") ? "in" : ""?>"  onclick="toggleTovarFavorites(this, <?=$item['ID']?>)">
	                    </div>
	                </div>*/
                  ?>
	                <a class="btn btn-primary btn-sm" href="<?=$item['DETAIL_PAGE_URL']?>">
	                    <?=$arParams["MESS_BTN_BUY"]?>
	                </a>
	            </div>
	        </div>

        <?endforeach?>

    </div>

    <?/*if (count($arResult["ITEMS"]) > $arParams["LINE_ELEMENT_COUNT"]):?>
    	<?if ($arParams['LINK_ALL_PAGE'] == 'Y'):?>
    		<a class="all_link" href="/production/"></a>
    	<?endif;?>
    <?endif;*/?>
</div>


<?endif;?>