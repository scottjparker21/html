
	<?php
			require 'database.php';
			$pdo = Database::connect();
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sql = "SELECT id,name FROM category ORDER BY name";
	        $q = $pdo->prepare($sql);
	        $q->execute();
	        $categories = $q->fetchAll();
	        Database::disconnect(); 
	 ?>

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
            					
            					<?php foreach ($categories as $row){?><li id="<?php echo $row['id'];?>"><a href="category.php?catid=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></li><?php }?>
            					
            			</ul> 

            		<li><a href="cart.php">Cart</a></li>
            		<li><a href="search.php">Search</a></li>
                	<li><a href=""></a></li>
                
      			</ul>
    			<ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search" id="search">
                    </div>
                </form>
                  <?php if( isset( $_SESSION['userid'] ) ){ ?>
                      <li><span class="glyphicon glyphicon-shopping-cart"><a class="btn" href="">Cart</a></span></li>
                  <?php } ?>
                  <?php if( isset( $_SESSION['userid'] ) ){ ?>
                        <li><i class="icon-user"></i><a class="btn" href="logout.php">Logout</a></li>
                 <?php } 
                    else{ ?>
                    <li><i class="icon-user"></i><a class="btn" href="login.php">Login</a></li>
                 <?php } ?>
      			</ul>
    		</div>
  		</div>
	</nav>