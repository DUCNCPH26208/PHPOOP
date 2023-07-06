<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/update-product" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$products->id?>" >
        <input type="text" name="name" placeholder="Tên" id="" value="<?=$products->name?>">
        <span style="color:red"><?= $errors['name'] ?? '' ?></span>
        <br>
        <input type="number" name="price" placeholder="Giá" value="<?=$products->price?>" >
        <br>
        <input type="file" name="image" id="" value="<?=$products->image?>">
        <br>
        <textarea name="short_desc" placeholder="Mô tả" cols="100" rows="10"value="<?=$products->short_desc?>"></textarea>
        <br>
        <br>
        <select name="cate_id" id="">
            <?php foreach ($categories as $cate) : ?>
                <option value="<?= $cate->id ?>" <?= ($cate->id===$products->cate_id)? "selected"  : ""?> >
                    <?= $cate->cate_name?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">UPDATE</button>
    </form>
</body>
</html>