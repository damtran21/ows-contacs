
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        form .input{
            margin: 10px 20px;
        }
        form .input input{
            width: 180px;
            height: 34px;
            border-radius: 8px;
            border: 1px solid gray;
            padding-left: 10PX;
            outline: none;
        }
        form .input input.a1{margin-left: 70px}
        form .input input.a2{margin-left: 58px}
        form .input input.a3{margin-left: 33px}
         button{
            width: 75px;
            height: 34px;
            border-radius: 10px;
            border: 1px;
             margin-left: 235px;
        }
    </style>
</head>
<body>
<form method="post" action="save">
    <div class="input">
        <label for="">Tên</label>
        <input type="text" name="name" class="a1">
    </div>
    <div class="input">
        <label for="">Số điện thoại 1</label>
        <input type="text" name="phone1">
    </div>
    <div class="input">
        <label for="">Số điện thoại 2</label>
        <input type="text" name="phone2">
    </div>
    <div class="input">
        <label for="">Email</label>
        <input type="text" name="email" class="a2">
    </div>
    <div class="input">
        <label for="">Facebook</label>
        <input type="text" name="fb" class="a3">
    </div>
    <div class="input">
        <label for="">Company</label>
        <input type="text" name="company" class="a3">
    </div>
    <button>Thêm mới</button>
</form>
</body>
</html>