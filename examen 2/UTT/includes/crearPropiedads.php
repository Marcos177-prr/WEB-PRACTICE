<?php
include "../header.php";
require "../config/connectdb.php";

$db=connectdb();

if (!$response) {
    die("Query Failed: " . mysqli_error($db));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"] ?? null;
    $tittle = $_POST["tittle"] ?? null;
    $price = $_POST["price"] ?? null;
    $image = $_POST["image"] ?? null;
    $description = $_POST["description"] ?? null;
    $rooms = $_POST["rooms"] ?? null;
    $wc = $_POST["wc"] ?? null;
    $garage = $_POST["garage"] ?? null;
    $timestap = $_POST["timestap"] ?? null;
    $seller = $_POST["seller"] ?? null;

   // Verifica que el ID del vendedor existe en la base de datos antes de insertar
   $checkSeller = "SELECT id FROM seller WHERE id = '$seller'";
   $result = mysqli_query($db, $checkSeller);

   if (mysqli_num_rows($result) > 0) {
       // Si el vendedor existe, procede con la inserción
       $query = "INSERT INTO propierties (title, price, image, description, rooms, wc, garage, timestap, id_seller) 
                 VALUES ('$tittle', '$price', '$image', '$description', '$rooms', '$wc', '$garage', '$timestap', '$seller')";
       $response = mysqli_query($db, $query);
       
       if ($response) {
           echo "Property Created";
       } else {
           echo "Error: " . mysqli_error($db);
       }
   } else {
       echo "Seller does not exist. Please enter a valid seller ID.";
   }
}else {
   echo "Please fill in the form to create a property.";
}
?>

<section>
    <h2>Propierties form</h2>
    <div>
        <form action="crearPropiedads.php" method="post">
    <fieldset>
        <legend>FIll ALL form to create a new propierty</legend>
        <div>
            <label for="id">ID</label>
            <input type="number" id=" id" name="id">
        </div>
        <div>
            <label for="title">TItle</label>
            <input type="text" id = "title" name = "title" placeholder="title of propierty" >
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" id="price" name="price" placeholder="$11111111" >
        </div>
        <div>
            <label for="image">Image</label>
            <input type="text" src="" alt="" id="image" name="image">
        </div>
        <div>
            <label for="description">description</label>
            <textarea name="description" id="description" placeholder= "propierty description"></textarea>

        </div>

        <div>
            <label for="rooms">Rooms</label>
            <input type="number" id="rooms" name="rooms">
        </div>
        <div>
            <label for="wc">Number of wf</label>
            <input type="number" id="garage" name="garage">
        </div>

        <div>
            <label for="timestamp">TimeStamp</label>
            <input type="date" id="timeStamp" name="timeStamp" >
        </div>
        <div>
            <label for="garage">Number of garage</label>
            <input type="number" id="garage" name="garage">
        </div>
        <div>
            <label for="seller">Seller ID</label>
            <input type="number" id="seller" name="seller">
            <?php foreach ($sellers as $seller): ?>
                            <option value="<?php echo $seller['id']; ?>"><?php echo $seller['name']; ?></option>    
             <?php endforeach; ?>
        </div>

        <div>
            <button type = "submit">Create a new propierty</button>
        </div>
    </fieldset>    
    </form>

    </div>
</section>
<?php
    include "../includes/footer.php";
?>
