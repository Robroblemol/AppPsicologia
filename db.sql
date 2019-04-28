DROP SCHEMA IF EXISTS c9; 
CREATE SCHEMA IF NOT EXISTS c9;

use c9;


CREATE TABLE IF NOT EXISTS `students` (
    `id_student` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `n_identification` varchar(25),
    `name` varchar(25),
    `hometown` varchar(50) NOT NULL,
    `date_birth` date NOT NULL,
    `current_course` varchar(25) NOT NULL,
    `repet_course` tinyint(1) NOT NULL,
    `email` varchar(100),
    PRIMARY KEY (`id_student`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;



CREATE TABLE IF NOT EXISTS `relatives` (
    `id_relative` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_alum` smallint(5) unsigned NOT NULL,
    `type` varchar(25),
    `name` varchar(25),
    `date_birth` date NOT NULL,
    `grade` varchar(25) NOT NULL,
    `profession` varchar(25),
    `adress` varchar(25),
    `phone` varchar(25),
    `email` varchar(50),
    PRIMARY KEY (`id_relative`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;



CREATE TABLE IF NOT EXISTS `students_relatives` (
    `id_stu_rel` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `id_relative` smallint(5) unsigned NOT NULL,
    PRIMARY KEY (`id_stu_rel`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;


ALTER TABLE `students_relatives`
ADD FOREIGN KEY (`id_student`)
REFERENCES `students`(`id_student`);

ALTER TABLE `students_relatives`
ADD FOREIGN KEY (`id_relative`)
REFERENCES `relatives`(`id_relative`);



CREATE  TRIGGER add_relative_to_student AFTER INSERT ON `relatives`
FOR EACH ROW
BEGIN
    INSERT INTO `students_relatives` SET 
        students_relatives.id_student = new.id_alum,
        students_relatives.id_relative = new.id_relative;

END;







CREATE TABLE IF NOT EXISTS `family_relationship` (
    `id_relationship` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `with_father` varchar(50),
    `with_mother` varchar(50),
    `with_brothers` varchar(50),
    `with_step_parents` varchar(50),
    `observations` varchar(1000),
    `date`timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_relationship`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;


CREATE TABLE IF NOT EXISTS `school_histories` (
    `id_school_histories` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `histori_school` varchar(255),
    `skills_dificulties` varchar(255),
    `date`timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_school_histories`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;


CREATE TABLE IF NOT EXISTS `psychological_histories` (
    `id_psychological` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `id_ant_family`smallint(5) unsigned NOT NULL,
    `id_school_histories`smallint(5) unsigned NOT NULL,
    `id_relationship`smallint(5) unsigned NOT NULL,
    `date`timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_psychological`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

ALTER TABLE `psychological_histories`
ADD FOREIGN KEY (`id_student`)
REFERENCES `students`(`id_student`);

ALTER TABLE `psychological_histories`
ADD FOREIGN KEY (`id_ant_family`)
REFERENCES `family_histories`(`id_ant_family`);

ALTER TABLE `psychological_histories`
ADD FOREIGN KEY (`id_school_histories`)
REFERENCES `school_histories`(`id_school_histories`);

ALTER TABLE `psychological_histories`
ADD FOREIGN KEY (`id_relationship`)
REFERENCES `family_relationship`(`id_relationship`);


ALTER TABLE `school_histories`
ADD FOREIGN KEY (`id_student`)
REFERENCES `students`(`id_student`);

ALTER TABLE `family_relationship`
ADD FOREIGN KEY (`id_student`)
REFERENCES `students`(`id_student`);



CREATE TABLE IF NOT EXISTS `psychological_histories` (
    `id_psychological` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `date`timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_remition`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;






CREATE TABLE IF NOT EXISTS `remtion_teacher` (
    `id_remition` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `reason` varchar(255) NOT NULL,
    `description` varchar(255)NOT NULL,
    `commtens` varchar(255),
    `comp_teacher` varchar(255),
    `comp_parents` varchar(255),
    `conclutions` varchar(255),
    `date`timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_remition`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;


CREATE TABLE IF NOT EXISTS `psicology_asistan_register` (
    `id_register` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `reason`varchar(255)NOT NULL,
    `funcionary`varchar(255)NOT NULL,
    `date` timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_register`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `social_economic_histories` (
    `id_social_economic` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `free_time`varchar(500),
    `inter_persons`varchar(50),
    `behavior_encouragement` varchar(50),
    `life_proyect` varchar(50),
    `ant_health` varchar(50),
    `ant_psicology` varchar(50),
    `date` timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_profile`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `appointmets` (
    `id_appointmet` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `description`varchar(255),
    `asing_appo`varchar(50),
    `state_appo` varchar(50),
    PRIMARY KEY (`id_appointmet`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8;
