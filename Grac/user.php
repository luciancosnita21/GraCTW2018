<?php



class user{
private $id;
private $nume;
private $prenume;
private $numeutilizator;
private $varsta;
private $adresa;
private $adresaEmail;
private $password;

  public function __construct($nume, $prenume, $numeutilizator, $varsta,$adresa,$adresaEmail,$password){
$this->nume=$nume;
$this->prenume=$prenume;
$this->numeutilizator=$numeutilizator;
$this->varsta=$varsta;
$this->adresa=$adresa;
$this->adresaEmail=$adresaEmail;
$this->password=$password;
  $conexiune = mysqli_connect (
    'localhost', // locatia serverului (aici, masina locala)
    'root',       // numele de cont
    ''     // parola
  );
  // verificam daca am reusit
  if (!$conexiune) {
  	die ('A survenit o eroare de conectare: ' . mysqli_error());
  }
  // deschidem baza de date 
  if (!mysqli_select_db($conexiune,'grac')) {
    die ('Baza de date nu poate fi deschisa: ' . mysqli_error());
  } 


  $sql = "select max(id) from utilizator";
  $interog = mysqli_query ($conexiune,$sql);
 
  if (!$interog) {
  	die ('A survenit o eroare la interogare: ' . mysql_error());
  }



  $inreg = mysqli_fetch_array ($interog);

$this->id=$inreg['max(id)']+1;

  }


public function inserttodb()
{$mysql = new mysqli (
	'localhost', // locatia serverului (aici, masina locala)
	'root',       // numele de cont
	'',    // parola (atentie, in clar!)
	'grac'   // baza de date
	);

// verificam daca am reusit
if (mysqli_connect_errno()) {
	die ('Conexiunea a esuat...');
}

$sql = "INSERT INTO utilizator (id,nume, prenume,avatar,varsta,adresa,adresaEmail,password)
VALUES ('$this->id','$this->nume','$this->prenume' ,'$this->numeutilizator','$this->varsta','$this->adresa','$this->adresaEmail','$this->password')";





if (mysqli_query($mysql, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysql);
}

mysqli_close($mysql);
}


}



?>