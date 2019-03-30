<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-03-21 04:25:24 --> Query error: Unknown column 'students.exam_name' in 'on clause' - Invalid query: SELECT `students`.*, CONCAT('', COALESCE(j8e8b8568.subject, ''), '&nbsp;', COALESCE(j8e8b8568.score, ''), '') as s8e8b8568
FROM `students`
LEFT JOIN `examens` as `j8e8b8568` ON `j8e8b8568`.`id_examen` = `students`.`exam_name`
 LIMIT 10
ERROR - 2019-03-21 05:04:51 --> Query error: Unknown column 'j766ddbef.score' in 'field list' - Invalid query: SELECT `examens`.*, CONCAT('Nombre:&nbsp;', COALESCE(j766ddbef.name, ''), '&nbsp;Jornada:&nbsp;', COALESCE(j766ddbef.score, ''), '&nbsp;Email:&nbsp;', COALESCE(j766ddbef.email, ''), '') as s766ddbef
FROM `examens`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `examens`.`id_student`
 LIMIT 10
ERROR - 2019-03-21 05:09:55 --> Query error: Unknown column 'j766ddbef.score' in 'field list' - Invalid query: SELECT `examens`.*, CONCAT('Nombre:&nbsp;', COALESCE(j766ddbef.name, ''), '&nbsp;Jornada:&nbsp;', COALESCE(j766ddbef.score, ''), '&nbsp;Email:&nbsp;', COALESCE(j766ddbef.email, ''), '') as s766ddbef
FROM `examens`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `examens`.`id_student`
 LIMIT 10
ERROR - 2019-03-21 05:10:01 --> Query error: Unknown column 'j766ddbef.score' in 'field list' - Invalid query: SELECT `examens`.*, CONCAT('Nombre:&nbsp;', COALESCE(j766ddbef.name, ''), '&nbsp;Jornada:&nbsp;', COALESCE(j766ddbef.score, ''), '&nbsp;Email:&nbsp;', COALESCE(j766ddbef.email, ''), '') as s766ddbef
FROM `examens`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `examens`.`id_student`
 LIMIT 10
ERROR - 2019-03-21 05:10:02 --> Query error: Unknown column 'j766ddbef.score' in 'field list' - Invalid query: SELECT `examens`.*, CONCAT('Nombre:&nbsp;', COALESCE(j766ddbef.name, ''), '&nbsp;Jornada:&nbsp;', COALESCE(j766ddbef.score, ''), '&nbsp;Email:&nbsp;', COALESCE(j766ddbef.email, ''), '') as s766ddbef
FROM `examens`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `examens`.`id_student`
 LIMIT 10
ERROR - 2019-03-21 05:10:18 --> Query error: Unknown column 'j766ddbef.score' in 'field list' - Invalid query: SELECT `examens`.*, CONCAT('Nombre:&nbsp;', COALESCE(j766ddbef.name, ''), '&nbsp;Jornada:&nbsp;', COALESCE(j766ddbef.score, ''), '&nbsp;Email:&nbsp;', COALESCE(j766ddbef.email, ''), '') as s766ddbef
FROM `examens`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `examens`.`id_student`
 LIMIT 10
ERROR - 2019-03-21 05:11:43 --> Query error: Unknown column 'j766ddbef.score' in 'field list' - Invalid query: SELECT `examens`.*, CONCAT('Nombre:&nbsp;', COALESCE(j766ddbef.name, ''), '&nbsp;Jornada:&nbsp;', COALESCE(j766ddbef.score, ''), '&nbsp;Email:&nbsp;', COALESCE(j766ddbef.email, ''), '') as s766ddbef
FROM `examens`
LEFT JOIN `students` as `j766ddbef` ON `j766ddbef`.`id_student` = `examens`.`id_student`
 LIMIT 10
