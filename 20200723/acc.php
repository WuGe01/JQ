<?php
$rows=array(
    array("id"=>1,"acc"=>'admin',"pw"=>1234),
    array("id"=>2,"acc"=>'WuGe',"pw"=>7788)
);

switch ($_GET['do']) {
    case 'check':
        $flag=false;
        foreach ($rows as $key => $value) {
            if($rows[$key]['acc'] == $_POST['acc']){
                $flag=true;
                break;
            }
        }
        echo ($flag==true)?"帳號重複":"可使用此帳號";
        break;
}


?>