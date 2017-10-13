<?php
  session_start();
   // include_path='C:\xampp\php\PEAR'
  //session_destroy();
  $counter = 0;
  if (isset($_POST["append"])) {
    $_SESSION['cart'][]=$_POST;
  } 
  else if (isset($_POST["checkout"])){
    $_SESSION['cart'][]=$_POST;
    header('Location: cart.php');
  }
  //unset ($_SESSION['cart']);
  // session_unset();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Now Showing</title>
    <?php require_once("top-module.php"); ?>
  </head>
<body onload="showMovie()";>
  <?php require_once("header-nav-module.php"); ?>
<main>
<article>
<!-- carousel adapted from W3School Tutorial: https://www.w3schools.com/w3css/w3css_slideshow.asp -->
  <div id="showing" class="container">
  	<div>
      <img class="movie" src="https://image.ibb.co/mfF6nQ/despicableme3_16.jpg" alt="Despicable Me" border="0">
      <img class="movie" src="https://image.ibb.co/iRhprk/atomic_blonde_charlize_theron_banner.jpg" alt="Atomic Blonde" border="0">
      <img class="movie" src="https://image.ibb.co/jcQ3HQ/MADAME_1280x375_Date_1280x375_c.jpg" alt="Madame" border="0">
      <img class="movie" src="https://image.ibb.co/jPsmnQ/18216607_1775033269476423_1145837994894948498_o.jpg" alt="The Big Sick" border="0">
    </div>
  </div>
<div id="carousel">
  <button class="button-primary" onclick="plusmovie(-1)">Prev</button>
  <button class="button-primary" onclick="plusmovie(+1)">Next</button>
</div>
  <div class="container">
    <div class="row">
      <div class="six columns dimension timechart">
        <ul>Despicable Me 3</ul>
          <li>Mon-Tue 1pm*</li>
          <li>Wed-Fri 6pm</li>
          <li>Sat-Sun 12pm</li>
      </div>
      <div class="six columns dimension timechart">
        <ul>Atomic Blonde</ul>
          <li>Wed-Fri 9pm</li>
          <li>Sat-Sun 9pm</li>
          <li></li>
      </div>
    </div>
  <div class="row">
    <div class="six columns dimension timechart">
      <ul>Madame</ul>
        <li>Mon-Tue 6pm*</li>
        <li>Sat-Sun 3pm</li>
        <li></li>
    </div>
    <div class="six columns dimension timechart">
      <ul>The Big Sick</ul>
        <li>Mon-Tue 9pm*</li>
        <li>Wed-Fri 1pm*</li>
        <li>Sat-Sun 6pm</li>
    </div>
  </div>
</div>
  <div class="container">
    <div class="row">
      <div class="twelve columns dimension timechart">
        <p><strong>Enjoy our movies paying less!</strong><p>
        <p>Discount tickets for any session on Mondays and Tuesdays, and 1pm sessions from Monday to Friday!</p>
        <p>* shows discount prices</p>
        <div class=" row">
          <div class="four columns dimension timechart">
            <ul>Standard Seats Prices</ul>
              <li>Adult:</li>
              <li>$ 12.50*</li>
              <li>$ 18.50</li>
              <li>Concession:</li>
              <li>$ 10.50*</li>
              <li>$ 15.50</li>
              <li>Child:</li>
              <li>$ 8.50*</li>
              <li>$ 12.50</li>
          </div>
          <div class="four columns dimension timechart">
            <ul>Premium Seats Prices</ul>
              <li>Adult:</li>
              <li>$ 25.00*</li>
              <li>$ 30.00</li>
              <li>Child:</li>
              <li>$ 20.00*</li>
              <li>$ 25.00</li>
          </div>
          <div class="four columns dimension timechart">
            <ul>Bean Bags Prices</ul>
              <li>Adult:</li>
              <li>$ 22.00*</li>
              <li>$ 33.00</li>
              <li>Family:</li>
              <li>$ 20.00*</li>
              <li>$ 30.00</li>
              <li>Child:</li>
              <li>$ 20.00*</li>
              <li>$ 30.00</li>
          </div>         
        </div>
      </div>
  </div>
</div>
  <!-- Starting form code sourced and adapted from https://titan.csit.rmit.edu.au/~e54061/wp/silverado-test.php -->
  <div class="container form">
    <form action="#tickets" onsubmit='return formValidate();' method='post' id='tickets'>
        <fieldset><legend>Booking Form:</legend>
          <div class="row">
            <div class="five columns">
                <label>Select Movie:</label>
                <select onchange='mvFunc(); sessionFunction();' class='dropdown u-full-width' name='movie' id='movieTitle' required>
                  <option selected disabled value="">Select Movie</option>
                  <option value="CH" id="CH">Despicable Me 3</option>
                  <option value="AC" id="AC">Atomic Blonde</option>
                  <option value="RC" id="RC">The Big Sick</option>
                  <option value="AF" id="AF">Madame</option>
                </select>
            </div>
            <div class="five columns">
              <label>Select Session:</label>
                <select onchange='sessionFunction();' class='dropdown u-full-width' name='session' id='session' required>
                  <option selected disabled value="">Select Session</option>
                </select>
            </div>
          </div>
          <fieldset><legend>Select Seat Type and Quantity:*</legend>
            <fieldset><legend>Standard:</legend>
              <h6 class='error' id='ticketError'></h6>
              <div class="row">
                <div class="five columns">
                  <span class='error' id='fnameError'></span>
                  <label>Adult</label>
                  <select onchange='stdFuncAd(this.id);' id='stdFSeat' class='dropdown u-full-width' name='seats[SF]'>
                  <option selected value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  </select>
              </div>
              <div class="seven columns">
                <label>Price</label>
                <p><span class="price" id="pStdAd">$ 0.00</span></p>
              </div>
            </div>
            <div class="row">
              <div class="five columns">
                <label>Concession</label>
                <select onchange="stdFuncCo(this.id);" class="dropdown u-full-width" id="stdCoSeat" name='seats[SP]'>
                  <option selected value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
              <div class="seven columns">
                <label>Price</label>
                <p><span class="price" id="pStdCo">$ 0.00</span></p>
              </div>
            </div>
            <div class="row">
              <div class="five columns">
                <label>Child</label>
                <select onchange="stdFuncCh(this.id);" class="dropdown u-full-width" id="stdChSeat" name='seats[SC]'>
                  <option selected value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
              <div class="seven columns">
                <label>Price</label>
                <p><span class="price" id="pStdCh">$ 0.00</span></p>
              </div>
            </div>
            </fieldset>
            <fieldset><legend>First Class</legend>
              <div class="row">
                <div class="five columns">
                  <label>Adult</label>
                  <select onchange="fcFuncAd(this.id);" id="preAd" class="dropdown u-full-width" name='seats[FA]'>
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                </div>
                <div class="seven columns">
                  <label>Price</label>
                  <p><span class="price" id="pPreAd">$ 0.00</span></p>
                </div>
              </div>
              <div class="row">
                <div class="five columns">
                  <label>Child</label>
                  <select onchange="fcFuncCh(this.id);" id="preCh" class="dropdown u-full-width" name='seats[FC]'>
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                </div>
                <div class="seven columns">
                  <label>Price</label>
                  <p><span class="price" id="pPreCh">$ 0.00</span></p>
                </div>
              </div>
            </fieldset>
            <fieldset><legend>Bean Bags</legend>
              <div class="row">
                <div class="five columns">
                  <label>Adult</label>
                  <select onchange="beanFuncAd(this.id);" id="beanAd" class="dropdown u-full-width" name='seats[BA]'>
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                </div>
                <div class="seven columns">
                  <label>Price</label>
                  <p><span class="price" id="pBeanAd">$ 0.00</span></p>
                </div>
              </div>
              <div class="row">
                <div class="five columns">
                  <label>Family</label>
                  <select onchange="beanFuncFa(this.id);" id="beanFa" class="dropdown u-full-width" name='seats[BF]'>
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                </div>
                <div class="seven columns">
                  <label>Price</label>
                  <p><span class="price" id="pBeanFa">$ 0.00</span></p>
                </div>
              </div>
              <div class="row">
                <div class="five columns">
                  <label>Child</label>
                  <select onchange="beanFuncCh(this.id);" id="beanCh" class="dropdown u-full-width" name='seats[BC]'>
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                </div>
                <div class="seven columns">
                  <label>Price</label>
                  <p><span class="price" id="pBeanCh">$ 0.00</span></p>
                </div>
              </div>
            </fieldset>
          </fieldset>
          <h4 class="total">Total: <span class="price" id="pTotal">$ 0.00</span></h4>
          <?php if(isset($_SESSION['cart'])){
            //foreach ($_SESSION['cart'] as &$value) {}
            $counter = count($_SESSION['cart']);
          } ?>
          <input class="button-primary" type="submit" name="checkout" value="checkout"  id="checkout" > 
          <input class="button-primary" type="submit" name="append" value="Add to Cart(<?php echo $counter; ?>)" id="append">
          
        </fieldset>
        </form>

        <?php echo isset($_SESSION['cart']);  // undefined
          //$converted_res = (isset($_SESSION['cart'])) ? 'true' : 'false';
          //echo "hi". $converted_res;
          // if(isset($_SESSION['cart'])){ // true
          //        unset ($_SESSION['cart']); 
          //     }
          echo gettype($_SESSION['cart']);
          echo count($_SESSION['cart']);
          if(isset($_SESSION['cart'])){
            //foreach ($_SESSION['cart'] as &$value) {}
            $counter = count($_SESSION['cart']);
          //$counter = count($_SESSION['cart']);
          //$counter = count($_SESSION['cart']);
          }
        ?>
    </div>
  </article>
</main>
<?php require_once("footer-module.php"); ?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
  <script type="text/javascript" src="form.js"></script>
  </body>
  <script type="text/javascript" src="showing.js"></script>
</html>