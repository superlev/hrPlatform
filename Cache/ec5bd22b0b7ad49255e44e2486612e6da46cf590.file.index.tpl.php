<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-23 11:14:58
         compiled from "/web/www/hrPlatform/Lib/Home/Tpl/Home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1203560354c1bcb2980735-64013482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec5bd22b0b7ad49255e44e2486612e6da46cf590' => 
    array (
      0 => '/web/www/hrPlatform/Lib/Home/Tpl/Home/index.tpl',
      1 => 1421982796,
    ),
  ),
  'nocache_hash' => '1203560354c1bcb2980735-64013482',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<head>
    <!-- Basic Page Needs
  ================================================== -->
    <title>HR Platform</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/category.css">

   

</head>
<body class="third-color" style=" background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/body-bg.jpg');">

    

  
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_headerIndex.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="container header-banner" style="margin-top: 5px;"><!-- main header banner -->

    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_category.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


        <article class="wrapSection">
            <section class="sectionOnea">
                <div style="margin-top: -2px;">
                    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_slide.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
                </div>
            </section>

 <!--            <section class="sectionTwob"></section> -->
        </article>

</div><!-- close main header banner -->

    <!-- About Us Section
    ================================================== -->

<div style="height: 80px;width: 100%;margin-top: 20px; line-height: 80px; font-size: 24px; text-align: center; color: rgb(60,89,86);  border-bottom: solid 1px rgb(216,216,216);
  box-shadow: 0 0 3px rgb(216,216,216);
  -webkit-box-shadow: 0 0 3px rgb(216,216,216);
  -moz-box-shadow: 0 0 3px rgb(216,216,216);">
    新增HR用户
    <b style="color: rgb(255,119,51);"><?php echo $_smarty_tpl->getVariable('user_count')->value;?>
</b>人
    、目前有<b style="color: rgb(255,119,51);"><?php echo $_smarty_tpl->getVariable('allPosition')->value;?>
</b>个职位、今日新增职位<b style="color: rgb(255,119,51);"><?php echo $_smarty_tpl->getVariable('toDay')->value;?>
</b>个

</div>


    <!-- Services Section
    ================================================== -->
    <div class="container page services" id="services">
        <div class="title-borders"><h1 style=" line-height: 0.6em;">产品介绍</h1></div>
        <div class="subtitle">We are a <span class="highlight">creative agency</span> located in San Francisco, California. We’ve won a <span class="highlight">ton of awards</span> and have been featured in all of the magazines.</div>
    </div><!-- close services header -->

    <div class="fullwidth" style=" background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/body-bg.jpg');">
        <div class="container sub-page">
            <div class="one-third column about-text">
                <div class="icon-services-circle"><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/icons/icon-megaphone.png" alt="Creativity" /></div>
                <h3 style=" cursor: pointer" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/pushInfo"'>信息推送</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec libero molestie ipsum dignissim condimentum. Donec at ligula elit. Nunc nec ipsum lectus. Quisque facilisis dolor et elit semper mattis. Vivamus molestie consectetur sem eu luctus. Duis placerat molestie tellus, venenatis blandit eros.</p>
            </div>

            <div class="one-third column about-text">
                <div class="icon-services-circle"><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/icons/icon-cog.png" alt="Creativity" /></div>
                <h3 style=" cursor: pointer" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/servicesCustom"'>服务定制</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec libero molestie ipsum dignissim condimentum. Donec at ligula elit. Nunc nec ipsum lectus. Quisque facilisis dolor et elit semper mattis. Vivamus molestie consectetur sem eu luctus. Duis placerat molestie tellus, venenatis blandit eros.</p>
            </div>

            <div class="one-third column about-text">
                <div class="icon-services-circle"><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/icons/icon-bulb.png" alt="Creativity" /></div>
                <h3 style=" cursor: pointer" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/acurateSearch"'>精准搜索</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec libero molestie ipsum dignissim condimentum. Donec at ligula elit. Nunc nec ipsum lectus. Quisque facilisis dolor et elit semper mattis. Vivamus molestie consectetur sem eu luctus. Duis placerat molestie tellus, venenatis blandit eros.</p>
            </div>
        </div><!-- close container -->
    </div><!-- close services fullwidth -->


    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>