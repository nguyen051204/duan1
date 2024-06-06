<?php

    function loadall_thongke(){
   
           $sql="SELECT loaiphong.id as malp,loaiphong.name as tenlp,count(phong.id) as countp,min(phong.giaPhong) as mingia,max(phong.giaPhong) as maxgia,avg(phong.giaPhong) as avggia"; 
              $sql.=" from phong left join loaiphong on loaiphong.id=phong.idLoaiPhong group by loaiphong.id";
           
            $sql.=" order by loaiphong.id desc;";
              $listtk = pdo_query($sql);
              return $listtk;
          
    }
?>