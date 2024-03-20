<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type="button"] {
            width: 100%;
            padding: 20px 40px;
            background-color: skyblue;
            color:white;
            margin-bottom: 10px;
            border: ;
            border-radius: 10px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
        }
        body {
            font-family: Arial, sans-serif;
            background-color: grey;
            border: none;
            
        }
        td {
            border:none;
            
        }
        table{
            border: none;
            border-radius: 10px;
            
            box-shadow: 5px 5px 10px rgba(0,0,0,0.2);
        }
        input[type="text"] {
            width: 10%;
            padding: 20px 40px;
            border-radius: 10px;
            
        }
    </style>
</head>
<body><center>
    <h1>Kalkulator</h1>
    <form name="form1"action="" method="post">
        <input type="text" name="txt1" id=""><br></br>
    <table border=1 width=300>
    <tr>
        <td><input type="button" value="1" onClick="form1.txt1.value+='1'"><td>
        <td><input type="button" value="2" onClick="form1.txt1.value+='2'"><td>
        <td><input type="button" value="3" onClick="form1.txt1.value+='3'"><td>
        <td><input type="button" value="+" onClick="form1.txt1.value+='+'"><td><br>
    </tr>
    <tr>
        <td><input type="button" value="4" onClick="form1.txt1.value+='4'"><td>
        <td><input type="button" value="5" onClick="form1.txt1.value+='5'"><td>
        <td><input type="button" value="6" onClick="form1.txt1.value+='6'"><td>
        <td><input type="button" value="-" onClick="form1.txt1.value+='-'"><td><br>
    </tr>
    <tr>
        <td><input type="button" value="7" onClick="form1.txt1.value+='7'"><td>
        <td><input type="button" value="8" onClick="form1.txt1.value+='8'"><td>
        <td><input type="button" value="9" onClick="form1.txt1.value+='9'"><td>
        <td><input type="button" value="*" onClick="form1.txt1.value+='*'"><td>
    </tr>
    <tr>
        <td><input type="button" value="0" onClick="form1.txt1.value+='0'"><td>    
       <td><input type="button" value="/" onClick="form1.txt1.value+='/'"><td>
       <td><input type="button" value="c" onClick="form1.txt1.value=''"><td>
       <td><input type="button" value="=" onClick="form1.txt1.value=eval(form1.txt1.value)"><td>
    </tr>
        
    </form>
</body>
</html>