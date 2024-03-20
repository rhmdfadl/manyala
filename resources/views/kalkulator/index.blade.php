<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulator</title>
    
</head>
<body>
    <h1><center>KALKULATOR RUMIT</center></h1>
    <center>
    <form action=" {{ route('proses.store') }} " method="post">
        @csrf
        Input angka pertama : <input type="number" name="a" id=""><br></br>
        Input angka kedua : <input type="number" name="b" id=""><br></br>
        <input type="submit" value="tambah" name="op">  
        <input type="submit" value="kurang" name="op">
        <input type="submit" value="kali" name="op">
        <input type="submit" value="bagi" name="op">
    </form>
    <br>
    <form action=" {{ route('proses.store') }} " method="post">
        @csrf
    <table border=1 width=300>
        <tr>
            <td colspan=2><input type="number" name="a" id=""></td>
            
            <td colspan=2 rowspan=2><input type="submit" value="reset" name="op"></td>
            
        </tr>
        <tr>
            <td colspan=2><input type="number" name="b" id=""></td>
            
        </tr>
        <tr>
            <td colspan=4>hasil : {{ $hasil }}</td>
            
        </tr>
        <tr>
            <td><input type="submit" value="+" name="op"></td>
            <td><input type="submit" value="-" name="op"></td>
            <td><input type="submit" value="x" name="op"></td>
            <td><input type="submit" value="/" name="op"></td>
        </tr>
        <tr>
            <td colspan=4>
                Nama :Rahmat fadil
                <br>
                Kelas:XII PPLG 2
            </td>
            
        </tr>
</center>   
</body>

</html>