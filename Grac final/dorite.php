<?php
session_start();
 ?>

<html>
<head>

 
 <script>
    function showUser(str,tip) {
   
    if (str=="") {
       
     if(tip==1)

    document.getElementById("t1").innerHTML="";
    else
      if(tip==2)
    document.getElementById("t2").innerHTML="";
    else
      if(tip==3)
    document.getElementById("t3").innerHTML="";
    else
      if(tip==4)
    document.getElementById("t4").innerHTML="";
    return;
    } else{
  
           var  xmlhttp = new XMLHttpRequest();
       
        
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(tip==1)
                document.getElementById("t1").innerHTML = this.responseText;
                else
                if(tip==2)
                document.getElementById("t2").innerHTML = this.responseText;
                else
                if(tip==3)
                document.getElementById("t3").innerHTML = this.responseText;
                else
                if(tip==4)
                document.getElementById("t4").innerHTML = this.responseText;
              
            }
        };
        xmlhttp.open("GET","jax.php?q="+str,true);
        xmlhttp.send();
        
    }
}
    
    
</script>
 
 

 
 
 
<link rel="stylesheet" type="text/css" href="style2.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="top-container">
  <img src="picture3.png" alt="Doctor Who" style="width:100%;height: 170px;">
  <div class="content">
  <h1>GraC</h1>
  <p>Autograph collector.</p>
</div>
</div>
<div class="header" id="myHeader">
 <ul>
   <li>   <a href="paginacont.php">Aplication main page</a>  </li>
 <div class="categorii">
		<button class="dropbtn">Categorii </button>
		<div class="categorii-content">
			<a href="Scriitori.php">Scriitori</a>
			<a href="Plastice.php">Pictori si sculptori</a>
			<a href="Actori.php">Actori</a>
                        <a href="Sportivi.php">Sportivi</a>
                        <a href="Politicieni.php">Personalitati politice</a>
                        <a href="Muzicieni.php">Muzicieni</a>
                        <a href="Altele.php">Altele</a>
		</div>
   </div> 
     <li> <form method="post" action="search.php" style="border:0px;height:2px"> <input type="text" name="search" placeholder="Search." />
     <input type="submit" value=">>"/> </form> </li>

</ul>
</div>

<div class="row">
<div class="col-3 col-s-3 menu">
    
<form method="post" action="schimb.php" >

<h1>Propune un schimb</h1>
  <div class="container">
 <label for="date3"><b><h3>Autograf Cerut</h3></b></label>
  <p></p>
    <select name="date3" onchange="showUser(this.value,1)"  style="width:100px">
    <option value="">Selecteaza..:</option>
   <?php
  
  include "afiseaza.php";
   $id= $_SESSION['UNAME'];
 $afiseazatitlu=new afiseaza($id,1);
 $afiseazatitlu->afiseazaAutograftitlu();
   ?>
  </select>
  
  <label for="date4"><b><h3>Autograf propus</h3></b></label>
  <p></p>
    <select name="date4" onchange="showUser(this.value,2)" style="width:100px">
    <option value="">Selecteaza..:</option>
   <?php
  
 $id= $_SESSION['UNAME'];
 $afiseazatitlu2=new afiseaza($id,2);
 $afiseazatitlu2->afiseazaAutograftitlu();
   ?>
  </select>

<label for="date5"><b><h3>Autograf propus_2</h3></b></label>
  <p></p>
    <select name="date5" onchange="showUser(this.value,3)" style="width:100px">
 <option value="">Selecteaza..:</option>
   <?php
  
$id= $_SESSION['UNAME'];
 $afiseazatitlu3=new afiseaza($id,2);
 $afiseazatitlu3->afiseazaAutograftitlu();
   ?>
  </select>

<label for="date6"><b><h3>Autograf propus_3</h3></b></label>
  <p></p>
    <select name="date6" onchange="showUser(this.value,4);" style="width:100px">
          <option value="">Selecteaza..:</option>
   <?php
  
$id= $_SESSION['UNAME'];
 $afiseazatitlu4=new afiseaza($id,2);
 $afiseazatitlu4->afiseazaAutograftitlu();
   ?>
  </select>
<p></p>
<p></p>
 <button type="submit">Trimite schimb</button>
  </form>

</div>
</div>

<div class="col-9 col-s-9">
<div class="row2">
 <div class="column">
 <div class="content2">
<h1 style=  "padding:10px;border: 5px solid brown; border-radius: 45px;margin: 0;">Autograf cerut:</h1>
<div id="t1"><b></b></div>

</div>
 </div>

  <div class="column">
 <div class="content2">

  </div>
 </div>

   <div class="column">
 <div class="content2">
 <h1 style= "padding: 10px;border: 5px solid brown; border-radius: 45px;margin: 0;"> Autografe oferite</h1>
<div id="t2"><b></b></div>
<div id="t3"><b></b></div>
<div id="t4"><b></b></div>
</div>
</div>

</div>



<script src="ajax.js"></script>




  <button type="button" style="width:200px ;border-radius: 30%"  onclick="loadlist1();">Tranzactii in asteptare</button>
  <button type="button" style="width:200px ;border-radius: 30%"  onclick="loadlist2();">Tranzactii aceptate</button>
  <button type="button" style="width:200px  ;border-radius: 30%"  onclick="loadlist3();">Tranzactii neaceptate</button>
  <p id="demo">Lista tranzactii...</p>
</div>


</div>
<div class="footer">
  <p></p>
</div>
<script src="Script.js"></script>
</body>
</html>
 
 
