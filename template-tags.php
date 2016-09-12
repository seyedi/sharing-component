<?php
/**
 * Custom template tags for this theme.
 */


/**
 * Social sharing buttons
 */

function social_sharing_buttons() {
  $siteURL = site_url();
  $pageURL = wp_get_shortlink();

  // Get current page title
  $pageTitle = str_replace( ' ', '%20', get_the_title());

  // Construct sharing URL without using any script
  $twitterURL = 'https://twitter.com/intent/tweet?text='.$pageTitle.'&amp;url='.$pageURL.'&amp;via=YOUR_TWITTER_USERNAME';
  $facebookURL = 'https://facebook.com/sharer/sharer.php?u='.$pageURL;
  $googleURL = 'https://plus.google.com/share?url='.$pageURL;
  $linkedinURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$pageURL.'&title='.$pageTitle.'&source='.$siteURL;
  $telegramURL = 'https://telegram.me/share/url?url='.$pageURL.'&text='.$pageTitle;

  // Add sharing button at the end of page/page content
  $content = '<div class="share-modal share-modal--close" >
  <div class="share-body">
    <a class="share-modal__close" href="#" id="closeModalButton">
      <i class="fa fa-close icon" aria-hidden="true"></i>
    </a>
    <p class="share-modal__title">
      <span>انتشار مطلب</span>
      <i class="fa fa-share icon" aria-hidden="true"></i>
    </p>
    <p class="share-modal__post-title">'.urldecode($pageTitle).'</p>

    <div class="share-buttons-container">
      <a class="twitter"     href="'.$twitterURL .'" target="_blank"><i class="fa fa-twitter icon" aria-hidden="true"></i></a>
      <a class="facebook"    href="'.$facebookURL.'" target="_blank"><i class="fa fa-facebook icon" aria-hidden="true"></i></a>
      <a class="google-plus" href="'.$googleURL.'"   target="_blank"><i class="fa fa-google-plus icon" aria-hidden="true"></i></a>
      <a class="linkedin"    href="'.$linkedinURL.'" target="_blank"><i class="fa fa-linkedin icon" aria-hidden="true"></i></a>
      <a class="telegram"    href="'.$telegramURL.'" target="_blank"><i class="fa fa-paper-plane icon" aria-hidden="true"></i></a>
    </div>

    <p class="share-modal__post-title share-modal__post-title--small">آدرس کوتاه شده این مطلب</p>
    <input type="text" readonly="" class="share-modal__link-box" value="'.$pageURL.'" onClick="this.select();">
  </div>
</div>';

  return $content;
};

?>