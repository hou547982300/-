$(function(){

    //这是借款列表的动态渲染
   $.get("./api/borrow_list.php",function(data){
    var htmlStr =$("#borrowTmpl").tmpl(data);
    $("#bidrequestlist").html(htmlStr);
   },'json')
})