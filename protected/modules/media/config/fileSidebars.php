<?
$mediaAlbumsDp = function($positive = true) {
    $album = new MediaAlbum;
    $album->parentModel(Yii::app()->controller->user, $positive);
    return new ActiveDataProvider('MediaAlbum', [
        'criteria'   => $album->parentModel(Yii::app()->controller->user, $positive)->getDbCriteria(),
        'pagination' => false
    ]);
};
return [
    [
        'actions'  => ['view'],
        'sidebars' => [
            [
                'type' => 'widget',
                'class' => 'media.portlets.AlbumSearch',
            ],
            [
                'type'  => 'widget',
                'class' => 'media.portlets.MediaAlbumList',
                'title' => 'Альбомы тогоже пользователя',
                'dp'    => $mediaAlbumsDp()
            ],
            [
                'type'  => 'widget',
                'class' => 'media.portlets.MediaAlbumList',
                'title' => 'Другие альбомы',
                'dp'    => $mediaAlbumsDp(false)
            ],
        ]
    ],
    [
        'actions'  => ['manage'],
        'sidebars' => [
            [
                'type' => 'widget',
                'class' => 'media.portlets.AlbumSearch',
            ],
        ]
    ]
];
