CREATE DATABASE rest_api_demo;
USE rest_api_demo;
CREATE TABLE `users` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- create data: https://generatedata.com/
INSERT INTO `users` (`username`, `user_email`, `user_status`) VALUES
  ("Griffin Sexton","a.ultricies@google.org",0),
  ("Rebekah Gallegos","lectus.ante@outlook.couk",1),
  ("Steel Scott","facilisis.eget@icloud.couk",1),
  ("Cynthia Rios","amet.diam.eu@outlook.edu",0),
  ("Macaulay Peck","pharetra.ut.pharetra@google.com",0),
  ("Ori Ashley","sed.eu@icloud.ca",0),
  ("Lester Greer","sed.nec@hotmail.couk",1),
  ("Catherine Guy","aenean.eget@google.org",1),
  ("Keiko Phelps","fames.ac@yahoo.org",0),
  ("Jessica Bullock","nullam.suscipit@yahoo.net",1),
  ("Raymond Nguyen","sociis.natoque@protonmail.com",0),
  ("Duncan Roman","interdum.feugiat@icloud.couk",0),
  ("Lesley Sandoval","sociis.natoque@google.net",1),
  ("Derek Talley","mattis.ornare@yahoo.com",0),
  ("Colette Chase","ullamcorper.eu@yahoo.edu",0),
  ("Zephr Alston","lorem.eu.metus@protonmail.org",1),
  ("Julian Nicholson","enim@yahoo.edu",1),
  ("Aspen Downs","libero.morbi.accumsan@aol.couk",1),
  ("Ishmael Foster","sit.amet.consectetuer@hotmail.net",0),
  ("Stella Copeland","lacus.nulla@outlook.couk",0);