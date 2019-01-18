<nav>
   <div class="container">
      <p>Solex Argo Ferry Corporation</p>
      <!-- REMOVE A TAG ONCE SIDEBAR DESIGN IS UP -->
      <a href="<?= base_url()?>login/logout"><i class="material-icons">dehaze</i></a>
   </div>
</nav>
<div class="header">
   <div class="port-name">
      <h1>San Jose Mindoro Port</h1>
   </div>
   <div class="progress-section">
      <div class="progress">
         <span>1</span>
         <p class="progress-name">Vessel <br> Selection</p>
      </div>
      <div class="progress">
         <span>2</span>
         <p class="progress-name">Voyage <br> Details</p>
      </div>
      <div class="progress">
         <span>3</span>
         <p class="progress-name">Route <br> Options</p>
      </div>
      <div class="progress">
         <span>4</span>
         <p class="progress-name">Fare <br> Options</p>
      </div>
      <div class="progress">
         <span>5</span>
         <p class="progress-name">Confirm</p>
      </div>
   </div>
</div>
<section>
   <div class="container">
      <h1>Vessel Selection</h1>
      <p>Choose a vessel</p>
         <div class="vessels">
         <button class="vessel" value="1">MV ARGE DE ORO-I</button>
         <button class="vessel" value="2">MV ARGE DE ORO-II</button>
         <button class="vessel" value="3">MV ARGE DE ORO-III</button>
         <button class="vessel" value="4">MV KALAYAN XI</button>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <h1>Voyage Details</h1>
      <div class="voyage">
         <p>Voyage Number</p>
         <div class="voyage-number">
            <input type="text">
            <i class="material-icons">check</i>
         </div>
         <p>Voyage Date</p>
         <div class="voyage-date">
            <select name="year" id="year">
               <option value="" disabled selected>Year</option>
               <option value="2019">2019</option>
               <option value="2020">2020</option>
               <option value="2021">2021</option>
               <option value="2022">2022</option>
               <option value="2023">2023</option>
            </select>
            <select name="month" id="month">
               <option value="" disabled selected>Month</option>
               <option value="1">January</option>
               <option value="2">February</option>
               <option value="3">Match</option>
               <option value="4">April</option>
               <option value="5">May</option>
               <option value="6">June</option>
               <option value="7">July</option>
               <option value="8">August</option>
               <option value="9">September</option>
               <option value="10">October</option>
               <option value="11">November</option>
               <option value="12">December</option>
            </select>
            <select name="day" id="day">
               <option value="" disabled selected>Day</option>
            </select>
         </div>
         <p>Ticketing Agent</p>
         <div class="ticketing-agent">
            <input type="text">
         </div>
      </div>
   </div>
</section>
<script src="<?= base_url()?>assets/js/date.js"></script>