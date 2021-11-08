<div>
<!--    <form action=""method="post" enctype="multipart/form-data">-->
    <h3>Ghi chú</h3>
    <form action=""method="post">
        <p>Tiêu đề</p>
        <input type="text" name="title" placeholder="Tiêu đề" value="<?php echo $notes['title']?>">
        <p>Nội dung</p>
        <textarea input type="text" name="content" placeholder="Nội dung" value="<?php echo $notes['content']?>"></textarea><br>

        <button type="submit">Lưu</button>
        <button><a href="index.php">Hủy</a></button>
    </form>
</div>