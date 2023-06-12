USE teste;

CREATE TABLE perfil (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  age INT NOT NULL,
  course VARCHAR(255) NOT NULL
);

INSERT INTO perfil (name, age, course)
VALUES ('Pedro Ryago', 20, 'Software Engineering');

