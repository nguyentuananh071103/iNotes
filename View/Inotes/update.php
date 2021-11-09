<div>
    <h3>Ghi chú</h3>
    <form action=""method="post">
        <p>Tiêu đề</p>
        <input type="text" name="title" placeholder="Tiêu đề" value="<?php echo $note['title']?>">
        <p>Nội dung</p>
        <input type="text" name="content" placeholder="Nội dung" value="<?php echo $note['content']?>">
        <br>
        <br>
        <button class="btn btn-success" type="submit">Lưu</button>
        <button class="btn btn-danger"><a href="index.php">Hủy</a></button>
    </form>
</div>