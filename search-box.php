
            <?php
                
                try{
                    include 'database-connect.php';
            
                    $inputValue = $_GET['inputValue'];
                
                    $getLiveSearchItems = $conn->prepare("SELECT item_name ,item_image FROM items WHERE item_name LIKE '%{$inputValue}%'");
                    $getLiveSearcgItems->execute();
                    $liveSearchFoundItems = $getLiveSearchItems->fetchAll(PDO::FETCH_ASSOC);
                    
                    $liveSearchResults = "";
                    $len = strLen($inputValue);
                    
                    if($inputValue !== ""){
                        foreach($liveSearchItems as $key => $value){
                            if(stristr($inputValue, substr($value['item_name'],0 , $len))){
                                $liveSearchResults .= '<div class="container-fluid clearfix">
                                                            <a href="#" class="">
                                                                <span class="col-4">
                                                                <img src="'.$value['item_image'].'" class="float-left live-search-item">
                                                                </span>
                                                                <p class="w-100">'.$value['item_name'].'</p>
                                                            </a>
                                                        </div>'
                            }
                        }
                    }
                    echo $liveSearchResults === "" ? "no suggestions" : $liveSearchResults;
                    
                
                }catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
                
            ?>
<!--
            <div class="container-fluid clearfix">
                <a href="#" class="">
                    <span class="col-4">
                    <img src="iphone/iPhone6s.png" class="float-left live-search-item" style="width: 70px;border-left-style: solid;border-color: red; border-width:5px;">
                    </span>
                <p class="w-100">iphone 6s</p>
            </a>
            </div>
            <div class="container-fluid clearfix">
                <a href="#" class="">
                    <span class="col-4">
                    <img src="iphone/iPhone6s.png" class="float-left live-search-item" style="width: 70px;border-left-style: solid;border-color: red; border-width:5px;">
                    </span>
                <p class="w-100">iphone 6s</p>
            </a>
            </div>
            <div class="container-fluid clearfix">
                <a href="#" class="2">
                    <span class="col-4">
                    <img src="iphone/iPhone6s.png" class="float-left live-search-item" style="width: 70px;border-left-style: solid;border-color: red; border-width:5px;">
                    </span>
                    <p class="w-100">iphone 6s</p>
                </a>
            </div>
-->
        