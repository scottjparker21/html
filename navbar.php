
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      			</button>
      			<!-- <a class="navbar-brand" href="#"><h5> Milwaukee Glassware </h5><img src="MKE Glass" alt="" id="navlogo"></a> -->
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
      			<ul class="nav navbar-nav">
       			<li><a href="index.php">Home</a></li>
        		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
        				 <ul class="dropdown-menu">
        					
        					<?php 
						        $sql = "SELECT id,name FROM category ORDER BY name";
						        $q = $pdo->prepare($sql);
						        $q->execute();
						        $categories = $q->fetchAll();
						        // print_r($categories);
	        					foreach ($categories as $row){ 
        					?>
        						<li id="<?php echo $row['id'];?>">
        							<a href="category.php/?catid=<?php echo $row['id'];?>">
        								<?php echo $row['name']; }?> 
        							</a>
        						</li>
        					
        				</ul> 

        		<li><a href="cart.php">Cart</a></li>
        		<li><a href="search.php">Search</a></li>
            	<li><a href=""></a></li>
      			</ul>
    			<ul class="nav navbar-nav navbar-right">
        		<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        		<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      			</ul>
    		</div>
  		</div>
	</nav>


