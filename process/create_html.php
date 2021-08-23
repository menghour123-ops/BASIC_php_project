<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
        <div class="d-flex justify-content-end pb-2">
            <button class="btn btn-info" onclick="window.history.back();">&#8592; ត្រឡប់</button>
        </div>
        <form action="create_model.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="ទីកន្លែង...." name="places">
            </div>
            <div class="form-group">
                <input type="date" class="form-control"  name="date">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="ពិពណ៌នា..." name="description">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">បង្កើតថ្មី</button>
            </div>
        </form>
    </div>