<?php
defined('TYPO3_MODE') || die('Access denied.');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'Browserwerk.BwJsonLd',
    'web', // Make module a submodule of 'web'
    'jsongenerator', // Submodule key
    '', // Position
    [
        'Backend' => 'list',
    ],
    [
        'access' => 'user,group',
        'icon'   => 'EXT:bw_json_ld/Resources/Public/Icons/module-json.png',
        'labels' => 'LLL:EXT:bw_json_ld/Resources/Private/Language/locallang_jsongenerator.xlf',
    ]
);

