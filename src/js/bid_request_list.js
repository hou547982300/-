$(function(){

    //这是借款列表的动态渲染   dddd
   $.get("./api/borrow_list.php",function(data){
    var htmlStr =$("#borrowTmpl").tmpl(data);

    s
    $("#bidrequestlist").html(htmlStr);
   },'json')
})