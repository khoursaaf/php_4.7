<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Exercise</title>
</head>
<body>
  <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</p>
  <ol>
    <li>Homme</li>
    <li>Femme</li>
  </ol>
  <p>La fonction doit renvoyer en fonction des paramètres :</p>
  <ol>
    <li>Vous êtes un homme et vous êtes majeur</li>
    <li>Vous êtes un homme et vous êtes mineur</li>
    <li>Vous êtes une femme et vous êtes majeur</li>
    <li>Vous êtes une femme et vous êtes mineur</li>
  </ol>
  <p>Gérer tous les cas.</p>
  <?php
  function genderAge($gender, $age)
  {
    if (is_string($gender) && is_int($age)) {
      if ($gender == "Homme" && $age < 18) {
        echo "Vous êtes un homme et vous êtes mineur";
      } elseif ($gender == "Homme" && $age >= 18) {
        echo "Vous êtes un homme et vous êtes majeur";
      } elseif ($gender == "Femme" && $age >= 18) {
        echo "Vous êtes une femme et vous êtes majeure";
      } else {
        echo "Vous êtes une femme et vous êtes mineure";
      }
    } else {
      echo "Verifier informations";
    }
  }
  $gender = "Homme";
  $age = 3;
  ?>
  <p><?php echo genderAge($gender, $age); ?></p>
</body>
</html>
