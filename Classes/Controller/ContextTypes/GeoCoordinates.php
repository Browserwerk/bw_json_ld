<?php

namespace Browserwerk\BwJsonLd\Controller\ContextTypes;

class GeoCoordinates extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'latitude' => '',
        'longitude' => '',
    ];
}