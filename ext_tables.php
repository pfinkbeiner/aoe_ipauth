<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

(function() {
    ExtensionManagementUtility::addLLrefForTCAdescr(
        'tx_aoeipauth_domain_model_ip',
        'EXT:aoe_ipauth/Resources/Private/Language/locallang_csh_tx_aoeipauth_domain_model_ip.xlf'
    );

    ExtensionManagementUtility::addLLrefForTCAdescr(
        'fe_users',
        'EXT:aoe_ipauth/Resources/Private/Language/locallang_csh_fe_users.xlf'
    );

    ExtensionManagementUtility::addLLrefForTCAdescr(
        'fe_groups',
        'EXT:aoe_ipauth/Resources/Private/Language/locallang_csh_fe_groups.xlf'
    );

    if ('BE' === TYPO3_MODE) {
        // registering reports
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers'][$_EXTKEY] = array(
            \AOE\AoeIpauth\Report\IpGroupAuthenticationStatus::class,
            \AOE\AoeIpauth\Report\IpUserAuthenticationStatus::class,
        );
    }
})();
