<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-03-30 01:36:43 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'robrobles'@'localhost' (using password: YES) /home/ubuntu/workspace/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2019-03-30 01:36:43 --> Unable to connect to the database
ERROR - 2019-03-30 04:24:00 --> Query error: Unknown column 'j766ddbef.name' in 'field list' - Invalid query: SELECT `psychological_histories`.*, CONCAT('', COALESCE(j766ddbef.name, ''), '') as s766ddbef
FROM `psychological_histories`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `psychological_histories`.`id_student`
 LIMIT 10
ERROR - 2019-03-30 04:24:08 --> Query error: Unknown column 'j766ddbef.name' in 'field list' - Invalid query: SELECT `psychological_histories`.*, CONCAT('', COALESCE(j766ddbef.name, ''), '') as s766ddbef
FROM `psychological_histories`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `psychological_histories`.`id_student`
 LIMIT 10
ERROR - 2019-03-30 04:53:39 --> Query error: Unknown column 'psychological_histories.n_identification' in 'on clause' - Invalid query: SELECT `psychological_histories`.*, CONCAT('', COALESCE(j766ddbef.name_student, ''), '') as s766ddbef, CONCAT('', COALESCE(j97ec246e.n_identification, ''), '') as s97ec246e
FROM `psychological_histories`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `psychological_histories`.`id_student`
LEFT JOIN `students` as `j97ec246e` ON `j97ec246e`.`id_student` = `psychological_histories`.`n_identification`
 LIMIT 10
ERROR - 2019-03-30 05:10:46 --> Severity: Parsing Error --> syntax error, unexpected ';' /home/ubuntu/workspace/application/controllers/Main.php 62
ERROR - 2019-03-30 05:11:26 --> Severity: Parsing Error --> syntax error, unexpected ';' /home/ubuntu/workspace/application/controllers/Main.php 62
ERROR - 2019-03-30 05:14:07 --> Severity: Parsing Error --> syntax error, unexpected ';' /home/ubuntu/workspace/application/controllers/Main.php 62
ERROR - 2019-03-30 05:14:10 --> Severity: Parsing Error --> syntax error, unexpected ';' /home/ubuntu/workspace/application/controllers/Main.php 62
ERROR - 2019-03-30 05:17:05 --> Query error: Unknown column 'psychological_histories.n_identification' in 'on clause' - Invalid query: SELECT `psychological_histories`.*, CONCAT('', COALESCE(j766ddbef.name_student, ''), '') as s766ddbef, CONCAT('', COALESCE(j97ec246e.n_identification, ''), '') as s97ec246e
FROM `psychological_histories`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `psychological_histories`.`id_student`
LEFT JOIN `students` as `j97ec246e` ON `j97ec246e`.`id_student` = `psychological_histories`.`n_identification`
 LIMIT 10
ERROR - 2019-03-30 15:28:10 --> Severity: error --> Exception: You have already insert a table name once... /home/ubuntu/workspace/application/libraries/Grocery_CRUD.php 5261
