<?php /* Smarty version Smarty-3.1.13, created on 2016-11-14 16:12:06
         compiled from "C:\xampp\htdocs\works.ge\html\themes\default\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202758297eba46e645-76504895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21d1aa819aa79366157a5154643cd2957b7dbcf4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\works.ge\\html\\themes\\default\\templates\\main_page.tpl',
      1 => 1479136243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202758297eba46e645-76504895',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58297eba63b5a5_17724284',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58297eba63b5a5_17724284')) {function content_58297eba63b5a5_17724284($_smarty_tpl) {?><div class="row">
    <!--Header (bg image, title, Search form)-->
<div id="header">
    <h1 class="font-title">ყველა ვაკანსია ერთ საიტზე</h1>


    <div class="home-search">

        <form action="" id="search-form">

            <div class="search-form clearfix">

                    <div class="select" id="category">
                        <h3 class="icon-menu_15 select-title">აირჩიე კატეგორია</h3>
                        <ul class="Scrollbar">
                            <li attr-id="1">თბილისი</li>
                            <li attr-id="2">შიდა ქართლი</li>
                            <li attr-id="3">ქვემო ქართლი</li>
                            <li attr-id="4">თბილისი</li>
                            <li attr-id="5">შიდა ქართლი</li>
                            <li attr-id="6">ქვემო ქართლი</li>
                        </ul>
                        <input type="hidden" name="category" value="">
                    </div>


                    <div class="select" id="location">
                        <h3 class="icon-menu_15 select-title">აირჩიე კატეგორია</h3>
                        <ul class="Scrollbar">
                            <li attr-id="1">თბილისი</li>
                            <li attr-id="2">შიდა ქართლი</li>
                            <li attr-id="3">ქვემო ქართლი</li>
                            <li attr-id="4">თბილისი</li>
                            <li attr-id="5">შიდა ქართლი</li>
                            <li attr-id="6">ქვემო ქართლი</li>
                        </ul>
                        <input type="hidden" name="location" value="">
                    </div>


                    <div class="clearfix" id="search-value">
                        <div class="search-value clearfix">
                            <input type="text" name="search" class="search-input" placeholder="პროფესია, ქალაქი, კომპანია" value="" autocomplete="off">
                            <div class="checkbox" data-line="ძიება სათაურის მიხედვით">
                                <a href="#">
                                <span class="fa fa-check"></span>
                                </a>
                                <input type="checkbox" name="title" class="custom-checkbox" />
                            </div>
                        </div>
                        <a class="font-title search-button"><i class="icon-menu_18"></i> ძიება</a>
                    </div>


            </div>


            <div class="detail-search clearfix">
                <a href="#" class="col-md-4 left"><span>სულ 2348 განხადება</span> <i class="icon-menu_15"></i></a>
                <a href="#" class="col-md-4 center"><span>მოიძებნა 437 რეზულტატი</span> <i class="icon-menu_15"></i></a>
                <a href="#" class="col-md-4 right detail-search-btn">დეტალური ძებნა <i class=""></i></a>
            </div>

            <div class="detailed">


                <div class="checkbox-row clearfix">
                    <div class="checkbox">
                        <a href="#"><span class="fa fa-check"></span> <i class="icon-menu_42"></i>  <label>სტუდენტებზე</label></a>
                        <input type="checkbox" name="field1" class="custom-checkbox" />
                    </div>
                    <div class="checkbox" >
                        <a href="#"><span class="fa fa-check"></span> <i class="icon-menu_43"></i>  <label>შშმპ პირებზე</label></a>
                        <input type="checkbox" name="field2" class="custom-checkbox" />
                    </div>
                    <div class="checkbox" >
                        <a href="#"><span class="fa fa-check"></span> <label>სტაჟირება</label></a>
                        <input type="checkbox" name="field3" class="custom-checkbox" />
                    </div>
                    <div class="checkbox" >
                        <a href="#"><span class="fa fa-check"></span>  <label>მოხალისე</label></a>
                        <input type="checkbox" name="field4" class="custom-checkbox" />
                    </div>
                </div>

                <div class="selectbox-row">

                    <span>ხელფასი</span>

                    <div class="select price-from">
                        <h3 class="icon-menu_15 select-title">დან</h3>
                        <ul class="Scrollbar">
                            <li attr-id="1">200</li>
                            <li attr-id="2">300</li>
                            <li attr-id="3">400</li>
                        </ul>
                        <input type="hidden" name="category" value="">
                    </div>

                    <div class="select price-to">
                        <h3 class="icon-menu_15 select-title">მდე</h3>
                        <ul class="Scrollbar">
                            <li attr-id="1">200</li>
                            <li attr-id="2">300</li>
                            <li attr-id="3">400</li>
                        </ul>
                        <input type="hidden" name="category" value="">
                    </div>

                    <div class="select time">
                        <h3 class="icon-menu_15 select-title">სამუშაო განაკვეთი</h3>
                        <ul>
                            <li attr-id="1">სრული</li>
                            <li attr-id="2">ნახევარი</li>
                        </ul>
                        <input type="hidden" name="category" value="">
                    </div>

                    <div class="select experience">
                        <h3 class="icon-menu_15 select-title">გამოცდილება</h3>
                        <ul>
                            <li attr-id="1">სრული</li>
                            <li attr-id="2">ნახევარი</li>
                        </ul>
                        <input type="hidden" name="category" value="">
                    </div>

                    <div class="select education">
                        <h3 class="icon-menu_15 select-title">განათლება</h3>
                        <ul>
                            <li attr-id="1">საშუალო</li>
                            <li attr-id="2">უმაღესი</li>
                        </ul>
                        <input type="hidden" name="category" value="">
                    </div>
                </div>
            </div>

        </form>
    </div>

</div>

<!--Filters-->
<div id="filters">
    <ul class="wrap clearfix">
       <li class="active"><a href="#"><i class="icon-menu_23"></i> ყველა</a></li>
       <li><a href="#"><i class="icon-menu_22"></i> ვაკანსიები</a></li>
       <li><a href="#"><i class="icon-menu_20"></i> ტრენინგები</a></li>
       <li><a href="#"><i class="icon-menu_19"></i> ტენდერები</a></li>
       <li><a href="#"><i class="icon-menu_21"></i> ივენთები</a></li>
    </ul>
</div>



<!--Categories-->
<div id="categories">
    <h2 class="s-title font-title">კატეგორიები</h2>

            <ul class="categories clearfix">
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>სილამაზე/ესთეტიკური</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>სასტუმრო/რესტორანი/კვება </span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>სასტუმრო/რესტორანი/კვება </span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                    </ul>
            <ul class="categories clearfix">
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ლოჯისტიკა/ტრანსპორტი</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ინფორმაციული</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>სასტუმრო/რესტორანი/კვება </span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                    </ul>
            <ul class="categories clearfix">
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ლოჯისტიკა/ტრანსპორტი</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>სასტუმრო/რესტორანი/კვება </span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>სილამაზე/ესთეტიკური</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                    </ul>
            <ul class="categories clearfix">
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ინფორმაციული</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ინფორმაციული</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ინფორმაციული</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                    </ul>
            <ul class="categories clearfix">
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>სილამაზე/ესთეტიკური</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ინფორმაციული</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ლოჯისტიკა/ტრანსპორტი</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                    </ul>
            <ul class="categories clearfix">
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>სასტუმრო/რესტორანი/კვება </span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ლოჯისტიკა/ტრანსპორტი</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ინფორმაციული</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                    </ul>
            <ul class="categories clearfix">
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ინფორმაციული</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ლოჯისტიკა/ტრანსპორტი</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>სილამაზე/ესთეტიკური</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                    </ul>
            <ul class="categories clearfix">
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ლოჯისტიკა/ტრანსპორტი</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>სილამაზე/ესთეტიკური</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ლოჯისტიკა/ტრანსპორტი</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                    </ul>
            <ul class="categories clearfix">
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ლოჯისტიკა/ტრანსპორტი</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ინფორმაციული</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                        <li class="col-md-4 clearfix">
                <a href="#">
                    <span>ინფორმაციული</span>
                    <i class="count">278</i>
                    <p>დეტალურად <i class="icon-menu_14"></i></p>
                </a>
            </li>
                    </ul>
    </div>


<!--Regions/Map -->

<div id="regions">
    <h2 class="s-title font-title">რეგიონები</h2>

    <div class="wrap clearfix">
    
        <!--Left Bar-->
        <div class="col-md-2 regions">
            <ul class="Scrollbar mCS-dir-rtl">
                                    <li class="active"><a href=""><i class="icon-menu_1"></i>ყველა</a></li>
                                    <li class=""><a href=""><i class="icon-menu_2"></i>თბილისი</a></li>
                                    <li class=""><a href=""><i class="icon-menu_3"></i>შიდა ქართლი</a></li>
                                    <li class=""><a href=""><i class="icon-menu_4"></i>იმერეთი</a></li>
                                    <li class=""><a href=""><i class="icon-menu_5"></i>მცხეთა-მთიანეთი</a></li>
                                    <li class=""><a href=""><i class="icon-menu_6"></i>თბილისი</a></li>
                                    <li class=""><a href=""><i class="icon-menu_7"></i>შიდა ქართლი</a></li>
                                    <li class=""><a href=""><i class="icon-menu_8"></i>იმერეთი</a></li>
                                    <li class=""><a href=""><i class="icon-menu_9"></i>მცხეთა-მთიანეთი</a></li>
                                    <li class=""><a href=""><i class="icon-menu_10"></i>თბილისი</a></li>
                                    <li class=""><a href=""><i class="icon-menu_11"></i>შიდა ქართლი</a></li>
                                    <li class=""><a href=""><i class="icon-menu_12"></i>იმერეთი</a></li>
                                    <li class=""><a href=""><i class="icon-menu_13"></i>თბილისი</a></li>
                            </ul>
        </div>

        <div class="col-md-8 map-wrap">
            <div id="map"></div>
        </div>


        <ul class="filters">
            <li class="active"><a href="#"><i class="icon-menu_23"></i></a></li>
            <li><a href="#" class="icon-menu_22"></a></li>
            <li><a href="#" class="icon-menu_20"></a></li>
            <li><a href="#" class="icon-menu_19"></a></li>
            <li><a href="#" class="icon-menu_21"></a></li>
        </ul>

    </div>
</div>



    <!-- map -->
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/maps/js/georgiaLow.js"></script>

    <!-- amCharts javascript code -->
    <script type="text/javascript">
        AmCharts.makeChart("map",{
            "type": "map",
            "pathToImages": "http://www.amcharts.com/lib/3/images/",
            "addClassNames": true,
            "fontSize": 15,
            "color": "#000000",
            "projection": "mercator",
            "backgroundAlpha": 1,
            "backgroundColor": "rgba(227,227,227,0)",
            "dataProvider": {
                "map": "georgiaLow",
                "getAreasFromMap": true,
                "images": [

                    {
                        "selectable": true,
                        "title": "იმერეთი 235 ვაკანსია",
                        "longitude": 42.9202,
                        "latitude": 42.1354,
                        "svgPath": "m197.5,187.5c0,-7.73481 6.26519,-14 14,-14c7.73481,0 14,6.26519 14,14c0,7.73481 -6.26519,14 -14,14c-7.73481,0 -14,-6.26519 -14,-14z",
                        "color": "rgba(25,130,198,1)",
                        "url": "http://work.ge",
                        "scale": 1.4
                    }


                ],
                "areas": [
                    {
                        "id": "GE-AB",
                        "title": "აფხაზეთი",
                        "color": "rgba(15,99,153,1)"
                    },
                    {
                        "id": "GE-AJ",
                        "title": "აჭარა",
                        "color": "rgba(15,99,153,1)"
                    },
                    {
                        "id": "GE-GU",
                        "title": "გურია",
                        "color": "rgba(15,99,153,1)"
                    },
                    {
                        "id": "GE-IM",
                        "title": "იმერეთი",
                        "color": "rgba(15,99,153,1)"
                    },
                    {
                        "id": "GE-KA",
                        "title": "კახეთი",
                        "color": "rgba(15,99,153,1)"
                    },
                    {
                        "id": "GE-KK",
                        "title": "ქვემო ქართლი",
                        "color": "rgba(15,99,153,1)"
                    },
                    {
                        "id": "GE-MM",
                        "title": "მცხეთა-მთიანეთი",
                        "color": "rgba(15,99,153,1)"
                    },
                    {
                        "id": "GE-RL",
                        "title": "რაჭა-ლეჩხუმი-ზემო სვანეთი",
                        "color": "rgba(15,99,153,1)"
                    },
                    {
                        "id": "GE-SJ",
                        "title": "სამცხე-ჯავახეთი",
                        "color": "rgba(15,99,153,1)"
                    },
                    {
                        "id": "GE-SK",
                        "title": "შიდა ქართლი",
                        "color": "rgba(15,99,153,1)"
                    },
                    {
                        "id": "GE-SZ",
                        "title": "სამეგრელო-ზემო სვანეთი",
                        "color": "rgba(15,99,153,1)"
                    },
                    {
                        "id": "GE-TB",
                        "title": "თბილისი",
                        "color": "rgba(15,99,153,1)"
                    }
                ]
            },
            "balloon": {
                "horizontalPadding": 15,
                "border": 0,
                "cornerRadius": 4,
                "fillAlpha": 1,
                "borderThickness": 0,
                "verticalPadding": 15
            },
            "areasSettings": {
                "color": "rgba(15,99,153,1)",
                "outlineColor": "rgba(227,227,227,1)",
                "rollOverOutlineColor": "rgba(227,227,227,1)",
                "rollOverBrightness": 20,
                "selectedBrightness": 20,
                "selectable": false,
                "unlistedAreasAlpha": 0,
                "unlistedAreasOutlineAlpha": 0
            },
            "imagesSettings": {
                "alpha": 1,
                "color": "rgba(15,99,153,1)",
                "outlineAlpha": 0,
                "rollOverOutlineAlpha": 0,
                "outlineColor": "rgba(227,227,227,1)",
                "rollOverBrightness": 20,
                "selectedBrightness": 20,
                "selectable": true
            },
            "linesSettings": {
                "color": "rgba(15,99,153,1)",
                "selectable": true,
                "rollOverBrightness": 20,
                "selectedBrightness": 20
            },
            "zoomControl": {
                "zoomControlEnabled": false,
                "homeButtonEnabled": false,
                "panControlEnabled": false,
                "right": 38,
                "bottom": 30,
                "minZoomLevel": 0.225,
                "gridHeight": 100,
                "gridAlpha": 0.1,
                "gridBackgroundAlpha": 0,
                "gridColor": "#FFFFFF",
                "draggerAlpha": 1,
                "buttonCornerRadius": 2
            }
        });
    </script>
    <!--map end -->




<!--Partners -->


<div id="partners">
    <h2 class="s-title font-title">ტოპ კომპანიები</h2>
    <div class="slider wrap">

        <div class="clearfix list-ul">
            <div class="list-wrap">
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                            </div>
        </div>

        <div class="clearfix list-ul">
            <div class="list-wrap">
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/2.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/2.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/2.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/2.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/2.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/2.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/2.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/2.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/2.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/2.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/2.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/2.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                            </div>
        </div>

        <div class="clearfix list-ul">
            <div class="list-wrap">
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                                    <div class="item">
                        <a href="">
                            <div class="info">
                                <img src="assets/images/partners/1.png" alt="" title="" />
                                <h3>ვივუს</h3>
                                <h4>15 ვაკანსია</h4>
                            </div>
                        </a>
                    </div>
                            </div>
        </div>
    </div>
</div>

<!--Last News-->
<div id="news-last">
    <h2 class="s-title font-title">ბოლო სიახლეები</h2>
    <ul class="wrap clearfix">
        <li>
            <div class="author clearfix">
                <a href="">
                    <div class="image fl" style="background: url('assets/images/users/1.png') no-repeat center center;"></div>
                    <div class="user fl">
                        <span>ავტორი</span>
                        <h6 class="font-title">მარიამ მაისურაძე</h6>
                    </div>
                    <span class="post-duration fr">10 წუთის საკითხავი</span>
                </a>
            </div>
            <img src="assets/images/news/1.png" class="main-image" alt="" title="" />
            <div class="description">
                <a href="">
                    <h4 class="font-title">წუთი, რომელიც არ დაგვავიწყდება</h4>
                    <p>ლორემ იპსუმ დაგენგრეოდა გეწამა ფაზებმა დაგითმობთ მონაპოვარსაც, სისტემატიურად ჩაწვდეს, ბასილ თანხმობა, წერაც უხმარია. </p>
                    <a href="#" class="read-more">დეტალურად</a>
                </a>
            </div>
        </li>

        <li>
            <div class="author clearfix">
                <a href="">
                    <div class="image fl" style="background: url('assets/images/users/1.png') no-repeat center center;"></div>
                    <div class="user fl">
                        <span>ავტორი</span>
                        <h6 class="font-title">მარიამ მაისურაძე</h6>
                    </div>
                    <span class="post-duration fr">10 წუთის საკითხავი</span>
                </a>
            </div>
            <img src="assets/images/news/1.png" class="main-image" alt="" title="" />
            <div class="description">
                <a href="">
                    <h4 class="font-title">წუთი, რომელიც არ დაგვავიწყდება</h4>
                    <p>ლორემ იპსუმ დაგენგრეოდა გეწამა ფაზებმა დაგითმობთ მონაპოვარსაც, სისტემატიურად ჩაწვდეს, ბასილ თანხმობა, წერაც უხმარია. </p>
                    <a href="#" class="read-more">დეტალურად</a>
                </a>
            </div>
        </li>

        <li>
            <div class="author clearfix">
                <a href="">
                    <div class="image fl" style="background: url('assets/images/users/1.png') no-repeat center center;"></div>
                    <div class="user fl">
                        <span>ავტორი</span>
                        <h6 class="font-title">მარიამ მაისურაძე</h6>
                    </div>
                    <span class="post-duration fr">10 წუთის საკითხავი</span>
                </a>
            </div>
            <img src="assets/images/news/1.png" class="main-image" alt="" title="" />
            <div class="description">
                <a href="">
                    <h4 class="font-title">წუთი, რომელიც არ დაგვავიწყდება</h4>
                    <p>ლორემ იპსუმ დაგენგრეოდა გეწამა ფაზებმა დაგითმობთ მონაპოვარსაც, სისტემატიურად ჩაწვდეს, ბასილ თანხმობა, წერაც უხმარია. </p>
                    <a href="#" class="read-more">დეტალურად</a>
                </a>
            </div>
        </li>

    </ul>
</div>

<!--review-->

<div id="review">
    <h2 class="s-title font-title">
        რას ამბობენ ჩვენზე
        <i class="font-baskervill">“</i>
    </h2>

    <div class="slider wrap">
       <div class="item">
           <div class="info">
               <img src="assets/images/partners/1.png" alt="" title="" />
               <p>ლორემ იპსუმ დაგენგრეოდა გეწამა ფაზებმა დაგითმობთ მონაპოვარსაც, სისტემატიურად ჩაწვდეს, ბასილ თანხმობა, წერაც უხმარია. </p>
               <h4>ნინო იმერლიშვილი HR მენეჯერი</h4>
           </div>
       </div>
        <div class="item">
            <div class="info">
                <img src="assets/images/partners/1.png" alt="" title="" />
                <p>ლორემ იპსუმ დაგენგრეოდა გეწამა ფაზებმა დაგითმობთ მონაპოვარსაც, სისტემატიურად ჩაწვდეს, ბასილ თანხმობა, წერაც უხმარია. </p>
                <h4 class="font-title">ნინო იმერლიშვილი HR მენეჯერი</h4>
            </div>
        </div>
    </div>

    <ul class="users clearfix">
        <li class="active" style="background: url('assets/images/users/1.png') no-repeat center center;"></li>
        <li style="background: url('assets/images/users/1.png') no-repeat center center;"></li>
        <li style="background: url('assets/images/users/1.png') no-repeat center center;"></li>
        <li style="background: url('assets/images/users/1.png') no-repeat center center;"></li>
        <li style="background: url('assets/images/users/1.png') no-repeat center center;"></li>
        <li style="background: url('assets/images/users/1.png') no-repeat center center;"></li>
    </ul>
</div>




<!--employed-->

<div id="employed">
    <h2 class="s-title font-title">
        ჩვენგან დასაქმებულები
    </h2>

    <div class="wrap clearfix">

        <div class="text-wrap">
            <h3 class="font-title">ნინო იმერლიშვილი <span>იურისტი</span></h3>
            <p>
                1996 წლის სექტემბერში, საქართველოში პირველი GSM ოპერატორი - ჯეოსელი დაარსდა, რომელმაც მოკლე ხანში,
            </p>
        </div>


        <div class="image">

        </div>


    </div>

</div>






  </div><?php }} ?>