
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增主題</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="./js/jquery-3.7.0.min.js"></script>
</head>

<body>
    <div>
        <h1>新增主題</h1>
        <?php

        ?>
        <form action="./api/add_vote.php" method="post">
            <div><label for="subject">主題說明:</label><input type="text" name="subject" id="subject" class="subject-input"></div>
            <div class="time-set">
                <div class="time-item">
                    <label for="open_time">開放時間:</label>
                    <input type="datetime-local" name="open_time" id="open_time">
                </div>
                <div class="time-item">
                    <label for="close_time">關閉時間</label>
                    <input type="datetime-local" name="close_time" id="close_tiem">
                </div>
            </div>
            <div><label for="type">單複選</label><input type="radio" name="type" value="1">單選&nbsp;&nbsp;
                <input type="radio" name="type" value="2">複選
            </div>
            <hr>
            <div class="options">
                <div>
                    <label for="description">選項</label>
                    <input type=text name=description[] class="description-input">
                    <span onclick='addOption()'>+</span>
                    <span onclick='removeOption(this)'>-</span>
                </div>
                <div>
                    <label for="description">選項</label>
                    <input type=text name=description[] class="description-input">
                </div>
            </div>
            <div>
                <input type="submit" value="編輯">

            </div>
        </form>

</body>

</html>
<script>
    function addOption(){
        let opt=`<div>
                    <label for="description">選項</label>
                    <input type=text name=description[] class="description-input">
                    <spna onclick='addOption()'>+</spna>
                    <spna onclick='removeOption(this)'>-</spna>
                </div>`
        $(".options").append(opt);
    }
    function removeOption(el){ 
        $(el).parent().remove();  //span的上一層div
    }

</script>