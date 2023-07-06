<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Sách</title>
</head>

<body>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th>
                <a href="/create-product">Thêm</a>
            </th>
        </tr>


        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?= $product->id ?></td>
                <td><?= $product->name ?></td>
                <td><?= $product->price ?></td>
                <td>
                    <img src="images/<?= $product->image ?>" width='100' alt="">
                </td>
                <td>
                    <a href="/delete-product?id=<?=$product->id?>">DELETE</a>
                    <a href="/update-product?id=<?=$product->id?>">UPDATE</a>
                </td>
            </tr>
        <?php endforeach ?>

    </table>
</body>

</html>