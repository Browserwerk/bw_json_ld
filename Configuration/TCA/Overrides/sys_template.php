<?php
defined('TYPO3_MODE') or die();

// Include static TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('jct_json_ld', 'Configuration/TypoScript', 'JSON-LD Generator');