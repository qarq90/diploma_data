CREATE DATABASE IF NOT EXISTS `eco_eco` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `eco_eco`;

CREATE TABLE `users` (
                         `USER_ID` varchar(40) NOT NULL,
                         `USER_NAME` varchar(255) NOT NULL,
                         `USER_PHONE_NUMBER` varchar(10) NOT NULL,
                         `USER_EMAIL` varchar(255) NOT NULL,
                         `USER_PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `articles` (
                            `ARTICLE_ID` varchar(40) NOT NULL,
                            `AUTHOR_ID` varchar(40) NOT NULL,
                            `ARTICLE_TITLE` varchar(255) NOT NULL,
                            `ARTICLE_PARA_A` varchar(255) NOT NULL,
                            `ARTICLE_PARA_B` varchar(255) NOT NULL,
                            `ARTICLE_PARA_C` varchar(255) NOT NULL,
                            `ARTICLE_PARA_D` varchar(255) NOT NULL,
                            `ARTICLE_IMG_A` longblob NOT NULL,
                            `ARTICLE_IMG_B` longblob NOT NULL,
                            `ARTICLE_LINK` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;