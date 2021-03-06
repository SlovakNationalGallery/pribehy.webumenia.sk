<!DOCTYPE HTML>
<html lang="sk">
<head>
    <!-- ========= 
    Title and Metas 
    ========= -->
    <meta charset="utf-8">
    <title>Príbehy umenia</title>
    <meta name="keywords" content="sng, digitalizácia">
    <meta name="author" content="lab.SNG">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <meta property="og:title" content="Príbehy umenia" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ URL::to('/') }}" />
    <meta property="og:image" content="{{ URL::to('/img/og-image.jpg') }}" />

    <!-- ========= 
    Favicons 
    ========= -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">

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

    <script type="text/javascript">
    WebFontConfig = { fontdeck: { id: '{{ Config::get('app.fontdeck_id') }}' } };

    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
    </script>    
    
</head>

<body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1429726730641216&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

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
                        <p><a href="http://www.sng.sk" target="_blank">Slovenská národná galéria</a> pripravuje sériu dokumentov o výtvarných dielach zo slovenských zbierkotvorných galérií. Chceme ukázať, že umelecké diela sú nielen fyzickými artefaktmi, ale aj odrazom doby a kontextu, v ktorom vznikli. Okrem výpovedí autorov a vlastníkov diel nás zaujímajú aj autentické a doteraz nezverejnené príbehy ľudí. Ak poznáte okolnosti vzniku diela, prípadne miesta a ľudí zobrazených na diele, podeľte sa s nami o svoj príbeh - tie najzaujímavejšie sa stanú súčasťou dokumentu, ďalšie budeme priebežne zverejňovať ako články na <a href="http://www.webumenia.sk" target="_blank">Webe umenia</a>.</p>
                        <p>
                        Môžete sa inšpirovať napríklad zbierkou <a href="http://webumenia.sk/web/guest/photo/-/staticresults?orderBy=RELEVANCE&page=1&items=28&query=&layout=gridLayout&images=true&searchFor=data" target="blank">fotografií</a> alebo <a href="http://webumenia.sk/web/guest/painting/-/staticresults?orderBy=RELEVANCE&page=1&items=28&query=&layout=gridLayout&images=true&searchFor=data" target="blank">malieb</a>.</p>
                        <div class="shareon-container text-right">
                            <div class="fb-like" data-href="http://pribehy.webumenia.sk/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                            &nbsp;
                            <a href="https://twitter.com/share" class="twitter-share-button" data-count="true">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        </div>
                    </div>
                    <div class="about-video eight columns">
                        <div class="video-container">
                            <iframe src="//www.youtube.com/embed/QW6k75u0oWA?autohide=1&showinfo=0&rel=0&theme=light&vq=hd720"  allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <hr class="dividerline"/>

                    <!-- ABOUT - example -->
                    <div class="sixteen columns examples">
                        <h5>Diela vo videu</h5>
                    </div>

                    <ul class="grid cs-style-3">
                    @foreach ($examples as $example)
                    
                         <a href="/img/thumbs/orig/{{{ $example['img'] }}}.jpg" class="magnific-popup" title="{{{ $example['name'] }}}" data-source="{{{ $example['url'] }}}" >
                            <li class="four columns painting ">
                                <figure>
                                    <img src="/img/thumbs/{{{ $example['img'] }}}.jpg" alt="{{{ $example['author'] . ' - ' . $example['name'] }}}"/>
                                    <figcaption>
                                        <h5 class="white">{{{ $example['author'] }}}</h5>
                                        <span>{{{ $example['name'] }}}</span>                                   
                                    </figcaption>
                                </figure>
                            </li>
                        </a>
                    @endforeach
                    </ul>

                    <div class="sixteen columns examples">
                        <p style="margin-top: 30px"><a href="http://www.webumenia.sk" target="_blank" class="button" style="margin:0 auto;" >ďaľších 18 497 diel na webe umenia</a></p>
                    </div>

                    <hr class="dividerline"/>

                    <div class="fb-container eight columns" id="post">
                        <div id="fb-root"></div> <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-post" data-href="https://www.facebook.com/media/set/?set=a.853803391330503.1073741827.464283703615809&amp;type=1" data-width="466"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/media/set/?set=a.853803391330503.1073741827.464283703615809&amp;type=1">Post</a> by <a href="https://www.facebook.com/webumenia.sk">Web umenia</a>.</div></div> 
                    </div>

                    <div id="surveyMonkeyInfo" class="eight columns">
                        <h5>Váš príbeh</h5>
                        <!-- <div><script src="https://www.surveymonkey.com/jsEmbed.aspx?sm=y2yCZIbeeUuiurya1qtXzw_3d_3d"> </script></div> -->
                        <iframe id="sm_e_s" src="./survey.php" width="460" height="330" style="border:0px;overflow:hidden;height:580px;width:100%" frameborder="0" allowtransparency="true" scrolling="no" seamless="seamless"></iframe>
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
                            tento web je <a href="https://github.com/SlovakNationalGallery/pribehy.webumenia.sk" target="_blank" class="external">open source</a>
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
    <script src="js/autoresizeFbPost.js"></script>
    <script src="js/retina.js"></script>

    <!-- magnific-popup  -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#sm_e_s').load(function(){
                $("#sm_e_s").contents().find("#NextButton").val('Odoslať');                
                var $head = $("#sm_e_s").contents().find("head");                
                $head.append($("<link/>", 
                    { rel: "stylesheet", href: "{{ URL::to('css/style.css') }}", type: "text/css" }
                ));                    
                // var iheight = $("#sm_e_s").contents().find("#frmS").innerHeight;
                // $("#sm_e_s").css('height', iheight);
            });            
            
            $('.grid').magnificPopup({
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

            $('#post').autoResizeFbPost();
        });
    </script>

</body>
</html>