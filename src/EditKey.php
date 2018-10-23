<?php

namespace gorriecoe\EditKey;

use SilverStripe\View\Requirements;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Security\Permission;
use SilverStripe\CMS\Controllers\CMSPagesController;

/**
 * EditKey
 *
 * @package silverstripe-link
 */
class EditKey extends DataExtension
{
    public function contentcontrollerInit()
    {
        if (Permission::check(CMSPagesController::config()->get('required_permission_codes')) {
            Requirements::javascriptTemplate(
                'gorriecoe/silverstripe-editkey: js/editkey.js',
                [
                    'Link' => $this->owner->CMSEditLink()
                ]
            );
        }
    }
}
