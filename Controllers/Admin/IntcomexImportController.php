<?php
namespace Intcomeximport\Controllers\Admin;

use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;

class IntcomexImportController extends FrameworkBundleAdminController
{
    public function frontPage()
    {
        return $this->render('@Modules/intcomeximport/views/admin/front.html.twig');
    }
}
