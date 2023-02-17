<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_admin.php");
/**
 * @var CMain $APPLICATION
 */
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:rest.hook",
    ".default",
    Array(
        "COMPONENT_TEMPLATE" => ".default",
        "SEF_FOLDER" => "/rest-hook/",
        "SEF_MODE" => "Y",
        "SEF_URL_TEMPLATES" => [
            "list"=>"",
            "event_list"=>"event/",
            "event_edit"=>"event/#id#/",
            "ap_list"=>"ap/",
            "ap_edit"=>"ap/#id#/",
        ]
    )
);?>
<!--    //чуть-чуть стилей, иначе кнопка будет просто как текст-->
    <style>
        .webform-button.webform-button-create{
        background: #025ea1;
        padding: 10px 15px;
        text-align: center;
        color:#fff;
        cursor: pointer;
        }
        </style>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_admin.php");