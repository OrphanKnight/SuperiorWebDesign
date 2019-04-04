<!DOCTYPE html>
<html lang="en" >

<head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <link href="css/sequence-theme.two-up.css" rel="stylesheet" media="all">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
   <title>Responsive navbar with fun hover effect</title>
    <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    
</head>
    
<header>
  <h1 class="logo">Logo</h1>
  <input type="checkbox" id="nav-toggle" class="nav-toggle">
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
  <label for="nav-toggle" class="nav-toggle-label">
    <span></span>
  </label>
</header>
    
    
<body>
    
<!--    Slider Code Starts Here-->
  <div id="sequence" class="seq">

    <div class="seq-nav">

      <ul role="navigation" aria-label="Pagination" class="seq-pagination">
        <li><a href="#step1" rel="step1" title="Go to slide 1"><span class="numeral">1</span><span class="seq-tooltip">Powered by Sequence.js</span></a></li><!--
        --><li><a href="#step2" rel="step2" title="Go to slide 2"><span class="numeral">2</span><span class="seq-tooltip">Create Unique Animated Themes</span></a></li><!--
        --><li><a href="#step3" rel="step3" title="Go to slide 3"><span class="numeral">3</span><span class="seq-tooltip">Rapid Development of Step-Based Applications</span></a></li>
      </ul>

      <button class="seq-next seq-swipe" type="button" aria-label="Next">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21.5" viewBox="30.4 23.7 20 21.5" enable-background="new 30.4 23.7 20 21.5" role="img" aria-labelledby="title-swipe-icon"><title id="title-swipe-icon">Swipe Icon</title><path d="M33 23.7c-.1 0-.3.1-.4.2l-2.1 2.1c-.2.2-.2.6 0 .9l2.1 2.1c.2.2.6.2.9 0s.2-.6 0-.9l-1.1-1.1h5.2c.3 0 .6-.3.6-.6s-.3-.6-.6-.6h-5.2l1.1-1.1c.2-.2.3-.6 0-.9-.1-.1-.2-.1-.5-.1zm14.6 0c-.3 0-.6.3-.6.7 0 .1.1.3.2.4l1.1 1.1h-5.2c-.3 0-.6.3-.6.6s.2.5.6.5h5.2l-1.1 1.1c-.2.2-.2.6 0 .9s.6.2.9 0l2.1-2.1c.2-.2.2-.6 0-.9l-2.1-2.1c-.2-.2-.3-.2-.5-.2zm-7.3 1.3c-.8 0-1.4.6-1.4 1.4v8.8c-.5-.6-1.1-1.3-1.6-1.6-.3-.2-.7-.4-1.1-.4-.7 0-1.2.5-1.3 1.2-.1.8.4 1.6.8 2.2l1.5 2.4 1.2 1.9c.6 1 .7 1.8.7 2.9v1.2c0 .1.1.2.2.2h8.2c.1 0 .2-.1.2-.2.1-.8.2-1.6.4-2.4.7-2 1.3-3.9 1.3-6.4v-4c0-.8-.6-1.4-1.4-1.4-.4 0-.7.1-1.2.6 0-.8-.6-1.4-1.4-1.4-.5 0-.9.2-1.2.6-.1-.7-.7-1.2-1.4-1.2-.5 0-.9.2-1.2.6v-3.5c.2-.8-.5-1.5-1.3-1.5z"/></svg>
      </button>
    </div>

    <button class="seq-next-button seq-next" type="button" aria-label="Next">
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="16.1 -0.7 60 60" enable-background="new 16.1 -0.7 60 60" role="img" aria-labelledby="title-down-arrow"><title id="title-down-arrow">Down/Next Arrow</title><path d="M46.407 1.399l27.435 27.435-28.213 28.213-27.435-27.435z"/><path fill="#fff" d="M46.1 59.3l-30-30 30-30 30 30-30 30zm-22.9-30l22.9 22.9 22.9-22.9-22.9-22.9-22.9 22.9zM39.278 23.872l11.031 11.031-4.172 4.172-11.031-11.031zM57.172 28.079l-11.031 11.031-4.172-4.172 11.031-11.031z"/></svg>
    </button>

    <div class="seq-screen">
      <ul class="seq-canvas">
        <li class="step1 seq-in">
          <div data-seq class="seq-feature seq-half">
            <div style="background-image: url(images/fern-leaves.jpg)">
              <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
              <img src="images/fern-leaves.jpg" alt="A close-up of green fern leaves" />
            </div>
          </div>
          <div data-seq class="seq-content seq-half seq-valign">
            <div>
              <h2>Powered by Sequence.js</h2>
              <h3>The responsive CSS animation framework</h3>
              <a class="seq-button" href="http://sequencejs.com/" target="_blank">Find Out More</a>
            </div>
          </div>
        </li>
        <li class="step2">
          <div data-seq class="seq-feature seq-half seq-half-right">
            <div style="background-image: url(images/autumn-leaves.jpg)">
              <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
              <img src="images/autumn-leaves.jpg" alt="Focused on a single autumn leave hanging from a thin branch. More leaves appear out of focus in the background" />
            </div>
          </div>
          <div data-seq class="seq-content seq-half seq-half-left seq-valign">
            <div>
              <h2>Create Unique Animated Themes</h2>
              <h3>For sliders, presentations, banners, and other step-based applications</h3>
              <a class="seq-button" href="http://sequencejs.com/" target="_blank">Find Out More</a>
            </div>
          </div>
        </li>
        <li class="step3">
          <div data-seq class="seq-feature seq-half seq-half-right">
            <div style="background-image: url(images/purple-flowers.jpg)">
              <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
              <img src="images/purple-flowers.jpg" alt="A close-up of several purple flowers with yellow centers. A few rain drops sit on the pettels" />
            </div>
          </div>
          <div data-seq class="seq-content seq-half seq-half-left seq-valign">
            <div>
              <h2>Rapid Development of Step-Based Applications</h2>
              <h3>All of the JavaScript functionality you need built-in</h3>
              <a class="seq-button" href="http://sequencejs.com/" target="_blank">Find Out More</a>
            </div>
          </div>
        </li>
      </ul>
      </div></div>

  <script src="scripts/imagesloaded.pkgd.min.js"></script>
  <script src="scripts/hammer.min.js"></script>
  <script src="scripts/sequence.min.js"></script>
  <script src="scripts/sequence-theme.two-up.js"></script>
<!--    Slider Code Ends Here-->    
    

<div class="b1">
  <div class="test"></div>
</div>  

    <div class="container">
	<section class="home-about">

		<div class="home-about-textbox parallax--box">
			<h1>Who we are</h1>
			<p>Sit by the fire drink water out of the faucet hide head under blanket so no one can see cat is love, cat is life. Knock dish off table eating always hungry so favor packaging over toy. </p>
			<p><strong>Rub face on owner.</strong> Peer out window, chatter at birds, lure them to mouth. Chase ball of string eat a plant, kill a hand, i am the best have secret plans.</p>
		</div>

	</section>
</div>

<div class="b1">
  <div class="test"></div>
</div>
<canvas id="scene"></canvas>
	<input id="copy" type="text" value="Technology Club ♥" style="opacity: 0;"/>
    <script src="scripts/index.js"></script>
<div class="b3">
  <div class="test"></div>
</div>
    
    
<div class="container">
	<section class="home-about">
		<div class="home-about-textbox parallax--box">
            <div class="content">
                <h2 align="center" style="color:#00ff6c"><font size="25em">Tech Feed</font></h2>
            </div>
		</div>
	</section>
</div>

<!--==============================================PHP In Section================================-->
<section>
    <?php 
                
        require_once('webhose.php');

        // this is the api key  
        Webhose::config("81e306b2-8490-4a78-84d7-390aa94ba8f9");
       

            $images = array();//this array is used to store images from 
            $titles = array();// this array is used to store titles 
            $links = array();// this array is used to store titles 

             
                
           
           
        function print_filterwebdata_titles($api_response) {
                    
                
                if ($api_response == null) {
                    echo "<p>Response is null, no action taken.</p>";
                      return;
                    }
                
                
                        if (isset($api_response->posts)) {
                            $c = 0;
                        
                            foreach ($api_response->posts as $post) {
            
                            global $links;
                            global $titles;
                       
                                
                            $links[$c] = $post->thread->site;
                            $titles[$c] = $post->title;
                            
                            if ($post->thread->main_image == null) {
                                  global $images;
                               $images[$c]='images/default.jpg';
                            
                            } else {
                                
                                if ($post->thread->main_image == 'http://www.techskimm.com/wp-content/plugins/wp-rss-multi-importer/images/facebook.png') {
                                      global $images;
                                    $images[$c] = 'images/default.jpg';
                                    
                                } else {
                                    
                                    global $images;
                                    $images[$c] = $post->thread->main_image;
                                }
                            }
                        
                            $c++;
                                
                            // this limits the number of posts to 3 by breaking out of the loop 
                            if ($c == 4) {
                                break 1;
                            }
                        }
                            
                           for($c=0; $c<3; $c++){
                                  global $images;
                               
                            if ($images[$c] == null) {
                        
                            $images[$c]='images/default.jpg';   
                            
                            }}
                            
                                
                           for($c=0; $c<4; $c++){
                                  global $titles;
                               
                            if ($titles[$c] == null) {
                        
                            $titles[$c]='Technology News';   
                            
                            }}
                            
                    }
                }

                $params = array(
                    "q" => "language:english site:cnet.com",
                    "sort" => "relevancy"
                );
                
                $result = Webhose::query("filterWebContent", $params);
                
                print_filterwebdata_titles($result);
                
                
                ?>
    </section>
        
    
<div class="card-grid">
  <div class="card-wrap">
    <div class="card">
      <?php  echo "<img src='" . $images[0] . "'  width='100%' height='100%%' class='imageleft'/>"; ?>
      <div>
        <h4>Tech News!</h4>
        <p><?php echo $titles[0]; ?></p>  
      </div>
    </div>
  </div>
  <div class="card-wrap">
    <div class="card">
      <?php  echo "<img src='" . $images[1] . "'  width='100%' height='100%' class='imageleft'/>"; ?>
      <div>
        <h4>Tech News!</h4>
        <p><?php echo $titles[1]; ?></p> 
      </div>
    </div>
  </div>
  <div class="card-wrap">
    <div class="card">
      <?php  echo "<img src='" . $images[2] . "'  width='100%' height='100%%' class='imageleft'/>"; ?>
      <div>
        <h4>Tech News!</h4>
        <p><?php echo $titles[2]; ?></p> 
      </div>
    </div>
  </div>
  <div class="card-wrap">
    <div class="card">
      <?php  echo "<img src='" . $images[3] . "'  width='100%' height='100%' class='imageleft'/>"; ?>
      <div>
        <h4>Tech News!</h4>
        <p><?php echo $titles[3]; ?></p> 
      </div>
    </div>
  </div>    
</div>
    
    <div class="b1">
  <div class="test"></div>
</div>
<div class="parallax-window" data-parallax="scroll" data-image-src="https://www.hillspet.com/content/dam/cp-sites/hills/hills-pet/en_us/exported/cat-care/new-pet-parent/images/mother-cat-and-kitten-sleeping.jpg"></div>
<script src="js/parallax.js"></script>
<div class="b2">
  <div class="test"></div>
</div>
</body>

   
<footer>
<div id="reset">
    <div id="circ">
  <ul>
    <li class="animated zoomIn">
      <div class="back"></div>
      <div class="icon">
        <i class="fa fa-facebook"></i>
      </div>
    </li>
    <li class="animated zoomIn delayone">
      <div class="back"></div>
      <div class="icon">
        <i class="fa fa-twitter"></i>
      </div>
    </li>
    <li class="animated zoomIn delaytwo">
      <div class="back"></div>
      <div class="icon">
        <i class="fa fa-linkedin"></i>
      </div>
    </li>
    <li class="animated zoomIn delaythree">
      <div class="back"></div>
      <div class="icon">
        <i class="fa fa-youtube"></i>
      </div>
    </li>
    <li class="animated zoomIn delayfour">
      <div class="back"></div>
      <div class="icon">
        <i class="fa fa-github-alt"></i>
      </div>
    </li>
    <li class="animated zoomIn delayfive">
      <div class="back"></div>
      <div class="icon">
        <i class="fa fa-google-plus"></i>
      </div>
    </li>
  </ul>
    </div>
    </div>  
    

</footer>
</html>
