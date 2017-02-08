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

/**
 * An interface for contact import service
 * @api
 */
interface ImportServiceInterface
{

    /**
     * Returns a contact model
     * @param array $data data with associated values
     * @return Contact
     * @api
     */
    public function createOrUpdateContact($data);


    /**
     * Proceed import service
     * @return boolean
     * @api
     */
    public function proceed();

}
