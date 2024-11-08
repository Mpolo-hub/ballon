<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Append Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




  <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    /* Style de la section hero */
    #hero {
      background-image: url('assets/img/hero-bg.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 100px 20px;
      text-align: center;
      position: relative;
	  max-width:1700px !important;
    }
	/* Style pour le texte dans hero */
    #hero h2, #hero p {
      text-align: left; /* Aligne le texte à gauche */
    }

    /* Style pour l'input de recherche */
    #player-search {
      width: 100%;
      max-width: 1700px !important;
      padding: 15px;
      font-size: 1.2em;
      border: none;
      border-radius: 5px;
      background-color: #d3d3d3; /* Couleur de fond gris */
      color: black; /* Texte saisi en noir */
      text-align: center; /* Texte centré dans l'input */
      margin-top: 20px;
    }
	 /* Style pour le bouton */
   #search-button {
   background-color: #333;
   color: white;
   border: none;
   border-radius: 0 5px 5px 0;
   padding: 0 15px;
   display: flex;
   align-items: center;
   justify-content: center;
   cursor: pointer;
} /* Ajoutez cette accolade fermante */

    /* Style pour la zone des résultats */
/*    #search-results {
      margin-top: 20px;
      color: white;
      font-size: 1.1em;
    } */
	/* Style pour la zone des résultats */
#search-results {
  margin-top: 10px;
  color: black; /* Couleur du texte pour les résultats */
  font-size:10px !important;
   
  
}
#search-results a {font-size:0.8em;
				   color:#000066 !important;
}
/* Style pour chaque résultat */
.player-result {
  font-size:10px !important;
  padding: 10px;
  background-color: white; /* Fond blanc */
  border-radius: 5px;
  border-top:2px solid blue;
  margin-top: px;
  color: #00008b !important; /* Texte en bleu foncé */; /* Couleur du texte bleu */
  cursor: pointer;
  text-decoration: none; /* Enlever le soulignement */
  display: block; /* Permet au lien de prendre toute la largeur */
  border-bottom: 1px solid black; /* Ligne de séparation en bas */
}

.player-result:last-child {
  border-bottom: none; /* Pas de ligne pour le dernier élément */
}

.player-result:hover {
  background-color: #f0f0f0; /* Couleur de fond au survol */
  color: darkblue; /* Couleur de texte au survol */
}

  </style>
<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Universal Football Vote </h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html#hero" class="active">Home</a></li>
          <li><a href="index.html#about">About</a></li>
          <li><a href="index.html#services">Services</a></li>
          <li><a href="index.html#portfolio">Portfolio</a></li>
          <li><a href="index.html#pricing">Pricing</a></li>
          <li><a href="index.html#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="index.html#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.html#about">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
     <section id="hero" class="hero section dark-background" style="background-image: url('assets/img/hero-bg.jpg'); text-align: center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto">
          <h2>Vote for your favorite player</h2>
          <p>Enter the player's name, club, or country.</p>
		  <div class="col-lg-10" data-aos="fade-up" data-aos-delay="300">
			<form class="php-email-form">
				<input type="text" id="player-search" placeholder="Enter player's name" onKeyUp="searchPlayer()" class="sign-up-form">		                <div id="search-results"></div>
			</form>
		 </div>
          
        </div>
      </div>
    </div>
  </section><!-- /Hero Section -->
	
  <!-- Clients Section -->
   
  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Append</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="sitename">Append</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <div id="preloader"></div>
<!-- Modal -->
<div class="modal fade" id="playerModal" tabindex="-1" aria-labelledby="playerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-secondary text-white">
        <div class="modal-header">
          <h5 class="modal-title text-white text-center w-100" id="playerModalLabel"></h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p id="playerDetails"></p>
          <form id="voteForm" action="enregistrer_vote.php" method="POST">
            <input type="hidden" id="playerId" name="playerId"> <!-- Champ caché pour l'ID du joueur -->
            <input type="text" id="username" name="username" placeholder="Nom" class="form-control mb-2" required>
            <input type="text" id="userNationality" name="nationality" placeholder="Nationalité" class="form-control mb-2" required>
            <input type="text" id="userCountry" name="country" placeholder="Pays de résidence" class="form-control mb-2" required>
            <input type="email" id="userEmail" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="text" id="userPhone" name="phone" placeholder="Numéro de téléphone" class="form-control mb-2" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary" onClick="submitVote()">Soumettre le vote</button> <!-- Changer le type de input à button -->
        </div>
      </div>
    </div>
  </div>
<!-- End modal -->

<script>
    document.getElementById('voteForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Empêche le rechargement de la page

        var formData = new FormData(this);
        
       fetch('enregistrer_vote.php', {
    method: 'POST',
    body: formData
})
.then(response => response.text())
.then(data => {
    console.log(data); // Pour le débogage
    alert(data); // Affiche le message de succès dans une alerte
    // Optionnel : fermer le modal
    $('#playerModal').modal('hide');
})
.catch(error => {
    console.error('Erreur:', error);
});
    });
// Fonction pour ouvrir le modal et passer les informations du joueur
function openPlayerModal(playerId, playerName, playerNationality, playerCountry) {
    // Mettre à jour le contenu du modal
    document.getElementById('playerModalLabel').textContent = playerName;
    document.getElementById('playerDetails').textContent = `Nationalité: ${playerNationality}, Pays: ${playerCountry}`;
    
    // Mettre à jour le champ caché avec l'ID du joueur
    document.getElementById('playerId').value = playerId;
    
    // Afficher le modal
    $('#playerModal').modal('show');
}

</script>

<!-- End modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Vendor JS Files -->
  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
function searchPlayer() {
    const query = document.getElementById("player-search").value;

    if (query.length > 1) {
        fetch(`search_player.php?query=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(players => {
                let results = document.getElementById("search-results");
                results.innerHTML = "";

                players.forEach(player => {
                    let playerDiv = document.createElement("div");
                    playerDiv.className = "player-result";

                    // Utilise une fonction pour afficher le modal
                    playerDiv.innerHTML = `
                        <p><a href="#" onclick="showPlayerDetails('${player.full_name}', '${player.club_name}', '${player.club_country}', ${player.id})">${player.full_name}, ${player.nationality}, ${player.club_name} (${player.club_country}), ${player.position}, dorsal ${player.dorsal}, ${player.age} (Years old)</a></p>
                    `;
                    results.appendChild(playerDiv);
                });
            });
    }
}

// Fonction pour afficher les détails du joueur dans le modal
function showPlayerDetails(name, club, country, id) {
    document.getElementById("playerModalLabel").textContent = name;
    document.getElementById("playerDetails").textContent = `Player for ${club} club, ${country}.`;
    
    // Stocke l'ID du joueur pour le vote Player for Paris Saint-Germain, France.
    document.getElementById("playerModal").setAttribute('data-player-id', id);
    
    const modal = new bootstrap.Modal(document.getElementById('playerModal'));
    modal.show();
}

function submitVote() {
    const name = document.getElementById("username").value;
    const nationality = document.getElementById("userNationality").value;
    const country = document.getElementById("userCountry").value;
    const email = document.getElementById("userEmail").value;
    const phone = document.getElementById("userPhone").value;
    const playerId = document.getElementById("playerModal").getAttribute('data-player-id');

    // Vérifiez que tous les champs sont remplis
    if (!name || !nationality || !country || !email || !phone) {
        alert("Veuillez remplir tous les champs.");
        return;
    }

    fetch('submit_vote.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            player_id: playerId,
            username: name,
            nationality: nationality,
            country: country,
            email: email,
            phone: phone
        }),
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        const modal = bootstrap.Modal.getInstance(document.getElementById('playerModal'));
        modal.hide();
        // Réinitialiser les champs
        document.getElementById("username").value = '';
        document.getElementById("userNationality").value = '';
        document.getElementById("userCountry").value = '';
        document.getElementById("userEmail").value = '';
        document.getElementById("userPhone").value = '';
    })
    .catch(error => {
        console.error('Erreur:', error);
    });
}


</script>
<script>
    document.getElementById('voteForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Empêche le rechargement de la page

        var formData = new FormData(this);
        
        fetch('enregistrer_vote.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Traitement de la réponse (afficher un message, par exemple)
            console.log(data); // Pour le débogage
            // Mettez à jour l'URL sans recharger la page
            history.pushState(null, '', 'enregistrer_vote.php'); // Changez l'URL ici

            // Optionnel : fermer le modal
            $('#playerModal').modal('hide');
        })
        .catch(error => {
            console.error('Erreur:', error);
        });
    });
</script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>
 <!-- Preloader -->
  
</body>
<!-- Inclure Bootstrap JS (doit être en bas du body) -->

</html>