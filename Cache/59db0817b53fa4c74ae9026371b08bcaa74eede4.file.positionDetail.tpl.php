<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-22 14:04:54
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Position/Tpl/Position/positionDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13171975125497b4861dbfb2-78265985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59db0817b53fa4c74ae9026371b08bcaa74eede4' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Position/Tpl/Position/positionDetail.tpl',
      1 => 1419228291,
    ),
  ),
  'nocache_hash' => '13171975125497b4861dbfb2-78265985',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<style>
.wrapSearch{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;
}
.sectionRight{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;
    /*background-color: yellow;*/
    /*width: 100%;*/
    padding-left: 20px;
    
}
.sectionLeft{
    background:#fff;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
    background-color: rgb(250,250,250);
    width:700px;
    padding-left: 30px;
}
.postionLabel{
    height: 50px;
    font-size: 22px;
    line-height: 50px;
    color: rgb(44,62,80);
    margin-top: 45px;
}
.titleBorder{
    border-bottom: solid 5px rgb(71,135,191);
}
.otherBorder{
    /*border-bottom: solid 2px rgb(71,135,191);*/
    color: rgb(49,49,49);
    padding-right: 10px;
}   
.table{
    border: solid 1px rgb(221,221,221);
    margin-top: 30px;    
}
.table tr td {
        border: solid 1px rgb(221,221,221);
        color:rgb(44,62,80);
        
}
.job_description{
   /* border: solid 1px red;*/
}

.onlineResume{
     height: 60px; 
     line-height: 60px; 
     background-color: rgb(242,242,242); 
     font-weight: bold; 
     text-indent: 20px;
     margin-top: 20px;
}
.resumeBtn{
    height: 45px;
    width: 110px;
    border: none;
    font-weight: bold;
    color: #fff;
    font-size: 24px;
    background-color: rgb(71,135,191);
    margin-top: 50px;
}

.companyBorder{
    border-bottom: solid 3px rgb(71,135,191);
}
.companyDiv{
     height: 80px;
     line-height: 80px;
     font-size: 24px;
     text-align: center;
}
.companyOtherDiv{
    height: 45px;
    line-height: 45px;
}


</style>

<section>
<div style=" min-height: 35em; border: solid 1px #ccc;width: 1170px; margin: 0 auto;">

<article class="wrapSearch">
    <section class="sectionLeft">
        <div class="postionLabel"><b class="titleBorder">职位名称:</b>&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('position_label')->value;?>
</div>

            <table class="table">
                <tr>
                    <td><b class="otherBorder">薪资:</b><?php echo $_smarty_tpl->getVariable('salary_range')->value;?>
</td>
                    <td><b class="otherBorder">学历:</b><?php echo $_smarty_tpl->getVariable('formal_schooling')->value;?>
</td>
                </tr>
                <tr>
                    <td><b class="otherBorder">工作经验:</b><?php echo $_smarty_tpl->getVariable('work_year')->value;?>
</td>
                    <td><b class="otherBorder">工作地点:</b><?php echo $_smarty_tpl->getVariable('working_place')->value;?>
</td>
                </tr>
                <tr>
                    <td><b class="otherBorder">发布时间:</b><?php echo $_smarty_tpl->getVariable('created_at')->value;?>
</td>
                    <td><b class="otherBorder">更新时间:</b><?php echo $_smarty_tpl->getVariable('updated_at')->value;?>
</td>
                </tr>
            </table>

        <div class="job_description">
            <?php echo $_smarty_tpl->getVariable('job_description')->value;?>

        </div>

        <div class="onlineResume">可在线投递简历</div>

        <div style="text-align: right;">
            <button type="button" class="resumeBtn">投简历</button>
        </div>
        <div style=" height: 40px;"></div>
    </section>

    <section class="sectionRight">

        <div class="companyDiv">
            <b class="companyBorder">公司名称:</b>
        </div>

        <div class="companyOtherDiv">
            <b>领域:</b>
        </div>
        <div class="companyOtherDiv">
            <b>规模:</b>
        </div>
        <div class="companyOtherDiv">
            <b>主页:</b>
        </div>

        <div class="companyOtherDiv">
            <b>公司地址:</b>
        </div>

    </section>

</article>

</div>
</section>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>