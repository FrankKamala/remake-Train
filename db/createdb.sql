CREATE DATABASE swift_train;

Create table users(
     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(200) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        user_mail VARCHAR(200) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE intercountydb(
train_id INT (255) Primary key AUTO_INCREMENT,
train_name VARCHAR (255) Not null , 
train_from VARCHAR (255) Not null,
train_to VARCHAR (255) Not null,
time_dept TIME (6) Not null,
time_arr TIME (6) Not null,
day_travel Date  Not null);



CREATE TABLE localtraindb( train_id INT (255) Primary key AUTO_INCREMENT, train_name VARCHAR (255) Not null , train_from VARCHAR (255) Not null, train_to VARCHAR (255) Not null, time_dept TIME (6) Not null, time_arr TIME (6) Not null, day_travel Date Not null);


CREATE TABLE bookings(
booking_id INT (255) Primary key AUTO_INCREMENT,
ticket_name VARCHAR (255) Not null , 
ticket_IDPASS VARCHAR (255) Not null , 
ticket_type VARCHAR (255) Not null , 
train_from VARCHAR (255) Not null,
train_to VARCHAR (255) Not null,
time_dept TIME (6) Not null,
time_arr TIME (6) Not null,
day_travel Date  Not null);

-- Insertions

INSERT INTO `intercountydb` (`train_name`, `train_from`, `train_to`, `time_dept`, `time_arr`, `day_travel`) VALUES ('Madaraka', 'Mombasa', 'Nairobi', '08:00:00.000000', '14:00:00.000000', '2021-12-03');

INSERT INTO `localtraindb` ( `train_name`, `train_from`, `train_to`, `time_dept`, `time_arr`, `day_travel`) VALUES ('E1', 'Nairobi', 'Embakasi', '17:00:00.000000', '17:50:00.000000', '2021-12-03');

INSERT INTO `bookings` ( `ticket_name`, `ticket_IDPASS`, `ticket_type`, `train_from`, `train_to`, `time_dept`, `time_arr`, `day_travel`) VALUES ( 'Mzee Ndolo', '34446978', 'VIP', 'Nairobi', 'Mombasa', '22:00:00.000000', '03:30:00.000000', '2021-12-23');