<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>My GMER</title>
    <style>
   body{
    font-family: Arial, sans-serif;
    background-image: url('aaa.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #f2f2f2;
  
    }
		.section {
			position: absolute;
      padding-top:10px;
			bottom: 0;
			left: 50;
			width: 80%;
			height: 240px;
			background-color: white;
		}

    .image-container {	
			width: 540px;
			height: 540px;
			position: relative;
			margin-left: 200px;
			margin-top: -420px;
      height: calc(95vh - 50px);
		}
		
		.image {
			position: absolute;
			top: 0;
			left: 100;
			width: 205%;
			height: 60%;
			opacity: 0;
			transition: opacity 1s ease-in-out;
		}

		.image.visible {
			opacity: 0.8;
		}

    nav {
  position: fixed; /* set the position to fixed */
  top: 0;
  left: 0;
  height: 100%;
  width: 140px;
  background-color: rgba(134, 239, 247, 0.6);
  color: black;
  padding: 20px;

}

.slogan {
  position: absolute;
  left: 40%;
  transform: translateX(-50%);
  padding: 10px;
  color: black;
  font-size: 20px;
  z-index: 1;
  overflow: hidden;
  margin-top: 232px;
   background-color: rgba(134, 239, 247, 0.5);
  
}


.slogan:before {
  content: "";
  position: absolute;
  left: 50%;
  transform: translateX(-50%) rotate(45deg);
  width: 20px;
  height: 20px; 
  z-index: -1;
  
}

.slogan2 {
  position: absolute;
  left: 40%;
  transform: translateX(-50%);
  padding: 20px;
  color: black;
  font-size: 22px;
  z-index: 1;
  overflow: hidden;
  margin-top: 100px;
   background-color: rgba(255, 255, 255, 0.9);
  
}


.slogan2:before {
  content: "";
  position: absolute;
  left: 50%;
  transform: translateX(-50%) rotate(45deg);
  width: 20px;
  height: 20px;
  z-index: -1;
  
}

	</style>
  </head>
  <body>
     <header>
      <div class="sidebar">
        <nav>
          <?php
          session_start();

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');
          
          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          if (!isset($_SESSION['username']) || $_SESSION['role'] == 'admin') {

        // Insert the staff name into the staff_names table
       
            echo "  <ul><li><a href='admin.php'>Neveaux</a></li>";

        }
        ?>
        <?php
          

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');
          
          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          if (!isset($_SESSION['username']) || $_SESSION['role'] == 'admin') {

        // Insert the staff name into the staff_names table
       
            echo "  <ul><li><a href='history.php'>Historique</a></li>";

        }
        

        ?>
            <ul><li><a style="color: rgb(0, 0, 0);" href="index.php">Accueil</a></li>
            <?php
          

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');
          
          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          if (!isset($_SESSION['username']) || $_SESSION['role'] == 'admin') {

        // Insert the staff name into the staff_names table
       
            echo "  <ul><li><a href='assets.php'>Ajout machine</a></li>";
            
           
          

        }
        

        ?>
           <?php
          

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');
          
          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          if (!isset($_SESSION['username']) || $_SESSION['role'] == 'fourni') {

        // Insert the staff name into the staff_names table
       
            echo " <ul> <li><a href='fournisseur.php'>dashboard</a></li>";
            
           
          

        }
        

        ?>

<?php
          

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');
          
          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          if (!isset($_SESSION['username']) || $_SESSION['role'] == 'biomed') {

        // Insert the staff name into the staff_names table
       
        echo "<ul><li><a  href='bon1.php'>Bon d'intervention</a></li>";
        echo "<ul><li><a  href='staff.php'>travaille en attent</a></li>";

        }
        

        ?>



                <?php
          

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');
          
          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          if (!isset($_SESSION['username']) || $_SESSION['role'] == 'user') {

        
       
        echo "<ul><li><a  href='machineinf.php'>MachineInfo</a></li>";
        echo "<ul><li><a href='user.php'>Demande d'intervention</a></li>";
        }
        

        ?>
            
            <ul><li><a style="color: rgb(0, 0, 0);" href="contact.html">Contact Us</a></li>
          
            
            
          
        </nav>
      </div>
    </header>
    <main>
    <div class="content">

    <p style="color: rgb(0, 0, 0); margin-top: 365px; font-size: 1.4em;">Fiabilité, rapidité, efficacité : notre plateforme de gestion de maintenance est là pour vous simplifier la vie !.</p>
    
    <section class="section">
        <h2>A propos</h2>
        <div>
  <p>Bienvenue sur notre site web dédié à la gestion de maintenance des équipements de radiologie pour les centres privés de radiologie. Nous sommes une plateforme en ligne qui facilite la gestion des demandes d'intervention pour la maintenance de vos équipements de radiologie. Nous proposons un service complet qui vous permet de soumettre vos demandes d'intervention, de les valider, de suivre le package et les informations de vos machines de radiologie, et de valider les bons d'intervention...</p>
  <p>Notre plateforme en ligne est facile à utiliser et vous permet de soumettre vos demandes d'intervention en quelques clics seulement.</p>
  <p>Nous sommes fiers de notre approche professionnelle et de notre engagement envers la satisfaction de nos clients. Nous travaillons en étroite collaboration avec vous pour comprendre vos besoins et vos objectifs, afin de vous proposer des solutions efficaces et abordables pour la gestion de la maintenance de vos équipements de radiologie.</p>
</div>
      </section>
      </div>
      

    </main>
    <div class="image-container">
    <div class="slogan">Welcome to My Gestion de Maintenance des Equipements Radiologie</div>
    <div class="slogan2">My GMER</div>
		<img src="bbb.jpeg" class="image visible">
		<img src="eee.jpeg" class="image">
		<img src="ddd.jpeg" class="image">
	</div>
<?php


// Retrieve the staff member's profile information from the database

$query_profile = "SELECT username, email, image FROM users WHERE role = '" . $_SESSION['role'] . "' AND username = '" . $_SESSION['username'] . "' ";
$result_profile = mysqli_query($conn, $query_profile);
$row_profile = mysqli_fetch_assoc($result_profile);
$username = $row_profile['username'];
$email = $row_profile['email'];
$image = ($row_profile['image']);
        echo '<div class="profile">';
echo '<img src="data:image/jpg;base64,' . base64_encode($image) . '" alt="Profile Picture" onclick="location.href=\'profile.php\'">';

echo '<div class="profile-info">';
echo '<h2>' . $username . '</h2>';
echo'</div>';
echo'</div>';
?>
	<script>
		var images = document.querySelectorAll('.image');
		var currentIndex = 0;

		function showImage(index) {
			// Masquer toutes les images
			images.forEach(function(image) {
				image.classList.remove('visible');
			});

			// Afficher l'image actuelle
			images[index].classList.add('visible');

			// Passer à l'image suivante après 5 secondes
			setTimeout(function() {
				currentIndex++;
				if (currentIndex == images.length) {
					currentIndex = 0;
				}
				showImage(currentIndex);
			}, 3000);
		}

		// Commencer avec la première image
		showImage(currentIndex);
	</script>
  
  <br><br> <br> <br><br>
  <footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p>&copy; 2023 Getionaire Radiology Machine. All rights reserved.</p>
      </div>
      <div class="col-md-6">
        <ul class="footer-nav">
          <li><a href="" onclick="logout()">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  
</footer>


<script>
  function logout() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "logout.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        alert("You have been logged out.");
        window.location.replace("login.html"); // Replace "login.php" with the URL of your login page
      }
    }
    xhr.send();
  }
</script>

<style>
  footer {
    background-color: #f5f5f5;
    padding: 20px;
    text-align: center;
  }
  .footer-nav li {
    display: inline-block;
    margin-right: 20px;
  }
  .profile {
  position: absolute;
  top: 20px;
  right: 20px;
  text-align: center;
  margin-top: 0px;
}

.profile img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
  margin: 0px;
}
</style>

<style>
.profile {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 50px;
}

.profile-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    margin-bottom: 20px;
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.placeholder {
    background-color: #eee;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 64px;
    color: #aaa;
}

.profile-info {
    text-align: center;
}

h2 {
    margin-top: 0;
}

.email {
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

input[type="file"] {
    margin-bottom: 10px;
    display: none;
}

input[type="submit"]
  {
    background-color: #4285F4;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #357AE8;
}
.image-upload-label {
  display: inline-block;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  background-color: #007bff;
  border-radius: 5px;
  padding: 10px 20px;
  transition: background-color 0.2s ease;
}

.image-upload-label:hover {
  background-color: #0069d9;
}

.image-upload-label i {
  margin-right: 10px;
}

</style>

  </body>
</html>
