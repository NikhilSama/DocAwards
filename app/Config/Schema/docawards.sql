SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `docawards` ;
CREATE SCHEMA IF NOT EXISTS `docawards` DEFAULT CHARACTER SET latin1 ;
USE `docawards` ;

-- -----------------------------------------------------
-- Table `docawards`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`users` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NULL DEFAULT NULL ,
  `password` VARCHAR(45) NULL DEFAULT NULL COMMENT '	' ,
  `role` VARCHAR(10) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL COMMENT '	' ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`appointments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`appointments` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`appointments` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `subject` VARCHAR(100) CHARACTER SET 'utf8' NULL DEFAULT NULL ,
  `location` VARCHAR(45) CHARACTER SET 'utf8' NULL DEFAULT NULL ,
  `start` DATETIME NULL DEFAULT NULL ,
  `end` DATETIME NULL DEFAULT NULL ,
  `is_all_day` SMALLINT(6) NOT NULL ,
  `color` VARCHAR(200) NULL DEFAULT NULL ,
  `recuring_rule` VARCHAR(500) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_doc_appointments_users_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_doc_appointments_users`
    FOREIGN KEY (`user_id` )
    REFERENCES `docawards`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`cities`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`cities` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`cities` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  `lat` DECIMAL(18,12) NULL DEFAULT NULL ,
  `long` DECIMAL(18,12) NULL DEFAULT NULL ,
  `state` VARCHAR(45) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`doctors`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`doctors` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`doctors` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `first_name` VARCHAR(45) NULL DEFAULT NULL ,
  `middle_name` VARCHAR(45) NULL DEFAULT NULL ,
  `last_name` VARCHAR(45) NULL DEFAULT NULL ,
  `image` VARCHAR(150) NULL DEFAULT NULL ,
  `gender` VARCHAR(1) NULL DEFAULT NULL ,
  `DOB` DATE NULL DEFAULT NULL ,
  `first_yr_of_practice` YEAR NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_doctor_profile_users1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_doctor_profile_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `docawards`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`countries`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`countries` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`countries` (
  `id` INT(10) UNSIGNED NOT NULL ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  `iso2` CHAR(2) NULL DEFAULT NULL ,
  `long_name` VARCHAR(80) NULL DEFAULT NULL ,
  `iso3` VARCHAR(3) NULL DEFAULT NULL ,
  `numcode` VARCHAR(6) NULL DEFAULT NULL ,
  `un_member` VARCHAR(12) NULL DEFAULT NULL ,
  `calling_code` VARCHAR(8) NULL DEFAULT NULL ,
  `cctld` VARCHAR(5) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`pin_codes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`pin_codes` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`pin_codes` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `pin_code` VARCHAR(10) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL COMMENT '		' ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `pin_code_UNIQUE` (`pin_code` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`locations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`locations` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`locations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  `address` BLOB NULL DEFAULT NULL ,
  `lat` DECIMAL(18,12) NULL DEFAULT NULL ,
  `long` DECIMAL(18,12) NULL ,
  `city_id` INT(10) UNSIGNED NOT NULL ,
  `country_id` INT(10) UNSIGNED NOT NULL ,
  `pin_code_id` INT(10) UNSIGNED NOT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_locations_cities2_idx` (`city_id` ASC) ,
  INDEX `fk_locations_countries1_idx` (`country_id` ASC) ,
  INDEX `fk_locations_pin_codes1_idx` (`pin_code_id` ASC) ,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) ,
  CONSTRAINT `fk_locations_cities2`
    FOREIGN KEY (`city_id` )
    REFERENCES `docawards`.`cities` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_locations_countries1`
    FOREIGN KEY (`country_id` )
    REFERENCES `docawards`.`countries` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_locations_pin_codes1`
    FOREIGN KEY (`pin_code_id` )
    REFERENCES `docawards`.`pin_codes` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`consultlocationtypes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`consultlocationtypes` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`consultlocationtypes` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`docconsultlocations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`docconsultlocations` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`docconsultlocations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `location_id` INT(10) UNSIGNED NOT NULL ,
  `doctor_id` INT(10) UNSIGNED NOT NULL ,
  `consultlocationtype_id` INT(10) UNSIGNED NOT NULL ,
  `addl` VARCHAR(45) NULL DEFAULT 'floor, room num etc' ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_consult_locations_locations1_idx` (`location_id` ASC) ,
  INDEX `fk_consult_locations_doctors1_idx` (`doctor_id` ASC) ,
  INDEX `fk_doctor_consult_locations_consult_location_types1_idx` (`consultlocationtype_id` ASC) ,
  CONSTRAINT `fk_consult_locations_doctors1`
    FOREIGN KEY (`doctor_id` )
    REFERENCES `docawards`.`doctors` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_consult_locations_locations1`
    FOREIGN KEY (`location_id` )
    REFERENCES `docawards`.`locations` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_doctor_consult_locations_consult_location_types1`
    FOREIGN KEY (`consultlocationtype_id` )
    REFERENCES `docawards`.`consultlocationtypes` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`consult_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`consult_types` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`consult_types` (
  `it` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`it`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`consult_timings`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`consult_timings` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`consult_timings` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `monday` TINYINT(1) NULL DEFAULT '0' ,
  `tuesday` TINYINT(1) NULL DEFAULT '0' ,
  `wednesday` TINYINT(1) NULL DEFAULT '0' ,
  `thursday` TINYINT(1) NULL DEFAULT '0' ,
  `friday` TINYINT(1) NULL DEFAULT '0' ,
  `saturday` TINYINT(1) NULL DEFAULT '0' ,
  `sunday` TINYINT(1) NULL DEFAULT '0' ,
  `start` TIME NULL DEFAULT NULL ,
  `end` TIME NULL DEFAULT NULL ,
  `consult_type_id` INT(10) UNSIGNED NOT NULL ,
  `docconsultlocation_id` INT(10) UNSIGNED NOT NULL ,
  `phone` VARCHAR(45) NULL DEFAULT NULL ,
  `email` VARCHAR(45) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_consult_timings_consult_types1_idx` (`consult_type_id` ASC) ,
  INDEX `fk_consult_timings_consult_locations1_idx` (`docconsultlocation_id` ASC) ,
  CONSTRAINT `fk_consult_timings_consult_locations1`
    FOREIGN KEY (`docconsultlocation_id` )
    REFERENCES `docawards`.`docconsultlocations` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_consult_timings_consult_types1`
    FOREIGN KEY (`consult_type_id` )
    REFERENCES `docawards`.`consult_types` (`it` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`degrees`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`degrees` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`degrees` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`diseases`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`diseases` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`diseases` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`specialties`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`specialties` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`specialties` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '	' ,
  `name` VARCHAR(45) NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`docspeclinks`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`docspeclinks` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`docspeclinks` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `doctor_id` INT(10) UNSIGNED NOT NULL ,
  `specialty_id` INT(10) UNSIGNED NOT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_link_doctors_to_specialties_doctors1_idx` (`doctor_id` ASC) ,
  INDEX `fk_link_doctors_to_specialties_specialties1_idx` (`specialty_id` ASC) ,
  CONSTRAINT `fk_link_doctors_to_specialties_doctors1`
    FOREIGN KEY (`doctor_id` )
    REFERENCES `docawards`.`doctors` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_link_doctors_to_specialties_specialties1`
    FOREIGN KEY (`specialty_id` )
    REFERENCES `docawards`.`specialties` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`doctor_contacts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`doctor_contacts` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`doctor_contacts` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `doctor_id` INT(10) UNSIGNED NOT NULL ,
  `phone` VARCHAR(45) NULL DEFAULT NULL ,
  `email` VARCHAR(150) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_doctor_contacts_doctors1_idx` (`doctor_id` ASC) ,
  CONSTRAINT `fk_doctor_contacts_doctors1`
    FOREIGN KEY (`doctor_id` )
    REFERENCES `docawards`.`doctors` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`specialtydiseaselinktypes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`specialtydiseaselinktypes` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`specialtydiseaselinktypes` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`dslinks`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`dslinks` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`dslinks` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `specialty_id` INT(10) UNSIGNED NOT NULL ,
  `disease_id` INT(10) UNSIGNED NOT NULL ,
  `specialtydiseaselinktype_id` INT(10) UNSIGNED NOT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_specialties_for_deseases_specialties1_idx` (`specialty_id` ASC) ,
  INDEX `fk_specialties_for_deseases_deseases1_idx` (`disease_id` ASC) ,
  INDEX `fk_specialties_for_deseases_specialty_desease_link_types1_idx` (`specialtydiseaselinktype_id` ASC) ,
  CONSTRAINT `fk_specialties_for_deseases_deseases1`
    FOREIGN KEY (`disease_id` )
    REFERENCES `docawards`.`diseases` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_specialties_for_deseases_specialties1`
    FOREIGN KEY (`specialty_id` )
    REFERENCES `docawards`.`specialties` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_specialties_for_deseases_specialty_desease_link_types1`
    FOREIGN KEY (`specialtydiseaselinktype_id` )
    REFERENCES `docawards`.`specialtydiseaselinktypes` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`experiences`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`experiences` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`experiences` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `from` DATE NULL DEFAULT NULL ,
  `to` VARCHAR(45) NULL DEFAULT NULL ,
  `dept` VARCHAR(45) NULL DEFAULT NULL ,
  `doctor_id` INT(10) UNSIGNED NOT NULL ,
  `location_id` INT(10) UNSIGNED NOT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_experience_doctors1_idx` (`doctor_id` ASC) ,
  INDEX `fk_experiences_locations1_idx` (`location_id` ASC) ,
  CONSTRAINT `fk_experiences_locations1`
    FOREIGN KEY (`location_id` )
    REFERENCES `docawards`.`locations` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_experience_doctors1`
    FOREIGN KEY (`doctor_id` )
    REFERENCES `docawards`.`doctors` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`patients`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`patients` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`patients` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `first_name` VARCHAR(45) NULL DEFAULT NULL ,
  `last_name` VARCHAR(45) NULL DEFAULT NULL ,
  `email` VARCHAR(150) NULL DEFAULT NULL ,
  `phone` VARCHAR(45) NULL DEFAULT NULL ,
  `address` BLOB NULL DEFAULT NULL ,
  `city_id` INT(10) UNSIGNED NOT NULL ,
  `pin_code_id` INT(10) UNSIGNED NOT NULL ,
  `country_id` INT(10) UNSIGNED NOT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_patient_profile_users1_idx` (`user_id` ASC) ,
  INDEX `fk_patients_cities1_idx` (`city_id` ASC) ,
  INDEX `fk_patients_pin_codes1_idx` (`pin_code_id` ASC) ,
  INDEX `fk_patients_countries1_idx` (`country_id` ASC) ,
  CONSTRAINT `fk_patients_cities1`
    FOREIGN KEY (`city_id` )
    REFERENCES `docawards`.`cities` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_patients_countries1`
    FOREIGN KEY (`country_id` )
    REFERENCES `docawards`.`countries` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_patients_pin_codes1`
    FOREIGN KEY (`pin_code_id` )
    REFERENCES `docawards`.`pin_codes` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_patient_profile_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `docawards`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`questions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`questions` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`questions` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `question` BLOB NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_questions_users1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_questions_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `docawards`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`posts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`posts` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`posts` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `question_id` INT(10) UNSIGNED NOT NULL ,
  `title` VARCHAR(200) NULL DEFAULT NULL ,
  `content` BLOB NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_news_users1_idx` (`user_id` ASC) ,
  INDEX `fk_posts_questions1_idx` (`question_id` ASC) ,
  CONSTRAINT `fk_news_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `docawards`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_posts_questions1`
    FOREIGN KEY (`question_id` )
    REFERENCES `docawards`.`questions` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`post_feedbacks`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`post_feedbacks` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`post_feedbacks` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `post_id` INT(10) UNSIGNED NOT NULL ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `like` TINYINT(1) NULL DEFAULT '0' ,
  `comment` BLOB NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_post_feedback_posts1_idx` (`post_id` ASC) ,
  INDEX `fk_post_feedback_users1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_post_feedback_posts1`
    FOREIGN KEY (`post_id` )
    REFERENCES `docawards`.`posts` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_post_feedback_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `docawards`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`qualifications`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`qualifications` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`qualifications` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `doctor_id` INT(10) UNSIGNED NOT NULL ,
  `degree_id` INT(10) UNSIGNED NOT NULL ,
  `location_id` INT(10) UNSIGNED NOT NULL ,
  `year` YEAR NULL DEFAULT NULL ,
  `dept` VARCHAR(45) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_doctor_qualifications_doctor_profile1_idx` (`doctor_id` ASC) ,
  INDEX `fk_doctor_qualifications_degrees1_idx` (`degree_id` ASC) ,
  INDEX `fk_qualifications_locations1_idx` (`location_id` ASC) ,
  CONSTRAINT `fk_doctor_qualifications_degrees1`
    FOREIGN KEY (`degree_id` )
    REFERENCES `docawards`.`degrees` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_doctor_qualifications_doctor_profile1`
    FOREIGN KEY (`doctor_id` )
    REFERENCES `docawards`.`doctors` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_qualifications_locations1`
    FOREIGN KEY (`location_id` )
    REFERENCES `docawards`.`locations` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`question_followers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`question_followers` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`question_followers` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `question_id` INT(10) UNSIGNED NOT NULL ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_question_followers_users1_idx` (`user_id` ASC) ,
  INDEX `fk_question_followers_questions1_idx` (`question_id` ASC) ,
  CONSTRAINT `fk_question_followers_questions1`
    FOREIGN KEY (`question_id` )
    REFERENCES `docawards`.`questions` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_question_followers_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `docawards`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`user_followers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`user_followers` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`user_followers` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `source_user_id` INT(10) UNSIGNED NOT NULL ,
  `follower_user_id` INT(10) UNSIGNED NOT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_followers_users1_idx` (`source_user_id` ASC) ,
  INDEX `fk_followers_users2_idx` (`follower_user_id` ASC) ,
  CONSTRAINT `fk_followers_users1`
    FOREIGN KEY (`source_user_id` )
    REFERENCES `docawards`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_followers_users2`
    FOREIGN KEY (`follower_user_id` )
    REFERENCES `docawards`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`tags`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`tags` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`tags` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `docawards`.`tags_questions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`tags_questions` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`tags_questions` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `questions_id` INT(10) UNSIGNED NOT NULL ,
  `tags_id` INT UNSIGNED NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_questions_has_tags_tags1_idx` (`tags_id` ASC) ,
  INDEX `fk_questions_has_tags_questions1_idx` (`questions_id` ASC) ,
  CONSTRAINT `fk_questions_has_tags_questions1`
    FOREIGN KEY (`questions_id` )
    REFERENCES `docawards`.`questions` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_questions_has_tags_tags1`
    FOREIGN KEY (`tags_id` )
    REFERENCES `docawards`.`tags` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `docawards`.`tag_followers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docawards`.`tag_followers` ;

CREATE  TABLE IF NOT EXISTS `docawards`.`tag_followers` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `tag_id` INT UNSIGNED NOT NULL ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_tag_followers_tags1_idx` (`tag_id` ASC) ,
  INDEX `fk_tag_followers_users1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_tag_followers_tags1`
    FOREIGN KEY (`tag_id` )
    REFERENCES `docawards`.`tags` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tag_followers_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `docawards`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
