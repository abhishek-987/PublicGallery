CREATE database project1gallery;


CREATE TABLE users(
    id int(10) not null PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(20) not null,
    lastname varchar(20) not null,
    email varchar(50) not null,
    username varchar(50) not null,
    password varchar(20) not null

);

INSERT into users(firstname, lastname, email, username, password) VALUES(
    
    'abhishek', 'chaturvedi', 'abhishekchaturvedi987@gmail.com', 'abhishek_987', 'password'


);
