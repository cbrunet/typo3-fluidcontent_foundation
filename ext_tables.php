<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid Content: Zurb Foundation elements');

Tx_Flux_Core::registerProviderExtensionKey('fluidcontent_foundation', 'Content');

