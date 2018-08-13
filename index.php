<?php
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$lang = JFactory::getLanguage();

$template_url = $this->baseurl . '/templates/' . $this->template;
$doc->addStyleSheet($template_url . '/css/style.css');
$doc->addStyleSheet($template_url . '/css/bootstrap.css');

$is_home_page = $menu->getActive() == $menu->getDefault($lang->getTag());
?>
<!doctype html>
<html>
<head>
    <jdoc:include type="head"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    
</head>
  <body class="container" style="padding: 0px">

   <header>
     
     	<jdoc:include type="modules" name="Search"/>
     
     <a href="/www/mgaon.by/">
      <img src="<?php echo $template_url;?>/images/Head.png" alt="<?php echo  JText::_('TPL_MGAON_LOGO');?>" width="100%" style="width:100%; position: relative;z-index:0;">
     </a>

	</header>
  	<div class="menu-background">    
      <div class="main-navigation">
          <jdoc:include type="modules" name="menu"/>
      </div>
    </div>
  <div class="row marketing" height="100%">
    	<div class="col-md-3">
       
              
          <div class="leftmenu" style="height:100%">                
              <ul class="nav"> 
				
                <li class="leftmenuitem">
                	<a href="http://172.16.209.225:8080/www/mgaon.by/index.php/organizatsiya/normativnye-dokumenty" ><b>Законодательство об административных процедурах</b></a>
                </li>
                <br>
                <li class="leftmenuitem">
                	<a href="http://minsk.gov.by/ru/okno/doc/?k_rn=1" ><b>Сведения о прохождении документов в службе &quot;Одно окно&quot;</b></a>
                </li>
                <br>
                <li class="leftmenuitem">                
                	<a href="https://goo.gl/forms/lpSxxowfNUdarAAc2" ><b>Анкета оценки работы службы &quot;Одно окно&quot;</b></a>
                </li>
                <br>
                                <li class="leftmenuitem">
                	<a href="http://172.16.209.225:8080/www/mgaon.by/admprocedure.html" target="_blank" ><b>Административные процедуры осуществляемые предприятием</b></a>
                </li>
                <br>
				<li class="leftmenuitem">                
                  <a href="http://172.16.209.225:8080/www/mgaon.by/index.php/goryachaya-liniya-mingorispolk"><b>Горячая линия Мингорисполкома</b>             <br>
                      <img style="width:30px;" src="<?php echo $template_url;?>/images/phone-image.png">&nbsp;&nbsp;<b>328 55 66</b></a>
                </li>
                <br>

                <li class="leftmenuitem">
                	<a>Реклама в службе 
                                
                    "Одно окно" и на сайте        
                      <br>
                      <img style="width:30px;" src="<?php echo $template_url;?>/images/phone-image.png">&nbsp;&nbsp;<b>203 65 77</b></a>
                </li>
                <br>
             <!--   <li class="leftmenuitem">
                	<a>Размещение рекламы на сайте
                                <br>
                      <img style="width:30px;" src="<?php echo $template_url;?>/images/phone-image.png">&nbsp;&nbsp;<b>203 49 24</b></a>
                </li>-->
                </ul>
           </div>
          </div>
    <div class="col-md-9">
      <div style="background-color: #eef6fc;  font-family:Arial;  " > 
                <div  >
                  <table align="center" class="mainsubmenu" width="60%">
                    <tr>
                    	<td align="right"><jdoc:include type="modules" name="leftsubmenu"/></td>
                      	<td><jdoc:include type="modules" name="rightsubmenu"/></td>
                    </tr>
                  </table>
                  
							
                  			
							<div class="clear"></div>
				</div>
                <div class="maincontent">
                  <jdoc:include type="message"/>
   				 <jdoc:include type="component"/>
                 <jdoc:include type="modules" name="additionalcontent"/>
                  <br>
                </div>              
              </div>
           </div>
           <div class="col-md-3">
           <div class="rightmenu" >                
              <ul class="nav"> 
                
                </ul>
           </div>
          
          </div>
    	
   </div>
<footer>
  <jdoc:include type="modules" name="jivosite"/>
<table align="center">
<tbody>
<tr>
  	<td>
      © 2017 КУП Минское городское<br> агентство обслуживания  населения &nbsp;
    </td>
	<td>
      <a href="http://president.gov.by"> <img src="<?php echo $template_url;?>/images/Pre.jpg" style="width:100%;" alt="Официальный интернет-портал президента Республики Беларусь" /> </a>	 </td>
	<td>
      	<a title="Официальный портал Минского городского исполнительного комитета, minsk.gov.by" href="http://minsk.gov.by"> <img src="<?php echo $template_url;?>/images/00000-234x60.jpg" alt="
	Официальный портал Минского городского исполнительного комитета, minsk.gov.by"  style="width:100%;" height="60" border="0" /></a></td>
	<td>
      <a href="http://www.pravo.by"><img src="<?php echo $template_url;?>/images/sm_full.aspx_guid=180431476362146.jpg"  style="width:100%;" alt="Национальный правовой Интернет-портал 				Республики Беларусь" border="0" /></a>
  	</td>
	<td>
  		<a href="https://metrika.yandex.ru/stat/?id=41861339&amp;from=informer"
		target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/41861339/3_0_EFEFEFFF_EFEFEFFF_0_pageviews"
		style="width:180px; height:60px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-		 advanced-informer" data-cid="41861339" data-lang="ru" /></a>
  	</td>
  	<td>
  	  ул. Максима Танка, 36 корпус 1<br>
      Приемная: (017) 203 66 34<br>
      Контакт-центр: 142 <br>
	  e-mail: info@mgaon.by
  </td>
  <td>	
    Разработка сайта<br> <a href="https://vk.com/pan017">Ilya Panysh</a>
  </td>
</tr>
</tbody>
</table>
</footer>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41861339 = new Ya.Metrika({
                    id:41861339,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
    	<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'cG109CXkFy';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>
</html>