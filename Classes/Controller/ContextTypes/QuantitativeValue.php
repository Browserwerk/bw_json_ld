<?php

namespace JeremieConstant\JctJsonLd\Controller\ContextTypes;

class QuantitativeValue extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'maxValue' => null,
        'minValue' => null,
        'value' => null,
        'unitText' => null,
    ];
}