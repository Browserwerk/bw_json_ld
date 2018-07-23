<?php

namespace Browserwerk\BwJsonLd\Controller\ContextTypes;

class ImageObject extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'url' => null,
        'height' => null,
        'width' => null,
        'caption' => null,
        'thumbnail' => ImageObject::class,
    ];
}