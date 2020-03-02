/*
Created: 2/17/2020
Modified: 2/17/2020
Model: MySQL 8.0
Database: MySQL 8.0
*/

-- Create tables section -------------------------------------------------

-- Table users

CREATE TABLE `users`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `first_name` Varchar(50) NOT NULL,
  `last_name` Varchar(50) NOT NULL,
  `email` Varchar(100) NOT NULL,
  `pass` Varchar(50) NOT NULL,
  `avatar` Varchar(255),
  PRIMARY KEY(id)
)
;


-- Table comments

CREATE TABLE `comments`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `content` Text NOT NULL,
  `date_add` Timestamp NOT NULL,
  `post_id` Int,
  `user_id` Int,
  PRIMARY KEY(id)
)
;

CREATE INDEX `IX_Relationship2` ON `comments` (`post_id`)
;

CREATE INDEX `IX_Relationship3` ON `comments` (`user_id`)
;


-- Table posts

CREATE TABLE `posts`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `tittle` Varchar(50) NOT NULL,
  `content` Text NOT NULL,
  `date_add` Timestamp NOT NULL,
  `user_id` Int,
  PRIMARY KEY(id)
)
;

CREATE INDEX `IX_Relationship1` ON `posts` (`user_id`)
;


-- Create foreign keys (relationships) section -------------------------------------------------

ALTER TABLE `posts` ADD CONSTRAINT `Relationship1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `comments` ADD CONSTRAINT `Relationship2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `comments` ADD CONSTRAINT `Relationship3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


