<?php

namespace Browserwerk\BwJsonLd\Controller\ContextTypes;

class ContactPoint extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'telephone' => null,
        'contactType' => null,
    ];
}
