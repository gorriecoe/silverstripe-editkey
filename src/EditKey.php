<?php

namespace gorriecoe\EditKey;

use SilverStripe\View\Requirements;
use SilverStripe\ORM\DataExtension;

/**
 * EditKey
 *
 * @package silverstripe-link
 */
class EditKey extends DataExtension
{
    public function contentcontrollerInit()
    {
        Requirements::javascriptTemplate(
            'gorriecoe/silverstripe-editkey: js/editkey.js',
            [
                'Link' => $this->owner->CMSEditLink()
            ]
        );
    }
}
