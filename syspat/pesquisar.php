<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SysLib: Pesquisa</title>

    <!----- Fonte ----->  
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Sans+JP&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">

    <!----- Bootstrap ----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/styles.css">
    
    <!----- Scripts ----->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
    crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     
    <!----- Font Awesome ----->
    <script src="https://kit.fontawesome.com/242457c615.js" crossorigin="anonymous"></script>

     <!----- Progress Bar ----->
    <script> src="js/progressbar.min.js"</script>
    
    <!----- Parallax ----->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

</head>


<body>
  <header> <br /><br />
    
		<div class="container" id="nav-container">
			<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
			<a class="navbar-brand" href="index.html"> 
				<img id="logo" src="logo.png"> SysLib
			</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
             data-target="#navbar-links"
                aria-controls="navbar-links" aria-expanded="false" 
                aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span> 
			</button>

           <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
				<div class="navbar-nav">
                <a class="nav-item nav-link" id="home-menu" href="#"></span> Home</a>
                <a class="nav-item nav-link" id="cadastro-menu" href="http://localhost/danieltiamorim.github.io/syslib/index.html#">Cadastro</a>
                <a class="nav-item nav-link" id="pesquisa-menu" href="http://localhost/danieltiamorim.github.io/syslib/pesquisar.html#">Pesquisa</a>
                </div>
			</div> 
				
			</nav>
						
		</div>
    </header>



<main>

    <div class="container-fluid">
            <div id="cadastro">
                <div class="container"> 
                    <div class="row">
                        <div class="col-12">      
                        <h4 class="main-title"><u>Pesquisa</u></h4> 

        
                        <form method="POST" action="pesquisar.php">
                        Pesquisar:<input type="text" name="pesquisar" placeholder="PESQUISAR">
                        <input type="submit" value="ENVIAR">
                        </form>
                        </div>
                    </div>
                </div>
            </div>                      
            

		
           
			<div id="cadastro">
				<div class="row">
					<div class="col-12">      
						<h4 class="main-title"><u>Resultados</u></h4> 


                        





                            <?php
                            //syslib_cadastro.php


                            if ($_SERVER["REQUEST_METHOD"] == "POST") 
                                $host = "localhost";
                                $dbusername = "root";
                                $dbpassword = "";
                                $dbname = 'livraria' ;
                                
                                //Criar a conexao
                                $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                                
                                $pesquisar = $_POST['pesquisar'];
                                $result_livros = "SELECT * FROM livros WHERE titulo LIKE '%$pesquisar%' or
                                    autor LIKE '%$pesquisar%' or
                                editora LIKE '%$pesquisar%' or  
                                isbn LIKE '%$pesquisar%' ";
                                $resultado= mysqli_query($conn, $result_livros);
                            
                            while ($row = mysqli_fetch_array($resultado)) {
                                    echo "<table></p> <b>Nome do livro:</b> ".$row ['titulo']."<br>",
                                    "<b> Autor: </b>".$row ['autor']."<br>",
                                    "<b> Preço de Venda: </b>".$row ['preco_venda']."<br>",
                                    "<b> Editora: </b>".$row ['editora']."<br>",
                                    "<b> ISBN: </b>".$row ['isbn']."</table></p><br>";
                                    

                            
                                
                                    
                            }

                            ?>      
                    </div>
                </div>
            </div>

        </div>
                
        
<div id="copy-area">
		<div class="container">
		  
			  <div class="col-md-12">
				<p>Desenvolvido por <a href="https://www.n-s-tecnologia.webnode.com" target="_blank">N&S - Tecnologia</a> © 2020</p>
			  </div>
		  </div>
		</div>


</body>

</html>