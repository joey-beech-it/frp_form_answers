<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
        mod.web_list.hideTables = tx_frpformanswers_domain_model_formentry
');
