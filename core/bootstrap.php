<?php

App::bind('config', 'config.php');

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));