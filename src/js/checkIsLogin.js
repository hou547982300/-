$.get("api/checkIsLogin.php",function(data){
//    var data =JSON.parse(data);
  if(!data.Loginstatus){
    alert(data.msg);
    location.href="./Login.php";
  }
},"json") 