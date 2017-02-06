<?php
namespace PHLU\Interfaces\Contact;

/*
 * This file is part of the TYPO3.TYPO3CR package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use PHLU\Neos\Models\Domain\Model\Contact;
use PHLU\Neos\Models\Service\Contact\ContactService;
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
     * @return Contact
     * @api
     */
    public function createOrUpdateContact($data) {

       return $this->contactService->createOrUpdateContact($this->contactService->getModel($data));

    }




}