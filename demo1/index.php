<?php require "../db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../jquery.js"></script>
    <script>
    $(document).ready(function(){

        $(document).on("click", "h2", function(){
            // h2 Ajax load ve chay ngon lanh
            alert(1);
        });
        
        $("button").click(function(){
           
            var t = $(this).attr("trang");
            
            //Ajax
            $.get("xuly.php", {trang:t}, function(data){

                var json = JSON.parse(data);
                $("#noidung").html("");
                json.forEach(function(item){
                    $("#noidung").append("<h2>" + item.TEN +"</h2>");
                });
            });

        });

    });
    </script>
</head>
<body>

<h2>Hello</h2>

<div id="phantrang">
    <button trang="1">1</button>
    <button trang="2">2</button>
    <button trang="3">3</button>
</div>

<div id="noidung"></div>
    
</body>
</html>