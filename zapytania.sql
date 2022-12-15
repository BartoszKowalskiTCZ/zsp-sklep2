// dodaje uzytkownikow //
INSERT INTO `Users` (`name`, `login`, `password`, `is_admin`) VALUES ('Jan', 'a@gmail.com', 'a', '0')
INSERT INTO `Users` (`name`, `login`, `password`, `is_admin`) VALUES ('Maja', 'b@gmail.com', 'b','0')
INSERT INTO `Users` (`name`, `login`, `password`, `is_admin`) VALUES ('Adam', 'c@gmail.com', 'c', '0')
INSERT INTO `Users` (`name`, `login`, `password`, `is_admin`) VALUES ('Janusz', 'd@gmail.com', 'd', '0')
INSERT INTO `Users` (`name`, `login`, `password`, `is_admin`) VALUES ('Pawel', 'e@gmail.com', 'e', '0')
 // dodaje produkty //
INSERT INTO `Products` (`name`, `description`, `price`) VALUES ('telefon','bezuzyteczny','100'),('tablet','bialy','120'),('komputer','idealny do grania','3000');  

//dodaje zamowienia// 
INSERT INTO `Orders` (`Products_id`, `Users_id`) VALUES ('1', '3'), ('3', '1'), ('2', '4'), ('2', '2');

//dodaj nowa oferte //
INSERT INTO `offers`(`user_id`, `offer_name`, `description`, `price`) 
VALUES ('1','telefon','bialy','250');

//szczegoly  zakupionego zamowienia//
SELECT orders.offer_id, orders.user_id, offers.offer_name, offers.description, offers.price 
FROM orders JOIN offers ON orders.offer_id=offers.id where orders.user_id="4"
AND orders.offer_id="1";

 //nie kupione przedmioty//
SELECT offers.offer_name, offers.price from offers WHERE offers.id 
NOT IN (SELECT offer_id FROM orders);

 //szczegoly danej nie kupionej oferty//
SELECT offers.id, offers.offer_name, offers.description, offers.price from offers 
WHERE offers.id="2" AND offers.id NOT IN (SELECT offer_id FROM orders);

 //lista ofert danego użytkownika//
SELECT offers.offer_name, offers.price from offers where offers.user_id="2";

//edycja danej oferty//
UPDATE offers SET offers.offer_name="[value-1]",offers.description="[value-2]",
offers.price="[value-3]" WHERE offers.id="2";

//wyswietl szczegoly danej oferty//
SELECT offers.offer_name, offers.description, offers.price from offers where offers.id="1";


//Lista moich zakupow//
SELECT orders.user_id, offers.offer_name, offers.price FROM orders 
JOIN offers ON orders.offer_id=offers.id where orders.user_id="4";

//szczegoly zakupionego przedmiotu//
SELECT orders.offer_id, orders.user_id, offers.offer_name, offers.description, offers.price 
FROM orders JOIN offers ON orders.offer_id=offers.id where orders.user_id="4"
AND orders.offer_id="10";

//niekupione przedmioty//
SELECT offers.offer_name, offers.price from offers WHERE offers.id 
NOT IN (SELECT offer_id FROM orders);

// szczegoly nie zakupionej oferty//
SELECT offers.id, offers.offer_name, offers.description, offers.price from offers 
WHERE offers.id="3" AND offers.id NOT IN (SELECT offer_id FROM orders);

//kupowanie przedmiotu //
INSERT INTO orders (`offer_id`, `user_id`) VALUES ('3','1');
