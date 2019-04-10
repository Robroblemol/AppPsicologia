<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-03-31 04:37:09 --> Query error: Unknown column 'name' in 'field list' - Invalid query: SELECT students.id_student, CONCAT('', COALESCE(name, ''), '') as s49924dde
FROM `students`
ORDER BY `s49924dde`
ERROR - 2019-03-31 04:42:26 --> Query error: Column 'id_relative' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `family_histories`
JOIN `relatives` ON `family_histories`.`id_student` = `relatives`.`id_relative`
WHERE `id_relative` = '1'
ORDER BY `relatives`.`name`
ERROR - 2019-03-31 04:49:51 --> Query error: Column 'id_relative' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `family_histories`
JOIN `relatives` ON `family_histories`.`id_student` = `relatives`.`id_relative`
WHERE `id_relative` = '1'
ORDER BY `relatives`.`name`
