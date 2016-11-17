<?php
namespace PHLU\Interfaces\Publication;

/*
 * This file is part of the TYPO3.TYPO3CR package.
 *
 * (c) Contributors of the Neos Publication - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use TYPO3\Flow\Annotations as Flow;
use PHLU\Neos\Models\Domain\Model\Publication;
use PHLU\Neos\Models\Service\Publication\PublicationService;
use TYPO3\Flow\Cli\CommandController;


/**
 * A generic Publication Importing Service
 *
 * @api
 * @Flow\Scope("singleton")
 */
class AbstractImportService extends CommandController {


    /**
     * @Flow\Inject
     * @var PublicationService
     */
    protected $publicationService;


    

    /**
     * Returns a publication model
     * @param array $data data with associated values
     * @return Publication
     * @api
     */
    public function createOrUpdatePublication($data) {

       return $this->publicationService->createOrUpdatePublication($this->publicationService->getModel($data));

    }




}