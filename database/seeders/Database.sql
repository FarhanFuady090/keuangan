/* Delimiter changed to ; */
/* Connecting to 127.0.0.1 via MariaDB or MySQL (TCP/IP), username root, using password: No ... */
SELECT CONNECTION_ID();
SHOW VARIABLES;
/* Changing character set from latin1 to utf8mb4 */
/* Characterset: utf8mb4 */
SHOW /*!50002 GLOBAL */ STATUS;
SELECT NOW();
/* Connected. Thread-ID: 28 */
/* Reading function definitions from C:\laragon\bin\heidisql\functions-mysql.ini */
SHOW TABLES FROM `information_schema`;
SHOW DATABASES;
SHOW OPEN TABLES FROM mysql WHERE `in_use`!=0;
USE `mysql`;
/* Entering session "Laragon.MySQL" */
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='mysql';
SHOW TABLE STATUS FROM `mysql`;
SHOW FUNCTION STATUS WHERE `Db`='mysql';
SHOW PROCEDURE STATUS WHERE `Db`='mysql';
SHOW TRIGGERS FROM `mysql`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='mysql';
/* Scaling controls to screen DPI: 125% */
USE `keuangan`;
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='keuangan';
SHOW TABLE STATUS FROM `keuangan`;
SHOW FUNCTION STATUS WHERE `Db`='keuangan';
SHOW PROCEDURE STATUS WHERE `Db`='keuangan';
SHOW TRIGGERS FROM `keuangan`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='keuangan';
/* Entering session "Laragon.MySQL" */
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='keuangan';
SHOW TABLE STATUS FROM `keuangan`;
SHOW FUNCTION STATUS WHERE `Db`='keuangan';
SHOW PROCEDURE STATUS WHERE `Db`='keuangan';
SHOW TRIGGERS FROM `keuangan`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='keuangan';
/* Entering session "Laragon.MySQL" */
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='keuangan';
SHOW TABLE STATUS FROM `keuangan`;
SHOW FUNCTION STATUS WHERE `Db`='keuangan';
SHOW PROCEDURE STATUS WHERE `Db`='keuangan';
SHOW TRIGGERS FROM `keuangan`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='keuangan';
SHOW ENGINES;
SHOW COLLATION;
SHOW VARIABLES;
/* #78: Abstract Error Message CharCode:0 Msg:514 */
CREATE TABLE `role` (
	`idrole` INT NOT NULL,
	`nama_role` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`idrole`)
)
COLLATE='utf8mb4_0900_ai_ci'
;
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='keuangan';
SHOW TABLE STATUS FROM `keuangan`;
SHOW FUNCTION STATUS WHERE `Db`='keuangan';
SHOW PROCEDURE STATUS WHERE `Db`='keuangan';
SHOW TRIGGERS FROM `keuangan`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='keuangan';
SELECT * FROM `information_schema`.`COLUMNS` WHERE TABLE_SCHEMA='keuangan' AND TABLE_NAME='role' ORDER BY ORDINAL_POSITION;
SHOW INDEXES FROM `role` FROM `keuangan`;
SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE   CONSTRAINT_SCHEMA='keuangan'   AND TABLE_NAME='role'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM information_schema.KEY_COLUMN_USAGE WHERE   TABLE_SCHEMA='keuangan'   AND TABLE_NAME='role'   AND REFERENCED_TABLE_NAME IS NOT NULL;
/* Entering session "Laragon.MySQL" */
SHOW CREATE TABLE `keuangan`.`role`;
SELECT tc.CONSTRAINT_NAME, cc.CHECK_CLAUSE FROM `information_schema`.`CHECK_CONSTRAINTS` AS cc, `information_schema`.`TABLE_CONSTRAINTS` AS tc WHERE tc.CONSTRAINT_SCHEMA='keuangan' AND tc.TABLE_NAME='role' AND tc.CONSTRAINT_TYPE='CHECK' AND tc.CONSTRAINT_SCHEMA=cc.CONSTRAINT_SCHEMA AND tc.CONSTRAINT_NAME=cc.CONSTRAINT_NAME;
/* #73: Abstract Error Message CharCode:0 Msg:514 */
/* #1634496361: Access violation at address 00000056C1800000 in module 'heidisql.exe'. Execution of address 00000056C1800000 Message CharCode:13 Msg:256 */
/* #83: Abstract Error Message CharCode:0 Msg:514 */
/* #1634496361: Access violation at address 00000056C1800000 in module 'heidisql.exe'. Execution of address 00000056C1800000 Message CharCode:13 Msg:256 */
CREATE TABLE `user` (
	`username` VARCHAR(50) NOT NULL DEFAULT NULL,
	`password` VARCHAR(50) NOT NULL DEFAULT NULL,
	PRIMARY KEY (`username`)
)
COLLATE='utf8mb4_0900_ai_ci'
;
/* SQL Error (1067): Invalid default value for 'username' */
CREATE TABLE `user` (
	`username` VARCHAR(20) NOT NULL DEFAULT NULL,
	`password` VARCHAR(50) NOT NULL DEFAULT NULL,
	PRIMARY KEY (`username`)
)
COLLATE='utf8mb4_0900_ai_ci'
;
/* SQL Error (1067): Invalid default value for 'username' */
CREATE TABLE `user` (
	`username` VARCHAR(20) NOT NULL DEFAULT NULL,
	`password` VARCHAR(50) NOT NULL DEFAULT NULL,
	PRIMARY KEY (`username`)
)
COLLATE='utf8mb4_0900_ai_ci'
;
/* SQL Error (1067): Invalid default value for 'username' */
/* #71: Access violation at address 000000000040F142 in module 'heidisql.exe'. Read of address 0000000000000280 Message CharCode:0 Msg:514 */
CREATE TABLE `user` (
	`username` VARCHAR(50) NULL DEFAULT NULL,
	`password` VARCHAR(50) NULL DEFAULT NULL
)
COLLATE='utf8mb4_0900_ai_ci'
;
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='keuangan';
SHOW TABLE STATUS FROM `keuangan`;
SHOW FUNCTION STATUS WHERE `Db`='keuangan';
SHOW PROCEDURE STATUS WHERE `Db`='keuangan';
SHOW TRIGGERS FROM `keuangan`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='keuangan';
SELECT * FROM `information_schema`.`COLUMNS` WHERE TABLE_SCHEMA='keuangan' AND TABLE_NAME='user' ORDER BY ORDINAL_POSITION;
SHOW INDEXES FROM `user` FROM `keuangan`;
SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE   CONSTRAINT_SCHEMA='keuangan'   AND TABLE_NAME='user'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM information_schema.KEY_COLUMN_USAGE WHERE   TABLE_SCHEMA='keuangan'   AND TABLE_NAME='user'   AND REFERENCED_TABLE_NAME IS NOT NULL;
/* Entering session "Laragon.MySQL" */
SHOW CREATE TABLE `keuangan`.`user`;
SELECT tc.CONSTRAINT_NAME, cc.CHECK_CLAUSE FROM `information_schema`.`CHECK_CONSTRAINTS` AS cc, `information_schema`.`TABLE_CONSTRAINTS` AS tc WHERE tc.CONSTRAINT_SCHEMA='keuangan' AND tc.TABLE_NAME='user' AND tc.CONSTRAINT_TYPE='CHECK' AND tc.CONSTRAINT_SCHEMA=cc.CONSTRAINT_SCHEMA AND tc.CONSTRAINT_NAME=cc.CONSTRAINT_NAME;
SHOW CREATE TABLE `keuangan`.`user`;
RENAME TABLE `user` TO `users`;
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='keuangan';
SHOW TABLE STATUS FROM `keuangan`;
SHOW FUNCTION STATUS WHERE `Db`='keuangan';
SHOW PROCEDURE STATUS WHERE `Db`='keuangan';
SHOW TRIGGERS FROM `keuangan`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='keuangan';
SELECT * FROM `information_schema`.`COLUMNS` WHERE TABLE_SCHEMA='keuangan' AND TABLE_NAME='users' ORDER BY ORDINAL_POSITION;
SHOW INDEXES FROM `users` FROM `keuangan`;
SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE   CONSTRAINT_SCHEMA='keuangan'   AND TABLE_NAME='users'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM information_schema.KEY_COLUMN_USAGE WHERE   TABLE_SCHEMA='keuangan'   AND TABLE_NAME='users'   AND REFERENCED_TABLE_NAME IS NOT NULL;
/* Entering session "Laragon.MySQL" */
SHOW CREATE TABLE `keuangan`.`users`;
SELECT tc.CONSTRAINT_NAME, cc.CHECK_CLAUSE FROM `information_schema`.`CHECK_CONSTRAINTS` AS cc, `information_schema`.`TABLE_CONSTRAINTS` AS tc WHERE tc.CONSTRAINT_SCHEMA='keuangan' AND tc.TABLE_NAME='users' AND tc.CONSTRAINT_TYPE='CHECK' AND tc.CONSTRAINT_SCHEMA=cc.CONSTRAINT_SCHEMA AND tc.CONSTRAINT_NAME=cc.CONSTRAINT_NAME;