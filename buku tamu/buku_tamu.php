<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bukutamu {
    width: 300px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}

.bukutamu label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
}

.bukutamu input[type="text"], 
.bukutamu textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 14px;
}

.bukutamu input[type="text"]:focus, 
.bukutamu textarea:focus {
    border-color: #66afe9;
    outline: none;
}

.bukutamu .botton {
    display: inline-block;
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
}

.bukutamu .botton:hover {
    background-color: #218838;
}
    </style>
</head>
<body>
<form class="bukutamu" action="simpan_data.php" method="post">
                    <label>NAMA:</label>
                    <input type="text" name="nm"><br>
                    <label>NOMOR HP:</label>
                    <input type="text" name="nom"><br>
                    <label>EMAIL:</label>
                    <textarea cols="35" rows="5" name="eml"></textarea><br>
                    <input class="botton" type="submit" value="KIRIM">
                    
            
                    </form>
</body>
</html>