<html>
    <body>

    <?php 
        function booking() {
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"]
            $email = $_POST["email"];
            $address = $_POST["address"];

            $data = [
                'user_email' => $email,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'address' => $address
                'rent_date' => ,
                'bond_amount' => ,
            ]


            $sql - "INSERT INTO renting_history (user_email, first_name, last_name, address, rent_date, bond_amount) 
            VALUES (:user_email, :first_name, :last_name, :address, :rent_date, :bond_amount)";

            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);

        }
        
        ?>
    
    </body>
</html>