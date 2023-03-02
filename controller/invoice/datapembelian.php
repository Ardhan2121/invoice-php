<?php
session_start();
error_reporting(0);
//post data
$kd = $_POST["KdBarang"];
$nama = $_POST["NmBarang"];
$harga = str_replace('.', '', $_POST["HargaJual"]);
$qty = ltrim($_POST["QTY"], "0");

//
if(isset($_POST["NmBarang"]))  
 {  
     $_SESSION["pesan"] = 'barang berhasil diinput';
     echo $kd;
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "kode");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                    "kode" => $kd,
                    "nama" => $nama,
                    "satuan" => $satuan,
                    "harga" => $harga,
                    "qty" => $qty,
                    "total" => $qty * $harga
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;
  
           }  
           else  
           {  
            $_SESSION["pesan"] = 'barang sudah ada';
        }
        unset($_SESSION["KdBarang"]);  
      }  
      else  
      {  
           $item_array = array(  
            "kode" => $kd,
            "nama" => $nama,
            "satuan" => $satuan,
            "harga" => $harga,
            "qty" => $qty,
            "total" => $qty * $harga
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }
      header("Location: /faktur/transaksi.php");
  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  

           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["kode"] == $_GET["id"])  
                {  
                    unset($_SESSION["shopping_cart"][$keys]);
                    unset($_SESSION["sum"]);
                    $_SESSION["shopping_cart"] = array_values($_SESSION["shopping_cart"]);                      
                    echo '<script>window.location="transaksi.php"</script>';
                    $_SESSION["pesan"] = 'berhasil delete barang';
  
                }  
           }  
      }  
 }  
?>
      <?php   
if(!empty($_SESSION["shopping_cart"]))  {  
     $total = 0;  
     $no = 1;
     $_SESSION['sum'] = 0;
     foreach($_SESSION["shopping_cart"] as $keys => $values)  
     {  
?>    


    <div class="card bg-custom">
     <div class="card-body d-flex justify-content-between p-3 align-items-center">
      <div class="left d-inline">
        <h5 class="m-0"><?php echo $values['nama'];?><span class="ms-3 badge badge-primary"> <?php echo $values['qty'];?>x</span></h5>
      </div>
      <div class="right d-inline">
        <h5 class="mb-1"><?php echo "Rp. " . rupiah($values['total']);?><span class="badge bg-primary badge-lg mx-2"></span><a class="d-inline" href="transaksi.php?action=delete&id=<?php echo $values["kode"]; ?>"><i class="fas fa-trash text-danger ms-3"></i></a></h5>

        <?php $_SESSION['sum']+= $values['total'];?>
      </div>
          
     </div>
    </div>
<?php  
    }  
}
?>