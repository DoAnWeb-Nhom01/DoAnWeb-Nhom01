<a href="list.php">List</a> | <a href="show_cart.php">Show_cart</a> | <a href="xoa.php">Delete_cart</a></p>
<?php
session_start();
$id= $_GET['id'];
        if($id != "") //  N?u có ID truy?n vào
        {
            if(isset($_SESSION['giohang'][$id]))
                            {
                                    // Tãng s? lý?ng nó lên
                                    $_SESSION['giohang'][$id]++;
                             }
                            else // Chýa có trong gi? hàng (m?i ch?n)
                            {
                                    $_SESSION['giohang'][$id] = 1; // S? lý?ng m?c ð?nh là 1
                            }
        }        
        else
        {
        
        } 
        
        header('Location: show_cart.php');
?>
<p><a href="http://chiasehoctap.net/">chiasehoctap.net</a></p>