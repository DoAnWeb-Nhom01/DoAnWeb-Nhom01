<a href="list.php">List</a> | <a href="show_cart.php">Show_cart</a> | <a href="xoa.php">Delete_cart</a></p>
<?php
session_start();
$id= $_GET['id'];
        if($id != "") //  N?u c� ID truy?n v�o
        {
            if(isset($_SESSION['giohang'][$id]))
                            {
                                    // T�ng s? l�?ng n� l�n
                                    $_SESSION['giohang'][$id]++;
                             }
                            else // Ch�a c� trong gi? h�ng (m?i ch?n)
                            {
                                    $_SESSION['giohang'][$id] = 1; // S? l�?ng m?c �?nh l� 1
                            }
        }        
        else
        {
        
        } 
        
        header('Location: show_cart.php');
?>
<p><a href="http://chiasehoctap.net/">chiasehoctap.net</a></p>