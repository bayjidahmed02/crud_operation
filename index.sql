-- Active: 1708658545065@@127.0.0.1@3306@mcet
INSERT INTO students (name, roll) VALUES ('Test', 15);

SELECT * FROM students;

UPDATE students SET name = 'update name' WHERE id = 1;

DELETE FROM students WHERE id = 2
