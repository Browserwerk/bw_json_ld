<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Configure new fields:
$fields = array(
    'json_ld_content' => array(
        'label' => 'LLL:EXT:bw_json_ld/Resources/Private/Language/locallang_db.xlf:pages.json_ld',
        'exclude' => 1,
        'config' => array(
            'type' => 'text',
            'cols' => 50,
            'rows' => 30
        ),
    )
);

// Add new fields to pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $fields);

// Make fields visible in the TCEforms:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages', // Table name
    '--palette--;LLL:EXT:bw_json_ld/Resources/Private/Language/locallang_db.xlf:pages.palette_title;json_ld', // Field list to add
    '1', // List of specific types to add the field list to. (If empty, all type entries are affected)
    'after:nav_title' // Insert fields before (default) or after one, or replace a field
);

// Add the new palette:
$GLOBALS['TCA']['pages']['palettes']['json_ld'] = array(
    'showitem' => 'json_ld_content'
);