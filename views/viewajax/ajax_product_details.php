<style>

    .tr1{
        background: #f5f5f5;
    }
    .tr2{
        background: #fff;
    }
    .td1{
        padding-left: 10px;
        width: 30%;
        font-weight: 500;
    }
    .td2{
        padding-left: 10px;
        width: 70%;
        font-weight: 400;
    }
    table{
        width: 100%;
        min-width: 100%;
        margin: auto;
        border-collapse: separate;
        border-spacing: 0;
    }


    table thead th {
        font-size:14px;
        background: #dedede;
        color: #4C68D7;
        position: sticky;
        top: 0;
        padding: 5px 5px;
    }

    .col-12 table th, .col-12 table td {
        padding: 5px 5px;
        vertical-align: top;
    }
    tr img{
        margin: 5px;
    }
</style>
<?php
   if(isset($_POST['id'])){
       $id = $_POST['id'];
       require_once '../../module/Product.php';
       $product = new Product();
       $getdata = $product->getProductById($id);
?>
<div class="col-12 bg-white" style="margin-top: 25px; padding-top: 8px; padding-bottom: 18px">
    <H4 style="text-align: center; margin-bottom: 25px">THÔNG SỐ KỸ THUẬT</H4>
    <table>
        <tr class="tr1">
            <td class="td1" style="width: 50%">Thương hiệu</td>
            <td class="td2"   <?php if ($getdata['thuonghieu']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['thuonghieu']?></td>
        </tr>
        <tr class="tr2">
            <td class="td1">Xuất xứ thương hiệu</td>
            <td class="td2"   <?php if ($getdata['xuatxu']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['xuatxu']?></td>
        </tr>
        <tr class="tr1">
            <td class="td1">Kích thước màn hình</td>
            <td class="td2"   <?php if ($getdata['kichthuocman']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['kichthuocman']?></td>
        </tr>
        <tr class="tr2">
            <td class="td1">Độ phân giải</td>
            <td class="td2"   <?php if ($getdata['dophangiai']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['dophangiai']?></td>
        </tr>
        <tr class="tr1">
            <td class="td1">Trọng lượng</td>
            <td class="td2"   <?php if ($getdata['trongluong']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['trongluong']?></td>
        </tr>
        <tr class="tr2">
            <td class="td1">Dung lượng pin</td>
            <td class="td2"   <?php if ($getdata['dungluongpin']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['dungluongpin']?></td>
        </tr>
        <tr class="tr1">
            <td class="td1">CPU</td>
            <td class="td2"   <?php if ($getdata['cpu']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['cpu']?></td>
        </tr>
        <tr class="tr2">
            <td class="td1">Tốc độ CPU</td>
            <td class="td2"   <?php if ($getdata['tocdocpu']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['tocdocpu']?></td>
        </tr>
        <tr class="tr1">
            <td class="td1">Bộ nhớ ROM</td>
            <td class="td2"   <?php if ($getdata['rom']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['rom']?></td>
        </tr>
        <tr class="tr2">
            <td class="td1">Bộ nhớ RAM</td>
            <td class="td2"   <?php if ($getdata['ram']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['ram']?></td>
        </tr>
        <tr class="tr1">
            <td class="td1">Camera sau</td>
            <td class="td2"   <?php if ($getdata['camerasau']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['camerasau']?></td>
        </tr>
        <tr class="tr2">
            <td class="td1">Camera trước</td>
            <td class="td2"   <?php if ($getdata['cameratruoc']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['cameratruoc']?></td>
        </tr>
        <tr class="tr1">
            <td class="td1">Loại Sim</td>
            <td class="td2"   <?php if ($getdata['loaisim']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['loaisim']?></td>
        </tr>
        <tr class="tr2">
            <td class="td1">Wifi</td>
            <td class="td2"   <?php if ($getdata['wifi']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['wifi']?></td>
        </tr>
        <tr class="tr1">
            <td class="td1">Hỗ trợ 4G</td>
            <td class="td2"   <?php if ($getdata['hotro4g']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['hotro4g']?></td>
        </tr>
        <tr class="tr2">
            <td class="td1">GPS</td>
            <td class="td2"   <?php if ($getdata['gps']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['gps']?></td>
        </tr>
        <tr class="tr1">
            <td class="td1">Bluetooth</td>
            <td class="td2"   <?php if ($getdata['bluetooth']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['bluetooth']?></td>
        </tr>
        <tr class="tr2">
            <td class="td1">Hỗ trợ thẻ nhớ ngoài</td>
            <td class="td2"   <?php if ($getdata['thenho']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['thenho']?></td>
        </tr>
        <tr class="tr1">
            <td class="td1">Chip đồ họa (GPU)</td>
            <td class="td2"   <?php if ($getdata['gpu']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['gpu']?></td>
        </tr>
        <tr class="tr2">
            <td class="td1">Phụ kiện đi kèm</td>
            <td class="td2"   <?php if ($getdata['phukien']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['phukien']?></td>
        </tr>
        <tr class="tr1">
            <td class="td1">Cổng sặc</td>
            <td class="td2"   <?php if ($getdata['congsac']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['congsac']?></td>
        </tr>
        <tr class="tr2">
            <td class="td1">Pin có thể tháo rời</td>
            <td class="td2"   <?php if ($getdata['pin']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['pin']?></td>
        </tr>
        <tr class="tr1">
            <td class="td1">Jack tai nghe</td>
            <td class="td2"   <?php if ($getdata['jacktaynghe']=='[Chưa cập nhật]') echo 'style = "color:#c22"'?>><?php echo $getdata['jacktaynghe']?></td>
        </tr>
    </table>
</div>
<?php } ?>