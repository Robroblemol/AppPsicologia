CREATE TABLE IF NOT EXISTS `students` (
    `id_student` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `n_identification` varchar(25),
    `name_student` varchar(25),
    `hometown` varchar(50) NOT NULL,
    `date_birth` date NOT NULL,
    `current_course` varchar(25) NOT NULL,
    `repet_course` tinyint(1) NOT NULL,
    `email` varchar(100),
    PRIMARY KEY (`id_student`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;



CREATE TABLE IF NOT EXISTS `relatives` (
    `id_relative` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `type` varchar(25),
    `name` varchar(25),
    `date_birth` date NOT NULL,
    `grade` varchar(25) NOT NULL,
    `profession` varchar(25),
    `adress` tinyint(1) NOT NULL,
    `phone` varchar(25),
    `email` varchar(50),
    PRIMARY KEY (`id_relative`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;



CREATE TABLE IF NOT EXISTS `family_histories` (
    `id_ant_family` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `id_relative` smallint(5) unsigned NOT NULL,
    PRIMARY KEY (`id_ant_family`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;



CREATE TABLE IF NOT EXISTS `family_relationship` (
    `id_relationship` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `with_father` varchar(25),
    `with_mother` varchar(25),
    `with_brothers` varchar(25),
    `with_step_parents` varchar(25),
    `observations` varchar(25),
    `date`timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_relationship`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;


CREATE TABLE IF NOT EXISTS `school_histories` (
    `id_school_histories` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `histori_school` varchar(255),
    `skills_dificulties` varchar(255),
    PRIMARY KEY (`id_school_histories`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;


CREATE TABLE IF NOT EXISTS `psychological_histories` (
    `id_psychological` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `date`timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_psychological`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

ALTER TABLE `psychological_histories`
ADD FOREIGN KEY (`id_student`)
REFERENCES `students`(`id_student`);


ALTER TABLE `school_histories`
ADD FOREIGN KEY (`id_student`)
REFERENCES `students`(`id_student`);

ALTER TABLE `family_relationship`
ADD FOREIGN KEY (`id_student`)
REFERENCES `students`(`id_student`);

ALTER TABLE `family_histories`
ADD FOREIGN KEY (`id_student`)
REFERENCES `students`(`id_student`);

ALTER TABLE `family_histories`
ADD FOREIGN KEY (`id_reltive`)
REFERENCES `relatives`(`id_relative`);


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


CREATE TABLE IF NOT EXISTS `pedagogical_profile` (
    `id_profile` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `id_student` smallint(5) unsigned NOT NULL,
    `cognit`varchar(255),
    `comunication`varchar(50),
    `moral_spirt` varchar(50),
    `strengths` varchar(50),
    `weakness` varchar(50),
    `learnig_barries` varchar(50),
    `strateg` varchar(50),
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
