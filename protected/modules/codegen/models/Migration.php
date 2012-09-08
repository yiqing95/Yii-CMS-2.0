<?php
/** 
 * Created by JetBrains PhpStorm.
 * 
 * User: os
 * Date: 28.06.12
 * Time: 22:09
 * To change this template use File | Settings | File Templates.
 * 
 * 
 * @property        $table
 * @property        $module
 * @property string $attributeLabel the attribute label
 * @property string $error          the error message. Null is returned if no error.
 * @property CList  $eventHandlers  list of attached event handlers for the event
 * 
 */

class Migration extends FormModel
{
    public $table;

    public $module;


    public static function actions()
    {
        return array(
            'create'     => t('создать таблицу'),
            'add_column' => t('добавить поле'),
            'add_index'  => t('добавить индекс')
        );
    }


    public function rules()
    {
        return array(
            array(
                'table, module', 'safe'
            )
        );
    }
}
