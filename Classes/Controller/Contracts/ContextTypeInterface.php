<?php

namespace JeremieConstant\JctJsonLd\Controller\Contracts;

interface ContextTypeInterface
{
    /**
     * @return array
     */
    public function getProperties();

    /**
     * @return array
     */
    public function getStructure();

}
