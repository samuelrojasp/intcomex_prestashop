<?php
namespace IntcomexImport\Controller;

use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;

class AdminHomeController extends FrameworkBundleAdminController
{
    public function frontPage()
    {
        return $this->render('@Modules/intcomeximport/views/admin/front.html.twig');
    }
}
