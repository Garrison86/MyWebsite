         
         <?php 
         include 'travel-data.php'; 
         ?>
         <div class="panel panel-default">
           <div class="panel-heading">Search</div>
           <div class="panel-body">
             <form>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search ...">
                  <span class="input-group-btn">
                    <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span>       
                    </button>
                  </span>
               </div>  
             </form>
           </div>
         </div>  <!-- end search panel -->       
       
         <div class="panel panel-info">
           <div class="panel-heading">Continents</div>
           <ul class="list-group"> 
              <?php 
              sort($continents);
              foreach ($continents as $continent){
               echo '<li class="list-group-item"><a href="#">'.$continent.'</a></li>';
              }
              ?>              
            </ul>
          </div>  <!-- end continents panel -->  
          <div class="panel panel-info">
            <div class="panel-heading">Countries</div>
            <ul class="list-group">               
              <?php 
              sort($countries);
              echo '<li class="list-group-item"><a href="Canada.php">Canada</a></li>';
              foreach ($countries as $key){
                if($key == 'Canada')
                 echo null;
                else
                echo '<li class="list-group-item"><a href="#">'.$key.'</a></li>';
              }
            ?>
           </ul>
          </div>  <!-- end countries panel -->