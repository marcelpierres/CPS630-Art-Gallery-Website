<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<head>
<meta>

</meta>
</head>
<body style="font-family:Arial">

<h1 style="text-align: center">Team 7</h1>
<h4 style="text-align: center">Students: Aumkar Prajapati, Marcel-Pierre Douglas Samuels, Sandy He</h4>


<div>
  <h3>ARTIST</h3>
   <table border="3">
    <tr bgcolor="#C7DC50">
    <th>Artist ID</th> 
    <th>Artist Name</th> 
    <th>Artist DOB</th> 
    <th>Artist PlaceofLiving</th> 
    <th>Artist Genre</th> 
    <th>Art Works</th> 
    </tr>
    <xsl:for-each select="database/artist/row">
    <tr>
    <td><xsl:value-of select="artist_id"/></td> 
    <td><xsl:value-of select="artist_name"/></td>     
    <td><xsl:value-of select="artist_dob"/></td> 
    <td><xsl:value-of select="artist_placeofliving"/></td> 
    <td><xsl:value-of select="artist_genre"/></td> 
    <td><xsl:value-of select="artist_works"/></td>
    </tr>
    </xsl:for-each>
    
    </table> 
  </div>  
    
    
    
   <div>
      <h3>ART WORK</h3>
    <table border="3">
    <tr bgcolor="#C7DC50">
    <th>Art ID</th> 
    <th>Artist ID</th> 
    <th>Genre ID</th> 
    <th>Art Name</th> 
    <th>Art DateOfCreation</th> 
    <th>Art Colour</th> 
    <th>Art Dimention</th> 
    <th>Art Location</th> 
    <th>Art Artist</th> 
    <th>Art Price</th> 
    </tr>
    <xsl:for-each select="database/artwork/row">
    <tr>
    <td><xsl:value-of select="art_id"/></td> 
    <td><xsl:value-of select="artist_id"/></td>     
    <td><xsl:value-of select="genre_id"/></td> 
    <td><xsl:value-of select="art_name"/></td> 
    <td><xsl:value-of select="art_doc"/></td> 
    <td><xsl:value-of select="art_colour"/></td>
    <td><xsl:value-of select="art_dim"/></td> 
    <td><xsl:value-of select="art_location"/></td> 
    <td><xsl:value-of select="art_artist"/></td> 
    <td><xsl:value-of select="art_price"/></td>
    </tr>
    </xsl:for-each>
    
    </table>
    
 </div> 
 
 
 
   <div>
      <h3>CUSTOMER</h3>
    
    <table border="3">
    <tr bgcolor="#C7DC50">
    <th>Order ID</th> 
    <th>Order Type</th> 
    <th>Genre ID</th> 
    </tr>
    <xsl:for-each select="database/customer/row">
    <tr>
    <td>null</td> 
    <td>null</td>     
    <td>null</td> 
    </tr>
    </xsl:for-each>
    
    </table>
    </div>
 
   


  <div>
      <h3>Genre</h3>
    
   <table border="3">
    <tr bgcolor="#C7DC50">
    <th>Genre ID</th> 
    <th>Genre Name</th> 
    
    </tr>
    <xsl:for-each select="database/genre/row">
    <tr>
    <td><xsl:value-of select="genre_id"/></td> 
    <td><xsl:value-of select="genre_name"/></td>     
    </tr>
    </xsl:for-each>
    
    </table>
    
  </div>  
    
    
   
   <div> 
   
     <h3>IMAGES</h3>
    
    <table border="3">
    <tr bgcolor="#C7DC50">
    <th>Image ID</th> 
    <th>Image Name</th> 
    <th>Image Link</th> 
    <th>Art ID</th>  
    </tr>
    <xsl:for-each select="database/images/row">
    <tr>
    <td><xsl:value-of select="image_id"/></td> 
    <td><xsl:value-of select="image_name"/></td>     
    <td><xsl:value-of select="image_link"/></td> 
    <td><xsl:value-of select="art_id"/></td> 
    </tr>
    </xsl:for-each>
    
    </table>
  </div>  
    
    
    <div>
      <h3>MUSEUM</h3>
    
    <table border="3">
    <tr bgcolor="#C7DC50">
    <th>Museum ID</th> 
    <th>Museum Establish</th> 
    <th>Museum Location</th> 
    <th>Museum Construction</th> 
    <th>Museum History</th> 
    <th>Museum Works</th> 
    <th>Art ID</th>
    </tr>
    <xsl:for-each select="database/museum/row">
    <tr>
    <td><xsl:value-of select="mus_id"/></td> 
    <td><xsl:value-of select="mus_est"/></td>     
    <td><xsl:value-of select="mus_loc"/></td> 
    <td><xsl:value-of select="mus_construct"/></td> 
    <td><xsl:value-of select="mus_history"/></td> 
    <td><xsl:value-of select="mus_works"/></td> 
    <td><xsl:value-of select="art_id"/></td>
    </tr>
    </xsl:for-each>
    
    </table>
    </div>
    


</body>
</html>

