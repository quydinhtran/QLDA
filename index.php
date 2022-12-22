<!DOCTYPE html>
<html>
<head>
    <title>Mobile Store - Cửa hàng điện thoại di động</title>
    <link rel="icon" href="./upload/img/logomobile.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="script/js/myJS.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="script/css/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body>
    <?php
    require_once './module/Product.php';
    $Product = new Product();
    $titleSP = "TẤT CẢ SẢN PHẨM";
    if(isset($_GET['classify'])){
        $id = $_GET['classify'];
        $getdata = $Product->getListProductByIDCategory($id);
        $titleSP =  $Product->getNameCategorybyID($id);
    }
    else $getdata = $Product->getListProduct();
    ?>
    <?php include 'views/header.html' ?>
    <div class="between">
        <div class="content">
            <div class="container">


                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://doanhnhanplus.vn/wp-content/uploads/2019/09/dnp-xiaomi-gioi-thieu-dien-thoai-mi-9t-pro-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://cdn.tgdd.vn/Files/2021/05/24/1354347/galaxy-m62-1_800x450.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://cdn.tgdd.vn/Products/Images/42/218341/Slider/poco-x2-264620-114652.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


                <div class="Htitle"><?php echo $titleSP ?></div>
                <div class="row">
                    <?php
                    if(sizeof($getdata)==0)
                        echo "<H4 style='margin-left: 15px'>Không có sản phẩm nào</H4>";
                    foreach ($getdata as $line){
                        ?>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-6">
                            <a href="products.php?receive=<?php echo $line['id'] ?>">
                                <div class="per-box">
                                    <img class="img-avatarpr" src="<?php echo $line['img']?>" alt="san pham">
                                    <div class="name-pr"><?php echo $line['ten']?></div>
                                    <div class="price-pe"><?php echo number_format($line['giaban'], 0, ',', '.'); ?>₫</div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
    <?php include 'views/footer.html'?>
<script>
    $(window).load(function(){
        responsive();
        $(window).resize(function(){
            responsive();
        });
    });
</script>
</body>
</html>