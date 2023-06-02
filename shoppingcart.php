<!DOCTYPE html>
<html lang="en">
<?php  error_reporting(0); ?>
<html>
    <link rel="stylesheet" href="StyleRental.css">
    
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">



        <div class="topnavbar">
            <img id="logoImage" src="Logo_Creation.png">
            <a href="index.php">Home</a>
            <a class="active" href="shoppingcart.php">Shopping Cart</a>
            <form action="index.php">
                <input id="searchbar" type="search" name="q" placeholder="Search">
            </form>
        
        </div>
        <p id="Heading">Car Reservation</p>
    </head>
    <body>
        <?php
        $dbHOST = 'localhost';
        $dbNAME = 'uts';
        $dbUSER = 'root';
        $dbPASS = '';
        ?>
    


        <table class='table-reletive'>
            <th class="tableheaderfont" width="220" align="center"><strong></strong></th>
            <th id="tableListHeading" class="tableheaderfont" width="180" align="center"><strong>Name</strong></th>
            <th id="tableListHeading" class="tableheaderfont" width="60" background align="center"><strong>Price Per Day</strong></th>
            <th id="tableListHeading" class="tableheaderfont" width="60" background align="center"><strong>Rental Days</strong></th>
            <th id="tableListHeading" class="tableheaderfont" width="250"> </th>

            </tr>
            <?php
                $pdo = new PDO('mysql:host=' . $dbHOST . ';dbname=' . $dbNAME, $dbUSER, $dbPASS); // create connection to SQL Server
                $stmt = $pdo->prepare("SELECT record_ID , user_email , first_name, last_name, address, rent_date , bond_amount FROM renting_history");
                $stmt->execute();

                $arrRentHistory = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                $cars_json = file_get_contents('cars.json');
                $cars_data = json_decode($cars_json, true);


                $cookieArray;

                if(isset($_COOKIE)) {
                    foreach($_COOKIE as  $key => $val) // Turns all the Cookies into an array [Key][Value]
                        {
                        $cookieArray = array($key => $val);
                        }
                }

                // Check for form names, then run the function associated (for deleting data)

                if (array_key_exists('buttonCookie', $_POST)){
                    cookieDelete();
                }
                // If so run these Functions below
               function cookieDelete() {
                    foreach($_COOKIE as $key => $val)
                        {
                            foreach($_POST as $name => $postVal) {

                                if ($key == $postVal) {

                                    setcookie($key, $val, time()-3600);
                                }
                            }
                            
                            
                        }
                        echo "<meta http-equiv='refresh' content='0'>";
                }



                $totalPrice = 0;
                
                foreach($cars_data['cars'] as $car) {
                            


                        
                        if (htmlspecialchars($_COOKIE[$car['model']])) {
                            
                            
                            $totalPrice = $totalPrice + ( $car['price/day']);
                        ?>

                        <td><?php print '<img id="carimg" class="productimagecart" src=rentalCars/'.$car['model'].'.jpg>';?></td> <!-- If so prints out this ID's row -->
                        <td class='even-odds productData'><?php echo ($car['model'])?> </td>
                        <td class='even-odds productData'><?php echo ($car['price/day'])?> </td>
                        <td class='even-odds productData'><input type="number"  id="<?php echo($car['model']) ?>rentDays" name="<?php echo($car['model']) ?>rentDays" value="1"> </td>

                        <td class='even-odds productData'><form><input id="removeButton" class="button" type="submit" name='buttonCookie[<?php echo ($car['model']) ?>]' value="Remove Item" ></form></td>
                    </tr>

                        
                    <?php
                       
                    }
                        
                        ?>
                    
                    

                    <?php
                    
                }

            ?>
        </table>

        <div id ="clearButtonDiv">
            <button data-modal-target="#modal" onclick="add()" class="button">Checkout</button>
        </div>

        <!-- ----------------------EXTRA SCRIPT STUFF (For Checkout Total and data updates)----------------------------- -->
        <script>

        var car_array = <?php echo json_encode($cars_data); ?>;

        car_array.forEach(throughArray, index);
        car_array.forEach(onInputArray, index);

        function calcTotal() {
            
        }
         

        function add() {
            
            
        }

        function throughArray(car, index) {
            var rentDays[];
            var text1 ="#";
            var text2 = "RentDays";
            var concat = text1.concat(car,"RentDays");

            rentDays[index] = document.querySelector(concat);

            //var rentDays = document.getElementById(`${car}rentDays`).value;

        }

        function onInputArray(car, index) {
            rentDays[index].oninput = car_array.forEach(calcTotal);
        }

        function validate() {

        }

        
        

        </script>



        <div class="modal" id="modal">
            <div class="modal-header">
                <div class="title"> Checkout </div>
                <p id="lightText">Fill in the below information to finish your order</p>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <form method="post" action="booking.php" onsubmit="return validate()">
            <div class ="modal-seperatebody">
                <div class ="modal-body">
                    <p id ="car_Modal"></p>
                    
                    <p>Fist Name</p>
                    <input type="text" id="first_name" class="inputData" name="first_name">
                    <p>Last Name</p>
                    <input type="text" id="last_name" class="inputData" name="last_name">
                    <p>Email</p>
                    <input type="text" id="email" class="inputData" name="email">
                    <p>Address</p>
                    <input type="text" id="address" class="inputData" name="address">

                </div>


                <div class="modal-shoppingcart">
                <p style ="font-weight: bold;">Order List:</p>
                <div class="modal-rentaldaysbox">
                    <p> Enter Rental Days Below:</p>
                    <?php

                    foreach($cars_data['cars'] as $car) {
                                

                            
                        if (htmlspecialchars($_COOKIE[$car['model']])) {
                            ?>
                            <p class="checkoutCars" style="text-decoration: underline;"><?php echo $car['model']; ?></p><p class="checkoutCars">&nbsp </p>
                            <input type="number"  id="<?php echo($car['model']) ?>rentDays" class="inputDays" name="<?php echo($car['model']) ?>rentDays" value="1"> <br><br>

                            <?php
                            //$cookieArray = array($key => $val);

                        }

                    } ?>
                    
                    <br>
                </div>
                <p style ="font-weight: bold;">Total Price: $<?php echo $totalPrice ?></p> 

                <input type="submit" id="formSubmitButton" class="checkoutButton" name="submitForm" value="Purchase">
                </div>
            </div>
            </form>
        </div>
        
        <div id="overlay"></div>
        <script type="text/javascript" src='script.js'></script>
    </body>


<html>