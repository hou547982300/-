$(function(){
       $("#page").page({
        debug: true,
        // showInfo: true,
        showJump: true,
        showPageSizes: true,
        pageSize:5,
        remote: {
            url: './api/investList.php',
            // url: './lib/JqueryPagination/data.json',
            success: function (data) {
                // $("#eventLog").append(' remote callback : ' + JSON.stringify(data) + '<br />');
                var htmlStr =$("#investListTmpl").tmpl(data.list);
                $("#investList").html(htmlStr); 
            }
        }
     });

})     