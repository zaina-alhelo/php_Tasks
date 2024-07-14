<?php
//Task 1
echo "<h2>what is database ?</h2>";
echo "<p>A database is an organized collection of structured information, or data</p>";
echo "<h2>what SQL is and its importance in managing databases ?</h2>";
echo "<p>(SQL) => Structured Query Language , to store, retrieve, manage and manipulate data within a database management system.<br>
Its role in database management is crucial for efficient data retrieval, manipulation, and ensuring data integrity </p>";

//Task 2
echo '<img src="https://intellisoft.io/wp-content/uploads/2023/03/4-sql-vs-nosql.png">';
echo "<br><br>";

echo "<h2>what MySQL is, including its features and typical use cases.</h2>";
echo "<p>MySQL is an open-source relational database management system (RDBMS) <br><br>
Features of MySQL : <br>
1. Features of MySQL <br>
2. Security <br>
3. Cross-Platform Support <br><br>
Typical Use Cases of MySQL : <br>
1.Web Applications <br>
2.E-Commerce <br>
3.Customer Relationship Management (CRM) <br>
</p>";
echo "<br><br>";
//Task 3
echo "<h2>Numeric Data Types : </h2>";
echo "<pre>1. BOOL: Zero is considered as false, nonzero values are considered as true.
2. INT :Signed range is from -2147483648 to 2147483647. Unsigned range is from 0 to 4294967295. The size parameter specifies the maximum display width (which is 255)
3. FLOAT(size, d): A floating point number. The total number of digits is specified in size. The number of digits after the decimal point is specified in the d parameter.</pre>";
echo "<br><br>";

//Task 4
echo "<h2>String Data Types :</h2>";
echo "<pre> 1. CHAR(size) : A FIXED length string (can contain letters, numbers, and special characters)
2. VARCHAR(size): A VARIABLE length string (can contain letters, numbers, and special characters)
</pre>";
echo "<br><br>";
//Task 5
echo "<h2>Date and Time Data Types :</h2>" ;
echo "<pre>1. DATE: A date. Format: YYYY-MM-DD. The supported range is from '1000-01-01' to '9999-12-31'
2. TIME(fsp) :A time. Format: hh:mm:s
3. YEAR	: A year in four-digit format.</pre>";
echo "<br><br>";
//Task 6
echo "<p><h2>A primary key </h2>is a specific field  in a database table that uniquely identifies each row within that table.<br>
The primary key must contain unique values and cannot contain NULL values</p>";
echo "<br><br>";

//Task 7

echo "<p><h2>Difference Between NULL and NOT NULL Constraints</h2>
A NULL constraint allows a column to have NULL values.<br>
A NOT NULL constraint ensures that a column must always contain a value. Columns defined with this constraint cannot have NULL values.</p>";
echo "<br><br>";

//Task 8
echo "<p><h2>AUTO_INCREMENT</h2> is a feature in relational database systems that automatically generates a unique numeric value for a column whenever a new row is inserted into a table. <br>
It is typically used with integer columns, often primary keys, to ensure each row has a unique identifier without needing explicit user input or calculation</p>";
echo "<br><br>";

//Task 9

echo "SQL => CREATE DATABASE StudentDB;";
echo "<br><br>";
//Task 10
echo "SQL => CREATE TABLE Students (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
email VARCHAR(100),
enrollment_date DATE
);";
echo "<br><br>";

//Task 11
echo "Insert => INSERT INTO Students (name, email, enrollment_date)
VALUES ('John Doe', 'john.doe@example.com', '2024-07-15');
";
echo "<br><br>";
echo "UPDATE => UPDATE Students
SET email = 'zainaalhelo@gmail.com'
WHERE id = 1;
";
echo "<br><br>";
echo "DELETE=> DELETE FROM Students
WHERE id = 1;
";
echo "<br><br>";

//Task 12
echo "SQL Command Practice =>USE StudentDB;<br>
select * form Students;";
echo "<br><br>";

//Task 13

echo "SQL => CREATE DATABASE  PracticeDB; <br>";

echo "SQL =>CREATE TABLE Employees (
emp_id INT AUTO_INCREMENT PRIMARY KEY,
emp_name VARCHAR(100) NOT NULL,
emp_position VARCHAR(100),
hire_date DATE
);
";
echo "<br><br>";    
//Task 14
echo "SQL =>CREATE TABLE Customers (
customer_id INT AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(50) NOT NULL,
last_name VARCHAR(50) NOT NULL,
email VARCHAR(100),
phone_number VARCHAR(20),
birth_date DATE
);
";
echo "<br><br>";    
//Task 15
echo "insert => INSERT INTO Employees (emp_name, emp_position, hire_date)
VALUES
('Alice Smith', 'Manager', '2023-01-15'),
('Bob Johnson', 'Developer', '2023-02-20'),
('Eve Williams', 'Designer', '2023-03-25');";

echo "<br><br>";    
echo "Update => UPDATE Employees
SET emp_position = 'Senior Developer'
WHERE emp_id = 2;";
echo "<br><br>";    
echo "Delete => DELETE FROM Employees
WHERE emp_id = 3;";