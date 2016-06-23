<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap - Prebuilt Layout</title>
    
    <!-- Bootstrap -->
    <link href="/app/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap.custom.css" rel="stylesheet">
    
    <link href="/app/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/app/Ionicons/css/ionicons.min.css" rel="stylesheet">
    
    <link href="/app/jquery-form-styler/jquery.formstyler.css" rel="stylesheet">
    <link href="/css/jquery.formstyler.custom.css" rel="stylesheet">
    <link href="/css/formstyler.css" rel="stylesheet">
    
    <link href="/css/layout.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>
  
  <body>
  
    <div id="wrap" class="container-fluid">
    
      <div id="carouselCalc" class="carousel slide" data-ride="carousel">
      
        <!-- Indicators -->
        <!--<ol class="carousel-indicators">
          <li data-target="#carouselCalc" data-slide-to="0" class="active"></li>
          <li data-target="#carouselCalc" data-slide-to="1"></li>
          <li data-target="#carouselCalc" data-slide-to="2"></li>
        </ol>-->
        
        <h1 class="carousel-indicators">Калькулятор</h1>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        
          <div class="item parallax" style="background-image:url(/images/14.jpg);" data-speed="4" data-type="background">
            <div class="carousel-caption">
            
              <div class="container">
            	
                <div class="well well-lg">
                  <p class="lead">Ответьте на нескольк овопрос и узнайте примерную стоимость разработки вашего сайта?</p>
                </div>
                
                <br>
                <br>
                
                <div class="btn-group btn-group-lg">
                  <button class="btn btn-warning" type="button">Позже</button>
                  <button class="btn btn-success" type="button">Поехали!</button>
                </div>
                
              </div><!--.container-->
            </div><!--.carousel-caption-->
          </div><!--.item-->
          <div class="item parallax" style="background-image:url(/images/6.jpg);" data-speed="4" data-type="background">
            <div class="carousel-caption">
            
              <div class="container">
            
                <div class="well well-lg">
                  <p class="lead">Выберите тип вашего сайта:</p>
                </div>
                
                <br>
                
                <div class="btn-group-vertical btn-group-lg" data-toggle="buttons" style="min-width:302px;">
                  <label class="btn btn-default" data-loading-text="Loading...">
                    <input type="radio" name="options" id="option1" autocomplete="off"><i class="fa fa-lg ion-android-checkmark-circle"></i> Сайт визитка (Landing Page)
                  </label>
                  <label class="btn btn-default" data-loading-text="Loading...">
                    <input type="radio" name="options" id="option2" autocomplete="off"><i class="fa fa-lg ion-android-checkmark-circle"></i>  Сайт с полным функционалом 
                  </label>
                  <label class="btn btn-default" data-loading-text="Loading...">
                    <input type="radio" name="options" id="option3" autocomplete="off"><i class="fa fa-lg ion-android-checkmark-circle"></i>  Интернет магазин
                  </label>
                </div>
                
                <div class="clearfix"></div>
                <br>
                <br>
                
                <div class="btn-group btn-group-lg">
                  <button class="btn btn-default" type="button" data-target="#carouselCalc" data-slide-to="0"><i class="fa fa-lg ion-backspace-outline"></i> Назад</button>
                  <button class="btn btn-success" type="button">Следующий шаг <i class="fa fa-lg ion-ios-arrow-right"></i></button>
                </div>
                
              </div><!--.container-->
            </div><!--.carousel-caption-->
          </div><!--.item-->
          <div class="item parallax active" style="background-image:url(/images/3.jpg);" data-speed="4" data-type="background">
            <div class="carousel-caption">
            
              <div class="container">
              
                
                <div class="well well-lg">
                  <p class="lead">Выберите дополнительный функционал:</p>
                </div>
                
                <br>
                <br>
                
                <div class="row"><!--xs sm md lg-->
                  <div class="col-sm-6">
                    <h2>CMS</h2>
                    <div class="checkbox text-left">
                      <input type="checkbox" id="ch1">
                      <label for="ch1">1С:Битрикс</label>
                      <br>
                      <input type="checkbox" id="ch2">
                      <label for="ch2">WordPress</label>
                      <br>
                      <input type="checkbox" id="ch3">
                      <label for="ch3">Joomla</label>
                      <br>
                      <input type="checkbox" id="ch3">
                      <label for="ch3">PHP Framework</label>
                    </div>
                    <h2>Модули</h2>
                    <div class="checkbox text-left">
                      <label>
                        <input type="checkbox"> Форма обратной связи (обратного звонка)
                      </label>
                      <br>
                      <label>
                        <input type="checkbox"> Фото галерея
                      </label>
                    </div>
                    
                    <h2>Компоненты</h2>
                    <div class="checkbox text-left">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                      <br>
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                    
                  </div><!--.col-*-->
                  <div class="col-sm-6">
                  
                    <h2>Контент</h2>
                    <div class="checkbox text-left">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                      <br>
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                  
                    <h2>Поддержка</h2>
                    <div class="checkbox text-left">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                      <br>
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                  
                  </div><!--.col-*-->
                </div><!--.row-->
                
                <br>
                <br>
                
                <div class="btn-group btn-group-lg">
                  <button class="btn btn-default" type="button" data-target="#carouselCalc" data-slide-to="1"><i class="fa fa-lg ion-backspace-outline"></i> Назад</button>
                  <button class="btn btn-success" type="button">Следующий шаг <i class="fa fa-lg ion-ios-arrow-right"></i></button>
                </div>
                
              </div><!--.container-->
              
            </div><!--.carousel-caption-->
          </div><!--.item-->
        </div><!--.carousel-inner-->
      
        <!-- Controls -->
        <!--<a class="left carousel-control" href="#carouselCalc" role="button" data-slide="prev">
          <i class="fa fa-3x ion-ios-arrow-left glyphicon-chevron-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselCalc" role="button" data-slide="next">
          <i class="fa fa-3x ion-ios-arrow-right glyphicon-chevron-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>-->
      </div><!--.carousel-->
    </div><!--.container-fluid-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="/app/jquery/dist/jquery.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="/app/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/app/jquery-form-styler/jquery.formstyler.min.js"></script>
    <script src="/app/Keep-the-Rhythm/src/jquery.keeptherhythm.js"></script>
    <script>
		
		$(window).load(function () {
			var bl = 33;
			if($(window).width() >= 768)
			{
				bl = 33;
			}
			else
			{
				bl = 24;
			}
			$("img.rhythmic").keepTheRhythm({baseLine: bl});
		});
		
    $(function(){

			var $window = $(window);
		
			function e() {
				var e = $window.height();
				$("#carouselCalc .item").css("min-height", e);
				}
				e(),
				$window.on("resize", e);
				
			$('[data-type="background"].parallax').each(function(){
					var $scroll = $(this);
					$window.scroll(function() {
							var yPos = -(($window.scrollTop() - $scroll.offset().top) / $scroll.data('speed'));
							var coords = '50% '+ yPos + 'px';
							$scroll.css({ backgroundPosition: coords });
					});
			});
		
			$('.btn-group-vertical').on('click', '.btn', function () {
				var $btn = $(this);
				//$btn.button('loading');
				
				//setTimeout(function(){
					//var btnId = $('input', $btn).attr('id');
					$('.btn-group-vertical .btn').removeClass('btn-info').addClass('btn-default')
					$btn.addClass('btn-info');
					
					//$btn.button('reset');
					//}, 500); 
					
			})
			
			
			var $carouselCalc = $('#carouselCalc');
			$carouselCalc.carousel({
				interval: 999999
				});
			
			$carouselCalc.on('click', 'button.btn-success', function () {
				$carouselCalc.carousel('next')
				});
				
			$('_input:checkbox').styler({
				selectSearch: true
				});
			
				
			})
    </script>
    
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  </body>
</html>
