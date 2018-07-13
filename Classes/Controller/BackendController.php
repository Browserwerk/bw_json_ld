<?php
namespace JeremieConstant\BwJsonLd\Controller;

/**
 * Copyright notice
 *
 * (c) 2018 Jeremie Constant <mail@jeremieconstant.de>
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Utility\DebugUtility;


/**
 * BackendController
 */
class BackendController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @var \JeremieConstant\BwJsonLd\Domain\Repository\BackendRepository
     * @inject
     */
    protected $backendRepository = NULL;

    public function initializeAction()
    {
    }

    private function getContextTypes(){

        foreach (glob(__DIR__ . '/ContextTypes/*.php') as $file)
        {
            // get the file name of the current file without the extension
            $class = basename($file, '.php');

            $contextTypes[] = $class;
        }

        return $contextTypes;
    }

    /*
     * @var string $contextType
     * @return array
     * */

    private function getContext($contextType){
        $context = Context::create($contextType);
        return $context;
    }

    public function listAction()
    {
        // Current page of WEB module
        $currentPid = $_GET['id'];

        // Get JSON-LD data of current page
        $json = $this->backendRepository->findJsonByPid($currentPid);
        
        // Assign to backend view
        $this->view->assign('jsonld',$json);

        $assignments = array(
            'contextTypes' => $this->getContextTypes()
        );
        $this->view->assignMultiple($assignments);
    }

    public function createAction()
    {

    }
}
