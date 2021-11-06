<a href="index.php?page=notes-create">Thêm mới</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
<!--        <th>Content</th>-->
        <th>Type_id</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($notes)) : ?>
        <?php foreach ($notes as $note): ?>
            <tr>
                <td><?php echo $note["id"] ?></td>
                <td><?php echo $note["title"] ?></td>
<!--                <td>--><?php //echo $note["content"] ?><!--</td>-->
                <td><?php echo $note["type_id"] ?></td>
<!--                <td><a href="#">Detail</a></td>-->
                <td><a onclick="return confirm('Are you sure??')"
                       href="#">Delete</a></td>
                <td><a href="index.php?page=notes-update">Edit</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">Không có sản phẩm nào ở đây</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>