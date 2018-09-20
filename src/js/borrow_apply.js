$(function () {/* 文档加载，执行一个函数*/
    //填写申请借款类型
   var applyNum = location.href.split("=")[1];
    $("#bidRequeststyle").val(applyNum); 
    //发送ajax将数据传入后台
    $("#subminrequest").on('click',function(){
        var borrowData=$("#borrowApply").serialize();
        $.post("api/borrow_applyInfo.php",borrowData,function(data){
           if(data.isStatus){
               alert(data.message);
               location.href="./bid_request_list.php";
           }else{
            alert(data.message);
           }
        },'json')

    })

})