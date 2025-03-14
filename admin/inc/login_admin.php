<?php
    session_start();
    include '../../conect.php';
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $email =$_POST['email'];
        $password =$_POST['password'];

        $stmt = $con->prepare("SELECT * FROM `admin` WHERE Email =? AND `Password` =? AND type_user = 1 ");
        $stmt->execute(array($email , $password));
        $rows =$stmt->fetch();

        $count = $stmt->rowCount();


        if( $count > 0)
        {
           $_SESSION["userid_admin"] = $rows["Admin_ID"];
           ?>
              <script>
                setTimeout(function(){
                    location.href='../index.php';
                        },1000);
              </script>
              <?php
        }
        else
        {
            echo " <div class='alert alert-danger text-center' style='text-align: center;background: beige;font-size: 22px;font-weight: bold;' > خطأ بالإيميل أو كلمة المرور</div>";
            ?>
            <script>
                    setTimeout(function(){
                        location.href='../../index.php';
                        },2000);

            </script>
            <?php
        }

    }


?>
