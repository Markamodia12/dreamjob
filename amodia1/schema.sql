CREATE TABLE employee (
employeeID INT AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR (50),
lastName VARCHAR (50),
age INT,
email VARCHAR (50),
gender VARCHAR (50),
nationality VARCHAR (50),
skills VARCHAR (50),
date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);