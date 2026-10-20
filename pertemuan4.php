<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CSS dan JavaScript</title>

    <link rel="stylesheet" href="style.css">

    <style> 
        .sembunyi{
           display: none;   
        }
        .kotak-info{
            background-color: #FFC0CB;
            padding: 15px;
            margin: 10px;
            border: 2px solid #FFFEE0;
            border-radius: 10px;
        }


    </style>

</head>
<body>
  
    <div class="flex-center">
        <div class="kartu-profile">
            <h2>Amourie Starwyn</h2>
            <p>Web Designer</p>
            <button onclick="info ()" class="btn-detail">Info Lengkap</botton>
        </div>
</div>


    <div class="kotak-info sembunyi">
        <h1>Informasi Detail</h1>
    </div>

<script>
    function info(){
        alert("Tombol Info Lengkap di click");
    }
</script>
</body>
</html>