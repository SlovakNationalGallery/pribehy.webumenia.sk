<!DOCTYPE HTML>
<head>
    <!-- ========= 
    Title and Metas 
    ========= -->
    <meta charset="utf-8">
    <title>Príbehy pre webumenia.sk - výzva pre verejnosť</title>
    <meta name="keywords" content="sng, digitalizácia">
    <meta name="author" content="lab.SNG">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- ========= 
    Favicons 
    ========= -->
    <link rel="shortcut icon" href="/favicon.png">
    
    <!-- ========= 
    Fonts 
    ========= -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <!-- ========= 
    CSS
    ========= -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Media Queries -->  
    <link rel="stylesheet" href="css/media.css">
    <!-- Magnific Popup -->  
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
 
    <!-- ========= 
    JS
    ========= -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>  
    <script type="text/javascript" src="http://code.jquery.com/ui/jquery-ui-git.js"></script>

    <!-- custom jquery -->
    <script src="js/modernizr.custom.js"></script>
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-19030232-5', 'auto');
      ga('send', 'pageview');

    </script>
    
</head>

<body>
    
    <!-- START OF DIV -->  
    <div class="page" >
            
            
    @if(Session::has('message'))
        <p class="center error"><span class="label">{{{ Session::get('message') }}}</span></p>
    @endif

            <!-- MODULE : ABOUT -->
            <section id="about" class="section-container">
                <div class="container">
                    <div class="sixteen columns heading-text">
                        <div class="separator separator-title">
                            <h2 class="separator-mainheader color">Príbehy umenia</h2>
                            <span class="separator-subheader"></span>
                        </div>
                    </div>
                   
                    <div class="eight columns">
                        <h5>Výzva pre verejnosť</h5>
                        <p><a href="http://www.sng.sk" target="_blank">Slovenská národná galéria</a> pripravuje sériu dokumentov o výtvarných dielach zo slovenských zbierkotvorných galérií. Chceme ukázať, že umelecké diela sú nielen fyzickými artefaktmi, ale aj odrazom doby a kontextu v ktorom vznikli. Okrem výpovedí autorov a vlastníkov diel nás zaujímajú aj autentické a doteraz nezverejnené príbehy ľudí. Ak poznáte okolnosti vzniku diela, prípadne miesta a ľudí zobrazených na diele, podeľte sa s nami o svoj príbeh - tie najzaujímavejšie sa stanú súčasťou dokumentu, ďalšie budeme priebežne zverejňovať ako články na <a href="http://www.webumenia.sk" target="_blank">Webe umenia</a>.</p>
                        <p>
                        Môžete sa inšpirovať napríklad zbierkami <a href="http://webumenia.sk/web/guest/photo/-/staticresults?orderBy=RELEVANCE&page=1&items=28&query=&layout=gridLayout&images=true&searchFor=data" target="blank">fotografií</a>, <a href="http://webumenia.sk/web/guest/painting/-/staticresults?orderBy=RELEVANCE&page=1&items=28&query=&layout=gridLayout&images=true&searchFor=data" target="blank">maľbami</a>, alebo <a href="http://dvekrajiny.sng.sk/katalog" target="_blank">obrazmi Slovenska z výstavy Dve krajiny</a>.</p>
                        <p>Svoje príspevky môžete prostredníctvom formulára posielať do <strong>16.11.2014</strong>, autorov najzaujímavejších z nich budeme následne kontaktovať.</p>
                    </div>
                    <div class="about-video eight columns">
                        <iframe src="//www.youtube.com/embed/QW6k75u0oWA?autohide=1&showinfo=0&rel=0&theme=light&vq=hd720" class="video-embed" allowfullscreen></iframe> 
                    </div>

                    <div class="clear"></div>

                    <hr class="dividerline"/>
                    
                    <!-- ABOUT - example -->
                    <div class="eight columns examples">
                        <h5>Diela vo videu</h5>
                        <p>&nbsp;</p>
                        @foreach ($examples as $example)
                        <div class="example-container">
                            <div class="example-icon">
                                <a href="/img/thumbs/orig/{{{ $example['img'] }}}.jpg" class="magnific-popup" title="{{{ $example['name'] }}}" data-source="{{{ $example['url'] }}}" >
                                    <span class="zoom"></span>
                                    <img src="/img/thumbs/{{{ $example['img'] }}}.jpg" alt="example"/>
                                </a>
                            </div>
                            <span class="example-title">{{{ $example['name'] }}}</span>
                            <p><a href="{{{ $example['url'] }}}" target="_blank">viac info na webumenia</a></p>
                        </div>
                        @endforeach

                        <p style="margin-top: 30px"><a href="http://www.webumenia.sk" target="_blank" class="button" style="margin:0 auto;" >ďaľších 18 497 diel na webe umenia</a></p>
                    </div>

                    <div id="surveyMonkeyInfo" class="eight columns">
                        <h5>Váš príbeh</h5>
                        <!-- <div><script src="https://www.surveymonkey.com/jsEmbed.aspx?sm=y2yCZIbeeUuiurya1qtXzw_3d_3d"> </script></div> -->
                        <iframe id="sm_e_s" src="./survey.php" width="460" height="330" style="border:0px;overflow:hidden;height:580px;width:100%" frameborder="0" allowtransparency="true"></iframe>
                    </div>



                </div>
            </section>
            <!-- MODULE : ABOUT --> 
                    
                

           
            <!-- MODULE : FOOTER -->
            <footer id="download">
                <div class="container">
                    <div class="sixteen columns footer-inside">
                        <a href="http://www.webumenia.sk" target="_blank" id="logo"><?php include(public_path().'/img/logo.svg') ?></a>
                    </div>
                 </div>
                 <div class="container">
                    <div class="sixteen columns copyright center">
                        <p class=""> 
                            (2014) <a href="http://lab.sng.sk" target="_blank" class="external">lab.SNG</a> |
                            tento web je <a href="https://github.com/SlovakNationalGallery/vyzva.webumenia.sk" target="_blank" class="external">open source</a>
                        </p>
                    </div>
                </div>
            </footer>
            <!-- MODULE : FOOTER -->      
        <!-- </div> -->
    </div>    
    <!-- END OF DIV -->    

    <!-- ========= 
    JS
    ========= -->

    <!-- Retina Display -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
    <script src="js/retina.js"></script>
    <script type="text/javascript">
        var cssLink = document.createElement("link") 
        cssLink.href = "/css/style.css"; 
        cssLink.rel = "stylesheet"; 
        cssLink.type = "text/css"; 
        // frames['sm_e_s'].document.body.appendChild(cssLink);
        // document.getElementById("sm_e_s").contentDocument(cssLink);
    </script>

    <!-- magnific-popup  -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#sm_e_s').load(function(){
                $("#sm_e_s").contents().find("#NextButton").val('Odoslať');
                // var iheight = $("#sm_e_s").contents().find("#frmS").innerHeight;
                // $("#sm_e_s").css('height', iheight);
            });            
            
            $('.examples').magnificPopup({
              delegate: '.magnific-popup',
              type: 'image',
              closeOnContentClick: false,
              closeBtnInside: false,
              mainClass: 'mfp-with-zoom mfp-img-mobile',
              fixedContentPos: false,              
              image: {
                verticalFit: true,
                titleSrc: function(item) {
                  return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">webumenia</a>';
                }
              },
              gallery: {
                enabled: true,
                tCounter:"%curr% / %total%"
              },
              zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                  return element.find('img');
                }
              }
            });

        });
    </script>

</body>
</html>