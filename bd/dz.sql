1. Додання товарів в таблицю:
INSERT INTO `products`(`id`, `name`, `price`, `catedory`, `images`, `description`) VALUES ('','Кланад','180','anime','/images/123.png','fsdgdfgdf');
INSERT INTO `products`(`id`, `name`, `price`, `catedory`, `images`, `description`) VALUES ('','VA','380','anime','/images/13.png','fsdfcfgdfgdf');
INSERT INTO `products`(`id`, `name`, `price`, `catedory`, `images`, `description`) VALUES ('','VgA','80','manga','/images/134.png','fsdfcfgdfgdf');
INSERT INTO `products`(`id`, `name`, `price`, `catedory`, `images`, `description`) VALUES ('','nn','30','manga','/images/1ff.png','fsdfcfggfgdfgdf');
INSERT INTO `products`(`id`, `name`, `price`, `catedory`, `images`, `description`) VALUES ('','Dar','300','manga','/images/ff.png','bvccvzxcvvc');

2. Виборка товару по id
SELECT `id` 
FROM `products`

3. Виборка по категорії
SELECT `catedory` 
FROM `products`

4. Виборка по ціні, більше чим 
SELECT `price` 
FROM `products`

SELECT `price` 
FROM `products` 
WHERE `price` >100

5. Виборка по ціні в діапазоні
SELECT `price` 
FROM `products` 
WHERE (`price` >100
)
AND (`price` <1000
)

6. Запрос оновлення ціни по id
UPDATE `products` SET `price` = "1000" WHERE `id` =2

7. Видалення по id
DELETE FROM `products` WHERE `id`=10;

8. Виборка товарів з певної категорії і по ціні в діапазоні від 100 до 200
SELECT `name` 
FROM `products` 
WHERE (`catedory` = 'anime'
)
AND (`price` >100
)
AND (`price` <200
)

9. Створення таблиці запросом
CREATE TABLE Clients ( 
id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(20), 
email VARCHAR(30) 
)


10. Виведення всіх стран з Європи
SELECT * 
FROM `country` 
WHERE `continent` = 'Europe'

11. Всі країни з населенням більше 10 млн.
SELECT * 
FROM `country` 
WHERE `population` >100000000

12. Всі країни, які оголосили незалежність після 1900
SELECT * 
FROM `country` 
WHERE `IndepYear` >1900

13. Всі країни на певну букву
SELECT * 
FROM `country` 
WHERE `Name` LIKE "A%"
