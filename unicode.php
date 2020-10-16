<?php

require 'define.php';

$tables = Q("SHOW TABLES")->all();

Q("ALTER DATABASE `?e` COLLATE utf8_unicode_ci", [ DB_BASE ]);

if (!empty($tables))
{
	foreach ($tables as $table)
	{
		$name = current($table);

		Q("ALTER TABLE `?e` COLLATE 'utf8_unicode_ci';", [ $name ]);
		// Q("ALTER TABLE `?e` ENGINE='InnoDB';", [ $name ]);

		$columns = Q("SHOW COLUMNS FROM `?e`", [ $name ])->all();

		foreach ($columns as $field)
		{
			$f_name = $field['Field'];
			$f_type = $field['Type'];
			$f_extra = strtoupper($field['Extra']);

			if (strtolower($field['Null']) === 'yes')
			{
				$f_null = " NULL ";
			}
			else {
				$f_null = " NOT NULL ";
			}

			$f_default = "";

			if (!empty($field['Default']))
			{
				$f_default = "DEFAULT '".$field['Default']."'";
			}

			$c_type = trim(current(explode('(', current(explode(' ', $f_type)))));

			if (!in_array($c_type, [
				'geometry', 'point', 'linestring', 'polygon', 'multipoint', 'multilinestring',
				'multipolygon', 'geometrycollection', 'json', 'date', 'time', 'year', 'int', 'datetime',
				'tynyint', 'smallint', 'mediumint', 'bigint', 'bigint', 'bigint', 'double',
				'blob', 'tinyblob', 'mediumblob', 'longblob', 'bit', 'binary', 'varbinary' ]))
			{
				Q("ALTER TABLE `?e` CHANGE `?e` `?e` ".$f_type." ".$f_extra." COLLATE 'utf8_unicode_ci' ".$f_null." ".$f_default." ;", [
					$name, $f_name, $f_name
				]);
			}
		}
	}
}

echo '<span style="color: green">Ready</span>';
