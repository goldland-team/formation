<?php
namespace Softtodo\DocSitepackage\PageTitle;

/**
 * This class will take care of the default page title
 */
class PageTitleProvider extends \TYPO3\CMS\Core\PageTitle\AbstractPageTitleProvider
{
    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}