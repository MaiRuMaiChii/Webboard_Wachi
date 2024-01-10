<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Shabu</h1>
    <hr>
    <div style="text-align: center;">
    <?php 
    echo "ต้องการดูกระทู้หมายเลข $_GET[id]"; 
    ?>
    <?php
        $id = $_GET['id'];
        if (($id % 2) == 0)
            echo "<BR>เป็นกระทู้หมายเลขคู่ ";
        else
            echo "<BR>เป็นกระทู้หมายเลขคี่";
    ?>
    </div>
    
   <table style="border: 2px solid black; width: 25%;" align="center">
        <tr><td colspan="2" style="background-color: rgb(76, 194, 241);">แสดงความคิดเห็น</td></tr>
        <tr><td><textarea name="text" id="" cols="45" rows="5"></textarea></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ" ></td></tr>
    </table>
    <div style="text-align: center;"><a href="index.php">กลับไปหน้าหลัก</a></div>
</body>
</html>