    <!-- PHP header include -->
    <?php
        include 'includes/header.php';
    ?>
    
    <!-- Navigation -->
    <nav class="topnav" id="myTopnav">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>    
            <a href="index.php" class="active"><img src="images/JAretro-GEO.jpg" alt="JAretro Logo" class="logo"></a>
            <a href="#music">MUSIC</a>
            <a href="#mixes">MIXES & SETS</a>
            <a href="#about-me">ABOUT</a>
            <a href="#contact">CONTACT</a>

        <script>
            function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
            x.className += " responsive";
            } else {
            x.className = "topnav";
            }
            } 
        </script>     
    </nav>
    
    <main>
        <section class="section group" id="music">
            <h2>JAretro Music & Playlists</h2>
            
            <section class="col span_12_of_12">
                <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/42266763&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
            </section>
            
        </section>
            
        
        <section class="section group" id="mixes">
            <section class="col span_6_of_12">
                <h2>JAretro Music Videos</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLqUwdud-NS6PMfoa6R5r9xVrmk4EsVkrF" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </section>
            
            <section class="col span_6_of_12">
                <h2>JAretro Mixes & Sets</h2>
                <iframe width="100%" height="120" src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&feed=%2FJAretro%2Fjaretro-6-14-18-mix%2F" frameborder="0" ></iframe>
                <a href="https://www.mixcloud.com/JAretro/"><p>View JAretro's Mixcloud</p></a>
            </section>
        </section>
        
        <section class="section group" id="about-me">
            <h2>About JAretro</h2>
            <section class="col span_3_of_12">
                <p>Producer based in Portland, OR.</p>
            </section>  
            <section class="col span_6_of_12">
                <img src="images/jeremy-nature-4.png" alt="JAretro Forest Picture" class="thumbnail-image">
            </section>   
            <section class="col span_3_of_12">
                <p>I'm seeking vocalists and collaborations.
                <br>    
                <a href="#contact">CONTACT ME</a></p>
            </section>               
        </section>       
        
            <div class="container">
            <h3>Gallery</h3> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li> 
            <li data-target="#myCarousel" data-slide-to="3"></li>     
            </ol>    

            <!-- Wrapper for slides -->
            <div class="carousel-inner">     
                
            <div class="item active">
            <img src="images/jeremy-nature-1.png" alt="Jeremy in the Forest" style="width:100%;">
            </div>
                
            <div class="item">
            <img src="images/jeremy-nature-2.png" alt="Jeremy in the Forest" style="width:100%;">
            </div>
                
            <div class="item">
            <img src="images/jeremy-nature-3.png" alt="Jeremy in the Forest" style="width:100%;">
            </div>
                
            <div class="item">
            <img src="images/jeremy-nature-4.png" alt="Jeremy in the Forest" style="width:100%;">
            </div>
                
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        
    </main>
        
    <?php
        include 'includes/footer.php';    
    ?>
