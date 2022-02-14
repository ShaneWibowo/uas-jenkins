CREATE DATABASE trucorp;
USE trucorp;

CREATE TABLE users{
	id VARCHAR(12) PRIMARY KEY,
	nama VARCHAR(225),
	alamat VARCHAR(255),
	jabatan VARCHAR(50),
};

INSERT INTO users VALUES
('200112345678', 'Aldi', 'Happy Street', 'Project Manager');
('200111223344', 'Budi', 'Sad Street', 'Programmer');
('200198765432', 'Chris', 'Run Street', 'Pentester');
('200199887766', 'Demian', 'Sleep Street', 'Security Architect');
('200112398701', 'Elwinda', 'Sing Street', 'Cyber Intellgience Officer');
