<?php
    session_start();
    include '../conect.php';
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $Erros = array();

        $name=$_POST['firstName'];
        $email=$_POST['email'];
        $adrees =$_POST['adrees'];
        $phoon=$_POST['phoon'];
        $password1=$_POST['password1'];
        $password2=$_POST['password2'];


        $stmt = $con->prepare("SELECT * FROM `admin` WHERE Email =? AND `Password`=? ");
        $stmt->execute(array($email , $password1));
        $Count = $stmt->rowCount();
        if($Count > 0){ $Erros[] = 'هناك حساب بنفس بيانات هذا الحساب  '; }
        if($password1 != $password2 ){$Erros[] = 'كلمات المرور غير متطابقه';}

        if(empty($Erros)){

                $stmt = $con->prepare("INSERT INTO `admin` (`Name`,Email,`Address`,`Phone_Num` , `Password`)
                                        VALUES ( :username,:eml,:addr,:phoo , :pass )");
                    $stmt->execute(array(
                    'username' => $name,
                    'eml'  => $email,
                    'addr' => $adrees,
                    'phoo' => $phoon,
                    'pass' => $password1,
                    ));
                    echo '<div class="alert alert-success text-center" style="text-align: center;background: beige;font-size: 22px;font-weight: bold;" >تمت الاضافه بنجاح</div>';
                    ?>
                    <script>
                        setTimeout(function(){
                            location.href='../LogInUser.php';
                        },4000);
                    </script>
                    <?php

        }else { foreach($Erros as $error){ ?>
            <div class="alert alert-danger text-center" ><?php echo $error; ?></div>
        <?php }
        ?>
            <script>
                    setTimeout(function(){
                        location.href='../SignInUser.php';
                        },6000);

            </script>
        <?php
    }

    }


?>
