<?php   
    include "../header.php";
    require "../config/conection.php";
    $db = connectdb();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];


    $query = "INSERT INTO seller (name,email,phone ) values ('$name','$email','$phone');";
    $responde = mysqli_query($db, $query);

    if ($responde) {
        echo "seller creado";
    } else{
            echo "seller no creado";
        }
    }
?>


<section>
    <h2>Sellesers form</h2>
    <div>
        <form action="crearSeller.php" >
        <fieldset>
            <legend>fill al fields to create a new seller</legend>
            <div>
                <label for="id">ID</label>
                <input type="number" id = " id" name ="id" >
            </div>
            <div>
                <label for="">name</label>
                <input type="text" id = " name"  name="name" placeholder ="your name"  >

            </div>
            <div>
                <label for="email">email</label>
                <input type="text" id= "email" name = "email" placeholder = " your@name.com" >
            </div>
            <div>
                <label for=""></label>
                <input type="text" id = "phone" name = "phone"  placeholder = " 555 5 5555 55" >
            </div>
            <div>
                <button type ="submit" >create a new seller</button>
            </div>
        </fieldset>
        </form>
    </div>
</section>

