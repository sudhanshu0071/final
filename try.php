<?php
        $server = "localhost";
        $username="root";
        $password ="";

        $con = mysqli_connect($server, $username, $password);

        if(!$con){
            die("areee".mysqli_connect_erroe());

        }
        
        //echo "ho gaya"; 


        // $name = $_POST["name"];
        // $email = $_POST['email'];
        // $phone = $_POST['number'];
        //$_POST['number'];
        $number = $_POST['number'];
        $query = "SELECT `phone` FROM `tdb`.`users` WHERE `phone` = '$number'";
        $fire = mysqli_query($con,$query) or die("can not fire querry");
        if(mysqli_num_rows($fire)>0){
            header("Location: index.html");
        }
        ?>

            <!doctype html>
            <html lang="en">
            
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
                    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link href="signin.css" rel="stylesheet">
                <title>Hello, world!</title>
</head>

<body class="text-center">

            
            <form class="form-signin" action="action.php" method="post">
            
            <div class=" container-fluid" id="userdetail">
                <h1 class=" h3 mb-3 font-weight-normal text-nowrap" style="width: 8rem;">Add Profile</h1>
                <input type = "tel" id="phone" class="form-control my-4" name="number" /></p>
                <label for="inputNumber" class="sr-only">Name</label>
                <input type="text" class="form-control my-4" placeholder="Name" name="name" /></p>
                <label for="email" class="sr-only">email</label>
                <input type="email" class="form-control my-4" placeholder="email" name="email" /></p>
                <input id="submit" value="Submit" type="submit" />
                <p class=" mt-5 mb-3 text-muted">Thekedaar &copy; 2023-2028</p>
            </div>
        </form>
        

        <script> var number = localStorage.getItem('number');
            document.getElementById("phone").value= number;
            document.getElementById('submit').onclick = localStorage.removeItem(number);
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>