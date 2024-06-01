
<div class="count-down-timer" id="slide-countdown">
  <div class="background-picture"></div>
  <p id="weddingDate">Lásku si sľúbime <?php if(isMobileDevice()) : ?><br><?php endif; ?></p>
  <div class="wrapper">
    <div class="times">
      <p id="monthsLeft"></p>
      <p id="daysLeft"></p>
      <p id="hoursLeft"></p>
      <p id="minutesLeft"></p>
      <p id="secondsLeft"></p>
    </div>
    <div class="description">
      <p id="monthsLeftDescription"></p>
      <p id="daysLeftDescription"></p>
      <p id="hoursLeftDescription"></p>
      <p id="minutesLeftDescription"></p>
      <p id="secondsLeftDescription"></p>
    </div>
    <?php if(isMobileDevice()) : ?>
      <div class="icon">
        <a href="https://www.google.sk/maps/place/Gr%C3%A9ckokatol%C3%ADcky+chr%C3%A1m+Ochrany+Presv%C3%A4tej+Bohorodi%C4%8Dky/@49.0007399,22.226288,18z/data=!4m15!1m8!3m7!1s0x4739503cc091f9d3:0xa7ab3a24efde985d!2zMDY3IDYxIFN0YWvEjcOtbg!3b1!8m2!3d49.0018008!4d22.229107!16s%2Fm%2F026j6yl!3m5!1s0x47394fd783beeff7:0x44889de2548217dc!8m2!3d49.0005645!4d22.2263772!16s%2Fg%2F11hbgjftjl?entry=ttu" target="_blank" style="all: inherit;">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
        </a>
      </div>
    <?php endif; ?>
  </div>
  <?php if(isMobileDevice()) : ?>
    <div class="quiz-label">
      &larr;&nbsp;&nbsp;Kvízy&nbsp;&nbsp;&rarr;
    </div>
  <?php else : ?>
    <div class="quiz-label-left">
      &larr;&nbsp;&nbsp;Kvíz
    </div>
    <div class="quiz-label-right">
      Kvíz&nbsp;&nbsp;&rarr;
    </div>  
  <?php endif; ?>
</div>