<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-25 12:27:20
         compiled from "/web/www/hrPlatform/Lib/User/Tpl/User/companyRegister.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2009007083549b92284ae165-09445794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a99c7064e744cbe05e35bcd44d37ea4445c984a' => 
    array (
      0 => '/web/www/hrPlatform/Lib/User/Tpl/User/companyRegister.tpl',
      1 => 1419481637,
    ),
  ),
  'nocache_hash' => '2009007083549b92284ae165-09445794',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<style>
.companyReWarp{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;
}
.companyResectionRight{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;  

    background-color: yellow;  
}
.companyResectionLeft{
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
    width: 100%;
  /*  border: solid 1px red;*/
}
.reContentWarp{
    /*border: solid 1px red;*/
width: 500px;
margin: 0 auto;

height: 450px;
background-color: rgb(250,250,250);

padding-left: 25px;
padding-right: 25px;
}

.reTitle{
    text-align: center;
/*border: solid 1px red;*/
font-size: 24px;
font-weight: bold;
height: 60px;
line-height: 60px;
margin-bottom: 15px;

border-bottom: solid 2px rgb(71,135,191);


}
.reContent{

}
.form-group label{
    font-size: 18px;
}

#exampleInputEmail1{
    width: 80%;
}
#exampleInputPassword1{
    width: 80%;   
}
.alert-danger{
    display: none;
}

</style>

<section>
<div style="border: solid 1px #ccc;width: 1170px; margin: 0 auto;">

<article class="companyReWarp">
    <section class="companyResectionLeft">
        <div class="reContentWarp">
            <div style=" height: 60px;">
                <div class="alert alert-danger" role="alert">错误报告</div>
            </div>

             <div class="reTitle">企业注册</div>
                 <div class="reContent">

                    <form role="form">
                      <div class="form-group">
                        <label for="exampleInputEmail1">邮箱</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入邮箱">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">密码</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码">
                      </div>
                      <div class="checkbox">
                        <label style="font-size: 14px;color: rgb(81,87,74); font-weight: bold;">
                          <input type="checkbox">我已阅读并同意相关协议
                        </label>
                      </div>
                      <button type="button" id="btnRegister" style=" width: 120px;height: 40px;
    line-height: 20px;" class="btn btn-primary btn-lg">注&nbsp;&nbsp;册</button>
                    </form>

                 </div>
            </div>
    </section>



    <section class="companyResectionRight"></section>

</article>

</div>
</section>
<script>
  $(function(){
    $("#btnRegister").click(function(event) {
      /* Act on the event */

      userRegister();

    });

    function userRegister(){

      $.ajax({
         type: "get",
         url: "<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/companyRegisterAjax",
         data: {
          email:$("#exampleInputEmail1").val(),
          password:$("#exampleInputPassword1").val(),

         },

         success: function(res){
            alert(res);

            if(res == 0){

              alert('注册成功！')

              return false;
            } else if(res == 1002){

              alert('邮箱已注册!');

              return false;
            }
         },
         error: function(){
          alert("网络异常");
         }
      });
    }


  })


</script>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
