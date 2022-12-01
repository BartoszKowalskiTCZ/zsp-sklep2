// uzytkownicy //
INSERT INTO `Users` (`name`, `login`, `password`, `is_admin`) VALUES ('Jan', 'a@gmail.com', 'a', '0')
INSERT INTO `Users` (`name`, `login`, `password`, `is_admin`) VALUES ('Maja', 'b@gmail.com', 'b','0')
INSERT INTO `Users` (`name`, `login`, `password`, `is_admin`) VALUES ('Adam', 'c@gmail.com', 'c', '0')
INSERT INTO `Users` (`name`, `login`, `password`, `is_admin`) VALUES ('Janusz', 'd@gmail.com', 'd', '0')
INSERT INTO `Users` (`name`, `login`, `password`, `is_admin`) VALUES ('Pawel', 'e@gmail.com', 'e', '0')
 // Produkty //
INSERT INTO `Products` (`name`, `description`, `price`) VALUES ('','',''),('','',''),('','','');  

//Zamówienia//
 
INSERT INTO `Orders` (`Products_id`, `Users_id`) VALUES ('1', '3'), ('3', '1'), ('2', '4'), ('2', '2');