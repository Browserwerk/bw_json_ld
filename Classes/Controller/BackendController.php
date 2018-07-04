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


/**
 * BackendController
 */
class BackendController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @var \JeremieConstant\JctJsonLd\Controller\Domain\Repository\BackendRepository
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

    public function listAction()
    {

        $data = [
            'headline' => 'Article headline',
            'description' => 'A most wonderful article',
            'mainEntityOfPage' => [
                'url' => 'https://google.com/article',
            ],
            'image' => [
                'url' => 'https://google.com/thumbnail1.jpg',
                'height' => 800,
                'width' => 800,
            ],
            'datePublished' => '2015-02-05T08:00:00+08:00',
            'dateModified' => '2015-02-05T09:20:00+08:00',
            'author' => [
                'name' => 'John Doe',
            ],
            'publisher' => [
                'name' => 'Google',
                'logo' => [
                    'url' => 'https://google.com/logo.jpg',
                    'width' => 600,
                    'height' => 60,
                ]
            ],
        ];

        $context = Context::create('NewsArticle', $data);
        $jsonld = json_encode($context->getProperties(), JSON_UNESCAPED_SLASHES);

        // Current page of WEB module
        $currentPid = $_GET['id'];

        // Get JSON-LD data of current page
        $json = $this->backendRepository->findJsonByPid($currentPid);
        
        // Assign to backend view
        $this->view->assign('jsonld',$jsonld);

        $assignments = array(
            'contextTypes' => $this->getContextTypes()
        );
        $this->view->assignMultiple($assignments);
    }
}
