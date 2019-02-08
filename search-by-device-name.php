<?php
        
    try {
        require 'database-connect.php';

        //input form search bar       
        $input = strtolower($_POST['search-input']); 
        $inputLen=strlen($input);

        //bring selected items only from database
        $getSelectedItemsByName = $conn->prepare("SELECT * FROM items WHERE item_name LIKE '{$input}%'");
        $getSelectedItemsByName->execute();
        $selectedItems = $getSelectedItemsByName->fetchAll(PDO::FETCH_ASSOC);
        //bring all items from database
        $getAllItems = $conn->prepare("SELECT * FROM items");
        $getAllItems->execute();
        $allItems = $getAllItems->fetchAll(PDO::FETCH_ASSOC);

//        $countItems = $conn->prepare("SELECT COUNT(item_id) AS number-of-items FROM items");
//        $countItems->execute();
//        $numberOfItems = $countItems->fetch(PDO::FETCH_ASSOC);

        //print all items
        if ($input == "") {
                echo '<div id="results" class="card-columns col-md-10 col-sm-12">
                        <div class="col-sm-12">';
            foreach($allItems as $key => $value){

                echo    '<div class="card">
                            <a href="#"><img class="card-img-top img-responsive mx-auto d-block" src="'.$value['item_image'].'"></a>
                            <div class="card-body">
                            <h4 class="card-title text-center">'.$value['item_name'].'</h4>
                            <a href="#" class="card-link"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span></a>
                            <p class="card-text">
                            <b>- ram: </b>'.$value['item_ram'].'<br>
                            <b>- resolution: </b>'.$value['item_resolution'].'<br>
                            <b>- battarey: </b>'.$value['item_battery'].'<br>
                            <b>- storage: </b>'.$value['item_storage'].'</p>
                            </div>
                         </div>';                        
                }
            $getAllItems->execute();
                echo '</div>
                </div>';
        //print only items with matching name
        }else if($selectedItems == true){
                echo '<div id="results" class="card-columns col-md-10 col-sm-12">
                        <div class="col-sm-12">';
            foreach($selectedItems as $key => $value){
                echo    '<div class="card">
                            <a href="#"><img class="card-img-top img-responsive mx-auto d-block" src="'.$value['item_image'].'"></a>
                            <div class="card-body">
                            <h4 class="card-title text-center">'.$value['item_name'].'</h4>
                            <a href="#" class="card-link"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span></a>
                            <p class="card-text">
                            <b>- ram: </b>'.$value['item_ram'].'<br>
                            <b>- resolution: </b>'.$value['item_resolution'].'<br>
                            <b>- battarey: </b>'.$value['item_battery'].'<br>
                            <b>- storage: </b>'.$value['item_storage'].'</p>
                            </div>
                        </div>';                        
                    }
                $getSelectedItemsByName->execute();
                echo '</div>
                </div>';
        }else if ($selectedItems == false){
                echo '<div id="results" class="col-md-10 col-sm-12">
                        <div class="col-sm-12">';
                echo '<h3>We\'re sorry, we found no results</h3>
                      <p>Suggestions :</p>
                      <ul class="group-list">
                          <li class="list-item">Please check your spelling and try again.</li>
                          <li class="list-item">To find devices based on required features and specs - try our <a href="phone-finder.php">Phone Finder</a>.</li>
                      </ul>';
                echo '</div>
                </div>';
        }
    }
    catch(PDOException $e){
                echo "Connection failed: " . $e->getMessage();
    }
?>