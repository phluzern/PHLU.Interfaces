<?php
namespace Phlu\Interfaces\Contact;

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
use Phlu\Neos\Models\Domain\Model\Contact;
use Phlu\Neos\Models\Service\Contact\ContactService;
use Neos\Flow\Cli\CommandController;


/**
 * A generic Contact Importing Service
 *
 * @api
 * @Flow\Scope("singleton")
 */
class AbstractImportService extends CommandController {


    /**
     * @Flow\Inject
     * @var ContactService
     */
    protected $contactService;


    

    /**
     * Returns a contact model
     * @param array $data data with associated values
     * @param boolean skippublications don't sync publications
     * @param boolean skipprojects don't sync projects
     * @return Contact
     * @api
     */
    public function createOrUpdateContact($data,$skippublications = null, $skipprojects = null) {

       return $this->contactService->createOrUpdateContact($this->contactService->getModel($data,$skippublications, $skipprojects));

    }




}