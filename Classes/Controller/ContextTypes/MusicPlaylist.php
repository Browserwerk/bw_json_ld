<?php

namespace Browserwerk\BwJsonLd\Controller\ContextTypes;

class MusicPlaylist extends MusicAbstractContext
{

    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        '@id' => null,
        'url' => null,
        'name' => null,
        'numTracks' => null,
        'track' => null,
    ];
}
