<?php
return  [
['class' => 'yii\rest\UrlRule',
    'pluralize'=>false,
    'controller' => ['grupos','usuarios'],
],
['class' => 'yii\rest\UrlRule',
    'controller' => ['user'],
    'pluralize'=>false,
    'extraPatterns'=>['POST authenticate'=>'authenticate']
]
'rules'=>
 
['class' => 'yii\rest\UrlRule',
    'controller' => ['user'],
    'pluralize'=>false,
    'extraPatterns'=>['POST authenticate'=>'authenticate',
            'OPTIONS authenticate'=>'authenticate',
            ]
],
];