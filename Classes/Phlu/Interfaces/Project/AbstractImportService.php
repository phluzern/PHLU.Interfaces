<?php
namespace Phlu\Interfaces\Project;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Phlu\Neos\Models\Domain\Model\Project;
use Phlu\Neos\Models\Service\Project\ProjectService;
use Neos\Flow\Cli\CommandController;


/**
 * A generic Project Importing Service
 *
 * @api
 * @Flow\Scope("singleton")
 */
class AbstractImportService extends CommandController {


    /**
     * @Flow\Inject
     * @var ProjectService
     */
    protected $projectService;


    

    /**
     * Returns a project model
     * @param array $data data with associated values
     * @return Project
     * @api
     */
    public function createOrUpdateProject($data) {

       return $this->projectService->createOrUpdateProject($this->projectService->getModel($data));

    }




}