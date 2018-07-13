<?php

namespace JeremieConstant\BwJsonLd\Controller\ContextTypes;

class AggregateRating extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'reviewCount' => null,
        'ratingValue' => null,
        'bestRating' => null,
        'worstRating' => null,
        'ratingCount' => null,
    ];
}