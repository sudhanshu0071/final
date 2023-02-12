<?php
        $server = "localhost";
        $username="root";
        $password ="";

        $con = mysqli_connect($server, $username, $password);

        if(!$con){
            die("areee".mysqli_connect_erroe());

        }
        //echo "ho gaya";


        $name = $_POST["name"];
        $email = $_POST['email'];
        $phone = $_POST['number'];
        //$_POST['number'];

        $sql = "INSERT INTO `tdb`.`users`( `name`, `phone`, `email`) VALUES ('$name', '$phone', '$email')";

        //"INSERT INTO `tdb`.`order_t` ( `name`, `email`, `phone`, `cartitem0`, `cartitem1`, `cartitem2`, `cartitem3`, `cartitem4`, `cartitem5`, `cartitem6`, `cartitem7`, `cartitem8`, `cartitem9`, `cartitem10`, `cartitem11`, `cartitem12`) 
        // VALUES ('sudhanshu', 'email@email.com', '9999999999', 'gupta', 'bkbk', 'j bkjnjnln', 'oppokoj', 'knm,nij', 'bkjkn', ' jnlnln;', ' mknlkn;', 'pu89pi', 'yugigo', 'kmomop6', 'hgbhg', 'nllkm')";

        if($con -> query($sql) == true){
            header("Location: index.html");
        }
        else{
            echo "ERROR: $sql";
        }

        $con->close();
        

        ?>