<?php
$info=array (
      array("Priyanka",23,7779996756,"JH"),
      array("Priya",21,524156432541,"BR"),
      array("Priyu",22,456213875697,"GJ"),
      array("Prisha",25, 564789464,"Mh"),
      array("Ravi",26,2546843689,"Dhanbad"),
      array("Riya",27,1245679535,"Kumardubhi"),
      array("Prisha",12,777996756,"jhbr"),
      array("Pritha",22,8210181223,"Patna"),
      array("Preeti", 25, 9798074879,"Dhanbad"),
      array("Pankaj", 26,9638527410, "Jhakhand"),
      array("Tulsi",24, 7879064521, "Jamshedpur"),
      array("Anisha", 26, 7418529631,"Maango"),
      array("Richa", 24, 8529634562,"Bihar"),
      array("Anjali", 26, 9517534562,"Sitamarhi"),
      array("Kajal", 21,7894561230,"Bihar"),
      array("Dhananjay", 25,9333222440,"Rajmahal"),
      array("Aman", 22, 7419638520, "Jehanabad"),
      array("Jyoti", 27, 9637418520, "Bihar"),
      array("Gungun", 26, 7894561230, "Gaya"),
      array("Ritwik", 56, 654987130, "Nalanda"));
      
      $records=isset($_GET ['records'])? $_GET['records']:1;
      $ppage=4;
      $tp=ceil(count($info)/$ppage);
      $p=($records-1)*$ppage;
      $inf=array_slice($info, $p, $ppage);
      ?>
      <table border="15">
            <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Mobile</th>
            <th>Address</th>
</tr>
<?php
foreach ($inf as $a):
?>

<tr align="middle">
<td> <?php echo $a[0] ?> </td>
<td> <?php echo $a[1] ?> </td>
<td> <?php echo $a[2] ?> </td>
<td> <?php echo $a[3] ?> </td>
</tr>
<?php 
endforeach;
?>
</table>
<center>
      <div>
      <?php
      for ($i=1; $i<=$tp; $i++):
      ?>
      <?php
       if ($i== $records): 
            ?>
            <strong>
            <?php
            echo $i;
            ?>
            </strong>
            <?php
            else :
            ?>
            <a href="?records=<?php echo $i?>">
            <?php echo $i; ?> </b>
            <?php
            endif;
            ?>
            <?php
            endfor;
             ?>
      </div>
      </body>
      </html>


            

   
