    <?php
// Thêm mới
    function insert_loaiphong($name){
        $sql="insert into loaiphong (name) values('$name')";
        pdo_execute($sql);
    }
// Xóa
    function delete_loaiphong($id){
        $sql="delete from loaiphong where id=".$id;
        pdo_execute($sql);
    }
    // load 
    function loadall_loaiphong(){
        $sql="select * from loaiphong order by id desc";
        $listloaiphong=pdo_query($sql);
        return $listloaiphong;
    }
    function loadone_loaiphong($id){
        $sql="select * from loaiphong where id=".$id;
        $dm= pdo_query_one($sql);
        return $dm;
    }
    // update 
    function update_loaiphong($id,$tenloai){
        $sql="update loaiphong set name='".$tenloai."' where id=".$id;
        pdo_execute($sql);
    }

?>