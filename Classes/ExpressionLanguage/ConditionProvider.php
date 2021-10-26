<?php
declare(strict_types=1);

namespace Softtodo\DocSitepackage\ExpressionLanguage;

use TYPO3\CMS\Core\ExpressionLanguage\AbstractProvider;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * ConditionProvider
 */
class ConditionProvider extends AbstractProvider
{
    public function __construct()
    {
        $this->expressionLanguageVariables = [
            'extension' => GeneralUtility::makeInstance(ExtensionManager::class)
        ];
    }
}
