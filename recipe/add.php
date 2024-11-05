<?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name =$_POST['name'];
        $description =$_POST['description'];

        if (!empty($name)&& !empty ($description)){
            $sql= "INSERT INTO recipes (name, description) VALUES ('$name', '$description')";

            if ($conn->query($sql)== TRUE){
                echo "New recipe added successfully!";
            }
            else(
                echo "Failed to add new recipe.";
            )  
        }
        else{
            echo "Please fill in all fields.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add A Recipe</title>
</head>
<body>
    <h2> Add a new Recipe</h2>

    <form method = "post" action="add.php">
        Name: <input type="text" name="name"><br><br>
        Description: <input type="text" name="description"><br><br>
        <input type="submit" value ="Add Recipe">
    </form>

    <a href="index.php">Back to RecipeList</a>
    
</body>
</html>