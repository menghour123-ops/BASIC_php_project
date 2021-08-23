<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
        <?php
            require_once('../database/database.php');
            $id = $_GET['id'];
            $data = getOnedata($id);
            foreach ($data as $row):
        ?>
        <form action="update_model.php" method="post">
            <input type="hidden"  name="placeID" value="<?=$row['travelID']?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="បញ្ចូលទីកន្លែង......" name="places" value="<?=$row['places']?>">
            </div>
            <div class="form-group">
                <input type="date" class="form-control"  name="date" value="<?=$row['date']?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="ពិពណ៌នា......" name="description" value="<?=$row['description']?>">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="image" value="<?=$row['image'] ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">បង្កើតថ្មី</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
