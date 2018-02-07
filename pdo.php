<?php

function initPDO(array $params) {
    $connection = new PDO(
        'mysql:host='.$params['host'].';dbname='.$params['dbname'].';port='.$params['port'],
        $params['user'],
        $params['password']
    );

    return $connection;
}

$params = [
    'host' => '127.0.0.1',
    'dbname' => 'cdeb_a2_g2',
    'user' => 'root',
    'password' => 'root',
    'port' => 3306,
];

$connection = initPDO($params);

$stmt = $connection->query('SELECT * FROM project');

$projects = $stmt->fetchAll();

foreach ($projects as $project) {
    ?>
    <img src="<?php echo $project['picture']; ?>" alt="project picture"/>
    <h1><?php echo $project['title']; ?></h1>
    <p>
        <?php echo $project['description']; ?>
    </p>
    <?php
}