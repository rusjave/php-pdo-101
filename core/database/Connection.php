<?php

class Connection
{

	public static function make($config)
	{

		try {

			//return new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'root', '');

			return new PDO(

				$config['connection'].';dbname='.$config['name'],

				$config['user'],

				$config['password'],

				$config['options']

			);
		// die('Connected!');
		} catch (PDOException $e){

			die($e->getMessage());

		}

	}
}
?>