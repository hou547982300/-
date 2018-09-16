$(function () {/* 文档加载，执行一个函数*/
    $('#loginCheck').bootstrapValidator({
        message: '未能成功匹配到该用户',
        feedbackIcons: {/*input状态样式图片*/
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {/*验证：规则*/
            username: {//验证input项：验证规则
                message: '用户名验证失败',
                validators: {
                    notEmpty: {//非空验证：提示消息
                        message: '用户名不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 12,
                        message: '用户名长度必须在6到12之间'
                    },
                    // threshold :  6 , //有6字符以上才发送ajax请求，（input中输入一个字符，插件会向服务器发送一次，设置限制，6字符以上才开始）
                    // remote: {//ajax验证。server result:{"valid",true or false} 向服务发送当前input name值，获得一个json数据。例表示正确：{"valid",true}  
                    //     url: 'exist2.do',//验证地址
                    //     message: '用户已存在',//提示消息
                    //     delay :  2000,//每输入一个字符，就发ajax请求，服务器压力还是太大，设置2秒发送一次ajax（默认输入一个字符，提交一次，服务器压力太大）
                    //     type: 'POST'//请求方式
                    //     /**自定义提交数据，默认值提交当前input value
                    //      *  data: function(validator) {
                    //           return {
                    //               password: $('[name="passwordNameAttributeInYourForm"]').val(),
                    //               whatever: $('[name="whateverNameAttributeInYourForm"]').val()
                    //           };
                    //        }
                    //      */
                    // },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: '用户名由数字字母下划线和.组成'
                    }
                }
            },
            password: {
                message: '密码无法验证',
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 16,
                        message: '用户名长度必须在6到16之间'
                    },
                    different: {//不能和用户名相同
                        field: 'username',//需要进行比较的input name值
                        message: '不能和用户名相同'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: '密码由数字字母下划线和.组成'
                    }
                }
            }

        }
    })
        .on('success.form.bv', function (e) {//点击提交之后
            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data 提交至form标签中的action，result自定义
            $.post($form.attr('action'), $form.serialize(), function (data) {
                var data =JSON.parse(data);
                if(data.isStatus){
                    
                    // alert(data.message);
                    var time =5;
                    var counTime = setInterval(function(){
                        $("#myContent").html('<span class="glyphicon glyphicon-ok"></span><span>登录成功，页面将在'+time+'秒后跳转<span> <a href="./perCenter.php">立即跳转</a>');
                        $('#myModal').modal('show');
                        time--;
                        if(time==0){
                            clearInterval(counTime);
                            //跳转页面
                            location.href="./perCenter.php"; 
                        }
                    },1000);
                }else{
                    $("#myContent").html('<span class="glyphicon glyphicon-remove"></span><span>登录失败，请重新登录</span>');  
                    $('#myModal').modal('show'); 
                }
                //do something... 
               
            });
        });
}); 