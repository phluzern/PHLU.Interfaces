<?php
namespace Phlu\Interfaces\Publication;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Publication - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Phlu\Neos\Models\Domain\Model\Publication;
use Phlu\Neos\Models\Service\Publication\PublicationService;
use Neos\Flow\Cli\CommandController;


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