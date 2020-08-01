<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
if (LANGUAGE_ID == "en") {
    $sSectionName = "News";
} else if (LANGUAGE_ID == "ru") {
    $sSectionName = "Новости";
}
?>
<section id="news_summary" class="section block-fullscreen bg-image-section-two reveal inversion">
            <div class="q-container container-inner">
                <div class="columns ">
                    <div class="column is-12">
                        <h1 class="section-headline">
                        <span class="q_split">
                            <span class="q_split_wrap rev_item" editor-binding="title"><?php echo $sSectionName;?></span>
                        </span>
                        </h1>
                    </div>
                </div>
                <div class="columns">
                    <div class="column villas-container">
                        <div id="accommodations" class="accommodations column-grid-container">
						<?foreach($arResult["ITEMS"] as $arItem):?>
                            <div class="accommodation-type column-item">
                                <div class="accommodation-bg" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
								<?if($arItem["DISPLAY_PROPERTIES"]["NEWS_EVENT_DATE"]){?>
                                    <div class="date_block"><?php echo date("d F", strtotime($arItem["DISPLAY_PROPERTIES"]["NEWS_EVENT_DATE"]["VALUE"]));  ?></div>
								<?php }else{ ?>	
								<div class="date_block"><?php echo date("d F", strtotime($arItem["ACTIVE_FROM"]));  ?></div>
								<?php }?>	
                                    <h3 class="title_block" ><?echo $arItem["NAME"]?></h3>
                                    <div class="news-bg-change">
									<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                    <div class="content_block">
                                        <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                                    </div>
                                    <?endif?>
									<?if($arItem["DISPLAY_PROPERTIES"]["NEWS_EVENT_DATE"]){?>
                                        <div class="button_block">
                                            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="">join event</a>
                                        </div>
										<?php }else{ ?>	
										<div class="button_block">
                                            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="">details</a>
                                        </div>
								        <?php }?>
                                    </div>
                                </div>
                            </div>
						<?endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="columns content_all_block">
                    <a href="/news/" class="">all news</a>
                </div>

            </div>
        </section>
