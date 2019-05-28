<!DOCTYPE html>
<html lang="pt-br">
  	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta name="description" content="">
	 	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    	<meta name="generator" content="Jekyll v3.8.5">
    	<title>Cover Template · Bootstrap</title>

    	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">

    	<!-- Bootstrap core CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    	<style>
	      .bd-placeholder-img {
	        font-size: 1.125rem;
	        text-anchor: middle;
	        -webkit-user-select: none;
	        -moz-user-select: none;
	        -ms-user-select: none;
	        user-select: none;
      	}

      	@media (min-width: 768px) {
		        .bd-placeholder-img-lg {
		          font-size: 3.5rem;
	        }
      	}
    	</style>
    	<!-- Custom styles for this template -->
    	<link href="cover.css" rel="stylesheet">
    	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
	  		<header class="masthead mb-auto">
		    	<div class="inner">
			      	<h3 class="masthead-brand">Cover</h3>
					<nav class="nav nav-masthead justify-content-center">
		        	<a class="nav-link" href="index.html">Home</a>
		        	<a class="nav-link active" href="registros.php">Registros</a>
		      		</nav>
				</div>
	    	</header>
  		</div>
	</head>
  	<body class="text-center">
   
  
	  	<div class="container">
	    <div class=col-lg-12>
	    <div class="row">
            <?php
				echo "<table style='border: solid 1px black;'>";
				echo "<tr><th>cpf</th><th>nome</th><th>idade</th><th>estado_civil</th><th>rua</th><th>numero</th><th>bairro</th><th>cidade</th><th>uf</th><th>genero</th></tr>";

				class TableRows extends RecursiveIteratorIterator { 
				    function __construct($it) { 
				        parent::__construct($it, self::LEAVES_ONLY); 
				    }

				    function current() {
				        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
				    }

				    function beginChildren() { 
				        echo "<tr>"; 
				    } 

				    function endChildren() { 
				        echo "</tr>" . "\n";
				    } 
				} 

				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "prova";

				try {
				    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				    $stmt = $conn->prepare("SELECT * FROM tbl_pessoas"); 
				    $stmt->execute();

				    // set the resulting array to associative
				    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

				    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
				        echo $v;
				    }
				}
				catch(PDOException $e) {
				    echo "Error: " . $e->getMessage();
				}
				$conn = null;
				echo "</table>";
				?> 

				</div>
			</div>
		</div>


   


	</body>
  
	<footer class="mastfoot mt-auto">
	    <div class="inner">
	      <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
	    </div>
	</footer>
		

</html>
