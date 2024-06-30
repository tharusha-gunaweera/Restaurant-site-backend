    CREATE DATABASE moon_house;

    USE moon_house;

    CREATE TABLE populer_items
    (
        Id INT PRIMARY KEY AUTO_INCREMENT,
        item_name VARCHAR(50) NOT NULL,
        price INT NOT NULL
    );

    CREATE TABLE book_table
    (
        Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        Name VARCHAR(50) NOT NULL,
        Email VARCHAR(50) NOT NULL,
        Date_Time VARCHAR(50) NOT NULL,
        Num_People INT NOT NULL,
        Num_Table INT NOT NULL,
        Request VARCHAR(200) NOT NULL
    );

    CREATE TABLE login
    (
        Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        Email VARCHAR(50) NOT NULL,
        Name VARCHAR(50) NOT NULL,
        Time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        Pass VARCHAR(200) NOT NULL
    );

    CREATE TABLE contacts
    (
        Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        Name VARCHAR(50) NOT NULL,
        Email VARCHAR(10) NOT NULL,
        Phone VARCHAR(15) NOT NULL ,
        subject VARCHAR(50) NOT NULL ,
        message VARCHAR(50) NOT NULL,
        Time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    CREATE TABLE Admins
    (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        addedAdmin_id VARCHAR(10),
        Email VARCHAR(50) NOT NULL,
        name VARCHAR(50) NOT NULL,
        Pword VARCHAR(200) NOT NULL
    );

    CREATE TABLE todo
    (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        addedAdmin_id VARCHAR(10),
        name VARCHAR(50) NOT NULL
    );


    INSERT INTO populer_items (item_name, price)
    VALUES
        ('Culture Colombo Tasting Basket', 5550);

    INSERT INTO Admins ( Email, name,Pword)
    VALUES
        ('chandima@moon.com','chandima', 'chandima123'),
        ('kaweesha@moon.com','kaweesha', 'kaweesha123');
