<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GalleryCss - Slide com CSS Puro</title>
        
        <!--CSS Files-->
        <link rel="stylesheet" href="css/gallery.theme.css">
        <link rel="stylesheet" href="css/gallery.min.css">
        
    </head>
    <body>
        
        <!--Estrutura do Slide-->
        <!--Classe gallery - autoplay - quantidade de itens do slide-->
        <div class="gallery autoplay items-2">
            
            <div id="item-1" class="control-operator"></div>
            <div id="item-2" class="control-operator"></div>
            
            <!--Chamada das Imagens-->
            <figure class="item">
                <h1>
                    Slide 01
                    <img src="images/slide_5_02.jpg">
                </h1>
            </figure>
            
            <figure class="item">
                <h1>
                    <img src="images/slider_2_02.jpg">
                </h1>
            </figure>
            
            <!--Controls-->
            <div class="controls">
                <a href="#item-1" class="control-button">.</a>
                <a href="#item-2" class="control-button">.</a>
            </div>
            
        </div>
    </body>
</html>
