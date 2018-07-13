<?php

namespace JeremieConstant\BwJsonLd\Controller\Contracts;

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
