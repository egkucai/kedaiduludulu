<?php
include("config.php");
$query= "SELECT id,nama,harga FROM barangmainan";
$result= mysqli_query($con,$query);
?>
<html>
    <head>
          <title>Senarai Barangan Kedai Dulu-Dulu</title>
    </head>
    <body>
    <center>
        <h2>SENARAI BARANGAN DAN HARGA</h2> 
        <fieldset>
            <table witdh='80%' border="4" cellpadding="5" cellspacing="5">
                <tr bgcolor='#CCCCCC'>
                    <td>Id</td>
                    <td>Nama Produk</td>
                    <td>Harga</td>
                    <td>Tindakan</td>
                </tr>
<?php
      $no=1;   
      while($res = mysqli_fetch_array($result)) {
          echo "<tr>";  
          echo "<td>".$no;
          echo "<td>".$res['nama']."</td>"; 
          echo "<td>".$res['harga']."</td>"; 
          echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\" return confirm('Adakah anda pasti?')
                    \">Delete</a></td>";
          $no++;
      }
         ?>
</table>
<br><a href="add.php">Daftar Barang Baru</a>
</center>
</fieldset>
</body>
</html>

