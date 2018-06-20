<!DOCTYPE html>
 <?php

?> 
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
   
 

    #frontholder{
        width: 100%;
        display: block;
        position: relative;
        height: 320px;
        background-image: url('res/banner.png');
        background-repeat: stretch;
        background-position: center;
        
    }
    h1{
        font-size: 120px;
        font-weight: 600;
    }
     


    #bannerText{
        position: fixed;
        color: white;
        top: 150px;
        left: 40px;
 
    }

    #search{
        margin-right: 20px;
    }

    #form{
        padding-left: 40px;
        padding-top: 40px;
    }

    select{
        margin-right: 20px;
    }

    footer {
        position:fixed;
        bottom:0px;
        height:60px;
        width:100%;
        background-color:#7a9ec8;
        color:white;
    }
    
    footer p{
        padding: 15px;
    }
    </style>

    
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/">TEAM 7</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/">About Us <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/">Blogs <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="maintain.php">Maintain <span class="sr-only"></span></a>
            </li>
        </ul>
        <form id="search" method="POST" class="form-inline my-2 my-lg-0" action="http://www2.scs.ryerson.ca/~mdsamuel/search.php">
            <input name="userin" class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Shopping Cart</button>
        
        
    </nav>
    <div class= "modal fade" id="myModal" role="dialog">   
        <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <?php
          include 'shoppingcarth.php'
          ?>
        </div>
          
        <div class="modal-body">
          <form>
            Art Work <select>
                <option value="selectNull">Select</option>
                <option value="gothic">Gothic</option>
                <option value="renaissance">Renaissance</option>
                <option value="baroque">Baroque</option>
                <option value="premodern">Pre-modern</option>
                <option value="modern">Modern</option>
              </select>
            <br> <br>
              
            Amount: <input type="number" id="amt" value="1" >
            <br><br>
              
            Shipping Plan:
            <br>
            
            <p>Same Day Shipping: <input type="radio" name="plan" value="19.99" /> $19.99</p>
            <br>
            
            <p>Express Shipping:  <input type="radio" name="plan" value="10.99"/>  $10.99</p>
            <br>
              
            <p>Standard Shipping: <input type="radio" name="plan" value="5.99"/>  $5.99</p>  
            <br>
            <br>
            <br>
           <button type="button" onclick="total()"> Subtotal</button> subtotal:<span id="subtotal"> </span>
              <br><br>
            <input type="reset" />
            <input type="submit"/>
            </form>
        </div>
          
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>  
    </div>
  </div>
       
<!--   -->
    
    <div id="frontholder">
        <div id="bannerText">
                <h1>Team 7</h1>
        </div>
    </div>
    <div id="form">
        Art Works: <select name="Art Works" onchange="java_script_:show(this.options[this.selectedIndex].value)">
        <option value="selectNull">Select</option>
        <option value="gothic">Gothic</option>
        <option value="renaissance">Renaissance</option>
        <option value="baroque">Baroque</option>
        <option value="premodern">Pre-modern</option>
        <option value="modern">Modern</option>
        </select>
        
        Artists: <select name="Artist" onchange="java_script_:show(this.options[this.selectedIndex].value)"> 
        <option value="selectNull">Select</option>
        <option value="GrantWood">Grant Wood</option>
        <option value="HighArtist">High Artist</option>
        <option value="JanBruegheltheYounger">Jan Brueghel the Younger</option>
        <option value="EdvardMunch">Edvard Munch</option>
        <option value="RoyLichtenstein">Roy Lichtenstein</option>
        </select><br>

        Museum: <select name="Museum" onchange="java_script_:show(this.options[this.selectedIndex].value)"> 
        <option value="selectNull">Select</option>
        <option value="pama">Peel Art Gallery Museum</option>
        <option value="rom">Royal Ontario Museum</option>
        <option value="aga">Aga Khan Museum</option>
        <option value="ron">Ron Swanson's Museum of Good Things</option>
        <option value="kek">Marcel-Pierre's (Team 7) Art Extraordinaire</option>
        </select><br>
    </div>
    

    <footer>
        <p><strong>TEAM # 7</strong> -- Made by: Marcel-Pierre Douglas, Sandy He, Aumkar Prajapati -- <strong>TEAM # 7</strong></p>
    
    </footer>

    <script type="text/javascript">
    function show(choice){
        switch(choice){
            case "ArtWorks":
                break;
                
            case "gothic": 
                window.open("https://i.pinimg.com/originals/27/81/c9/2781c93b24e586cba4d10e4992603061.jpg", "artwork", "width=400,height=400, top=200, left=200");
               var gwindow = window.open("", "infog", "width=400,height=400, top=400, right=800");
                gwindow.document.write("<p>Information window</p><p>Title: <a href='gothic.html' target='_blank'>American Gothic</p></a><p>Price: $12 million</p><p>Description: It's pretty neat.");
                window.location.assign("gothic.html");
               break;
                
            case "renaissance":
                window.open("https://s3.amazonaws.com/res.milq.com/img/posts/deeply-weird-renaissance-art_2.jpg", "artwork", "width=400,height=400, top=200, left=200");
                var gwindow = window.open("", "infor", "width=400,height=400, right=400, left=800");
                gwindow.document.write("<p>Information window</p><p>Title: <a href='reni.html' target='_blank'>Messed Up</p></a><p>Price: $10 million</p><p>Description: Pretty old school.</p>");
                window.location.assign("reni.html");
               break;
                
            case "baroque":
                window.open("https://imgix.ranker.com/node_img/1084/21674396/original/allegory-of-war-artwork-photo-1?w=650&q=50&fm=jpg&fit=crop&crop=faces", "artwork", "width=400,height=400, top=200, left=200");
                var gwindow = window.open("", "infob", "width=400,height=400, right=400, left=800");
                gwindow.document.write("<p>Information window</p><p>Title: <a href='baro.html' target='_blank'>Allegory of War</p></a><p>Price: $39 million</p><p>Description: Baroque is the most presidential thing I've ever seen.</p>");
                window.location.assign("baro.html");
               break;   
                
            case "premodern":
                window.open("https://cms-assets.tutsplus.com/uploads/users/346/posts/29963/preview_image/arthistmodpre.jpg", "artwork", "width=400,height=400, top=200, left=200");
                var gwindow = window.open("", "infop", "width=400,height=400, right=400, left=800");
                gwindow.document.write("<p>Information window</p><p>Title: <a href='premodern.html' target='_blank'>The Scream</p></a><p>Price: $30 million</p><p>Description: This is very futuristic.</p>");
                window.location.assign("premodern.html");
               break; 
                
            case "modern":
                window.open("https://flavorwire.files.wordpress.com/2011/02/10-roy-lichtenstein-kiss-v.jpg?w=1920", "artwork", "width=400,height=400, top=200, left=200");
                var gwindow = window.open("", "_blank", "width=400,height=400, right=400, left=800");
                gwindow.document.write("<p>Information window</p><p>Title: <a href='modern.html' target='_blank'>Sad Pop Art</p></a><p>Price: $2 million</p><p>Description: This peice disturbs me.</p>");
                window.location.assign("modern.html");
               break; 

            case "GrantWood":
                window.open("https://upload.wikimedia.org/wikipedia/commons/0/02/Grant_Wood.jpg", "artist", "width=400,height=400, top=200, left=200" );
                var gwindow = window.open("", "infog", "width=400,height=400, top=400, left=800");
                gwindow.document.write("<p><a href='grantwood.html' target='_blank'>Grant Wood</p></a><p>Description: Grant DeVolson Wood was an American painter best known for his paintings depicting the rural American Midwest, particularly American Gothic, an iconic painting of the 20th century.</p>");
                window.location.assign("grantwood.html");
                break;

            case "HighArtist":
                window.open("https://pixel.nymag.com/imgs/daily/vulture/2017/11/14/14-the-room-tommy-wiseau.w710.h473.2x.jpg", "artist", "width=400,height=400, top=200, left=200" );
                var gwindow = window.open("", "infor", "width=400,height=400, top=400, left=800");
                gwindow.document.write("<p><a href='high.html' target='_blank'>High Artist</a></p><p>Description: Nothing can describe the one, the true. High Artist.</p>");
                window.location.assign("high.html");
                break;

            case "JanBruegheltheYounger":
                window.open("http://l7.alamy.com/zooms/9f5bb8e68d6d4ba58563fbb36ab14537/jan-brueghel-the-elder-1568-1625-flemish-artist-aewwbn.jpg", "artist", "width=400,height=400, top=200, left=200" );
                var gwindow = window.open("", "infob", "width=400,height=400, top=400, left=800");
                gwindow.document.write("<p><a href='jan.html' target='_blank'>Jan Brueghel the Younger</a></p><p>Description: Jan Brueghel the Younger was a Flemish Baroque painter, and the son of Jan Brueghel the Elder.</p>");
                window.location.assign("jan.html");
                break;

            case "EdvardMunch":
                window.open("https://www.biography.com/.image/t_share/MTQzMDAyNzYyNTU1MTcyMDQ1/edvard-munch-self-portraitjpg.jpg", "artist", "width=400,height=400, top=200, left=200" );
                var gwindow = window.open("", "infop", "width=400,height=400, top=400, left=800");
                gwindow.document.write("<p><a href='edvard.html' target='_blank'>Edvard Munch</a></p><p>Description: Edvard was a Norwegian painter and printmaker whose intensely evocative treatment of psychological themes built upon some of the main tenets of late 19th-century Symbolism and greatly influenced German Expressionism in the early 20th century. His best known work is The Scream, painted in 1893.</p>");
                window.location.assign("edvard.html");
                break;

            case "RoyLichtenstein":
                window.open("https://www.biography.com/.image/t_share/MTIwNjA4NjMzODg2MzExOTQ4/roy-lichtenstein-9381678-1-402.jpg", "artist", "width=400,height=400, top=200, left=200" );
                var gwindow = window.open("", "_blank", "width=400,height=400, top=400, left=800");
                gwindow.document.write("<p><a href='roy.html' target='_blank'>Roy Lichtenstein</a></p><p>Description: Roy Fox Lichtenstein was an American pop artist. During the 1960s, along with Andy Warhol, Jasper Johns, and James Rosenquist among others, he became a leading figure in the new art movement. His work defined the premise of pop art through parody.</p>");
                window.location.assign("roy.html");
                break;
            case "pama":
                window.open("https://media-cdn.tripadvisor.com/media/photo-s/03/c3/dc/44/peel-art-gallery-museum.jpg", "museum", "width=400,height=400, top=200, left=200" );
                var gwindow = window.open("", "_blank", "width=400,height=400, top=400, left=800");
                gwindow.document.write("<p>Peel Art Gallery Museum</p><p>This is the Peel Art Gallery Museum. It is a museum, art gallery, and archive for the Peel region.</p>");
				window.location.assign("peel.html");
				break;
			case "rom":
                window.open("https://media-cdn.tripadvisor.com/media/photo-s/03/c3/dc/44/peel-art-gallery-museum.jpg", "museum", "width=400,height=400, top=200, left=200" );
                var gwindow = window.open("", "_blank", "width=400,height=400, top=400, left=800");
                gwindow.document.write("<p>Royal Ontario Museum</p><p>This is the Royal Ontario Museum. Better known as the ROM, this musuem is located in the heart of Toronto.</p>");
				window.location.assign("rom.html");
				break;
			case "aga":
                window.open("https://media-cdn.tripadvisor.com/media/photo-s/03/c3/dc/44/peel-art-gallery-museum.jpg", "museum", "width=400,height=400, top=200, left=200" );
                var gwindow = window.open("", "_blank", "width=400,height=400, top=400, left=800");
                gwindow.document.write("<p>Aga Khan Museum</p><p>This is the Aga Khan Museum. It is named after Aga Khan.</p>");
				window.location.assign("aga.html");
				break;
			case "ron":
                window.open("https://media-cdn.tripadvisor.com/media/photo-s/03/c3/dc/44/peel-art-gallery-museum.jpg", "museum", "width=400,height=400, top=200, left=200" );
                var gwindow = window.open("", "_blank", "width=400,height=400, top=400, left=800");
                gwindow.document.write("<p>Ron Swanson's Museum of Good Things</p><p>This is the Museum of Good Things belonging to Mr. Ron Swanson. It contains good things.</p>");
				window.location.assign("ron.html");
				break;
			case "kek":
                window.open("https://vignette.wikia.nocookie.net/harrypotter/images/9/97/Hogwarts_School_of_Witchcraft_and_Wizardry_.jpg/revision/latest?cb=20120211153558", "museum", "width=400,height=400, top=200, left=200" );
                var gwindow = window.open("", "_blank", "width=400,height=400, top=400, left=800");
                gwindow.document.write("<p>Marcel-Pierre's (Team 7) Art Extraordinaire</p><p>This is the official Team 7 museum. It contains an archive of all of Team 7's work..</p>");
				window.location.assign("team7.html");
				break;
			}
        }
        
  
        
        
    function total(){
        var radio = document.getElementsByName('plan'); 
        var amount = parseFloat(document.getElementById('amt').value); 
       
        var plan = 0;
        for (var i=0, length = radio.length; i < length; i++){
           if (radio[i].checked)
               {
                   plan = parseFloat(radio[i].value);
                   break;
               }
            
            
        }
        
        var subtotal = plan * amount;
        document.getElementById("subtotal").innerHTML= subtotal;
    }
    </script>
    
    </body>

</html>  