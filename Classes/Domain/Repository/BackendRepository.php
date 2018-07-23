<?php
namespace Browserwerk\BwJsonLd\Domain\Repository;

/**
 * Copyright notice
 *
 * (c) 2018 Jeremie Constant <mail@jeremieconstant.de>
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;


/**
 * The repository for Backends
 */
class BackendRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /*
     * Find JSON-LD data by given pid
     *
     * @param integer $pid pid to look for
     * return string
     * */
    public function findJsonByPid($pid = null)
    {
        if (empty($pid)) {
            throw new \InvalidArgumentException('No page selected!', 1530687544);
        }

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('pages');
        $affectedRows = $queryBuilder
            ->select('json_ld_content')
            ->from('pages')
            ->where($queryBuilder->expr()->eq('uid', $pid))
            ->execute()
            ->fetch();
        return $affectedRows;
    }
}
