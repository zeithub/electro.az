<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="" name="webskyus">
    <meta content="" name="this is description">
    <meta content="" name="website, landing">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
     @include('favicon')
    <link rel="apple-touch-icon" href="./images/main/favicon/apple-icon-180x180.png">
    <link rel="stylesheet" href="style/main.min.css">
  </head>
  <body>
    @include('client.header')
    <main class="main_products">
      <!-- SECTION SINGLE PRODUCTS-->
      <section class="single_products"> 
        <div class="container"> 
          <div class="row row_justify_between">
            <!-- PRODUCTS SLIDER-->
            <div class="single_products_slider">
              <div class="single_products_slider_main">
                <div class="single_products_slider_items" data-slick-index="0">
                  <div class="single_products_slider_items_wrap"> <img src="images/main/products/1.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
                <div class="single_products_slider_items" data-slick-index="1">
                  <div class="single_products_slider_items_wrap"> <img src="images/main/products/2.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
                <div class="single_products_slider_items" data-slick-index="2">
                  <div class="single_products_slider_items_wrap"> <img src="images/main/products/3.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
                <div class="single_products_slider_items" data-slick-index="3">
                  <div class="single_products_slider_items_wrap"> <img src="images/main/products/4.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
              </div>
              <div class="single_products_slider_nav"> 
                <div class="single_products_slider_nav_items" data-slick-index="0">
                  <div class="single_products_slider_nav_items_wrap"> <img src="images/main/products/1.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
                <div class="single_products_slider_nav_items" data-slick-index="1">
                  <div class="single_products_slider_nav_items_wrap"> <img src="images/main/products/2.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
                <div class="single_products_slider_nav_items" data-slick-index="2">
                  <div class="single_products_slider_nav_items_wrap"> <img src="images/main/products/3.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
                <div class="single_products_slider_nav_items" data-slick-index="3">
                  <div class="single_products_slider_nav_items_wrap"> <img src="images/main/products/4.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
              </div>
              <div class="single_products_slider_color"> 
                <p class="text"> <span>????????: </span><span class="color_name">??????????????????????</span></p>
                <div class="single_products_slider_btn"> 
                  <div class="single_products_slider_btn_wrap"> 
                    <input type="radio" name="color" checked><span data-color-name="??????????????????????" style="background: #c0c0c0"></span>
                  </div>
                  <div class="single_products_slider_btn_wrap"> 
                    <input type="radio" name="color"><span data-color-name="??????????" style="background: #666666"></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- END PRODUCTS SLIDER-->
            <!-- PRODUCTS DESCRIPTION-->
            <div class="single_products_description"> 
              <div class="single_products_description_row"> 
                <h5 class="h5">?????????????????? ????????????, </h5>
                <p class="text">5.8 ????????????</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">????????????????</h5>
                <p class="text">1 ??????</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">???????????????????? ???????????????? ?????????????? ????????????</h5>
                <p class="text">12 ??????????</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">???????????????????? ????????????</h5>
                <p class="text"> 64 ????</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">???????????? ?????????????????????? ????????????</h5>
                <p class="text"> 6 ????</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">?????????????? ????????????????????????</h5>
                <p class="text"> 3600 ??????</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">???????????????????? ????????????</h5>
                <p class="text"> Full HD (1080)</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">???????????????????? ??????????????</h5>
                <p class="text"> OLED</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">?????????? SIM-????????</h5>
                <p class="text"> 1</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">????????-???????????? SIM</h5>
                <p class="text"> Nano-SIM</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">???????????????????? ????????????</h5>
                <p class="text"> SIM 1</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">???????????????????????? ??????????????????????</h5>
                <p class="text"> 3G , 4G , EDGE , LTE , NFC , Wi-Fi 802.11a/b/g/n , Wi-Fi 802.11ac</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">???????????? ?????????? Bluetooth</h5>
                <p class="text"> 5.0</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">???????????????????????? ??????????????</h5>
                <p class="text"> iOS</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">??????????????????</h5>
                <p class="text"> A-GPS , GPS , iBeacon , ??????????????</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">??????????????</h5>
                <p class="text"> Apple Lightning</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">?????????????? ????????????</h5>
                <p class="text"> ?????????????? ????????????</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">???????????????????? ?????????????????????? ????????????</h5>
                <p class="text"> 7 ??????????</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">???????????????????? ???????????????????????????? ?????????????? ????????????</h5>
                <p class="text"> 12 ??????????</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">???????????????? ??????????????</h5>
                <p class="text"> ???????????? , ?????????????????????? ??????????</p>
              </div>
            </div>
            <!-- END PRODUCTS DESCRIPTION-->
            <!-- PRODUCTS OFFER-->
            <div class="single_products_offer">
              <div class="single_products_offer_row"> 
                <div class="single_products_offer_col"> 
                  <h3 class="h3">???????????????? Apple iPhone X 3/64GB, ??????????????????????</h3>
                </div>
                <div class="single_products_offer_col"> 
                  <h4 class="h4">650 azn</h4>
                  <p class="text">87 azn / aya</p>
                </div>
              </div>
              <div class="single_products_offer_edge_row"> 
                <div class="single_products_offer_edge"> 
                      <svg class="icon icon-card edge_ico">
                        <use xlink:href="./images/sprite/sprite.svg#card"></use>
                      </svg>
                  <div class="single_products_offer_text"> 
                    <p class="text">???????????????????? ????????????: </p>
                    <p class="text">??????????????????, ???????????????????? ???????????? ?? ?????? 2 c????????????</p>
                  </div>
                </div>
                <div class="single_products_offer_edge"> 
                      <svg class="icon icon-refund edge_ico">
                        <use xlink:href="./images/sprite/sprite.svg#refund"></use>
                      </svg>
                  <p class="text">?????????????? 14 ????????</p>
                </div>
                <div class="single_products_offer_edge"> 
                      <svg class="icon icon-like edge_ico">
                        <use xlink:href="./images/sprite/sprite.svg#like"></use>
                      </svg>
                  <p class="text">???????????????? 1 ??????</p>
                </div>
              </div>
              <div class="single_products_offer_edge_row"> 
                <table>
                  <tr> 
                    <th>N/a </th>
                    <th>????????????</th>
                    <th>?????????????????????????? ?????????? (AZN)</th>
                    <th>???????????????? ?????????? (AZN)</th>
                  </tr>
                  <tr> 
                    <td> 
                      <div class="table_credit_radio">
                        <input type="radio" name="credit_radio"><span> </span>
                      </div>
                    </td>
                    <td>6 ??????????????	</td>
                    <td>120	</td>
                    <td>90</td>
                  </tr>
                  <tr> 
                    <td> 
                      <div class="table_credit_radio">
                        <input type="radio" name="credit_radio"><span> </span>
                      </div>
                    </td>
                    <td>9 ??????????????	</td>
                    <td>120	</td>
                    <td>65</td>
                  </tr>
                  <tr> 
                    <td> 
                      <div class="table_credit_radio">
                        <input type="radio" name="credit_radio"><span> </span>
                      </div>
                    </td>
                    <td>12 ??????????????	</td>
                    <td>120	</td>
                    <td>55</td>
                  </tr>
                  <tr> 
                    <td> 
                      <div class="table_credit_radio">
                        <input type="radio" name="credit_radio"><span> </span>
                      </div>
                    </td>
                    <td>15 ??????????????	</td>
                    <td>120	</td>
                    <td>40</td>
                  </tr>
                  <tr> 
                    <td> 
                      <div class="table_credit_radio">
                        <input type="radio" name="credit_radio"><span> </span>
                      </div>
                    </td>
                    <td>18 ??????????????	</td>
                    <td>120	</td>
                    <td>30</td>
                  </tr>
                </table>
              </div>
              <div class="single_products_offer_edge_row"><a class="single_products_buy_link" href="#">???????????? </a></div>
            </div>
            <!-- END PRODUCTS OFFER-->
          </div>
        </div>
      </section>
      <!-- END SECTION SINGLE PRODUCTS -->
    </main>
    <!-- FOOTER-->
    <footer class="footer">
      <div class="container">
        <div class="row row_align_center">
          <div class="footer_social"> <a href="#">
                  <svg class="icon icon-fb soc_ico lazyload blur_up">
                    <use xlink:href="./images/sprite/sprite.svg#fb"></use>
                  </svg></a><a href="#">
                  <svg class="icon icon-in soc_ico lazyload blur_up">
                    <use xlink:href="./images/sprite/sprite.svg#in"></use>
                  </svg></a><a href="#">
                  <svg class="icon icon-yt soc_ico lazyload blur_up">
                    <use xlink:href="./images/sprite/sprite.svg#yt"></use>
                  </svg></a></div>
          <div class="footer_copyright"> 
            <p class="text">copyright ?? 2019 all rights reserved</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END FOOTER-->
    <script src="js/scripts.min.js" defer></script>
    <script src="js/main.min.js" defer></script>
  </body>
</html>