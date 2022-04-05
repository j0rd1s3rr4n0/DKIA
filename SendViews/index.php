<style>
  *, *:before, *:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body {
  /*background: linear-gradient(to right, #ea1d6f 0%, #eb466b 100%);*/
  background: url(background.jpg);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  font-size: 12px;
}

body, button, input {
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  letter-spacing: 1.4px;
}

.background {
  display: flex;
  min-height: 100vh;
}

.container {
  flex: 0 1 700px;
  margin: auto;
  padding: 10px;
}

.screen {
  position: relative;
  background: #3e3e3e;
  border-radius: 15px;
}

.screen:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 20px;
  right: 20px;
  bottom: 0;
  border-radius: 15px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
  z-index: -1;
}

.screen-header {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  background: #4d4d4f;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.screen-header-left {
  margin-right: auto;
}

.screen-header-button {
  display: inline-block;
  width: 8px;
  height: 8px;
  margin-right: 3px;
  border-radius: 8px;
  background: white;
}

.screen-header-button.close {
  background: #ed1c6f;
}

.screen-header-button.maximize {
  background: #e8e925;
}

.screen-header-button.minimize {
  background: #74c54f;
}

.screen-header-right {
  display: flex;
}

.screen-header-ellipsis {
  width: 3px;
  height: 3px;
  margin-left: 2px;
  border-radius: 8px;
  background: #999;
}

.screen-body {
  display: flex;
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}

.screen-body-item.left {
  display: flex;
  flex-direction: column;
}

.app-title {
  display: flex;
  flex-direction: column;
  position: relative;
  color: #ea1d6f;
  font-size: 26px;
}

.app-title:after {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 25px;
  height: 4px;
  background: #ea1d6f;
}

.app-contact {
  margin-top: auto;
  font-size: 8px;
  color: #888;
}
input[type="range"]{
  width:200px;
  height:20px;
}
.app-form-group {
  margin-bottom: 15px;
}

.app-form-group.message {
  margin-top: 40px;
}

.app-form-group.buttons {
  margin-bottom: 0;
  text-align: right;
}

.app-form-control {
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #666;
  color: #ddd;
  font-size: 14px;
  text-transform: uppercase;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color: #666;
}

.app-form-control:focus {
  border-bottom-color: #ddd;
}

.app-form-button {
  background: none;
  border: none;
  color: #ea1d6f;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}

.app-form-button:hover {
  color: #b9134f;
}

.credits {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
  color: #ffa4bd;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 16px;
  font-weight: normal;
}

.credits-link {
  display: flex;
  align-items: center;
  color: #fff;
  font-weight: bold;
  text-decoration: none;
}

.dribbble {
  width: 20px;
  height: 20px;
  margin: 0 5px;
}

@media screen and (max-width: 520px) {
  .screen-body {
    flex-direction: column;
  }

  .screen-body-item.left {
    margin-bottom: 30px;
  }

  .app-title {
    flex-direction: row;
  }

  .app-title span {
    margin-right: 12px;
  }

  .app-title:after {
    display: none;
  }
}

@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }

  .screen-body-item {
    padding: 0;
  }
}
a{
  color:#ea1d6f;
  text-decoration:none;
}
a:hover{
  color:#ea1d6f;
  text-decoration:none;
  letter-spacing:5px;
}
</style>
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>Instagram</span>
            <span>likes</span>
            <span>
            </span>
          </div>
        </br>
          <center><img src="http://localhost/o/DKIA/bot.png" onerror="hiddemyass()" id="ddd" width="80%"></center>
          <div class="app-contact">
            <p>Instagram: <a href="https://instagra.com/parthenoun:" style="text-decoration:none;color:#ea1d6f;">@parthenoun</a></p>
            <p>Wire: <a href="" style="text-decoration:none;color:#ea1d6f;">@parthenoun</a></p>
            <p>Email: <a href="mailito:parthenoun@protonmail.ch" style="text-decoration:none;color:#ea1d6f;">parthenoun@protonmail.ch</a></p>
          </div>
          <script>
function hiddemyass() {
  var x = document.getElementById("ddd");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <h1 class="app-form-control" style="font-size:25px;">CREATED BY <a href="https://www.instagram.com/parthenoun/">@Parthenoun</a></h1>
            </div>
            <form action="sendviews.php" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="link" name="linke" required>
            </div>
            <div class="app-form-group">
              <center> <h2 style="color:white;">NEW likes:</BR><output for="numlike" id="valor" style="color:white;font-size:25px;"></output></h2>
              </br>
              <input type="range" name="numlike" id="numlike" min="1" max="2" value="1" class="slider" placeholder="Number of likes" oninput="outputUpdate(val)">
            </center>
            <br>
            <h2  style="color:white;">Instagram profile is: <select required id="pu" name="pu" style="background-color:#3e3e3e;font-size:20px;color:white;border:0px;">
                <option disabled selected value> -- Selecciona una opcion -- </option>
                <option value="private">Private</option>
                <option value="public">Public</option>
            </select></h2>
            </div>
            <div class="app-form-group buttons">
              <input type="submit" onclick="alert('Enviando Seguidores, espere unos minutos.\n ( Cuando se termine la tarea le redirigiremos a una nueva paguina )');">
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
var slider = document.getElementById("numlike");
var output = document.getElementById("valor");
output.innerHTML = slider.value;

slider.oninput = function() {
    output.innerHTML = this.value;
}

function outputUpdate(val) {
    var result = document.querySelector("#valor");
    result.value = val;
    result.style.left = val + 'px';
}
</script>