<?php
    $sql_sua_baiviet = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1 ";
    $query_sua_baiviet = mysqli_query($mysqli,$sql_sua_baiviet);
?>

<h3>Sửa bài viết</h3>
<table border="1" width="100%" style="border-collapse:collapse;" >
    <?php
    while($row = mysqli_fetch_array($query_sua_baiviet)){
     ?>
    <form method="POST" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" enctype="multipart/form-data" >
    <tr>
        <td>Tên bài viết</td>
        <td><input type="text" name="tenbaiviet" value="<?php echo $row['tenbaiviet'] ?>"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td>
            <input type="file" name="hinhanh">
            <img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
        </td>
    </tr>
    <tr>
        <td>Tóm tắt</td>
        <td><textarea rows="10"  name="tomtat" style="resize:none"><?php echo $row['tomtat'] ?></textarea></td>
    </tr>
    <tr>
        <td>Nội dung</td>
        <td><textarea rows="10"  name="noidung" style="resize:none"><?php echo $row['noidung'] ?></textarea></td>
    </tr>
    <tr>
        <td>Danh mục bài viết</td>
        <td>
            <select name="danhmuc">
                <?php
                $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    if($row_danhmuc['id_baiviet']==$row['id_baiviet']){
                ?>
                <option selected value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
                <?php
                    }else{
                ?>
                <option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
                <?php    
                    }
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Tình trạng </td>
        <td>
            <select name="tinhtrang">
            <?php
            if($row['tinhtrang']==1){
            ?>
                <option value="1" selected>Kích hoạt</option>
                <option value="0">Ẩn</option>
            <?php
            }else{
            ?>
                <option value="1">Kích hoạt</option>
                <option value="0" selected>Ẩn</option>
            <?php 
            } 
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <!-- <td colspan="2"><input type="submit" value="Sửa bài viết" name="suabaiviet" ></td> -->
        <td colspan="2"><button type="submit" name="suabaiviet" class="btn btn-primary">Sửa bài viết</button></td>

    </tr>
    </form>
    <?php } ?>
</table>