<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Cupcake Funraiser</h1>
    <form id="cupcakes" action="process.php" method="POST">

        <fieldset class="form-group">
            <legend class="col-md-2 pt-0">Your name:</legend>
            <div class="form-group">
                <input type="text" id="name" name="name" class="form-control"
                       placeholder="Please input your name">
            </div>
        </fieldset>

        <fieldset class="form-group">
            <legend class="col-md-2 pt-0">Cupcake flavors:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="The Grasshopper"
                               name="flavor[]">The Grasshopper
                    </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Whiskey Maple Bacon"
                               name="flavor[]">Whiskey Maple Bacon
                    </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Carrot Walnut"
                               name="flavor[]">Carrot Walnut
                    </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Salted Caramel Cupcake"
                               name="flavor[]">Salted Caramel Cupcake
                    </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Red Velvet"
                               name="flavor[]">Red Velvet
                    </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Lemon Drop"
                               name="flavor[]">Lemon Drop
                    </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Tiramisu"
                               name="flavor[]">Tiramisu
                    </label>
                </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">Order</button>
    </form>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>