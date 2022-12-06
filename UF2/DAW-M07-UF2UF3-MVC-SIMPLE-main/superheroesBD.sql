DROP TABLE heroes;
CREATE TABLE heroes (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  realname varchar(75) NOT NULL,
  heroname varchar(50) NOT NULL,
  gender varchar(10) NOT NULL,
  race varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO heroes (id, realname, heroname, gender, race) VALUES
(1, 'Bruce Banner', 'Hulk', 'male', 'human'),
(2, 'Tony Stark', 'Iron Man', 'male', 'human'),
(3, 'Peter Parker', 'Spider-Man', 'male', 'human'),
(4, 'Thor Odinson', 'Thor', 'male', 'Asgardian'),
(5, 'Natasha Romanoff', 'Black Widow', 'female', 'human');



CREATE TABLE usuaris (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nom varchar(25) NOT NULL,
  cognoms varchar(50) NOT NULL,
  email varchar(50) NOT NULL UNIQUE,
  username varchar(25) NOT NULL UNIQUE,
  password varchar(100) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuaris` (`nom`, `cognoms`, `email`, `username`, `password`) VALUES ('enric', 'Pou Ponts', 'ponts@vidalibarraquer.net', 'enric', MD5('z67yeeui'));

