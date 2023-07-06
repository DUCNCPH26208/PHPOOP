<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sách</title>
</head>

<body>
    <form action="/create-product" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Tên" id="">
        <span style="color:red"><?= $errors['name'] ?? '' ?></span>
        <br>
        <input type="number" name="price" placeholder="Giá"  >
        <br>
        <input type="file" name="image" id="">
        <br>
        <textarea name="short_desc" placeholder="Mô tả" cols="100" rows="10"></textarea>
        <br>
        <br>
        <select name="id" id="">
            <?php foreach ($categories as $cate) : ?>
                <option value="<?= $cate->id ?>">
                    <?= $cate->cate_name?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">Thêm sách</button>
    </form>
</body>

</html>