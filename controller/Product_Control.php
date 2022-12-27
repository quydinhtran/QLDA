<?php
    class Product_Control{
        public function __construct()
        {
        }
        public function addProductCategory(){
            $name = $_POST['name'];
            $lever = $_POST['lever'];
            $parent = $_POST['capdocha'];
            require_once "../module/Product.php";
            $accout = new Product();
            $acess = $accout->addProductCategory($name,$lever,$parent);
           echo '<script>window.location="./?select=product-categories";</script>';
        }
        public function editProductCategory(){
            $name = $_POST['name'];
            $lever = $_POST['lever'];
            $parent = $_POST['capdocha'];
            $id = $_POST['id'];
            require_once "../module/Product.php";
            $accout = new Product();
            $acess = $accout->editProductCategory($id,$name,$lever,$parent);
       // echo '<script>window.location="./?select=product-categories";</script>';
         }
        public function add_new_product(){
            $title = trim($_POST['title']);
            $pathav = "./upload/img/noimage.png";
            $phanloai = trim($_POST['phanloai']);
            $giaban= trim($_POST['giaban']);
            $soluong = trim($_POST['soluong']);
            $tinhtrang = trim($_POST['tinhtrang']);
            $thuonghieu = trim($_POST['thuonghieu']);
            $xuatxu = trim($_POST['xuatxu']);
            $kichthuoc = trim($_POST['kichthuoc']);
            $dophangiai = trim($_POST['dophangiai']);
            $dungluongpin = trim($_POST['dungluong']);
            $trongluong = trim($_POST['trongluong']);
            $cpu = trim($_POST['cpu']);
            $tocdocpu = trim($_POST['tocdocpu']);
            $rom = trim($_POST['rom']);
            $ram = trim($_POST['ram']);
            $camerasau = trim($_POST['camerasau']);
            $cameratruoc = trim($_POST['cameratruoc']);
            $loaisim = trim($_POST['loaisim']);
            $wifi = trim($_POST['wifi']);
            $hotro4g = trim($_POST['hotro4g']);
            $gps = trim($_POST['gps']);
            $blutooth = trim($_POST['blutooth']);
            $thenho = trim($_POST['thenho']);
            $gpu = trim($_POST['gpu']);
            $phuukien = trim($_POST['phuukien']);
            $congsac = trim($_POST['congsac']);
            $pin = trim($_POST['pin']);
            $taynghe = trim( $_POST['taynghe']);
            $posts = trim( $_POST['posts']);
            if($_FILES['imgInp']['error'] == 0)
            {
                //lay phan mo rong cua file
                $imageFileType = pathinfo($_FILES['imgInp']['name'],PATHINFO_EXTENSION);
                //cac kieu file hop le
                $allowtypes = array('jpg', 'png');
                if (in_array($imageFileType,$allowtypes ))
                {
                    $file = $_FILES['imgInp']['tmp_name'];
                    $pathav = "../upload/img/".$_FILES['imgInp']['name'];
                    move_uploaded_file($file, $pathav);
                    $pathav = substr($pathav, 1);
                }else{
                    echo '<script>alert("Ảnh phải có định JPG, PNG")</script>';
                }
            }
            require_once '../module/Product.php';
            $temp = new Product(); $temp->add_new_product_todatabase($phanloai, $title,$pathav,$giaban,$tinhtrang,$soluong,$posts,$thuonghieu,$xuatxu,$kichthuoc,$dophangiai,$trongluong,$dungluongpin,$cpu,$tocdocpu,$rom,$ram,$camerasau,$cameratruoc,$loaisim,$wifi,$hotro4g,$gps,$blutooth,$thenho,$gpu,$phuukien,$congsac,$pin,$taynghe);
           echo '<script>alert("Sản phẩm đã được thêm vào thành công");window.location="./?select=add-new-products";</script>';
        }
        public function edit_a_product(){
            $title = trim($_POST['title']);
            $pathav = "./upload/img/noimage.png";
            $phanloai = trim($_POST['phanloai']);
            $giaban= trim($_POST['giaban']);
            $soluong = trim($_POST['soluong']);
            $tinhtrang = trim($_POST['tinhtrang']);
            $thuonghieu = trim($_POST['thuonghieu']);
            $xuatxu = trim($_POST['xuatxu']);
            $kichthuoc = trim($_POST['kichthuoc']);
            $dophangiai = trim($_POST['dophangiai']);
            $dungluongpin = trim($_POST['dungluong']);
            $trongluong = trim($_POST['trongluong']);
            $cpu = trim($_POST['cpu']);
            $tocdocpu = trim($_POST['tocdocpu']);
            $rom = trim($_POST['rom']);
            $ram = trim($_POST['ram']);
            $camerasau = trim($_POST['camerasau']);
            $cameratruoc = trim($_POST['cameratruoc']);
            $loaisim = trim($_POST['loaisim']);
            $wifi = trim($_POST['wifi']);
            $hotro4g = trim($_POST['hotro4g']);
            $gps = trim($_POST['gps']);
            $blutooth = trim($_POST['blutooth']);
            $thenho = trim($_POST['thenho']);
            $gpu = trim($_POST['gpu']);
            $phuukien = trim($_POST['phuukien']);
            $congsac = trim($_POST['congsac']);
            $pin = trim($_POST['pin']);
            $taynghe = trim( $_POST['taynghe']);
            $posts = trim( $_POST['posts']);
            $id =  $_POST['id'];
            require_once '../module/Product.php';
            $temp = new Product();
            if($_FILES['imgInp']['error'] == 0)
            {
                //lay phan mo rong cua file
                $imageFileType = pathinfo($_FILES['imgInp']['name'],PATHINFO_EXTENSION);
                //cac kieu file hop le
                $allowtypes = array('jpg', 'png');
                if (in_array($imageFileType,$allowtypes ))
                {
                    $file = $_FILES['imgInp']['tmp_name'];
                    $pathav = "../upload/img/".$_FILES['imgInp']['name'];
                    move_uploaded_file($file, $pathav);
                    $pathav = substr($pathav, 1);
                    $temp->updata_image_product_by_id($id,$pathav);
                }else{
                    echo '<script>alert("Ảnh phải có định JPG, PNG")</script>';
                }
            }
              $temp->edit_a_product_todatabase($id, $phanloai, $title,$giaban,$tinhtrang,$soluong,$posts,$thuonghieu,$xuatxu,$kichthuoc,$dophangiai,$trongluong,$dungluongpin,$cpu,$tocdocpu,$rom,$ram,$camerasau,$cameratruoc,$loaisim,$wifi,$hotro4g,$gps,$blutooth,$thenho,$gpu,$phuukien,$congsac,$pin,$taynghe);
              echo '<script>alert("Thông tin sản phẩm đã được thay đổi");window.location="./?select=management-products";</script>';
        }
        public function createMenu(){
            $act = $_POST['act'];
            $id = $_POST['id'];
            require_once '../module/Product.php';
            $product = new Product();
            $product->createMenu($act,$id);
        }
        public function getMenu(){
            require_once './module/Product.php';
            $product = new Product();
            return $product->getMenu();
        }
    }
?>