<!DOCTYPE HTML>
<html>
  <head>
    <title>Godrus Links</title> 
    <?php include "head.php"?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    #demo {
      text-align: center;
      font-size: 60px;
      margin-top: 0px;
    }
    </style>
  </head>
  <body>
    <?php include "nav.php"?>    
    <h1> Time till next godrus livestream:</h1>    
      <p id="demo"></p>
    <h1>Godrus Links</h1>      
      <p><a href="https://soundcloud.com/godrus">SoundCloud</a></p>        
      <p><a href="https://mixer.com/godrus">Mixer (live streams)</a></p>
      <p><a href="https://twitch.tv/godrus_live">Twitch (live streams)</a></p>
    <h1>Our Friends</h1>      
      <p>Just a bunch of goofs doin' goof stuff.</p>
      <p><a href="https://soundcloud.com/morningsynth"> Morning Synth</a></p>

      

    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("April 19, 2020 21:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>
      
  </body>
</html>