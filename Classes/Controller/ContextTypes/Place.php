<?php

namespace Browserwerk\BwJsonLd\Controller\ContextTypes;

class Place extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'name' => null,
        'address' => PostalAddress::class,
        'review' => Review::class,
        'aggregateRating' => AggregateRating::class,
    ];
}
