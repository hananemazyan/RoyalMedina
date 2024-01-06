use gestionsysedu;

INSERT INTO departements (intitule, chef_id) VALUES ('departmentNom du département 2', ID_du_chef_2);
show Tables;
drop table enseignant;

Select * from enseignants;
Select * from departements;

drop table enseignants;
drop table departements;

CREATE TABLE departements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    intitule VARCHAR(255) NOT NULL,
    chef_id INT,
    FOREIGN KEY (chef_id) REFERENCES enseignants(id) ON DELETE SET NULL ON UPDATE CASCADE
);


CREATE TABLE enseignants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    grade VARCHAR(255)
);

ALTER TABLE enseignants
ADD COLUMN departement_id INT,
ADD FOREIGN KEY (departement_id) REFERENCES departements(id) ON DELETE SET NULL ON UPDATE CASCADE;


INSERT INTO enseignants (nom, prenom, email, grade) VALUES ('ben', 'ahmed', 'jdoe@example.com', 'Professor');

select * from departements;
select * from enseignants;

SELECT * FROM departements WHERE id = 1;

SELECT e.nom, e.prenom
FROM departements d
JOIN enseignants e ON d.chef_id = e.id
WHERE d.chef_id = 2;