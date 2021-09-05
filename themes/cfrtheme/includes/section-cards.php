<section>
  <div class="cards-section-container container-fluid">
    <div class="heading-container">
    <?php
      $post = get_posts( array( "category_name" => "Cards Post") )[0];
      echo "<div class='heading-overlay cards-heading'>" . $post->post_title . "</div>";
    ?>
    </div>

    <!-- Background images and formatting -->
    <div class="card-rows">

      <div class="card-edge-row">
        <div>
          <img src="<?php echo get_template_directory_uri();?>/images/card-icons/cards-border.svg" class='cards-bg-border'>
        </div>

        <div class="card-middle-col">
        </div>

        <div>
          <img src="<?php echo get_template_directory_uri();?>/images/card-icons/cfr-scrabble.svg" class="cards-bg-scrabble">
        </div>
      </div>

      <div class="card-middle-row">
        <div>
          <img src="<?php echo get_template_directory_uri();?>/images/card-icons/discs.svg" class="cards-bg-discs">
        </div>

        <div class="card-middle-col" id = "card-middle-col">
            <?php
            // $doc = new DOMDocument();
            // $doc->loadHTML(apply_filters( 'the_content', $post->post_content ));
            // $doc = new DOMXPath($doc);

            // $i = 0;
            // $all_cards = $doc->query("//p");
            // $numbers = range(0, (count($all_cards)/2));
            // shuffle($numbers);
            // $displayed_cards = array_slice($numbers, 0, 8);


            // $card_suits = array("♥", "♠", "♣", "♦");
            // $card_icon_colors = array('9B72AA', 'BD4B4B', 'DF711B', '368B85', '3DB2FF', 'FFF47D');
            
            // for ($i=0; $i<=15; $i++){
             
            //   $card = $all_cards[2*($displayed_cards[intdiv($i, 2)])+$i%2];
            //   if ($i % 2 == 0) { // Card Title
            //     $rand_suit = $card_suits[array_rand($card_suits)]; 
            //     $rand_color = $card_icon_colors[array_rand($card_icon_colors)]; 

            //     echo ("<div class='fact-card' id='".(($i/2)+1)."card' style='left:".($i * 35)."px'>");

            //     echo "<div class='card-suits' style='text-shadow: 0 0 0 #".$rand_color."'>".$rand_suit."</div>";
            //     echo "<div class='card-suits-down' style='text-shadow: 0 0 0 #".$rand_color."'>".$rand_suit."</div>";
            //     echo ("<img src='".get_template_directory_uri()."/images/card-icons/CFR-logo.png' class='card-bg-logo'>");
                

            //     echo "<div class='card-heading' style='color: #".$rand_color."'>";
            //     echo $card->nodeValue;
            //     echo "</div>";
                
            //   }
            //   else { // Card Content

            //     echo "<div class='card-content'>";
            //     echo $card->nodeValue;
            //     echo "</div>";
            //     echo "</div>";
            //   }
            // }

            ?>

            <?php
            $doc = new DOMDocument();
            $doc->loadHTML(apply_filters( 'the_content', $post->post_content ));
            $doc = new DOMXPath($doc);

            $i = 0;
            $d = 0;
            $h = 0;
            $all_cards = $doc->query("//p");
            $numbers = range(0, (count($all_cards)/2));
            shuffle($numbers);
            $displayed_cards = array_slice($numbers, 0, 8);

            $card_suits = array("♥", "♠", "♣", "♦");
            $card_icon_colors = array('9B72AA', 'BD4B4B', 'DF711B', '368B85', '3DB2FF', 'FFF47D');

            foreach ( $all_cards as $card) { 

              if (in_array(intdiv($i, 2), $displayed_cards)){
                

                if ($i % 2 == 0) { // Card Title
                  $rand_suit = $card_suits[array_rand($card_suits)]; 
                  $rand_color = $card_icon_colors[array_rand($card_icon_colors)];
                  
                  
                  echo ("<div class='fact-card-display' id='".(($d/2)+1)."-dis-card' style='left:".($d * 35)."px; z-index: ".(($d/2)+1)."'>");

                  echo "<div class='card-suits' style='text-shadow: 0 0 0 #".$rand_color."'>".$rand_suit."</div>";
                  echo "<div class='card-suits-down' style='text-shadow: 0 0 0 #".$rand_color."'>".$rand_suit."</div>";
                  echo ("<img src='".get_template_directory_uri()."/images/card-icons/CFR-logo.png' class='card-bg-logo'>");
                  

                  echo "<div class='card-heading' style='color: #".$rand_color."'>";
                  echo $card->nodeValue;
                  echo "</div>";

                  
                  
                }
                else { // Card Content

                  echo "<div class='card-content'>";
                  echo $card->nodeValue;
                  echo "</div>";
                  echo "</div>";
                  $d+=2;
                }
                
              }else {
                if ($i % 2 == 0) { // Card Title
                  $rand_suit = $card_suits[array_rand($card_suits)]; 
                  $rand_color = $card_icon_colors[array_rand($card_icon_colors)];
                  
                  
                  echo ("<div class='fact-card-hidden' id='".($h+1)."-hid-card'>");

                  echo "<div class='card-suits' style='text-shadow: 0 0 0 #".$rand_color."'>".$rand_suit."</div>";
                  echo "<div class='card-suits-down' style='text-shadow: 0 0 0 #".$rand_color."'>".$rand_suit."</div>";
                  echo ("<img src='".get_template_directory_uri()."/images/card-icons/CFR-logo.png' class='card-bg-logo'>");
                  

                  echo "<div class='card-heading' style='color: #".$rand_color."'>";
                  echo $card->nodeValue;
                  echo "</div>";
                  
                }
                else { // Card Content

                  echo "<div class='card-content'>";
                  echo $card->nodeValue;
                  echo "</div>";
                  echo "</div>";
                  $h ++;
                }

              } 

            $i += 1;

            }
          
          ?>

        </div>

        <div>
          <img src="<?php echo get_template_directory_uri();?>/images/card-icons/magic-5-ball.svg" class="cards-bg-magic-5">
        </div>
      </div>

      <div class="card-edge-row">
        <div>
          <img src="<?php echo get_template_directory_uri();?>/images/card-icons/stationary.svg" class="cards-bg-stationary">
        </div>
        
        <div class="card-middle-col">
        </div>

        <div>
          <img src="<?php echo get_template_directory_uri();?>/images/card-icons/dices.svg" class="cards-bg-dices">
        </div>
      </div>

    </div>

  <!------------------------------------- JavaScript ------------------------------------->
  <script>

    // Sorting Algorithm 
    function sortArray(unsortedArray){
      unsortedArray = Array.prototype.slice.call(unsortedArray, 0);
      var mylist = document.getElementById('card-middle-col');
      var listitems = [];
      for (i = 0; i < unsortedArray.length; i++) {
        listitems.push(unsortedArray[i]);
      }
      listitems.sort(function(a, b) {
        var compA = a.getAttribute('id').toUpperCase();
        var compB = b.getAttribute('id').toUpperCase();
        return (compA < compB) ? -1 : (compA > compB) ? 1 : 0;
      });
      console.log("listitems: ", listitems);
      return listitems;
      
    }
    

    // Shows Cards when clicked once
    function onceClickedAnimation(){
      var allDisplayedCards = document.getElementsByClassName('fact-card-display');
      allDisplayedCards = sortArray(allDisplayedCards);
      const allHiddenCards = document.getElementsByClassName("fact-card-hidden");
      

      for (i=0; i<(allDisplayedCards.length - 1); i++){

        
        allDisplayedCards[i].className += " fact-card-stack"
        allDisplayedCards[i].addEventListener('click', function(){
          for (j=0; j<allDisplayedCards.length; j++){
              allDisplayedCards[j].classList.remove("fact-card-open");
            }

          var clickedCardIndex = parseInt(this.id);
          for (c=0; (c < clickedCardIndex); c++){
            allDisplayedCards[c].className += " fact-card-open";
          }
          
        });
        
      }
      twiceClickedAnimation();
      
    }  

    // Makes cards drop down when double-clicked
    function twiceClickedAnimation(){
      var allDisplayedCards = document.getElementsByClassName('fact-card-display');
      allDisplayedCards = sortArray(allDisplayedCards);
      console.log('All displayed Cards: ', allDisplayedCards);

      const allHiddenCards = document.getElementsByClassName("fact-card-hidden");

      for (i = 0; i < (allDisplayedCards.length); i++){
        allDisplayedCards[i].addEventListener('dblclick', function(){
          allDisplayedCards[parseInt(this.id)-1].className += " fact-card-fall";

          var randIndex = Math.floor(Math.random() * allHiddenCards.length); 
          var randDiv = allHiddenCards[randIndex];
          var randDivId = randDiv.id.toString();

          this.removeAttribute('style');
          
          randDiv.id = parseInt(this.id).toString()+"-dis-card";
          this.id = randDivId;

          randDiv.classList = '';
          randDiv.classList += "fact-card-display";
          
          randDiv.style.left = ((parseInt(randDiv.id)-1) * 70).toString() + "px";
          randDiv.style.zIndex = (parseInt(randDiv.id)).toString(); 

          this.classList = '';
          this.classList += " fact-card-hidden";

          onceClickedAnimation();
        });
      }
    }
    onceClickedAnimation();

    
    
    


  </script>

  </div>
</section>



