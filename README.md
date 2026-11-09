the query used
CREATE DATABASE job_application2;

USE job_application2;

CREATE TABLE applicants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mobile VARCHAR(15) NOT NULL,
    username VARCHAR(50) NOT NULL
);

INSERT INTO applicants (name, email, mobile, username) VALUES
('Syamjith', 'syamjith@gmail.com', '9876543210', 'syam123'),
('Rahul', 'rahul@gmail.com', '9876501234', 'rahul01'),
('Anjali', 'anjali@gmail.com', '9123456789', 'anjali22');
