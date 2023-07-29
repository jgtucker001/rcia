<html>
<head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>RCIA at Our Lady of Peace, Fords, NJ</title>
          <!-- Style Sheets -->
          <link href="../../css/style.css" rel="stylesheet">
          <!-- <link href="css/topnav.css" rel="stylesheet"> -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- FontAwesome Fonts -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
          <!-- Google Fonts -->
          <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
          <!-- Scripts -->
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> 
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          
          <style>
          body {
            background-image: url('../../../images/papertexture.jpg');
            background-color: blanchedalmond;
          }
      </style>        
    </head> 
    <body ng-app="">
        <header class="heading">
            <h2>The Ten Commandments</h2>
        </header>
        <div class="container" style="font-family:'Times New Roman', Times, serif">
        <p style="background-color:blanchedalmond;width:35%;border-radius:15px;font-size:larger;color:crimson">Choose a Commandment from the drop-down list to show:</p>
        <form>
               <select  class="form-select" ng-model="myVar">
                    <option value="" selected>The Ten Commandments</option>
                    <option value="first">First Commandment</option>
                    <option value="second">Second Commandment</option>
                    <option value="third">Third Commandment</option>
                    <option value="fourth">Fourth Commandment</option>
                    <option value="fifth">Fifth Commandment</option>
                    <option value="sixth">Sixth Commandment</option>
                    <option value="seventh">Seventh Commandment</option>
                    <option value="eighth">Eighth Commandment</option>
                    <option value="ninth">Ninth Commandment</option>
                    <option value="tenth">Tenth Commandment</option>
               </select>
        </form><br><br>
        <div ng-switch="myVar">
               <div ng-switch-when="first">
                    <blockquote class="block-c shadw-n">
                        <h2>First Commandment</h2>
                        <span style="font-size:larger;font-weight:bold;"><p>I am the LORD your God: You shall not have strange gods before Me. </p><p> (Exodus 20:2-6, Deuteronomy 5:6-8)</p></span>
                    </blockquote>
               </div>
               <div ng-switch-when="second">
                    <blockquote class="block-c shadw-n">
                        <h2>Second Commandment</h2>
                        <span style="font-size:larger;font-weight:bold;"><p>You shall not take the Name of the LORD your God in vain.</p><p> (Exodus 20:7  Deuteronomy 5:11)</p></span>
                    </blockquote>
                </div>
                <div ng-switch-when="third">
                    <blockquote class="block-c shadw-n">
                        <h2>Third Commandment</h2>
                        <span style="font-size:larger;font-weight:bold;"><p>Remember to keep the LORD'S Day.</p><p> (Exodus 20:8-11  Deuteronomy 5:12-15)</p></span>
                    </blockquote>
                </div>
                <div ng-switch-when="fourth">
                    <blockquote class="block-c shadw-n">
                        <h2>Fourth Commandment</h2>
                        <span style="font-size:larger;font-weight:bold;"><p>Honor your father and your mother.</p><p> (Exodus 20:12  Deuteronomy 5:16)</p></span>
                    </blockquote>
                </div>
                <div ng-switch-when="fifth">
                    <blockquote class="block-c shadw-n">
                        <h2>Fifth Commandment</h2>
                        <span style="font-size:larger;font-weight:bold;"><p>You shall not kill. </p><p> (Exodus 20:13 Deuteronomy 5:17 )</p></span>
                    </blockquote>
                </div>
                <div ng-switch-when="sixth">
                    <blockquote class="block-c shadw-n">
                        <h2>Sixth Commandment</h2>
                        <span style="font-size:larger;font-weight:bold;"><p>You shall not commit adultery </p><p>(Exodus 20:14 Deuteronomy 5:18)</p></span>
                    </blockquote>
                </div>
                <div ng-switch-when="seventh">
                    <blockquote class="block-c shadw-n">
                        <h2>Seventh Commandment</h2>
                        <span style="font-size:larger;font-weight:bold;"><p>You shall not steal </p><p>(Exodus 20:15 Deuteronomy 5:19 )</p></span>
                    </blockquote>
                </div>
                <div ng-switch-when="eighth">
                    <blockquote class="block-c shadw-n">
                        <h2>Eighth Commandment</h2>
                        <span style="font-size:larger;font-weight:bold;"><p>You shall not bear false witness against your neighbor.</p><p> (Exodus 20:16 Deuteronomy 5:20 )</p></span>
                    </blockquote>
                </div>
                <div ng-switch-when="ninth">
                    <blockquote class="block-c shadw-n">
                        <h2>Ninth Commandment</h2>
                        <span style="font-size:larger;font-weight:bold;"><p>You shall not covet your neighbor's wife.</p><p> (Exodus 20:17 Deuteronomy 5:21 )</p></span>
                    </blockquote>
                </div>
                <div ng-switch-when="tenth">
                    <blockquote class="block-c shadw-n">
                        <h2>Tenth Commandment</h2>
                        <span style="font-size:larger;font-weight:bold;"><p>You shall not covet your neighbor's goods.</p><p> (Exodus 20:17 Deuteronomy 5:21 )</p></span>
                    </blockquote>
                </div>
                </div>
                </div>
           </div>
           </div>
    </body>
</html>