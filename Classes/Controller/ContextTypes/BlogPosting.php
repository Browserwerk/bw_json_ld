<?php

namespace JeremieConstant\JctJsonLd\Controller\ContextTypes;

class BlogPosting extends Article
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $extendStructure = [
        'sharedContent' => CreativeWork::class,
    ];
}