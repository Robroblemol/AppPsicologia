<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-09 19:48:15 --> Severity: error --> Exception: The table name does not exist. Please check you database and try again. /home/ubuntu/workspace/application/libraries/Grocery_CRUD.php 5188
ERROR - 2019-04-09 19:53:23 --> Query error: Unknown column 'j766ddbef.name_student' in 'field list' - Invalid query: SELECT `psychological_histories`.*, CONCAT('', COALESCE(j766ddbef.name_student, ''), '') as s766ddbef
FROM `psychological_histories`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `psychological_histories`.`id_student`
 LIMIT 10
ERROR - 2019-04-09 21:35:15 --> Query error: Unknown column 'j766ddbef.name_student' in 'field list' - Invalid query: SELECT `psychological_histories`.*, CONCAT('', COALESCE(j766ddbef.name_student, ''), '') as s766ddbef
FROM `psychological_histories`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `psychological_histories`.`id_student`
 LIMIT 10
ERROR - 2019-04-09 21:50:57 --> Query error: Unknown column 'students.id_relative' in 'on clause' - Invalid query: SELECT `students`.*, CONCAT('', COALESCE(j766ddbef.name, ''), '') as s766ddbef, CONCAT('', COALESCE(j49924dde.name, ''), '') as s49924dde
FROM `students`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `students`.`id_student`
LEFT JOIN `relatives` as `j49924dde` ON `j49924dde`.`id_relative` = `students`.`id_relative`
 LIMIT 10
