<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        #body .input{
            margin: 10px 20px;
        }
       #body .input input{
            width: 180px;
            height: 34px;
            border-radius: 8px;
            border: 1px solid gray;
            padding-left: 10PX;
           outline: none;
        }
        #body .input input.a1{margin-left: 70px}
        #body .input input.a2{margin-left: 58px}
        #body .input input.a3{margin-left: 33px}
        #body button{
            width: 75px;
            height: 34px;
            border-radius: 10px;
            border: 1px;
        }
        #body input{
            width: 75px;
            height: 34px;
            border-radius: 10px;
            border: 1px;
        }
        #body button.a4{
            margin-left: 20px;
        }
    </style>
</head>
<body>
<div id="container">
    <h1>Cập nhật Danh bạ</h1>
<div id="body">
    <form method="post" action="../save/<?= $contact_item->id?>">
        <div class="input">
            <label for="">Tên</label>
            <input type="text" name="name" class="a1" value="<?= $contact_item->name ?>">
        </div>
        <div class="input">
            <label for="">Số điện thoại 1</label>
            <input type="text" name="phone1" value="<?= $contact_item->phone1 ?>">
        </div>
        <div class="input">
            <label for="">Số điện thoại 2</label>
            <input type="text" name="phone2" value="<?= $contact_item->phone2 ?>">
        </div>
        <div class="input">
            <label for="">Email</label>
            <input type="text" name="email" class="a2" value="<?= $contact_item->email ?>">
        </div>
        <div class="input">
            <label for="">Facebook</label>
            <input type="text" name="fb" class="a3" value="<?= $contact_item->fb ?>">
        </div>
        <div class="input">
            <label for="">Company</label>
            <input type="text" name="company" class="a3" value="<?= $contact_item->company ?>">
        </div>
        <button class="a4">Cập nhật</button>
        <input type="button" onclick="remove(<?= $contact_item->id?>)" value="Xóa" />
        <button onclick="javascript: history.back()">Quay lại</button>
    </form>
</div>
    <p class="footer">Website được thiết kế bởi OWS Việt Nam</p>
</div>
    <script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
    <script>
        function remove(id) {
            var isConfirm = confirm("Bạn có chắc muốn xóa không?");
            if (isConfirm) {
                $.get('../del/'+id).then(function(data) {
                    if (data == "success")
                        window.location = "http://localhost/ows-contact";
                    else
                        alert('Có lỗi xảy ra.');
                })
            }
        }
    </script>
</body>
</html>