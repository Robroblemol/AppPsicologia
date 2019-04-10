<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-01 15:33:18 --> Query error: Unknown column 'family_histories.phone' in 'order clause' - Invalid query: SELECT *, name as sb068931c
FROM `family_histories`
JOIN `relatives` ON `family_histories`.`id_relative` = `relatives`.`id_relative`
WHERE `id_student` = '1'
ORDER BY `family_histories`.`phone`
