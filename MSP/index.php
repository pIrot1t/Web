<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>Home Page</title>
</head>
<body>
    <div class="menu">
        <?
        if($id != ""){
        ?>
        <img src="<? echo $row["Icon"]; ?>" class="icon">
        <div class="name"><? echo $row["Name"]; ?></div>
        <?
        }
        
        else{
        ?>
        <img src="" alt="" class="icon">
        <div class="name"></div>
        <?
        }
        ?>
        <button class="mb" onclick="accountsBut()">аккаунт</button>

        <button class="mb" onclick="chatsBut()">чаты</button>

        <button class="mb" onclick="subscribesBut()">подписки</button>

    </div>
    <div class="home">

    </div>
    <script>
        const accountsBut=()=>{
            location.href="accPage.php";
        }
        const chatsBut=()=>{
            location.href="chatsPage.php";
        }
        const subscribesBut=()=>{
            location.href="cubsPage.php";
        }
    </script>
</body>
</html>