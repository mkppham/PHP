CREATE TABLE if not exists `students`(
                                         id int(11) NOT NULL AUTO_INCREMENT,
    name Nvarchar(100) NOT NULL ,
    email varchar(250) NOT NULL ,
    PRIMARY KEY (id)
    ) ENGINE =InnoDB DEFAULT  CHARSET = latin1 AUTO_INCREMENT=2;
INSERT INTO `students` (`id`, `name`, `email`) VALUES
                                                   (1, 'Pham Van A', 'PAV@gmail.com'),
                                                   (2, 'Nguyen Trong H', 'NTH@gmail.com'),
                                                   (3, 'Mai Viet D', 'MVD@gmail.com'),
                                                   (4, 'Pham Kim K', 'MKP@gmail.com');
