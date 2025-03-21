Exercices (sur une table employes avec id, nom, salaire, departement)


-- Sélectionnez les employés triés par salaire décroissant :.

SELECT * 
FROM employes
ORDER BY salaire desc;

-- Sélectionnez le nom et le département des employés avec un salaire > 2500 et du département "IT".

SELECT nom,departement
FROM employes
WHERE salaire > 2500
AND departement = 'IT';

-- Sélectionnez les employés dont le nom contient "e" et le département est "Finance".

SELECT *
FROM employes
WHERE nom like '%e%'
AND departement = 'Finance';