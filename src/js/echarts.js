$(function(){
   //这是图形分析
   $.get("./api/echartsData.php",function(result){
        option.legend.data =result.title;
        option.series[0].data=result.data;
        myChart.hideLoading();
        myChart.setOption(option);
   },'json') 
})