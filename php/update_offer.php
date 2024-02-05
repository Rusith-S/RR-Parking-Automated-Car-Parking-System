<?php include '../config/database.php'; ?>

<?php
    // query to fetch data from offers table
    $offers = [];
    $sql_query_get = 'SELECT * FROM offers';
    $result = mysqli_query($connection, $sql_query_get);
    $offers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<?php
    // add offers php mysql code
    $title = $subtitle = $description = ''; 

    // get form data
    if (isset($_POST['submit'])){
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        $subtitle = filter_input(INPUT_POST, 'subtitle', FILTER_SANITIZE_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);

        // add to database
        $sql_query_insert = "INSERT INTO offers (title, subtitle, description) VALUES ('$title', '$subtitle', '$description')";

        $is_success = mysqli_query($connection, $sql_query_insert);

        if ($is_success) {
            // success
            header('Location: update_offer.php');
        } else {
            // error
            echo 'Error: ' . mysqli_error($connection);
        }
    }
?>

<?php
    // delete php / mysql code

    if (isset($_POST['delete'])) {
        $deleteId = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_SPECIAL_CHARS);
        $sql_query_delete = "DELETE from offers where id = '$deleteId'";
        $is_success = mysqli_query($connection, $sql_query_delete);

        if ($is_success) {
            // success
            header('Location: update_offer.php');
        } else {
            // error
            echo 'Error: ' . mysqli_error($connection);
        }
    }

?>

<?php
    if (isset($_POST['update'])) {
        $id = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_SPECIAL_CHARS);
        $input_title = filter_input(INPUT_POST, 'inputTitle', FILTER_SANITIZE_SPECIAL_CHARS);
        $input_subtitle = filter_input(INPUT_POST, 'inputSubtitle', FILTER_SANITIZE_SPECIAL_CHARS);
        $input_description = filter_input(INPUT_POST, 'inputDescription', FILTER_SANITIZE_SPECIAL_CHARS);

        $sql_query_update = "UPDATE offers SET title = '$input_title', subtitle='$input_subtitle', description='$input_description' WHERE id='$id'";
        $is_success = mysqli_query($connection, $sql_query_update);

        if ($is_success) {
            // success
            header('Location: update_offer.php');
        } else {
            // error
            echo 'Error: ' . mysqli_error($connection);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/adminoffers.css">

    <title>RR Parking - Admin Offers</title>
</head>

<body>

    <div class="page-container">
        <div class="page-sidebar">

        </div>
    </div>
    <div class="page-header">
        <h3 class="h3">Admin Panel</h3>

        <div class="offer-card">
            <div class="form-container">
                <h4 class="h4">Add new Offer</h4>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="fl-1 form-bar">
                        <label for="name" class="f-label">Offer Title</label><input type="text" class="f-box"
                            name="title">
                    </div>
                    <div class="fl-1 form-bar">
                        <label for="offer" class="f-label">Offer Subtitle</label><input type="text" class="f-box"
                            name="subtitle">
                    </div>
                    <div class="f1-1 form-bar">
                        <label for="description" class="f-label">Offer Description</label><textarea name="description"
                            rows="5" columns="100"></textarea>
                    </div>
                    <div class="fl-btn">
                        <input class="btn1" value="Create new Offer" type="submit" name="submit">
                    </div>
                </form>
            </div>
            <div class="form-2-container">
                <h4 class="h4">Manage Offers</h4>

                <?php if(empty($offers)): ?>
                <p class="no-offer">
                    There are no offers available.
                </p>
                <?php else: ?>
                <table class="table-container">
                    <thead>
                        <tr>
                            <th class="th th-1">Offer Title</th>
                            <th class="th th-1">Offer Subtitle</th>
                            <th class="th th-1">Offer Description</th>
                            <th class="th"></th>
                            <th class="th"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($offers as $aOffer): ?>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                            <tr>
                                <td class="td" style="display: none;"><input type="text" value="<?php echo $aOffer['id'] ?>" name="inputId"></td>
                                <td class="td">
                                    <input type="text" value="<?php echo $aOffer['title'] ?>" name="inputTitle">
                                </td>
                                <td class="td">
                                    <input type="text" value="<?php echo $aOffer['subtitle'] ?>" name="inputSubtitle">
                                </td>
                                <td class="td">
                                    <textarea name="inputDescription" rows="5" columns="50">
                                        <?php echo $aOffer['description'] ?>
                                    </textarea>                            
                                </td>
                                <td class="td-1"><input class="table-button" type="submit" value="Update" name="update"></td>
                                <td class="td-1"><input class="table-button" type="submit" value="Delete" name="delete"></td>
                            </tr>
                        </form>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
            </div>
        </div>

    </div>



</body>

</html>