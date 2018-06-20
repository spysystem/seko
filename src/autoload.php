<?php


 function autoload_a2b3afc67dfad0a2daff202886285ed5($class)
{
    $classes = array(
        'Seko\API_Service' => __DIR__ .'/API_Service.php',
        'Seko\CreateShipment' => __DIR__ .'/CreateShipment.php',
        'Seko\Shipment' => __DIR__ .'/Shipment.php',
        'Seko\Login' => __DIR__ .'/Login.php',
        'Seko\IncotermEnum' => __DIR__ .'/IncotermEnum.php',
        'Seko\Description' => __DIR__ .'/Description.php',
        'Seko\Dutiable' => __DIR__ .'/Dutiable.php',
        'Seko\Money' => __DIR__ .'/Money.php',
        'Seko\CurrencyCodeEnum' => __DIR__ .'/CurrencyCodeEnum.php',
        'Seko\Insurance' => __DIR__ .'/Insurance.php',
        'Seko\COD' => __DIR__ .'/COD.php',
        'Seko\CODPayTypeEnum' => __DIR__ .'/CODPayTypeEnum.php',
        'Seko\ExportReasonEnum' => __DIR__ .'/ExportReasonEnum.php',
        'Seko\DangerousGoods' => __DIR__ .'/DangerousGoods.php',
        'Seko\Measurement' => __DIR__ .'/Measurement.php',
        'Seko\UnitTypeEnum' => __DIR__ .'/UnitTypeEnum.php',
        'Seko\DangerousGoodsEnum' => __DIR__ .'/DangerousGoodsEnum.php',
        'Seko\ShipDirectionEnum' => __DIR__ .'/ShipDirectionEnum.php',
        'Seko\Address' => __DIR__ .'/Address.php',
        'Seko\CountryCodeEnum' => __DIR__ .'/CountryCodeEnum.php',
        'Seko\StatesEnum' => __DIR__ .'/StatesEnum.php',
        'Seko\ArrayOfColli' => __DIR__ .'/ArrayOfColli.php',
        'Seko\Colli' => __DIR__ .'/Colli.php',
        'Seko\MeasurementWeight' => __DIR__ .'/MeasurementWeight.php',
        'Seko\PackageType' => __DIR__ .'/PackageType.php',
        'Seko\PackagingTypeEnum' => __DIR__ .'/PackagingTypeEnum.php',
        'Seko\DryIce' => __DIR__ .'/DryIce.php',
        'Seko\RegulationSetEnum' => __DIR__ .'/RegulationSetEnum.php',
        'Seko\InvoiceSettings' => __DIR__ .'/InvoiceSettings.php',
        'Seko\Invoice' => __DIR__ .'/Invoice.php',
        'Seko\InvoiceTypeEnum' => __DIR__ .'/InvoiceTypeEnum.php',
        'Seko\LabelTypeEnum' => __DIR__ .'/LabelTypeEnum.php',
        'Seko\EmailLabel' => __DIR__ .'/EmailLabel.php',
        'Seko\EmailSettings' => __DIR__ .'/EmailSettings.php',
        'Seko\FTPLabel' => __DIR__ .'/FTPLabel.php',
        'Seko\FTPSettings' => __DIR__ .'/FTPSettings.php',
        'Seko\ArrayOfInvoiceItem' => __DIR__ .'/ArrayOfInvoiceItem.php',
        'Seko\InvoiceItem' => __DIR__ .'/InvoiceItem.php',
        'Seko\PaperLessShipping' => __DIR__ .'/PaperLessShipping.php',
        'Seko\ArrayOfPaperLessDocument' => __DIR__ .'/ArrayOfPaperLessDocument.php',
        'Seko\PaperLessDocument' => __DIR__ .'/PaperLessDocument.php',
        'Seko\DocTypeEnum' => __DIR__ .'/DocTypeEnum.php',
        'Seko\FDA' => __DIR__ .'/FDA.php',
        'Seko\FCC' => __DIR__ .'/FCC.php',
        'Seko\COO' => __DIR__ .'/COO.php',
        'Seko\CreateShipmentResponse' => __DIR__ .'/CreateShipmentResponse.php',
        'Seko\Reply' => __DIR__ .'/Reply.php',
        'Seko\ReplyStatus' => __DIR__ .'/ReplyStatus.php',
        'Seko\ArrayOfError' => __DIR__ .'/ArrayOfError.php',
        'Seko\Error' => __DIR__ .'/Error.php',
        'Seko\ErrorLevels' => __DIR__ .'/ErrorLevels.php',
        'Seko\ArrayOfLabel' => __DIR__ .'/ArrayOfLabel.php',
        'Seko\Label' => __DIR__ .'/Label.php',
        'Seko\LabelSizeEnum' => __DIR__ .'/LabelSizeEnum.php',
        'Seko\ImageTypeEnum' => __DIR__ .'/ImageTypeEnum.php',
        'Seko\ArrayOfColliItem' => __DIR__ .'/ArrayOfColliItem.php',
        'Seko\ColliItem' => __DIR__ .'/ColliItem.php',
        'Seko\ArrayOfCost' => __DIR__ .'/ArrayOfCost.php',
        'Seko\Cost' => __DIR__ .'/Cost.php',
        'Seko\PriceLineTypeEnum' => __DIR__ .'/PriceLineTypeEnum.php',
        'Seko\GetShippingOptions' => __DIR__ .'/GetShippingOptions.php',
        'Seko\GetShippingOptionsResponse' => __DIR__ .'/GetShippingOptionsResponse.php',
        'Seko\ReplyShippingOptions' => __DIR__ .'/ReplyShippingOptions.php',
        'Seko\ArrayOfShippingOptions' => __DIR__ .'/ArrayOfShippingOptions.php',
        'Seko\ShippingOptions' => __DIR__ .'/ShippingOptions.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a2b3afc67dfad0a2daff202886285ed5');

// Do nothing. The rest is just leftovers from the code generation.
{
}
