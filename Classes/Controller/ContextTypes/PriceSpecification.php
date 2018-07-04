<?php
namespace JeremieConstant\JctJsonLd\Controller\ContextTypes;
class PriceSpecification extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'price' => null,
        'priceCurrency' => null,
    ];
}
