
<header>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
     
       <i class="fa fa-user fa-lg "></i></a>

      <?php
      $currentUrl= $_SERVER['PHP_SELF'];
      ?>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto">
        <?php 
            
            $activeIndex = (stripos($currentUrl,'index') && empty($_GET['action']));   // if(stripos($_SERVER['PHP_SELF'],'index') && empty($_GET['action'])){ //SERVER è variabile globale se la pagina che stiamo visitando lo vediamo con phpself è uguale a index allora sara active
             $class = $activeIndex? 'active': '';//se lindice è attivo sara active oppure sara vuota
             
             //   echo 'active';
               // }
            ?>  
        
        
        
        <li class="nav-item <?=$class?>" >

            <a class="nav-link" href="index.php"> 
            <i class="fas fa-shopping-bag"></i> case in vendita
            <?php
            
            if($activeIndex){  ?>
            <span class="sr-only">(current)</span>
            <?php } ?>
 
        
        
        </a> </li>
        <li  class="nav-item <?=$class?>">
            <a class="nav-link" href="logout.php"> 
            <i class="fas fa-sign-out-alt"></i>
            logout</a>
        </ul></li>

        <?php
        $activeIndex = (!empty($_GET['action']) && $_GET['action']==='insert');
        $class = $activeIndex? 'active': '';
        ?>
          
          
        </ul>
        
        
        
        <div>
        <form class = "d-flex" method ="get" action="<?=$pageUrl?>" id = "cercaform">
        
        <input class="form-control "  type="text" name = "cerca" id="cerca" value="" placeholder="Search" aria-label="Search">
        
        <button class="btn btn-light btn-sm" type="submit"> Search  <i class="fas fa-search"></i></button>
        </div>
      </form>

      </div>
    </div>
  </nav>
</header>