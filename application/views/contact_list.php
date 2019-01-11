<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        #contacts{
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #contacts td, #contacts th{
            border: 1px solid #ddd;
            padding: 8px;
        }
        #contacts tr:nth-child(even){background-color: #f2f2f2;}

        #contacts tr:hover {background-color: #ddd;}
        #contacts th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
        #container a{
            width: 100px;
            height: 100px;
            background: red;
            color: lightyellow;
            text-decoration: none;
            border-radius: 100%;
            text-align: center;
            padding: 5px;
        }
        #container a.btn{
            width: 70px;
            height: 36px;
            background: red;
            color: lightyellow;
            text-decoration: none;
            border-radius: 30px;
            text-align: center;
            padding: 5px;
            line-height: 36px;
            margin: 10px auto;
            display: block;
        }
        #container p.footer{
            text-align: center;
        }
    </style>
</head>
<body>
<div id="container">
    <h1>Danh bạ</h1>

    <div id="body">
        <table id="contacts">
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Số điện thoại1</th>
                <th>Số điện thoại2</th>
                <th>Email</th>
                <th>Fb</th>
                <th>Company</th>
                <th></th>
            </tr>
            <?php foreach ($contacts as $idx => $item): ?>
                <tr class="<?= ($idx % 2) ? 'odd' : 'even' ?>" >
                    <td class="center"><?= $idx+1 ?></td>
                    <td><?= $item->name ?></td>
                    <td><?= $item->phone1 ?></td>
                    <td><?= $item->phone2 ?></td>
                    <td><?= $item->email ?></td>
                    <td><?= $item->fb ?></td>
                    <td><?= $item->company ?></td>


                    <td class="center"><a href="./contact/edit/<?= $item->id ?>">Chi tiết</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <a href="./contact/add" class="btn">Thêm mới</a>
    </div>

    <p class="footer">Website được thiết kế bởi OWS Việt Nam</p>
</div>
</body>
</html>