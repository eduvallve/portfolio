<?php
$component = "basicInformation";
$compRoute = "/htdocs/components/".$component."/".$component."_uploads/";
?>
<section class="<?= $component ?>">
  <main class="<?= $component ?>__main">
    <div class="cols">
      <div class="col-1">
        <picture>
          <source type="image/webp" srcset="<?php echo $uri.$compRoute."eduvallve_profile-pic-200.webp";?>" />
          <source type="image/jpeg"srcset="<?php echo $uri.$compRoute."eduvallve_profile-pic-200.jpeg";?>" />
          <img class="profilePic" src="<?php echo $uri.$compRoute."profilePic.svg";?>" alt="My profile picture" width="100" height="100">
        </picture>
      </div>
      <div class="col-3">
        <h2 class="<?= $component ?>__name">Eduard Vallvé</h2>
        <p class="<?= $component ?>__slogan">I <span class="heart">&#10084;</span> user interfaces</p>
        <p class="<?= $component ?>__description"><?php echo (intval(date("Y")) - 2016); ?> years of experience working with both small and big companies.</p>
        <div class="<?= $component ?>__buttons">
          <a class="btn btn__secondary icon icon__linkedin" href="https://www.linkedin.com/in/eduvallve/" target="_blank">My LinkedIn</a>
          <a class="btn btn__secondary icon icon__resumee" href="#" target="_blank">My Resumee</a>
        </div>
      </div>
      <div class="col-4">
        <p class="<?= $component ?>__studies icon icon__graduate">Degree in Multimedia (UPC).</p>
        <p class="<?= $component ?>__studies icon icon__master">Master degree in UX & Interface design (UOC).</p>
        <div class="<?= $component ?>__focus cols">
          <div class="col-3">
            <small>Focused on:</small>
          </div>
          <div class="col-3">
            <span class="rounded-tag" data-filter="filter_ux">UX</span>
            <div class="<?= $component ?>__focus-tooltip">User Experience [noun] :: The overall experience of a person using a product such as a website or computer application, especially in terms of how easy or pleasing it is to use.</div>
          </div>
          <div class="col-3">
            <span class="rounded-tag" data-filter="filter_ui">UI</span>
            <div class="<?= $component ?>__focus-tooltip">User Interface [noun] :: The means by which the user and a computer system interact, in particular the use of input devices and software.</div>
          </div>
          <div class="col-3">
            <span class="rounded-tag" data-filter="filter_web-dev">Web<br>dev.</span>
            <div class="<?= $component ?>__focus-tooltip">Web development [noun] :: The building and maintenance of websites; it’s the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience.</div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="<?= $component ?>__animation">
    <div class="<?= $component ?>__animation--stars"></div>
  </div>
  <div class="<?= $component ?>__bg"></div>
</section>