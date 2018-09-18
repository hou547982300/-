$(function () {/* 文档加载，执行一个函数*/
    //填写申请借款类型
   var applyNum = location.href.split("=")[1];
   console.log(applyNum);
    $("#bidRequeststyle").val(applyNum); 
    $('#borrow_apply').bootstrapValidator({
        message: '未能成功匹配到该用户',
        feedbackIcons: {/*input状态样式图片*/
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {/*验证：规则*/
            bidRequestAmount: {//验证input项：验证规则
                validators: {
                    notEmpty: {//非空验证：提示消息
                        message: '金额不能为空'
                    }, 
                    stringLength: {
                        min: 1,
                        max: 5,
                        message: '金额必须在1到5之间'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: '金额由数字组成'
                    }
                }
            },
            //借款类型
            bidRequeststyle:{
                validators: {
                    notEmpty: {
                        message: '借款类型必须选中一项'
                    }
                }
            }
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
                    $("#myContent").html(`<span class="glyphicon glyphicon-ok"></span>登录成功，页面将在<span id='num'>5</span>秒后跳转 <a href="./perCenter.php">立即跳转</a>`);
                    var time =5;
                    var counTime = setInterval(function(){
                        time--;
                        $('#num').text(time);
                        if(time==0){
                            clearInterval(counTime);
                            //跳转页面
                            location.href="./perCenter.php";
                        }
                    },1000);
                }else{
                    $("#myContent").html('<span class="glyphicon glyphicon-remove"></span><span>登录失败，请重新登录</span>');  
                }
                $('#myModal').modal('show');
                //do something... 
               
            }); 
        });
}); 