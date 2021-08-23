<?php
    require_once('partial/header.php');
?>
    <div class="container p-4">
        <div class="d-flex justify-content-end">
            <button class="btn btn-danger" onclick="window.history.back();">&#8592; ត្រឡប់</button>
        </div>
    <?php
        require_once('database/database.php');
        $id=$_GET['id'];
        $list_places =getOnedata($id);
        foreach ($list_places as $list) :
        
    ?>
    <div class="card m-2 shadow-lg  bg-white rounded">
        <div class="card-body">
            <div class="d-flex ">
                <div class="card-image mr-3 border shadow-sm  bg-pink rounded">
                    <img class="img-fluid" width="200" height="200" src="assets/images/<?= $list['image'] ?>" alt="image">
                </div>
                <div class="info">
                    <strong class="display-title"><?= $list['places'] ?></strong>
                    <p> <?= $list['date'] ?></p>
                    <p><?= $list['description'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
