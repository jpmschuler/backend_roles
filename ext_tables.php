<?php
/*
 * Copyright by Agentur am Wasser | Maeder & Partner AG
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

defined('TYPO3') or die();

(function () {
    // Register the backend module config
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
module.tx_backendroles {
    view {
        templateRootPaths.0 = EXT:backend_roles/Resources/Private/Templates
        layoutRootPaths.0 = EXT:aawskin_template_h/Resources/Private/Layouts
        partialRootPaths.0 = EXT:aawskin_template_h/Resources/Private/Partials
    }
    settings {
    }
}
    ');
})();
