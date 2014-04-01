<?php

$container->setParameter('database_host', getenv('MYSQL_PORT_3306_TCP_ADDR'));
$container->setParameter('redis_host', getenv('REDIS_PORT_6379_TCP_ADDR'));