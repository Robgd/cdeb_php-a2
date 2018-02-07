<?php
// godartrobin@gmail.com


$tab = [
    'value1',
    'value2',
    'value3',
    'value4',
    'value5',
    'value6',
];

foreach ($tab as $value) {
    echo "$value<br>";
}


$articles = [
    'article 1' => [
        'title' => 'Title of article',
        'content' => 'Content of article',
        'date' => '10 feb 2018',
    ],
    'article 2' => [
        'title' => 'Another Title of article',
        'content' => 'Another Content of article',
        'date' => '12 feb 2018',
    ],
    'article 3' => [
        'title' => 'Another Title of article 3',
        'content' => 'Another Content of article',
        'date' => '12 feb 2018',
        'tab' => [
            'blabla'
        ]
    ],
];

foreach ($articles as $key => $value) {
    echo "Article $key<br>";
    echo 'Title: '.$value['title'].'<br>';
    echo 'Content: '.$value['content'].'<br>';
}
