<?php require_once('partial/header.php');
require_once('partial/navbar.php'); ?>
    <div class="position">
        <div class="head">
            <img src="https://dlltours35.com/wp-content/uploads/2018/05/Banteay-Meanchey-1.jpg" alt="" width="100%" height="500">
        </div>
        
         <div class="centered p-4">
            <div>
                <img src="assets/images/gif2.gif" width="1000" height="124" sizes="(max-width: 1000px) 100vw, 1000px" title="Prasac" alt="" class="so-widget-image">
            </div>
            <div class="mr-4 mt-2" style="margin-left:60px;">
                <h5 style="font-size: medium;color:black;">ស្វែងរកកន្លែងដែលអ្នកចង់ទៅ</h5>
            </div>
            
            <!-- button research province  -->
            <form action="" method="post" class="col-lg-4 rounded-lg " style="margin-left:450px; margin-top:10px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="ស្វែងរក....." name="search">
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="submit">ស្វែងរក</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center row row-cols-1 row-cols-md-3 g-4 mr-3 ml-3 mt-3 mb-3">
        <?php 
            require_once ('database/database.php');
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //search province
                $datas = searchByPlaces($_POST);
            }else{
                $datas = getAllData();
            }
            foreach($datas as $data):
        ?>
        <div class="col">
        <div class="card h-100">
        <img
            src="assets/images/<?= $data['image'] ?>"
            class="card-img-top"
            alt="..."
        />
        <div class="card-body">
            <h5 class="card-title"><?= $data['places'] ?></h5>
            <p class="card-text">
            <?= $data['description'] ?>
            </p>
        </div>
        <div class="input-group-append">
            <a href="detail.php?id=<?=$data['travelID']?>"><button class="btn btn-danger" type="submit">អានបន្ថែម</button></a>
        </div>
        </div>

    </div>
    <?php endforeach; ?>
    </div>
</div>
<?php require_once('partial/footer.php'); ?>