<!DOCTYPE html>
<html>
    <head> <title>Our business card</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
<script src="jquery-2.1.3.js"></script>
<script type="text/javascript"> 
$(function() {
    $("#register").removeAttr('disabled');
    event.preventDefault();
        $("#register").click(function(){
         
        $("#theDiv").show("slow");
        
    });
$(function() {
    $("#cancel").click(function(){
        $("#theDiv").hide("slow");
    });
});
});
</script>
<script>
    var jump=function(e)
{
       //prevent the "normal" behaviour which would be a "hard" jump
       e.preventDefault();
       //Get the target
       var target = $(this).attr("href");
       //perform animated scrolling
       $('html,body').animate(
       {
               //get top-position of target-element and set it as scroll target
               scrollTop: $(target).offset().top-130
       //scrolldelay: 2 seconds
       },1000,function()
       {
               //attach the hash (#jumptarget) to the pageurl
               location.hash = target;
       });

}

$(document).ready(function()
{
       $('a[href*=#]').bind("click", jump);
       return false;
});
</script>
    </head>
 <body>
 <div class="wrapper">
    <header id="pageHeader">
        <div>
        <h1><a href="index.php" title="Extreme.org">Extreme</a>
            <p>event photography</p></h1>
        <!--<h2>Cool event photography</h2>-->
         <div id="menubar">
            <nav id="menu">
                    <ul class="site-menu">
                    <li><a href="#destination1">About</a></li>
                    <li><a href="#destination2">Services</a></li>
                    <li><a href="#destination3">Contacts</a></li>
                </ul>
            </nav>
        </div>
        </div>
       
    </header>
     <div class="middle">
                   <section id="destination1"> <div class="paragraph">
                    <h1>About</h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ex turpis, malesuada in facilisis id, facilisis nec augue. Quisque rutrum molestie magna sed pharetra. Vivamus urna lectus, cursus eu mi ullamcorper, aliquet lobortis tortor. Nam vitae hendrerit diam. Proin consectetur lorem id lorem congue pharetra. Cras ornare ante non lorem dignissim, at placerat risus eleifend. Nam in massa vel mauris vehicula venenatis. Vestibulum blandit elit sit amet nibh porta, eu commodo est accumsan. Etiam mattis ullamcorper urna, eget aliquam urna accumsan scelerisque. Curabitur condimentum tristique ornare. Vivamus eu pretium erat, id maximus nisi. Praesent congue condimentum libero vitae tempor. Duis suscipit ornare aliquam. Sed vel ultrices diam, scelerisque volutpat turpis.
                    Praesent vulputate, elit finibus aliquam blandit, est neque elementum libero, et porta elit libero sit amet nisi. Duis tincidunt at tortor nec tristique. Sed id dignissim orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris fringilla condimentum nisi, a iaculis urna suscipit eget. Nunc consectetur orci non felis fringilla, eu vestibulum neque eleifend. Donec a lorem semper, lobortis sem non, auctor metus. Aenean urna sapien, efficitur nec faucibus eget, finibus ac arcu. Sed eleifend massa nisi, quis aliquet dolor luctus eu. Fusce vel tempus urna, at laoreet risus. Pellentesque aliquam viverra eros. Fusce tempor et libero nec gravida. Cras eleifend odio in condimentum faucibus. Pellentesque enim augue, porttitor non lobortis a, ultricies eu purus.
                    Fusce lacinia placerat maximus. Sed vel massa et tellus tincidunt finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris gravida quam in fringilla gravida. Suspendisse dictum ex vel hendrerit consectetur. Curabitur tincidunt, magna et suscipit pellentesque, odio metus interdum nisl, mollis maximus augue lectus quis tortor. Etiam vehicula ligula ligula, ut lacinia velit commodo vitae. Donec ut lorem at ligula posuere egestas. Aenean mattis tincidunt feugiat. Vestibulum et bibendum urna.
                    Quisque tincidunt varius pellentesque. Vivamus ut orci ante. Quisque non sem quis ex lacinia pharetra. Curabitur vehicula iaculis dui porta pellentesque. Aenean sed ante est. Suspendisse potenti. Suspendisse posuere porttitor tortor sed pulvinar. Cras nisi magna, mollis scelerisque condimentum quis, ullamcorper imperdiet nulla.
                    Proin elementum eleifend sagittis. Sed ornare, massa et varius placerat, justo massa semper felis, ut maximus lacus eros ut augue. Nullam vulputate augue vitae sapien ultrices sagittis vel eget libero. Aenean semper sem quis vestibulum facilisis. Ut dictum justo turpis. Sed vulputate metus vitae varius semper. Vestibulum auctor ante sapien, et fringilla libero rhoncus a. Curabitur sodales, risus id rutrum luctus, orci purus ornare dolor, in porttitor sem mauris nec ipsum. Vivamus in pretium dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a neque nisl. Cras sodales mauris aliquam, ultrices lorem lacinia, tempor tellus.
                    </div>
                   </section>
                    <section id="destination2"><div class="paragraph"><h1>Services</h1>Mauris justo felis,
                           rutrum a porttitor sed, eleifend id mi. 
                    Fusce sodales magna nec ipsum molestie, eget eleifend dui luctus. 
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                    per inceptos himenaeos. Fusce condimentum orci a nisl pretium dapibus. 
                            Maecenas suscipit ut dui sit amet placerat. Mauris dapibus libero ac nisl
                            efficitur, eget fringilla justo mollis. Nulla facilisi. Phasellus sed imperdiet 
                            lectus, blandit sodales libero. Duis purus neque, malesuada eu aliquam a, commodo
                            quis dui. Proin hendrerit est nibh, ac faucibus magna auctor non. 
                            Nunc condimentum purus nunc, et blandit mauris cursus et. Duis vitae mi 
                            sed sem dignissim iaculis. Phasellus vitae purus suscipit, commodo sapien ac, 
                            vulputate lectus. Cras vitae cursus tellus, quis sodales mauris. 
                            Nullam venenatis neque ligula. Sed lobortis nisl at interdum posuere. 
                            Praesent id dui auctor dui finibus consectetur. Morbi vitae nunc sagittis,
                            fringilla magna sed, fringilla ipsum. Mauris nulla lorem, ultrices vitae
                            sagittis eu, pretium in elit. Ut eget eros sit amet quam lobortis accumsan 
                            sit amet et magna. Curabitur malesuada posuere aliquam. Nunc ac dapibus est. 
                            Sed arcu justo, malesuada eget scelerisque at, eleifend ultrices nunc. Nam 
                            egestas, odio quis tempus lobortis, eros enim bibendum enim, eu ultrices sapien 
                            urna ac nunc. Aenean varius ullamcorper risus, ac sodales justo bibendum vitae.
                            Quisque pulvinar ut ipsum ut posuere. Aenean massa justo, ultrices vitae congue 
                            a, vulputate ut mauris. Fusce non nunc tincidunt, vulputate risus ut, auctor mi. 
                            Morbi condimentum fermentum porta. Proin eget tempor sem. Mauris a velit at 
                            justo porta feugiat ornare eget nisl. Morbi nec libero ex. Phasellus iaculis 
                            ipsum eget ipsum finibus, id vehicula massa mollis. Nam vehicula finibus rhoncus.
                            Cras accumsan, ante eget malesuada tristique, neque nisi placerat lectus, sed 
                            volutpat leo purus nec lectus. Sed tincidunt eu quam eu eleifend. Proin vitae dolor malesuada, luctus ante a, ornare magna. Aliquam ac diam nisi. Vivamus pulvinar, lacus vitae suscipit laoreet, est arcu tempor magna, in condimentum dui nisl eu mauris. Quisque ut ipsum sapien.
                    Nullam in lacus ut elit tincidunt pulvinar. Nullam ut laoreet tellus, quis auctor diam. 
                    Aliquam lectus dui, sagittis a justo in, laoreet varius velit. In tempus rhoncus urna a 
                    suscipit. Curabitur efficitur ut leo bibendum tincidunt. Aliquam convallis nec mauris id
                    tincidunt. Quisque dignissim quam velit, eu congue augue rhoncus sed. Vivamus eleifend
                    quis dolor quis tincidunt. Donec commodo massa sit amet urna tempus dignissim. Cras 
                    tristique ipsum id tellus condimentum eleifend. Maecenas lacinia arcu in nibh aliquam, 
                    vitae sodales sem tristique. Sed aliquet gravida mauris. Curabitur tellus dui, euismod
                    in eros scelerisque, bibendum pulvinar arcu. Praesent pellentesque facilisis libero ut 
                    vulputate.
                    Donec congue interdm augue. Nulla dapibus nunc nibh, sollicitudin congue 
                    diam porttitor non. Maecenas molestie velit at urna volutpat molestie. 
                    Ut dapibus gravida est nec convallis. Vivamus facilisis nulla sit amet 
                    sem feugiat, in aliquet lacus pretium. Vivamus dapibus interdum ligula 
                    eget lacinia. Aliquam ligula orci, sagittis non libero et, facilisis 
                    maximus sapien. Vivamus aliquam euismod auctor. Vestibulum condimentum
                    lacus arcu, et placerat massa aliquam non. Nam gravida ex a velit placerat
                    varius. Nam semper molestie leo. Donec accumsan ac erat quis pharetra.
                    Aenean egestas ipsum sit amet purus efficitur, eu commodo nisl auctor.
                    Nam luctus nisi sit amet leo pellentesque pharetra. Vestibulum eros nisl,
                    interdum ac porta ac, semper sed nibh. Praesent ullamcorper nunc et nunc dignissim 
                    lobortis.
                    </div>
                    </section>
                    <section id="destination3"><div class="paragraph"><h1>Contact us</h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Cras tortor. Praesent dictum, libero ut tempus dictum, neque eros elementum mauris,
                    quis mollis arcu velit ac diam. Etiam neque. Quisque nec turpis. Aliquam arcu nulla, 
                    dictum et, lacinia a, mollis in, ante. Sed eu felis in elit tempor venenatis. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    Ut ultricies porttitor purus. Proin non tellus at ligula fringilla tristique. 
                    Fusce vehicula quam. Curabitur vel tortor vitae pede imperdiet ultrices.
                    </div>
                    </section>
                <div class="form" id="theDiv"> 
                 <form action="form_processing.php" method="post">
                    Name:<br>
                    <input type="text" name="your_name" required placeholder="Enter your name">
                    <br>
                    E-mail:<br>
                    <input type="email" name="email" required id="email" placeholder="Enter your email" title="Email"><br>
                    Comment:<br>
                    <textarea  name="comment" required id="comment" title="Comment"  placeholder="Write your message here" cols="50" rows="5"></textarea>
                    <br>
                    </div>
         <div id="submit"><input type="submit" id="register" value="Submit us a message" disabled="disabled" /> 
        
         </div>
                  </form>
                
         <div id="buttons">
              <button id="cancel">Cancel</button>
             <!-- Do not display this at the moment <button id="show">Send us a message</button>>
-->
          
          </div>
         
                 
         
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
var chisinau = new google.maps.LatLng(47.020722, 28.835800);

var neighborhoods = [
  new google.maps.LatLng(47.023356, 28.835398),
  new google.maps.LatLng(47.020745, 28.835719),
  new google.maps.LatLng(47.013327,28.854128),
  new google.maps.LatLng(47.029492, 28.818616)
];

var markers = [];
var iterator = 0;
var map;

function initialize() {
  var mapOptions = {
    zoom: 13,
    center: chisinau
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);
}

function drop() {
  for (var i = 0; i < neighborhoods.length; i++) {
    setTimeout(function() {
      addMarker();
    }, i * 200);
  }
}

function addMarker() {
  markers.push(new google.maps.Marker({
    position: neighborhoods[iterator],
    map: map,
    draggable: false,
    animation: google.maps.Animation.DROP
  }));
  iterator++;
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
 
      <div class="paragraph"> <div id="map-canvas"></div></div>
      <div id="panel" style="margin-left: 20px">
      <button id="drop" onclick="drop()" style="margin-bottom: 20px">Show our branches on the map</button>
     </div>
      
      <script>
$(document).ready(function() {
    $('form > input, textarea').keyup(function() {

        var empty = false;
        $('form > input, texarea').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        if (empty) {
            $('#register').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        } else {
            $('#register').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        }
    });
})()
      </script>
    </div>
     <footer class="footer"><div class="footer">
             <ul>
                    <li><a href="#destination1">About</a></li>
                    <li><a href="#destination2">Services</a></li>
                    <li><a href="#destination3">Contacts</a></li>
             </ul></div>
     </footer>
 </div>
 </body>
 </html>