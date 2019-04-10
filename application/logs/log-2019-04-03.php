<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-03 18:11:37 --> Query error: Table 'c9.students_relatives' doesn't exist - Invalid query: SELECT `students`.*, (SELECT GROUP_CONCAT(DISTINCT relatives.name) FROM relatives LEFT JOIN students_relatives ON students_relatives.id_relative = relatives.id_relative WHERE students_relatives.id_student = `students`.id_student GROUP BY students_relatives.id_student) AS acudiente
FROM `students`
 LIMIT 10
ERROR - 2019-04-03 18:34:03 --> Query error: Unknown column 'name' in 'field list' - Invalid query: SELECT *, name as sb068931c
FROM `relatives`
ORDER BY `relatives`.`name`
ERROR - 2019-04-03 18:38:26 --> Query error: Table 'c9.students_relatives' doesn't exist - Invalid query: SELECT `students`.*, (SELECT GROUP_CONCAT(DISTINCT relatives.name) FROM relatives LEFT JOIN students_relatives ON students_relatives.id_relative = relatives.id_relative WHERE students_relatives.id_student = `students`.id_student GROUP BY students_relatives.id_student) AS acudiente
FROM `students`
 LIMIT 10
ERROR - 2019-04-03 18:39:04 --> Query error: Table 'c9.students_relatives' doesn't exist - Invalid query: SELECT students.id_student, (SELECT GROUP_CONCAT(DISTINCT relatives.name) FROM relatives LEFT JOIN students_relatives ON students_relatives.id_relative = relatives.id_relative WHERE students_relatives.id_student = `students`.id_student GROUP BY students_relatives.id_student) AS acudiente
FROM `students`
ERROR - 2019-04-03 18:39:14 --> Query error: Table 'c9.students_relatives' doesn't exist - Invalid query: SELECT `students`.*, (SELECT GROUP_CONCAT(DISTINCT relatives.name) FROM relatives LEFT JOIN students_relatives ON students_relatives.id_relative = relatives.id_relative WHERE students_relatives.id_student = `students`.id_student GROUP BY students_relatives.id_student) AS acudiente
FROM `students`
 LIMIT 10
ERROR - 2019-04-03 18:42:45 --> Query error: Column 'id_student' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `student_relatives`
JOIN `relatives` ON `student_relatives`.`id_relative` = `relatives`.`id_relative`
WHERE `id_student` = '1'
ORDER BY `relatives`.`name`
ERROR - 2019-04-03 18:46:35 --> Query error: Column 'id_student' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `student_relatives`
JOIN `relatives` ON `student_relatives`.`id_relative` = `relatives`.`id_relative`
WHERE `id_student` = '2'
ORDER BY `relatives`.`name`
ERROR - 2019-04-03 18:57:02 --> Query error: Column 'id_student' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `student_relatives`
JOIN `relatives` ON `student_relatives`.`id_relative` = `relatives`.`id_relative`
WHERE `id_student` = '2'
ORDER BY `relatives`.`name`
ERROR - 2019-04-03 19:02:39 --> Query error: Column 'id_student' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `student_relatives`
JOIN `relatives` ON `student_relatives`.`id_relative` = `relatives`.`id_relative`
WHERE `id_student` = '1'
ORDER BY `relatives`.`name`
ERROR - 2019-04-03 19:04:58 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`c9`.`student_relatives`, CONSTRAINT `student_relatives_relatives` FOREIGN KEY (`relatives_id_relative`) REFERENCES `relatives` (`id_relative`)) - Invalid query: INSERT INTO `student_relatives` (`id_student`, `id_relative`) VALUES (2, '1')
ERROR - 2019-04-03 19:07:27 --> Query error: Column 'id_student' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `student_relatives`
JOIN `relatives` ON `student_relatives`.`id_student` = `relatives`.`id_relative`
WHERE `id_student` = '3'
ORDER BY `relatives`.`name`
ERROR - 2019-04-03 19:08:31 --> Query error: Column 'id_student' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `student_relatives`
JOIN `relatives` ON `student_relatives`.`id_relative` = `relatives`.`id_relative`
WHERE `id_student` = '1'
ORDER BY `relatives`.`name`
ERROR - 2019-04-03 19:29:30 --> Query error: Unknown column 'student_relatives.student_id_student' in 'where clause' - Invalid query: SELECT `students`.*, (SELECT GROUP_CONCAT(DISTINCT relatives.name) FROM relatives LEFT JOIN student_relatives ON student_relatives.relatives_id_relative = relatives.id_relative WHERE student_relatives.student_id_student = `students`.id_student GROUP BY student_relatives.student_id_student) AS acudiente
FROM `students`
 LIMIT 10
ERROR - 2019-04-03 19:31:07 --> Query error: Unknown column 'student_relatives.id_student' in 'where clause' - Invalid query: SELECT `students`.*, (SELECT GROUP_CONCAT(DISTINCT relatives.name) FROM relatives LEFT JOIN student_relatives ON student_relatives.id_relative = relatives.id_relative WHERE student_relatives.id_student = `students`.id_student GROUP BY student_relatives.id_student) AS acudiente
FROM `students`
 LIMIT 10
ERROR - 2019-04-03 19:50:08 --> Query error: Table 'c9.student_relatives' doesn't exist - Invalid query: SELECT `students`.*, (SELECT GROUP_CONCAT(DISTINCT relatives.name) FROM relatives LEFT JOIN student_relatives ON student_relatives.id_relative = relatives.id_relative WHERE student_relatives.id_student = `students`.id_student GROUP BY student_relatives.id_student) AS acudiente
FROM `students`
 LIMIT 10
ERROR - 2019-04-03 19:50:08 --> Query error: Table 'c9.student_relatives' doesn't exist - Invalid query: SELECT students.id_student, (SELECT GROUP_CONCAT(DISTINCT relatives.name) FROM relatives LEFT JOIN student_relatives ON student_relatives.id_relative = relatives.id_relative WHERE student_relatives.id_student = `students`.id_student GROUP BY student_relatives.id_student) AS acudiente
FROM `students`
ERROR - 2019-04-03 19:51:53 --> Query error: Column 'id_student' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `students_relatives`
JOIN `relatives` ON `students_relatives`.`id_relative` = `relatives`.`id_relative`
WHERE `id_student` = '1'
ORDER BY `relatives`.`name`
ERROR - 2019-04-03 19:55:57 --> Query error: Column 'id_student' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `students_relatives`
JOIN `relatives` ON `students_relatives`.`id_relative` = `relatives`.`id_relative`
WHERE `id_student` = '1'
ORDER BY `relatives`.`name`
ERROR - 2019-04-03 20:02:19 --> Query error: Column 'id_student' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `students_relatives`
JOIN `relatives` ON `students_relatives`.`id_relative` = `relatives`.`id_relative`
WHERE `id_student` = '1'
ORDER BY `relatives`.`name`
ERROR - 2019-04-03 20:03:43 --> Query error: Column 'id_student' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `students_relatives`
JOIN `relatives` ON `students_relatives`.`id_relative` = `relatives`.`id_relative`
WHERE `id_student` = '2'
ORDER BY `relatives`.`name`
ERROR - 2019-04-03 20:06:23 --> Query error: Column 'id_student' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `students_relatives`
JOIN `relatives` ON `students_relatives`.`id_relative` = `relatives`.`id_relative`
WHERE `id_student` = '1'
ORDER BY `relatives`.`name`
ERROR - 2019-04-03 20:09:07 --> Query error: Column 'id_student' in where clause is ambiguous - Invalid query: SELECT *, name as sb068931c
FROM `students_relatives`
JOIN `relatives` ON `students_relatives`.`id_relative` = `relatives`.`id_relative`
WHERE `id_student` = '2'
ORDER BY `relatives`.`name`
