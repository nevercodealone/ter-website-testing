<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
  module.tx_form.settings.yamlConfigurations.120 = EXT:myfinisher/Configuration/Form/CustomFormSetup.yaml
');