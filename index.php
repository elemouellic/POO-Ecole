<?php require_once('objets/personne.php'); ?>
<?php require_once('objets/enseignant.php'); ?>
<?php require_once('objets/eleve.php'); ?>

<?php 

$mariechristine = new Enseignant('Lesage','Marie-Christine','Rue Winston Churchill','WordPress');
echo $mariechristine->getEtatCivil();
echo '<br>';

$thierry = new Enseignant('Bouedo', 'Thierry', 'Rue Winston Churchill', 'Algorithmie');
echo $thierry->getEtatCivil();
echo '<br>';

$david = new Eleve('Beautrait', 'David', '6, rue Jean Guehenno', '4ème Techno');
echo $david->getEtatCivil();
echo '<br>';

$mael = new Eleve('Hervé', 'Maël', '12, rue des mégalithes', '5ème');
echo $mael->getEtatCivil();
echo '<br>';

$emmanuel = new Eleve('Le Mouëllic', 'Emmanuel', '2, rue Pierre et Marie Curie', '3ème');
echo $emmanuel->getEtatCivil();
echo '<br>';


echo "Le nombre d'élèves est de : " . Eleve::getEffectif();

echo '<br>';

echo "Le nombre d'enseigants est de : " . Enseignant::getEffectif();
?>
