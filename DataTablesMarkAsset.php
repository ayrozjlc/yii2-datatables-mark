<?php

namespace ayrozjlc\datatablesmark;

use yii\web\AssetBundle;

/**
 * DataTables register script colReorder asset bundle.
 * @author José López Chávez <ayroz.jlc@gmail.com>
 */
class DataTablesMarkAsset extends AssetBundle
{
    public $sourcePath = '@bower/';

    public $js = [
        'mark.js/dist/jquery.mark.js',
        'datatables.mark.js/src/datatables.mark.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

