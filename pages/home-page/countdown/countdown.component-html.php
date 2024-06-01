
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
        <a href="https://toystory.disney.com/" target="_blank" style="all: inherit;">
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