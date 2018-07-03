<?php
defined('TYPO3_MODE') || die('Access denied.');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'JeremieConstant.JctJsonLd',
    'web', // Make module a submodule of 'web'
    'jsongenerator', // Submodule key
    '', // Position
    [

    ],
    [
        'access' => 'user,group',
        'icon'   => 'EXT:jct_json_ld/Resources/Public/Icons/module-json.png',
        'labels' => 'LLL:EXT:jct_json_ld/Resources/Private/Language/locallang_jsongenerator.xlf',
    ]
);

