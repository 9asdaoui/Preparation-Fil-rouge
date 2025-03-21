Exercices (sur une table employes avec id, nom, salaire, departement)

-- Sélectionnez les employés avec un salaire supérieur à 3000.

SELECT * 
FROM employes
WHERE salaire>=3000;

-- Sélectionnez les noms et salaires des employés du département "RH".

SELECT nom,salaire 
FROM employes
WHERE departement = 'RH';

-- Sélectionnez les employés dont le nom commence par "A".

SELECT * 
FROM employes
WHERE nom LIKE 'A%';


-- Sélectionnez les employés avec un salaire entre 2000 et 4000.

SELECT * 
FROM employes
WHERE salaire BETWEEN 2000 AND 4000;