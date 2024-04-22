<?php
$con = $pdo->open();

try{
  $stmt = $con->prepare("SELECT *, sales.id AS salesid FROM sales LEFT JOIN users ON users.id=sales.user_id ORDER BY sales_date DESC");
  $stmt->execute();
  foreach($stmt as $row){
    $stmt = $con->prepare("SELECT * FROM details LEFT JOIN products ON products.id=details.product_id WHERE details.sales_id=:id");
    $stmt->execute(['id'=>$row['salesid']]);
    $total = 0;
    foreach($stmt as $details){
      $subtotal = $details['price']*$details['quantity'];
      $total += $subtotal;
    }
    if($row['Confirmed'] == 0){
    echo "
      <tr>
        <td class='hidden'></td>
        <td>".date('M d, Y', strtotime($row['sales_date']))."</td>
        <td>".$row['firstname'].' '.$row['lastname']."</td>
        <td>".$row['country'].' , '.$row['city']." , ".$row['address']."</td>
        <td width='25px;'>&#8378; ".number_format($total, 2)."</td>
        <td width='18px;'><button type='button' class='btn btn-info btn-sm btn-flat transact' data-id='".$row['salesid']."'><i class='fa fa-search'></i> View</button></td>
        <form action='' method='post'>
        <td width='18px;'>
        <input type='hidden' name='confirm' value='1'> <input class='btn btn-success btn-sm btn-flat' type='submit' value='Confirm'>
        </td>
        </form>
      </tr>
     
    ";
    if(isset($_POST['confirm']) && $_POST['confirm'])
    {
      $stmt = $con->prepare("UPDATE sales SET Confirmed = 1 WHERE id = '".$row['salesid']."'");                                                         
      $stmt->execute();  
                            
    }
    }
  }
}
catch(PDOException $e){
  echo $e->getMessage();
}

$pdo->close();                    
?>