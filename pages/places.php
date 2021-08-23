<?php require_once('partial/header.php'); 
    require_once('partial/navbar.php');?>
    <div class="head">
        <img src="https://content.api.news/v3/images/bin/5521409274d7355f8277458bb5602f6a" alt="" width="100%" height="500">
    </div>
    <marquee width="100%" scrollamount="20" direction="left" height="50px" style="background-color: lightblue;margin-top:1px;display: flex;align-items: center;justify-content: center;font-weight:bold; ">
        <h4>សូមធ្វើដំណើរប្រកបដោយសុវត្ថិភាព​​ ដោយក្ដីរីករាយពី KOKO TOURS យើងខ្ញុំបាទ ​!!!  ពិសាគ្រឿងស្រវឹងសូមកុំបើកបរ​ បំណងល្អពី KOKO TOURS ...</h4>
        
    </marquee>
    <h5 style="margin-left: 40%;">ស្វែងរកកន្លែងដែលអ្នកចង់ទៅ</h5>
    <form action="" method="post" class="col-lg-4 rounded-lg " style="margin-left:450px; margin-top:10px">
            <div class="input-group ">
                <input type="text" class="form-control" placeholder="ស្វែងរក......" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="submit">ស្វែងរក</button>
                        <div class="d-flex justify-content-start ml-2">
                            <a href="process/create_html.php" class="btn btn-primary">បន្ថែម+</a>
                        </div>
                    </div>
            </div>
    </form>
    <div class="d-flex justify-content-between row row-cols-1 row-cols-md-3 g-4 mr-3 ml-3 mt-3 mb-3 m-2">
        <?php
            require_once ('database/database.php');
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //search
                $datas = searchByPlaces($_POST);
            }else{
                //select
                $datas = getAllData();
            }
            foreach($datas as $data):
                $description=readMore($data['description'],200);
        ?>
        <div class="row">
            <div class="col">
                <div class="card">
                <div class="card-body">
                    <h1 class="display-6"><?=$data['places']; ?> </h1>
                    <strong><?=$data['date']; ?></strong>
                    <p style="box-sizing: content-box;"><?=$description?></p>
                    <a href="detail.php?id=<?=$data['travelID']?>" class="btn btn-primary">អានបន្ថែម</a>
                </div>
                    <div class="action d-flex justify-content-end">
                        <a href="process/update_html.php?id=<?=$data['travelID']?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil">​​ កែតម្រូវ</i></a>
                        <a href="process/delete_model.php?id=<?=$data['travelID']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"> លុបចោល</i></a>
                    </div>
                </div>
            </div>
            
        </div>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>