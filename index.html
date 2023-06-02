<!DOCTYPE html>
<html lang="en">
<html>

    <link rel="stylesheet" href="StyleRental.css">
    
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <div class="topnavbar">
            <img id="logoImage" src="Logo_Creation.png">
            <a class="active" href="index.php">Home</a>
            <a href="shoppingcart.php">Shopping Cart</a>
            <form action="index.php">
                <input id="searchbar" type="search" name="q" placeholder="Search">
            </form>
        
        </div>

    </head>

    <body>
    
    <h2>Cars Table</h2>



    <?php
        //error_reporting(0);
        $cars_json = file_get_contents('cars.json');
        $cars_data = json_decode($cars_json, true);

        $searchRequest = $_GET['q'];
        $count = 0;
        
        foreach ($cars_data['cars'] as $car) {
            if ($count % 4 == 0) {
                
            }


                echo '<div class ="dataEntry">';
                echo '<img data-modal-target2="#modal" value="'. $car['model'] .'" class="productImage" src =rentalCars/' . $car['model'] . '.jpg>';
                echo '<div class = "dataInnerBox">';
                echo '<p id="tableHeader">' . $car['model'] . '</p>';
                echo '<p id="tableText">' . $car['category'] . '</p>';
                echo '<p id="tableText"> Availability: ' . $car['availability'] . '</p>';
                echo '<p id="tableText">' . $car['brand'] . '</p>';
                echo '<p id="tableText">' . $car['modelYear'] . '</p> <br>';
                echo '</div>';
                echo '<p id="tableSubHeading"> Price Per Day: </p>';
                echo '<p id="tablePrice">$' . $car['price/day'] . '/day</p>'; ?>
                <button type="submit" data-modal-target3="#modal3" class= "button" id="addCar" value="<?php echo $car['model']; ?>:<?php echo $car['availability'] ?>" onclick='MyCookie(this.value)'>Add Item</button>

             <?php
            // echo '<p id="tableText">' . $car['mileage'] . '</p>';
            // echo '<p id="tableText">' . $car['fuelType'] . '</p>';
            // echo '<p id="tableText">' . $car['seats'] . '</p>';
            // echo '<a id="tableText">' . $car['description'] . '</a>';
            echo "</div>";

            $count++;

            if ($count % 4 == 0) {
                
            }
        }

        if ($count % 4 != 0) {
            // add empty cells to last row if necessary
            $empty_cells = 4 - ($count % 4);
            for ($i = 0; $i < $empty_cells; $i++) {
                echo '<td></td>';
            }
            echo '</tr>';
        }
    ?>



    <div class="modal" id="modal">
        <div class="modal-header">
            <div class="title"> Checkout </div>
            <p id="lightText">Fill in the below information to finish your order</p>
            <button data-close-button2 class="close-button">&times;</button>
        </div>
        <form method="post" action="">
        <div class ="modal-seperatebody">
            <div class ="modal-body">
                <img id="showcaseImage" src="">
                <p id ="car_Modal"></p>
                
            </div>

            <div class="modal-shoppingcart">
            <p style ="font-weight: bold;">Order List:</p>
            <?php
            // for($i= 0; $i<sizeof($arr, 0); $i++) {

            //     if ($arr['itemID'] != htmlspecialchars($_COOKIE[$i])) {
            //             echo htmlspecialchars($_COOKIE[$i])?><!--x --><?php// echo ($arr[$i]['itemName']);?><br> <?php
            //     }
            // } ?>
            <br>
            <p style ="font-weight: bold;">Total Price: $<?php// echo ($totalPrice);?></p> 

            <input type="submit" id="formSubmitButton" class="button" name="submitForm" value="Purchase">
            </div>
        </div>
        </form>

    </div>
    

<!-- -------------------------Modal 2 ---------------------------- -->

    <div class="modal3" id="modal3">
        <div class="modal-header">
            <div class="title"> Car Is Unavailable </div>
            <button data-close-button3 class="close-button">&times;</button>
        </div>
    </div>
    <div id="overlay"></div>

    <script type="text/javascript" src="script.js"></script>
    </body>
</html>