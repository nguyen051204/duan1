<?php
    function loadall_nguoidung(){
        $sql="select * from nguoidung order by id desc";
        $listnguoidung=pdo_query($sql);
        return $listnguoidung;
    }
    // function loadtk_đh($name){
    //     $sql="select * from nguoidung where name = $name";
    //     $nguoidung=pdo_query_one($sql);
    //     return $nguoidung;
    // }

    function insert_nguoidung($name,$sdt,$email,$pass){
    $sql="insert into nguoidung(name,sdt,email,pass) values('$name','$sdt','$email','$pass')";
    pdo_execute($sql);
    }

    function checkname($name,$pass){
        $sql="select *from nguoidung where name='".$name."' AND pass='".$pass."' ";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql="select *from nguoidung where email='".$email."'" ;
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function update_taikhoan($id,$name,$pass,$email,$address,$tel){
            $sql="update nguoidung set name='".$name."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;
        pdo_execute($sql);
    }
    function dalete_nguoidung($id){
        $sql="delete from nguoidung where id=".$id;
        pdo_execute($sql);
    }
    function loadone_nguoidung(){
        // $sql = "SELECT * FROM nguoidung where "
    }

?>  