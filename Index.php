<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOP1 RAFFLES</title>
    <link rel="stylesheet" href="css/style.css">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
 
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>





</head>
<body>
    <header>
        <audio id="spin-sound"><source src="audio/spin.mp3" type="audio/mpeg" loop></audio>
                <audio id="spin-sounds"><source src="audio/win.mp3" type="audio/mpeg"></audio>
        <div class="container">
            <div class="flex">
                <div class="logo">
                   
                </div>
                <div class="jackpot hide-small">
                    <div class="top"><img src="image/logo.png" style=" width: 120px; height: 40px;"></img></div>
                    <div class="ticket-counter">
                        <span class="progressive-jackpot-ticker" data-jackpot-id="15"></span>
                    </div>
                </div>
                <div class="menu">
                  
                    <div class="nav overlay">
                       
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="hero hide-medium" style="background-image: url('image/hero-bg.png')">
        <div class="container">
            <h1  class="slot">START!</h1>
            
        </div>

    </section>
     <div style="padding-top: 300px;"> <center>  <button class="btn btn-danger px-5" id="pick-button"><i class="fas fa-sync-alt"></i> SPIN</button></center></div>


 <script type="text/javascript">
const pickButton = document.getElementById("pick-button");
const slots = document.querySelectorAll(".slot");

const spinSound = document.getElementById("spin-sound");
const spinSounds = document.getElementById("spin-sounds");

pickButton.addEventListener("click", pickPrize);

var item = [];

function pickPrize() {
  pickButton.disabled = true;
  spinSound.play();

  $.ajax({
    url: "data.php",
    type: "post",
    success: function(data) {
      item = JSON.parse(data);
      let winner = get(item);
      spinSlots(winner);
    }
  });
}

function get(input) {
    var array = []; 
    for(var item in input) {
        if (input.hasOwnProperty(item)) { 
            for(var i = 0; i < input[item]; i++) {
                array.push(item);
            }
        }
    }
    return array[Math.floor(Math.random() * array.length)];
}



function insertIntoDB(winner) {
  $.ajax({
    url: "function.php",
    type: "post",
    data: { winner: winner},
    success: function(data) {
      console.log("Data inserted successfully");
    }
  });
}


function spinSlots(winner) {
  let count = 0;
  let slotIntervals = [];

  for (let i = 0; i < slots.length; i++) {
    slotIntervals[i] = setInterval(function() {
      slots[i].textContent = Object.keys(item)[count % Object.keys(item).length];
      count++;
    }, 1);
  }

  setTimeout(function() {
    for (let i = 0; i < slots.length; i++) {
      clearInterval(slotIntervals[i]);
      slots[i].textContent = winner;
    }
    spinSound.pause(); 
    spinSounds.play();// Stop playing audio when the spinning stops
    pickButton.disabled = false;
    insertIntoDB(winner);

  }, (slots.length + 1) * 4100);
}

</script>



  
</body>
</html>