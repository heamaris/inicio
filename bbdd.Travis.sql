  start transaction;
  DROP DATABASE IF EXISTS `egc-frontend`;
  CREATE DATABASE `egc-frontend`; 
  USE `egc-frontend`;
  GRANT ALL ON `egc-frontend`.* TO 'user-frontend'@'localhost' IDENTIFIED BY 'us4r-front4nd';
  COMMIT;
