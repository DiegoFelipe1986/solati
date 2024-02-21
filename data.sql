-- Para este proyecto se debe crear previamente la base de datos con los scripts en el siguiente orden:
-- 1. Crear base
-- 2. Seleccionar Base de datos
-- 3. Crear la tabla "Users"
-- 4. Realizar el Insert para llenar la tabla creada

-- 1. Create Data Base

CREATE DATABASE UsersDB;

-- 2. Selection DB
USE UsersDB;

-- 3. Create table Users
CREATE TABLE Users (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    username VARCHAR(255),
    email VARCHAR(255),
    street VARCHAR(255),
    suite VARCHAR(255),
    city VARCHAR(255),
    zipcode VARCHAR(10),
    lat DECIMAL(10, 6),
    lng DECIMAL(10, 6)
);

-- 4. Insert 10 users to table
INSERT INTO Users (id, name, username, email, street, suite, city, zipcode, lat, lng)
VALUES
(1, 'Leanne Graham', 'Bret', 'Sincere@april.biz', 'Kulas Light', 'Apt. 556', 'Gwenborough', '92998-3874', -37.3159, 81.1496),
(2, 'Ervin Howell', 'Antonette', 'Shanna@melissa.tv', 'Victor Plains', 'Suite 879', 'Wisokyburgh', '90566-7771', -43.9509, -34.4618),
(3, 'Clementine Bauch', 'Samantha', 'Nathan@yesenia.net', 'Douglas Extension', 'Suite 847', 'McKenziehaven', '59590-4157', -68.6102, -47.0653),
(4, 'Patricia Lebsack', 'Karianne', 'Julianne.OConner@kory.org', 'Hoeger Mall', 'Apt. 692', 'South Elvis', '53919-4257', 29.4572, -164.2990),
(5, 'Chelsey Dietrich', 'Kamren', 'Lucio_Hettinger@annie.ca', 'Skiles Walks', 'Suite 351', 'Roscoeview', '33263', -31.8129, 62.5342),
(6, 'Mrs. Dennis Schulist', 'Leopoldo_Corkery', 'Karley_Dach@jasper.info', 'Norberto Crossing', 'Apt. 950', 'South Christy', '23505-1337', -71.4197, 71.7478),
(7, 'Kurtis Weissnat', 'Elwyn.Skiles', 'Telly.Hoeger@billy.biz', 'Rex Trail', 'Suite 280', 'Howemouth', '58804-1099', 24.8918, 21.8984),
(8, 'Nicholas Runolfsdottir V', 'Maxime_Nienow', 'Sherwood@rosamond.me', 'Ellsworth Summit', 'Suite 729', 'Aliyaview', '45169', -14.3990, -120.7677),
(9, 'Glenna Reichert', 'Delphine', 'Chaim_McDermott@dana.io', 'Dayna Park', 'Suite 449', 'Bartholomebury', '76495-3109', 24.6463, -168.8889),
(10, 'Clementina DuBuque', 'Moriah.Stanton', 'Rey.Padberg@karina.biz', 'Kattie Turnpike', 'Suite 198', 'Lebsackbury', '31428-2261', -38.2386, 57.2232);