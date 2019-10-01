<!-- L'élément HTML <header> représente un groupe de contenu introductif aidant à la navigation. -->
    <header>
		<!-- nav est un élément HTML servant à la navigation -->
    	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        	
        	<a class="navbar-brand" href="index.php">PhotoForYou</a>
        	<!-- Pour passer en mode hamburger si on est sur un petit écran -->
        	<button class="navbar-toggler" type="button" data-toggle="collapse" 
        		data-target="#navbarCollapse" aria-controls="navbarCollapse" 
        		aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
        	</button>

        	<div class="collapse navbar-collapse" id="navbarCollapse">
          		<ul class="navbar-nav mr-auto">
            	 <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.html">Photos</a>
  						    <div class="dropdown-menu">
  							   <a class="dropdown-item" href="#">Acheter</a>
  							   <a class="dropdown-item" href="#">Vendre</a>
  							   <a class="dropdown-item" href="#">Les plus populaires</a>
  							   <a class="dropdown-item" href="#">Les nouveautés</a>
  						    </div>
					     </li>
            	 <li class="nav-item">
              			<a class="nav-link" href="#">Tarifs</a>
            	 </li>
          		</ul>

				      <!-- formulaire de recherche -->
          		<form class="form-inline mt-md-0">
            		<input class="form-control mr-sm-2" type="text" placeholder="Votre recherche" aria-label="rechercher">
            		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
          		</form>

          		<ul class="navbar-nav mr-right">
                <li class="nav-item">
                  <a class="nav-link btn btn-outline-dark" href="inscription.php">S'inscrire</a>
                </li>
            	 <li class="nav-item">
                  <a class="nav-link btn btn-outline-dark" href="#">S'identifier</a>
           		 </li>
          		</ul>  
        	</div>
    	</nav>
    </header>