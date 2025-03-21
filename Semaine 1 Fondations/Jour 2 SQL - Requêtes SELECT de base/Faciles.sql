Exercices (sur une table employes avec id, nom, salaire, departement)

-- Écrivez une requête pour sélectionner tous les employés.

SELECT * FROM employes;

-- Sélectionnez uniquement les noms des employés.

SELECT nom FROM employes;

-- Sélectionnez les employés du département "IT".

SELECT * FROM employes
WHERE departement = 'IT' ;
