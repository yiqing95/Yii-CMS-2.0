<?php
/**
 * Created by JetBrains PhpStorm.
 * User: os
 * Date: 16.06.12
 * Time: 22:02
 * To change this template use File | Settings | File Templates.
 */
class SubNavbar extends Portlet
{
    public function renderContent()
    {
        $items = Yii::app()->controller->topSubMenuItems();

        $this->render('SubNavbar', array(
            'items' => $items
        ));
    }
}
