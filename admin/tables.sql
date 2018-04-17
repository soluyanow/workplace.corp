DROP TABLE IF EXISTS workplace.corp;

CREATE TABLE users
(
  id smallint unsigned NOT NULL auto_increment,
  login varchar(255) NOT NULL,
  firstname varchar(255) NOT NULL,
  lastname varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  active tinyint(1) DEFAULT NULL,
  PRIMARY KEY (id)
)

CREATE TABLE articles
(
  id smallint unsigned NOT NULL auto_increment,
  publicationDate date NOT NULL,
  title varchar(255) NOT NULL,
  summary text NOT NULL,
  content mediumtext NOT NULL,
  PRIMARY KEY (id)
);
