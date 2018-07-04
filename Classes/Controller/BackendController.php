<?php
namespace JeremieConstant\JctJsonLd\Controller;

/**
 * Copyright notice
 *
 * (c) 2018 Jeremie Constant <mail@jeremieconstant.de>
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;


/**
 * BackendController
 */
class BackendController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @var \JeremieConstant\JctJsonLd\Domain\Repository\BackendRepository
     * @inject
     */
    protected $backendRepository = NULL;

    public function listAction()
    {
        // Current page of WEB module
        $currentPid = $_GET['id'];

        // Get JSON-LD data of current page
        $json = $this->backendRepository->findJsonByPid($currentPid);
        
        // Assign to backend view
        $this->view->assignMultiple($json);
    }
}
