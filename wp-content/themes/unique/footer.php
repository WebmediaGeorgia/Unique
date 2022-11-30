<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Unique
 */

?>

<footer class="footer">
   <div class="container">
      <div class="footer__top">
         <?php
         $logo_img = '';
         if ($custom_logo_id = get_theme_mod('custom_logo')) {
            $logo_img = wp_get_attachment_image($custom_logo_id, 'full', false, array(
               'class'    => 'image', // здесь Ваш class
               'alt' => get_bloginfo('name'),
               'itemprop' => 'logo',
            ));
         }
         ?>
         <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="footer-logo">
            <?php echo $logo_img; ?>
         </a>
         <nav class="footer-nav">
            <ul class="footer-nav__list list-reset">
               <?php
               wp_nav_menu(
                  array(
                     'theme_location' => 'footer_menu',
                     'menu_id'        => 'Footer Menu',
                     'container' => true,
                     'items_wrap' => '%3$s',
                  )
               );
               ?>
            </ul>
         </nav>
         <div class="hero__btns btns footer-btns">
            <a href="#" class="hero__btn btn footer-btn"><svg class="hero__btn-apple" viewBox="0 0 186 49" xmlns="http://www.w3.org/2000/svg">
                  <path class="apple" d="M28.0626 22.8378C28.0827 21.2311 28.4959 19.6557 29.2638 18.2583C30.0316 16.8609 31.1293 15.6867 32.4545 14.8452C31.6126 13.6033 30.502 12.5812 29.2107 11.8602C27.9195 11.1392 26.4833 10.7391 25.0162 10.6916C21.8864 10.3522 18.8525 12.6259 17.2575 12.6259C15.632 12.6259 13.1765 10.7253 10.5324 10.7815C8.82214 10.8385 7.1553 11.3522 5.69434 12.2724C4.23338 13.1927 3.02812 14.4881 2.196 16.0325C-1.40845 22.4784 1.28016 31.9513 4.73309 37.1615C6.46057 39.7128 8.47936 42.5626 11.1212 42.4615C13.7062 42.3509 14.6716 40.7589 17.7922 40.7589C20.8838 40.7589 21.7895 42.4615 24.4849 42.3972C27.2588 42.3509 29.0064 39.8347 30.6734 37.2592C31.9145 35.4414 32.8696 33.4322 33.5032 31.3062C31.8917 30.6022 30.5164 29.4237 29.5489 27.9178C28.5814 26.4119 28.0645 24.6451 28.0626 22.8378ZM22.9717 7.26493C24.4841 5.38959 25.2292 2.97917 25.0488 0.545543C22.7381 0.79621 20.6036 1.93688 19.0707 3.74027C18.3212 4.62127 17.7472 5.64621 17.3815 6.75649C17.0157 7.86678 16.8654 9.04063 16.9392 10.2109C18.095 10.2232 19.2384 9.9645 20.2833 9.4542C21.3283 8.9439 22.2475 8.19535 22.9717 7.26493ZM60.7401 36.0028H51.9183L49.7998 42.4639H46.0631L54.4191 18.5593H58.3012L66.6571 42.4639H62.8567L60.7401 36.0028ZM52.8319 33.0212H59.8246L56.3775 22.5353H56.2809L52.8319 33.0212ZM84.7028 33.7507C84.7028 39.1665 81.8962 42.6462 77.6611 42.6462C76.5882 42.7041 75.5212 42.4489 74.5822 41.9096C73.6432 41.3704 72.8703 40.5689 72.3519 39.597H72.2717V48.2294H68.8082V25.0355H72.1608V27.9344H72.2246C72.7668 26.9671 73.5528 26.1698 74.4989 25.6273C75.445 25.0847 76.5158 24.8172 77.5973 24.8532C81.8798 24.8532 84.7028 28.3498 84.7028 33.7506V33.7507ZM81.1427 33.7507C81.1427 30.2222 79.3774 27.9024 76.6837 27.9024C74.0372 27.9024 72.2574 30.2709 72.2574 33.7506C72.2574 37.2623 74.0372 39.6141 76.6837 39.6141C79.3774 39.6141 81.1427 37.3112 81.1427 33.7506V33.7507ZM103.274 33.7507C103.274 39.1665 100.468 42.6462 96.2327 42.6462C95.1599 42.7041 94.0929 42.4488 93.154 41.9096C92.215 41.3703 91.4421 40.5689 90.9237 39.597H90.8436V48.2294H87.38V25.0355H90.7325V27.9344H90.7962C91.3385 26.9671 92.1245 26.1698 93.0705 25.6273C94.0166 25.0847 95.0874 24.8172 96.169 24.8532C100.452 24.8532 103.274 28.3498 103.274 33.7506V33.7507ZM99.7145 33.7507C99.7145 30.2222 97.949 27.9024 95.2554 27.9024C92.6089 27.9024 90.829 30.2709 90.829 33.7506C90.829 37.2623 92.6089 39.6141 95.2554 39.6141C97.949 39.6141 99.7145 37.3112 99.7145 33.7506V33.7507ZM115.549 35.8036C115.806 38.174 118.035 39.7306 121.082 39.7306C124.001 39.7306 126.102 38.174 126.102 36.0365C126.102 34.181 124.835 33.0701 121.835 32.3087L118.836 31.5624C114.586 30.5021 112.613 28.4493 112.613 25.1181C112.613 20.9936 116.093 18.1608 121.034 18.1608C125.925 18.1608 129.278 20.9936 129.39 25.1181H125.894C125.685 22.7327 123.775 21.2926 120.985 21.2926C118.195 21.2926 116.286 22.7496 116.286 24.87C116.286 26.5601 117.505 27.5546 120.488 28.3157L123.038 28.9625C127.787 30.1223 129.76 32.0926 129.76 35.5889C129.76 40.0613 126.311 42.8623 120.825 42.8623C115.692 42.8623 112.227 40.1269 112.003 35.8034L115.549 35.8036ZM137.235 20.9112V25.0355H140.443V27.8685H137.235V37.4766C137.235 38.9692 137.877 39.6647 139.288 39.6647C139.669 39.6579 140.049 39.6302 140.427 39.5819V42.3982C139.793 42.5205 139.148 42.5758 138.503 42.5634C135.087 42.5634 133.755 41.2382 133.755 37.8581V27.8685H131.301V25.0355H133.755V20.9112H137.235ZM142.302 33.7507C142.302 28.267 145.429 24.8213 150.305 24.8213C155.197 24.8213 158.309 28.267 158.309 33.7507C158.309 39.2493 155.213 42.68 150.304 42.68C145.398 42.68 142.302 39.2493 142.302 33.7507ZM154.78 33.7507C154.78 29.9891 153.111 27.7688 150.304 27.7688C147.498 27.7688 145.831 30.0059 145.831 33.7507C145.831 37.5274 147.498 39.7306 150.304 39.7306C153.111 39.7306 154.78 37.5274 154.78 33.7507ZM161.165 25.0355H164.468V28.0019H164.548C164.772 27.0755 165.297 26.2567 166.036 25.6833C166.775 25.1099 167.683 24.8168 168.607 24.8532C169.006 24.8518 169.404 24.8965 169.794 24.9866V28.3328C169.29 28.1738 168.764 28.1008 168.237 28.1167C167.734 28.0956 167.233 28.1872 166.767 28.3853C166.301 28.5833 165.883 28.8831 165.54 29.264C165.197 29.645 164.938 30.0981 164.781 30.5921C164.623 31.0862 164.571 31.6096 164.628 32.1264V42.4639H161.165V25.0355ZM185.763 37.3449C185.297 40.5088 182.314 42.68 178.497 42.68C173.588 42.68 170.542 39.2832 170.542 33.8333C170.542 28.3667 173.605 24.8213 178.351 24.8213C183.02 24.8213 185.955 28.1336 185.955 33.4179V34.6436H174.038V34.8597C173.983 35.5011 174.061 36.1473 174.266 36.7553C174.471 37.3633 174.799 37.9192 175.229 38.3861C175.658 38.853 176.179 39.2203 176.756 39.4634C177.333 39.7066 177.954 39.8201 178.577 39.7964C179.395 39.8756 180.217 39.6798 180.919 39.2381C181.621 38.7965 182.166 38.1324 182.474 37.3449H185.763ZM174.054 32.1434H182.49C182.521 31.5666 182.437 30.9895 182.241 30.4482C182.046 29.9068 181.745 29.413 181.356 28.9976C180.968 28.5823 180.5 28.2544 179.983 28.0345C179.466 27.8146 178.91 27.7075 178.351 27.7199C177.787 27.7165 177.228 27.8284 176.706 28.0493C176.184 28.2702 175.71 28.5957 175.31 29.0069C174.911 29.4182 174.594 29.9071 174.379 30.4454C174.163 30.9837 174.053 31.5608 174.054 32.1434ZM52.3979 0.566141C53.124 0.512308 53.8527 0.625609 54.5313 0.897871C55.2099 1.17013 55.8216 1.59457 56.3221 2.14056C56.8227 2.68655 57.1997 3.34049 57.426 4.05521C57.6522 4.76992 57.7221 5.52759 57.6305 6.27356C57.6305 9.94298 55.7103 12.0524 52.3979 12.0524H48.381V0.565948L52.3979 0.566141ZM50.1083 10.4279H52.205C52.7238 10.4599 53.2431 10.372 53.7249 10.1706C54.2067 9.96922 54.639 9.65939 54.9903 9.26368C55.3416 8.86798 55.603 8.39634 55.7556 7.88312C55.9082 7.36989 55.948 6.82799 55.8722 6.29685C55.9425 5.76781 55.8986 5.22926 55.7437 4.71979C55.5888 4.21032 55.3267 3.74255 54.9763 3.34998C54.6258 2.95742 54.1956 2.64978 53.7165 2.44912C53.2373 2.24845 52.7212 2.15973 52.205 2.1893H50.1083V10.4279ZM59.5816 7.71442C59.5288 7.14478 59.5919 6.57003 59.7668 6.02705C59.9417 5.48406 60.2245 4.98482 60.5971 4.56135C60.9698 4.13788 61.424 3.79953 61.9306 3.568C62.4373 3.33646 62.9852 3.21686 63.5392 3.21686C64.0933 3.21686 64.6412 3.33646 65.1478 3.568C65.6545 3.79953 66.1087 4.13788 66.4813 4.56135C66.854 4.98482 67.1368 5.48406 67.3117 6.02705C67.4866 6.57003 67.5496 7.14478 67.4969 7.71442C67.5508 8.28473 67.4886 8.86038 67.3142 9.40436C67.1398 9.94835 66.8572 10.4486 66.4845 10.8731C66.1117 11.2975 65.6571 11.6366 65.1499 11.8687C64.6427 12.1008 64.094 12.2207 63.5392 12.2207C62.9845 12.2207 62.4358 12.1008 61.9286 11.8687C61.4213 11.6366 60.9667 11.2975 60.594 10.8731C60.2213 10.4486 59.9386 9.94835 59.7643 9.40436C59.5899 8.86038 59.5277 8.28473 59.5816 7.71442ZM65.7934 7.71442C65.7934 5.83543 64.9762 4.73664 63.542 4.73664C62.1023 4.73664 61.2925 5.83543 61.2925 7.71442C61.2925 9.60842 62.1025 10.6987 63.542 10.6987C64.9762 10.6987 65.7934 9.60091 65.7934 7.71442ZM78.0187 12.0522H76.3004L74.566 5.66815H74.435L72.7078 12.0522H71.0061L68.6928 3.38395H70.3726L71.8761 9.99823H71.9998L73.7252 3.38395H75.3141L77.0395 9.99823H77.1705L78.6665 3.38395H80.3228L78.0187 12.0522ZM82.2684 3.38414H83.8628V4.76109H83.9865C84.1965 4.26649 84.5506 3.85186 84.9996 3.57502C85.4485 3.29817 85.9699 3.1729 86.491 3.21667C86.8994 3.18497 87.3094 3.24857 87.6907 3.40276C88.072 3.55695 88.4148 3.79777 88.6938 4.10739C88.9728 4.41701 89.1807 4.78749 89.3022 5.19139C89.4238 5.59529 89.4557 6.02225 89.3958 6.44065V12.052H87.7395V6.87031C87.7395 5.47738 87.1534 4.78457 85.9286 4.78457C85.6513 4.77126 85.3746 4.82001 85.1173 4.92749C84.86 5.03497 84.6282 5.19863 84.4379 5.40726C84.2476 5.6159 84.1032 5.86457 84.0146 6.13623C83.926 6.4079 83.8953 6.69613 83.9247 6.98119V12.0522H82.2684V3.38414ZM92.0349 0.000192761H93.691V12.0522H92.0349V0.000192761ZM95.9934 7.71442C95.9406 7.1447 96.0037 6.56988 96.1786 6.02682C96.3535 5.48376 96.6364 4.98445 97.0091 4.56093C97.3818 4.1374 97.8361 3.799 98.3428 3.56744C98.8495 3.33587 99.3975 3.21625 99.9516 3.21625C100.506 3.21625 101.054 3.33587 101.56 3.56744C102.067 3.799 102.521 4.1374 102.894 4.56093C103.267 4.98445 103.55 5.48376 103.725 6.02682C103.899 6.56988 103.963 7.1447 103.91 7.71442C103.963 8.28464 103.901 8.86014 103.726 9.40395C103.552 9.94777 103.269 10.4479 102.896 10.8721C102.524 11.2963 102.069 11.6353 101.562 11.8673C101.055 12.0993 100.506 12.2192 99.9516 12.2192C99.3969 12.2192 98.8484 12.0993 98.3412 11.8673C97.8341 11.6353 97.3795 11.2963 97.0067 10.8721C96.634 10.4479 96.3512 9.94777 96.1767 9.40395C96.0022 8.86014 95.9398 8.28464 95.9934 7.71442ZM102.205 7.71442C102.205 5.83543 101.388 4.73664 99.9538 4.73664C98.5141 4.73664 97.7043 5.83543 97.7043 7.71442C97.7043 9.60842 98.5143 10.6987 99.9538 10.6987C101.388 10.6987 102.205 9.60091 102.205 7.71442ZM105.653 9.60091C105.653 8.04051 106.778 7.14096 108.775 7.01314L111.048 6.87781V6.12957C111.048 5.21404 110.462 4.69718 109.33 4.69718C108.405 4.69718 107.765 5.04772 107.581 5.66064H105.977C106.146 4.17166 107.502 3.21686 109.406 3.21686C111.51 3.21686 112.697 4.29871 112.697 6.12957V12.0522H111.102V10.8341H110.971C110.705 11.271 110.332 11.6272 109.889 11.8663C109.446 12.1054 108.95 12.2189 108.451 12.195C108.098 12.2329 107.742 12.1941 107.405 12.0811C107.069 11.9681 106.758 11.7834 106.495 11.539C106.231 11.2946 106.02 10.9959 105.875 10.6621C105.73 10.3282 105.655 9.96676 105.653 9.60091ZM111.048 8.86017V8.13542L108.998 8.27074C107.843 8.35063 107.319 8.7568 107.319 9.52083C107.319 10.301 107.974 10.7551 108.875 10.7551C109.139 10.7827 109.405 10.7552 109.659 10.6742C109.912 10.5932 110.147 10.4603 110.35 10.2835C110.553 10.1067 110.719 9.88958 110.839 9.64506C110.959 9.40054 111.03 9.13362 111.048 8.86017ZM114.874 7.71442C114.874 4.97534 116.237 3.24034 118.357 3.24034C118.882 3.21537 119.402 3.34511 119.858 3.61441C120.314 3.88371 120.686 4.28143 120.931 4.76109H121.055V0H122.711V12.052H121.124V10.6824H120.993C120.729 11.1588 120.344 11.5516 119.879 11.8182C119.415 12.0848 118.888 12.215 118.357 12.1948C116.222 12.1948 114.874 10.4597 114.874 7.71422V7.71442ZM116.585 7.71442C116.585 9.55279 117.424 10.6593 118.827 10.6593C120.223 10.6593 121.086 9.537 121.086 7.72173C121.086 5.91532 120.214 4.77707 118.827 4.77707C117.433 4.77707 116.585 5.89087 116.585 7.71442ZM129.563 7.71442C129.51 7.14478 129.574 6.57003 129.748 6.02705C129.923 5.48406 130.206 4.98482 130.579 4.56135C130.951 4.13788 131.406 3.79953 131.912 3.568C132.419 3.33646 132.967 3.21686 133.521 3.21686C134.075 3.21686 134.623 3.33646 135.129 3.568C135.636 3.79953 136.09 4.13788 136.463 4.56135C136.836 4.98482 137.118 5.48406 137.293 6.02705C137.468 6.57003 137.531 7.14478 137.478 7.71442C137.532 8.28473 137.47 8.86038 137.296 9.40436C137.121 9.94835 136.839 10.4486 136.466 10.8731C136.093 11.2975 135.639 11.6366 135.132 11.8687C134.624 12.1008 134.076 12.2207 133.521 12.2207C132.966 12.2207 132.417 12.1008 131.91 11.8687C131.403 11.6366 130.948 11.2975 130.576 10.8731C130.203 10.4486 129.92 9.94835 129.746 9.40436C129.572 8.86038 129.509 8.28473 129.563 7.71442ZM135.775 7.71442C135.775 5.83543 134.958 4.73664 133.524 4.73664C132.084 4.73664 131.274 5.83543 131.274 7.71442C131.274 9.60842 132.084 10.6987 133.524 10.6987C134.958 10.6987 135.775 9.60091 135.775 7.71442ZM139.701 3.38414H141.295V4.76109H141.419C141.629 4.26649 141.983 3.85186 142.432 3.57502C142.881 3.29817 143.402 3.1729 143.923 3.21667C144.332 3.18497 144.742 3.24857 145.123 3.40276C145.504 3.55695 145.847 3.79777 146.126 4.10739C146.405 4.41701 146.613 4.78749 146.735 5.19139C146.856 5.59529 146.888 6.02225 146.828 6.44065V12.052H145.172V6.87031C145.172 5.47738 144.586 4.78457 143.361 4.78457C143.084 4.77126 142.807 4.82001 142.55 4.92749C142.292 5.03497 142.061 5.19863 141.87 5.40726C141.68 5.6159 141.536 5.86457 141.447 6.13623C141.358 6.4079 141.328 6.69613 141.357 6.98119V12.0522H139.701L139.701 3.38414ZM156.187 1.22603V3.4236H158.005V4.86446H156.187V9.3216C156.187 10.2296 156.549 10.6273 157.374 10.6273C157.585 10.6266 157.795 10.6133 158.005 10.5877V12.0127C157.708 12.0677 157.406 12.0969 157.104 12.1001C155.262 12.1001 154.529 11.4308 154.529 9.75972V4.86446H153.197V3.42341H154.529V1.22622L156.187 1.22603ZM160.267 0.000192761H161.909V4.77707H162.04C162.26 4.27785 162.624 3.86089 163.082 3.583C163.54 3.30511 164.07 3.17981 164.599 3.22417C165.005 3.20134 165.411 3.27139 165.788 3.42933C166.165 3.58726 166.504 3.8292 166.78 4.13787C167.056 4.44654 167.263 4.81434 167.385 5.21502C167.508 5.6157 167.543 6.03939 167.489 6.45586V12.0522H165.831V6.87781C165.831 5.49317 165.207 4.79208 164.037 4.79208C163.752 4.76799 163.466 4.80842 163.198 4.91055C162.93 5.01269 162.687 5.17405 162.485 5.38337C162.284 5.59268 162.13 5.84489 162.033 6.12235C161.936 6.3998 161.898 6.69581 161.924 6.98966V12.0522H160.267V0.000192761ZM177.147 9.7116C176.922 10.5038 176.434 11.1892 175.769 11.6476C175.104 12.1061 174.305 12.3085 173.51 12.2195C172.957 12.2346 172.408 12.1252 171.9 11.899C171.392 11.6727 170.938 11.335 170.569 10.9094C170.2 10.4837 169.925 9.98017 169.764 9.43381C169.602 8.88745 169.558 8.31132 169.633 7.74541C169.56 7.17774 169.605 6.60035 169.766 6.05233C169.927 5.50431 170.201 4.99846 170.568 4.56903C170.934 4.1396 171.386 3.79661 171.893 3.56329C172.399 3.32996 172.948 3.21176 173.503 3.21667C175.838 3.21667 177.247 4.86446 177.247 7.58641V8.18335H171.321V8.27921C171.295 8.5973 171.333 8.91749 171.434 9.21923C171.535 9.52097 171.696 9.79761 171.906 10.0314C172.117 10.2652 172.372 10.451 172.656 10.5769C172.94 10.7028 173.247 10.766 173.556 10.7625C173.952 10.8116 174.353 10.7379 174.709 10.5508C175.064 10.3637 175.358 10.0716 175.552 9.7116H177.147ZM171.321 6.91824H175.559C175.58 6.62732 175.542 6.33511 175.447 6.06038C175.352 5.78566 175.202 5.53449 175.008 5.32301C174.813 5.11154 174.578 4.94444 174.317 4.83245C174.057 4.72046 173.776 4.66606 173.494 4.67273C173.207 4.66901 172.923 4.72455 172.658 4.83609C172.392 4.94763 172.151 5.11291 171.949 5.32219C171.746 5.53146 171.586 5.78049 171.478 6.05461C171.37 6.32872 171.317 6.62237 171.321 6.91824Z" fill="white" />
               </svg> </a><a href="#" class="hero__btn btn footer-btn"><svg width="198" height="47" viewBox="0 0 198 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="google" d="M64.2964 5.93502C64.2964 7.36472 63.8737 8.50322 63.0271 9.35251C62.0655 10.3624 60.8122 10.8677 59.2716 10.8677C57.7962 10.8677 56.5417 10.3558 55.5101 9.3305C54.4767 8.30597 53.9609 7.03548 53.9609 5.51966C53.9609 4.00314 54.4767 2.73342 55.5101 1.70804C56.5417 0.683587 57.7962 0.170898 59.2716 0.170898C60.0037 0.170898 60.7046 0.314313 61.37 0.600299C62.0355 0.886975 62.5693 1.26752 62.9686 1.74409L62.0701 2.64461C61.3933 1.83474 60.4616 1.43011 59.2716 1.43011C58.1956 1.43011 57.2651 1.80882 56.4799 2.56669C55.6945 3.32533 55.3019 4.30914 55.3019 5.51966C55.3019 6.73024 55.6945 7.71398 56.4799 8.4727C57.2651 9.23057 58.1955 9.6092 59.2716 9.6092C60.4131 9.6092 61.3647 9.2285 62.1267 8.46602C62.6213 7.96929 62.9073 7.27883 62.9838 6.39218H59.2715V5.16235H64.2251C64.2729 5.42977 64.2962 5.68638 64.2962 5.93502" fill="white" />
                  <path class="google" d="M64.2967 5.93477H64.1263C64.1249 7.33187 63.7175 8.41699 62.9069 9.23162L62.9051 9.233L62.9044 9.23438C61.9733 10.2094 60.7765 10.6948 59.2718 10.6968C57.8358 10.6948 56.6338 10.2042 55.6302 9.20961C54.6287 8.21307 54.1335 6.99649 54.1316 5.5194C54.1335 4.04161 54.6287 2.82573 55.6302 1.82988C56.6338 0.834646 57.8358 0.343354 59.2718 0.341283C59.982 0.341283 60.6582 0.480097 61.303 0.756649C61.9486 1.03535 62.4585 1.40056 62.8384 1.85396L62.9689 1.74383L62.8485 1.6232L61.9499 2.52433L62.0703 2.64436L62.2016 2.53515C61.4933 1.68516 60.4992 1.25668 59.2719 1.25921C58.156 1.25783 57.1743 1.65725 56.3623 2.44388C55.5424 3.23305 55.1305 4.27223 55.1319 5.5194C55.1305 6.76665 55.5424 7.80575 56.3623 8.59499C57.1743 9.38163 58.156 9.78096 59.2718 9.77958C60.4511 9.78166 61.4562 9.38094 62.2474 8.5864C62.7758 8.05569 63.0754 7.3206 63.1539 6.40658L63.1698 6.22129H59.4422V5.33273H64.2254V5.16209L64.0576 5.19208C64.1042 5.45084 64.1262 5.69671 64.1262 5.93477H64.467C64.467 5.67539 64.443 5.40881 64.393 5.13157L64.3678 4.99145H59.1016V6.56257H62.9841V6.39193L62.8145 6.37728C62.7393 7.23593 62.4664 7.88252 62.0065 8.34521C61.2745 9.0757 60.3761 9.43623 59.2719 9.4383C58.2358 9.43692 57.3567 9.07961 56.5986 8.34973C55.848 7.62246 55.4746 6.69394 55.4726 5.5194C55.4746 4.34486 55.848 3.41634 56.5986 2.68907C57.3567 1.95919 58.2357 1.60188 59.2719 1.6005C60.424 1.60326 61.2939 1.98449 61.9401 2.75441L62.0599 2.89706L63.0894 1.86455L63.1999 1.75396L63.0993 1.63447C62.6807 1.13467 62.123 0.737936 61.4376 0.443438C60.7508 0.148018 60.026 2.38497e-06 59.2719 2.38497e-06C57.7573 -0.00130139 56.4502 0.531941 55.3901 1.58723C54.3259 2.64044 53.7896 3.96431 53.791 5.5194C53.7896 7.0738 54.3259 8.39843 55.3907 9.45226C56.4502 10.5069 57.7573 11.0395 59.2719 11.0381C60.8492 11.0395 62.1577 10.5148 63.1506 9.47021L63.0274 9.35225L63.1479 9.47297C64.0304 8.5897 64.4682 7.39652 64.4671 5.93477H64.2966M72.1496 1.65786H67.4943V4.90425H71.6925V6.13455H67.4943V9.38094H72.1496V10.6388H66.182V0.40003H72.1496V1.65786Z" fill="white" />
                  <path class="google" d="M72.1496 1.65796V1.48732H67.3241V5.07499H71.5221V5.96355L67.324 5.96401V9.55168H71.9792V10.4682H66.3525V0.570773H71.9792V1.65796H72.1496V1.48732V1.65796H72.32V0.229492H66.0117V10.8095H72.32V9.2104H67.6648V6.30529H71.8629V4.73371H67.6648V1.8286H72.32V1.65796H72.1496ZM77.6887 10.6389H76.3743V1.65789H73.5192V0.400056H80.5438V1.65789H77.6887V10.6388" fill="white" />
                  <path class="google" d="M77.6884 10.6389V10.4682H76.5444V1.48732H73.6894V0.57085H80.3731V1.48732H77.5181V10.6389H77.6884V10.4682V10.6389H77.8588V1.8286H80.7139V0.229492H73.3486V1.82853H76.2037V10.8094H77.8588V10.6388H77.6884M85.626 10.6389V0.400056H86.9391V10.6388H85.626" fill="white" />
                  <path class="google" d="M85.6264 10.6389H85.7968V0.570773H86.769V10.4682H85.6264V10.6389H85.7968H85.6264V10.8095H87.1098V0.229492H85.4561V10.8095H85.6264V10.6389M92.7659 10.6389H91.4516V1.65789H88.5966V0.400056H95.621V1.65789H92.7659V10.6388" fill="white" />
                  <path class="google" d="M92.7654 10.6391V10.4684H91.6214V1.48748H88.7665V0.571002H95.4501V1.48748H92.5951V10.639H92.7654V10.4684V10.639H92.9358V1.82876H95.7909V0.229644H88.4258V1.82868H91.2807V10.8096H92.9358V10.6389H92.7654M102.393 8.45874C103.149 9.22589 104.075 9.60912 105.17 9.60912C106.265 9.60912 107.191 9.22589 107.946 8.45874C108.704 7.69151 109.083 6.71076 109.083 5.51966C109.083 4.32862 108.704 3.34788 107.946 2.58065C107.191 1.81342 106.265 1.43011 105.17 1.43011C104.075 1.43011 103.149 1.81342 102.393 2.58065C101.637 3.34788 101.258 4.32855 101.258 5.51966C101.258 6.71076 101.637 7.69151 102.393 8.45874ZM108.918 9.31585C107.913 10.351 106.663 10.8677 105.17 10.8677C103.675 10.8677 102.426 10.351 101.423 9.31585C100.417 8.28189 99.9171 7.01623 99.9171 5.51966C99.9171 4.02308 100.417 2.75719 101.423 1.72346C102.426 0.688111 103.675 0.170898 105.17 0.170898C106.655 0.170898 107.902 0.690872 108.911 1.73013C109.92 2.76931 110.424 4.03244 110.424 5.51966C110.424 7.01623 109.921 8.28189 108.918 9.31585Z" fill="white" />
                  <path class="google" d="M102.393 8.45848L102.272 8.57843C103.057 9.37634 104.036 9.78166 105.17 9.77959C106.304 9.78166 107.285 9.37634 108.068 8.57843C108.858 7.77976 109.255 6.74656 109.254 5.5194C109.255 4.29232 108.858 3.25905 108.068 2.46037C107.285 1.66247 106.304 1.25722 105.17 1.25922C104.036 1.25722 103.057 1.66247 102.272 2.46037C101.484 3.25905 101.086 4.29232 101.088 5.5194C101.086 6.74648 101.484 7.77976 102.272 8.57843L102.393 8.45848L102.514 8.33846C101.792 7.60183 101.43 6.67523 101.429 5.5194C101.43 4.36365 101.792 3.43705 102.514 2.70034C103.244 1.96387 104.115 1.60257 105.17 1.60057C106.225 1.60257 107.098 1.96387 107.826 2.70034C108.55 3.43705 108.911 4.36365 108.912 5.5194C108.911 6.67516 108.55 7.60183 107.826 8.33846C107.098 9.07502 106.225 9.43624 105.17 9.43823C104.115 9.43624 103.244 9.07502 102.514 8.33846L102.393 8.45848ZM108.918 9.3156L108.797 9.19703C107.82 10.1996 106.625 10.6948 105.17 10.6968C103.715 10.6948 102.52 10.1996 101.545 9.19703L101.541 9.19166L101.545 9.19703C100.57 8.19106 100.089 6.97794 100.088 5.5194C100.089 4.06087 100.57 2.84775 101.545 1.84185C102.52 0.839249 103.715 0.343357 105.17 0.341363C106.616 0.343357 107.808 0.84132 108.79 1.84913C109.768 2.85971 110.252 4.07091 110.254 5.5194C110.252 6.97794 109.77 8.19106 108.797 9.19703L108.918 9.3156L109.041 9.43417C110.074 8.37175 110.596 7.05386 110.595 5.5194C110.596 3.99368 110.072 2.67849 109.034 1.61131C107.996 0.539919 106.696 -0.00183592 105.17 4.69618e-06C103.637 -0.00183592 102.333 0.537389 101.301 1.60464V1.60387C100.266 2.66706 99.7457 3.98494 99.7471 5.5194C99.7457 7.05386 100.266 8.37175 101.301 9.43486L101.306 9.43969L101.301 9.43417C102.333 10.5014 103.637 11.0395 105.17 11.0381C106.703 11.0395 108.007 10.5014 109.041 9.43417L108.918 9.3156ZM112.268 10.6389V0.399955H113.867L118.834 8.365H118.891L118.834 6.39185V0.399955H120.149V10.6387H118.778L113.58 2.28766H113.524L113.58 4.26149V10.6387H112.268" fill="white" />
                  <path class="google" d="M112.268 10.639H112.438V0.570773H113.772L118.74 8.53582H119.066L119.005 6.3895V0.57085H119.978V10.4682H118.872L113.675 2.1172H113.349L113.41 4.26443V10.4682H112.268V10.6389H112.438H112.268V10.8095H113.75V4.25899L113.694 2.28324L113.523 2.28784V2.45848H113.58V2.28784L113.436 2.37857L118.683 10.8095H120.319V0.229492H118.664V6.39403L118.72 8.36978L118.891 8.36517V8.19453H118.834V8.36517L118.979 8.2746L113.961 0.229492H112.097V10.8095H112.268V10.6389M165.697 39.6487H168.876V18.3159H165.697L165.697 39.6487ZM194.331 26.0005L190.687 35.2493H190.578L186.796 26.0004H183.371L189.043 38.9274L185.809 46.1179H189.126L197.866 26.0004L194.331 26.0005ZM176.302 37.2257C175.26 37.2257 173.808 36.7044 173.808 35.414C173.808 33.7674 175.618 33.1362 177.178 33.1362C178.577 33.1362 179.233 33.4381 180.083 33.8502C179.836 35.8259 178.137 37.2257 176.302 37.2257ZM176.686 25.5338C174.384 25.5338 172.001 26.5496 171.014 28.8001L173.835 29.9799C174.439 28.8001 175.561 28.4154 176.74 28.4154C178.384 28.4154 180.056 29.404 180.083 31.1604V31.3798C179.507 31.0504 178.275 30.5565 176.768 30.5565C173.726 30.5565 170.629 32.2302 170.629 35.3592C170.629 38.2136 173.123 40.0526 175.917 40.0526C178.056 40.0526 179.233 39.0921 179.974 37.967H180.083V39.6134H183.151V31.4343C183.151 27.6476 180.33 25.5338 176.686 25.5338ZM157.039 28.5973H152.517V21.285H157.039C159.415 21.285 160.765 23.256 160.765 24.9411C160.765 26.5943 159.415 28.5973 157.039 28.5973ZM156.957 18.3159H149.34V39.6487H152.517V31.5664H156.957C160.48 31.5664 163.944 29.0113 163.944 24.9411C163.944 20.871 160.48 18.3159 156.957 18.3159ZM115.419 37.2297C113.223 37.2297 111.384 35.3879 111.384 32.8582C111.384 30.302 113.223 28.4321 115.419 28.4321C117.587 28.4321 119.289 30.3019 119.289 32.8582C119.289 35.3879 117.587 37.2297 115.419 37.2297H115.419ZM119.069 27.195H118.959C118.246 26.3429 116.873 25.5732 115.144 25.5732C111.521 25.5732 108.2 28.7621 108.2 32.8582C108.2 36.9271 111.521 40.0887 115.144 40.0887C116.873 40.0887 118.246 39.3187 118.959 38.4395H119.069V39.484C119.069 42.2611 117.587 43.7456 115.199 43.7456C113.251 43.7456 112.043 42.343 111.548 41.1611L108.777 42.3157C109.572 44.2401 111.686 46.6046 115.199 46.6046C118.932 46.6046 122.089 44.4048 122.089 39.0441V26.0131H119.069V27.195ZM124.284 39.6487H127.468V18.3152H124.284V39.6487ZM132.162 32.6109C132.079 29.8065 134.33 28.3774 135.949 28.3774C137.213 28.3774 138.283 29.0093 138.639 29.9173L132.162 32.6109ZM142.043 30.1918C141.439 28.5693 139.6 25.5732 135.839 25.5732C132.107 25.5732 129.005 28.5147 129.005 32.8309C129.005 36.8998 132.079 40.0887 136.196 40.0887C139.518 40.0887 141.439 38.0542 142.235 36.8723L139.765 35.2225C138.942 36.4324 137.816 37.2297 136.196 37.2297C134.577 37.2297 133.424 36.4871 132.683 35.0305L142.371 31.0164L142.043 30.1918ZM64.8509 27.8001V30.8791H72.2066C71.987 32.6109 71.4106 33.8754 70.5322 34.7553C69.4621 35.8278 67.7877 37.0097 64.8508 37.0097C60.3219 37.0097 56.7815 33.3534 56.7815 28.8173C56.7815 24.2812 60.3219 20.6245 64.8509 20.6245C67.2938 20.6245 69.0774 21.5869 70.3951 22.824L72.5634 20.6524C70.7246 18.8925 68.2815 17.5455 64.8509 17.5455C58.6475 17.5455 53.4326 22.6041 53.4326 28.8173C53.4326 35.0305 58.6475 40.0887 64.8509 40.0887C68.1997 40.0887 70.7246 38.9895 72.7005 36.9271C74.7317 34.8926 75.3633 32.0337 75.3633 29.7246C75.3633 29.0093 75.3086 28.3501 75.1981 27.8001H64.8509ZM83.726 37.2297C81.5298 37.2297 79.6358 35.4151 79.6358 32.8309C79.6358 30.2191 81.5298 28.4321 83.726 28.4321C85.9214 28.4321 87.8154 30.2191 87.8154 32.8309C87.8154 35.4152 85.9214 37.2297 83.726 37.2297ZM83.726 25.5732C79.7182 25.5732 76.4519 28.6246 76.4519 32.8309C76.4519 37.0097 79.7182 40.0887 83.726 40.0887C87.733 40.0887 90.9993 37.0097 90.9993 32.8309C90.9993 28.6246 87.733 25.5732 83.726 25.5732ZM99.5929 37.2297C97.3976 37.2297 95.5034 35.4151 95.5034 32.8309C95.5034 30.2191 97.3976 28.4321 99.593 28.4321C101.789 28.4321 103.683 30.2191 103.683 32.8309C103.683 35.4152 101.789 37.2297 99.593 37.2297H99.5929ZM99.5929 25.5732C95.5854 25.5732 92.3197 28.6246 92.3197 32.8309C92.3197 37.0097 95.5854 40.0887 99.593 40.0887C103.6 40.0887 106.867 37.0097 106.867 32.8309C106.867 28.6246 103.6 25.5732 99.593 25.5732H99.5929Z" fill="white" />
                  <path d="M1.41302 1.4436C0.841281 1.96027 0.5 2.82207 0.5 3.96601V3.7074V41.4562V41.2075C0.5 42.264 0.792735 43.0798 1.28847 43.6052L1.41502 43.7266V43.7271C1.81627 44.0898 2.3308 44.2823 2.92049 44.2817C3.49668 44.2817 4.14496 44.0978 4.82913 43.7092L29.5587 29.6356L38.0532 24.8008C39.132 24.187 39.7377 23.395 39.8389 22.5884V22.5851C39.7377 21.7766 39.132 20.9853 38.0533 20.3714L29.5581 15.5372L4.82921 1.46354C4.14358 1.07432 3.49484 0.889648 2.91711 0.889648C2.32812 0.889648 1.81428 1.08161 1.41318 1.4436H1.41302Z" fill="#00C1FF" />
                  <path d="M1.41509 43.7266L1.28847 43.6052C0.792735 43.0799 0.5 42.264 0.5 41.2075V41.4562V3.71676V3.96601C0.5 2.82207 0.841281 1.96028 1.41302 1.4436L22.5216 22.5858L1.41509 43.7266Z" fill="url(#paint0_linear_1077_2213)" />
                  <path d="M29.5586 29.6348L22.5215 22.585L29.558 15.5365L38.0531 20.3706C39.1319 20.9846 39.7375 21.7758 39.8388 22.5844V22.5876C39.7375 23.3942 39.1319 24.1862 38.0531 24.8L29.5587 29.6347" fill="url(#paint1_linear_1077_2213)" />
                  <path d="M2.92133 44.2812C2.33172 44.2818 1.81719 44.0891 1.41602 43.7265V43.726L22.5225 22.5852L29.5597 29.6349L4.82998 43.7087C4.1458 44.0973 3.49752 44.2812 2.92133 44.2812Z" fill="url(#paint2_linear_1077_2213)" />
                  <path d="M22.5217 22.5859L1.41309 1.44376C1.81434 1.08178 2.32818 0.889814 2.9171 0.889814C3.49482 0.889814 4.14364 1.07441 4.82919 1.4637L29.5582 15.5374L22.5217 22.5859" fill="url(#paint3_linear_1077_2213)" />
                  <path d="M2.92161 44.5312C2.332 44.5312 1.81678 44.3386 1.41553 43.976L1.41484 43.9766C1.41319 43.975 1.41142 43.9734 1.40955 43.972L1.2998 43.8646C1.29635 43.8613 1.29313 43.8574 1.28906 43.8534L1.4156 43.7267C1.81686 44.0893 2.33131 44.2819 2.92108 44.2812C3.49719 44.2812 4.14547 44.0973 4.82964 43.7087L29.5593 29.6351L29.7177 29.7938L29.5573 29.8851L4.82957 43.958C4.20606 44.312 3.61299 44.4966 3.0773 44.5273C3.02544 44.5299 2.97353 44.5312 2.92161 44.5312" fill="url(#paint4_linear_1077_2213)" />
                  <path d="M1.28847 43.8535C0.792735 43.3282 0.5 42.5129 0.5 41.4558V41.2072C0.5 42.2636 0.792735 43.0795 1.28847 43.6049L1.41502 43.7262L1.28847 43.8535Z" fill="url(#paint5_linear_1077_2213)" />
                  <path d="M29.717 29.7939L29.5586 29.6351L38.053 24.8004C39.1319 24.1867 39.7375 23.3947 39.8387 22.588C39.8387 22.884 39.7728 23.18 39.6418 23.4681C39.3775 24.0486 38.8479 24.5972 38.0531 25.0498L29.717 29.7939" fill="url(#paint6_linear_1077_2213)" />
                  <path d="M39.8394 22.585C39.7382 21.7764 39.1326 20.9852 38.0538 20.3712L29.5586 15.5371L29.717 15.3783H29.7177L38.0538 20.1225C39.2432 20.7998 39.8387 21.6923 39.8394 22.585Z" fill="url(#paint7_linear_1077_2213)" />
                  <path d="M0.5 3.96582V3.70507C0.5 3.61104 0.502531 3.51909 0.507362 3.42982V3.42575C0.507362 3.42453 0.507362 3.42322 0.507823 3.42184V3.41179C0.55913 2.50184 0.841281 1.79205 1.28847 1.31809L1.41302 1.44333C0.841281 1.96008 0.5 2.82188 0.5 3.96582Z" fill="url(#paint8_linear_1077_2213)" />
                  <path d="M29.5586 15.5371L4.82964 1.46329C4.14409 1.07408 3.49535 0.88948 2.91763 0.88948C2.32863 0.88948 1.81479 1.08144 1.41361 1.44343L1.28906 1.31811C1.32796 1.27687 1.36838 1.23709 1.41024 1.19886C1.41154 1.19748 1.41361 1.19609 1.41491 1.19479C1.81295 0.835564 2.32134 0.643603 2.90505 0.640152H2.91763C3.49535 0.640152 4.14409 0.824827 4.82964 1.21419L29.7177 15.3778L29.717 15.3784L29.5586 15.5371Z" fill="url(#paint9_linear_1077_2213)" />
                  <defs>
                     <linearGradient id="paint0_linear_1077_2213" x1="13.9897" y1="3.31789" x2="-4.20121" y2="21.538" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#00A0FF" />
                        <stop offset="0.00657" stop-color="#00A1FF" />
                        <stop offset="0.2601" stop-color="#00BEFF" />
                        <stop offset="0.5122" stop-color="#00D2FF" />
                        <stop offset="0.7604" stop-color="#00DFFF" />
                        <stop offset="1" stop-color="#00E3FF" />
                     </linearGradient>
                     <linearGradient id="paint1_linear_1077_2213" x1="41.1532" y1="22.4632" x2="-0.0713645" y2="22.4632" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFE000" />
                        <stop offset="0.4087" stop-color="#FFBD00" />
                        <stop offset="0.7754" stop-color="#FFA500" />
                        <stop offset="1" stop-color="#FF9C00" />
                     </linearGradient>
                     <linearGradient id="paint2_linear_1077_2213" x1="25.8236" y1="29.2878" x2="-5.00222" y2="59.9377" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF3A44" />
                        <stop offset="1" stop-color="#C31162" />
                     </linearGradient>
                     <linearGradient id="paint3_linear_1077_2213" x1="-4.0272" y1="-1.69066" x2="9.71116" y2="11.9903" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#32A071" />
                        <stop offset="0.0685" stop-color="#2DA771" />
                        <stop offset="0.4762" stop-color="#15CF74" />
                        <stop offset="0.8009" stop-color="#06E775" />
                        <stop offset="1" stop-color="#00F076" />
                     </linearGradient>
                     <linearGradient id="paint4_linear_1077_2213" x1="25.8078" y1="34.178" x2="1.12101" y2="58.9048" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#CC2E36" />
                        <stop offset="1" stop-color="#9C0E4E" />
                     </linearGradient>
                     <linearGradient id="paint5_linear_1077_2213" x1="3.31198" y1="3.31748" x2="-12.7139" y2="19.3694" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#008DE0" />
                        <stop offset="0.00657" stop-color="#008DE0" />
                        <stop offset="0.2601" stop-color="#00A7E0" />
                        <stop offset="0.5122" stop-color="#00B8E0" />
                        <stop offset="0.7604" stop-color="#00C4E0" />
                        <stop offset="1" stop-color="#00C7E0" />
                     </linearGradient>
                     <linearGradient id="paint6_linear_1077_2213" x1="41.1532" y1="22.5864" x2="-0.0714242" y2="22.5864" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#E0C500" />
                        <stop offset="0.4087" stop-color="#E0A600" />
                        <stop offset="0.7754" stop-color="#E09100" />
                        <stop offset="1" stop-color="#E08900" />
                     </linearGradient>
                     <linearGradient id="paint7_linear_1077_2213" x1="41.1539" y1="22.5866" x2="-0.070603" y2="22.5866" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFE840" />
                        <stop offset="0.4087" stop-color="#FFCE40" />
                        <stop offset="0.7754" stop-color="#FFBC40" />
                        <stop offset="1" stop-color="#FFB540" />
                     </linearGradient>
                     <linearGradient id="paint8_linear_1077_2213" x1="3.29458" y1="3.34669" x2="-12.1412" y2="18.1376" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#40B8FF" />
                        <stop offset="0.00657" stop-color="#40B9FF" />
                        <stop offset="0.2601" stop-color="#40CEFF" />
                        <stop offset="0.5122" stop-color="#40DDFF" />
                        <stop offset="0.7604" stop-color="#40E7FF" />
                        <stop offset="1" stop-color="#40EAFF" />
                     </linearGradient>
                     <linearGradient id="paint9_linear_1077_2213" x1="-4.05751" y1="2.78017" x2="6.96626" y2="13.8219" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#65B895" />
                        <stop offset="0.0685" stop-color="#62BD95" />
                        <stop offset="0.4762" stop-color="#50DB97" />
                        <stop offset="0.8009" stop-color="#44ED98" />
                        <stop offset="1" stop-color="#40F498" />
                     </linearGradient>
                  </defs>
               </svg></a>
         </div>
      </div>
      <div class="footer__copyright copyright">
         <p class="copyright__text"><?php the_field('footer_copyright') ?></p>
      </div>
      <section class="development">
         <a href="https://webmedia.ge/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/webmedia-logo-cedbe8bd35.svg" alt="Webmedia Georgia" />
            <span>Development WebMedia</span></a>
      </section>
   </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>