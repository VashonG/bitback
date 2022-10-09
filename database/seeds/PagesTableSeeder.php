<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'content' => '<!-- wp:columns {"className":"hp-signup-cta lb-main-content-section d-guest d-none"} -->
<div class="wp-block-columns hp-signup-cta lb-main-content-section d-guest d-none"><!-- wp:column {"width":65} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:procash/heading {"title":{"en":"Get up to 45% Cashback at over 2,500 stores","fr":"Obtenez jusqu\'à 40% de remise dans plus de 2500 magasins"},"sub_title":{"en":"1620 Free Coupon Codes \\u0026 Discount Deals added this week","fr":" 1620 codes promo gratuits et offres de réduction ajoutés cette semaine"},"is_logged_in":true} /-->

<!-- wp:procash/section {"title":{"en":"How It Works?"},"description":{"en":"Earning cashback is as easy as 1-2-3-4…"},"blocks":[{"title":{"en":"Browse","fr":""},"content":{"en":"Browse CashBack and choose from thousands of stores","fr":""},"sequence":"100","image":"https://procash.enactweb.com/img/blocks/browse-window-icon.svg"},{"title":{"en":"Shop","fr":""},"content":{"en":"Follow the link to your favorite store or deal and purchase as normal","fr":""},"sequence":"200","image":"https://procash.enactweb.com/img/blocks/shop-window-icon.svg"},{"title":{"en":"Earn","fr":""},"content":{"en":"Cash Back is added to your account","fr":""},"sequence":"300","image":"https://procash.enactweb.com/img/blocks/earn-window-icon.svg"},{"title":{"en":"Withdraw","fr":""},"content":{"en":"Request payment and get paid via bank transfer, PayPal or gift voucher.","fr":""},"sequence":"400","image":"https://procash.enactweb.com/img/blocks/withdraw-window-icon.svg"}],"is_logged_in":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":35} -->
<div class="wp-block-column" style="flex-basis:35%"><!-- wp:procash/signup-component /-->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"main-slider-block"} -->
<div class="wp-block-columns main-slider-block"><!-- wp:column {"width":75} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:procash/slider {"height":"10px","delay":"10","loop":false,"slides":[{"key":"Thu Aug 20 2020 12:58:31 GMT+0530 (India Standard Time)","offer_link":"","store_id":3,"store_slug":"asd","image_url":{"en":"https://procash.enactweb.com/img/dishant/banner-slider-images-2.png","fr":"https://procash.enactweb.com/img/banner-home-290x58012.jpg"},"mobile_image_url":{"en":"https://procash.enactweb.com/img/dishant/1.png","fr":"https://procash.enactweb.com/img/reliancejio-logo-small.jpg"},"link_type":"affiliate","sequence":"100"},{"key":"Thu Aug 20 2020 13:01:12 GMT+0530 (India Standard Time)","offer_link":"https://www.happyfares.in/","store_id":"3","store_slug":"asd","image_url":{"en":"https://procash.enactweb.com/img/banner-slider-images-5.png","fr":"https://procash.enactweb.com/img/arata-coupons-logo-large.jpg"},"mobile_image_url":{"en":"https://procash.enactweb.com/img/dishant/2.png","fr":"https://procash.enactweb.com/img/hp-refer-earn-compressor.png"},"link_type":"external","sequence":"200"},{"key":"Thu Aug 20 2020 13:01:51 GMT+0530 (India Standard Time)","offer_link":"/store/aviasales","store_id":"2","store_slug":"asd","image_url":{"en":"https://procash.enactweb.com/img/banner-slider-images-1.png","fr":"https://procash.enactweb.com/img/magzter-logo-large.jpg"},"mobile_image_url":{"en":"https://procash.enactweb.com/img/dishant/3.png","fr":"https://procash.enactweb.com/img/mcdonalds-logo-small.jpg"},"link_type":"internal","sequence":"300"},{"key":"Sun Aug 30 2020 14:30:24 GMT+0530 (India Standard Time)","offer_link":"https://www.aviasales.ru/","store_id":2,"store_slug":"asd","image_url":{"en":"https://procash.enactweb.com/img/banner-slider-images-3.png","fr":""},"mobile_image_url":{"en":"https://procash.enactweb.com/img/dishant/4.png","fr":""},"link_type":"affiliate","sequence":"99"}]} /-->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":25,"className":"hero-offer-col"} -->
<div class="wp-block-column hero-offer-col" style="flex-basis:25%"><!-- wp:procash/daily-offers {"title":{"en":"Offers Of the Day"},"count":"5"} /-->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:procash/top-stores {"title":{"en":"Top Stores"},"description":{"en":"Browse the store with boosted cashback rates, hurry to grab the cashback"},"store_categories":[{"store_category":{"key":4,"name":"Credit cards"},"stores":[]},{"store_category":{"key":13,"name":"Booking"},"stores":[]},{"store_category":{"key":6,"name":"Browser"},"stores":[]}],"enable_default_tab":true,"default_tab_label":{"en":"Boosted Rate"},"default_tab_logic":"featured"} /-->

<!-- wp:procash/top-stores {"title":{"en":"Double Cashback Stores","fr":"Meilleurs magasins"},"description":{"en":"You can visit any of these stores and earn real cashback","fr":"Aucune offre pour le moment, revenez plus tard."},"logic":"latest","store_categories":[{"store_category":{"key":7,"name":"Online Services"},"stores":[{"slug":"purevpn-ww","value":60,"label":"PureVPN WW","categories":[7,60]},{"slug":"shutterstock-ww","value":81,"label":"Shutterstock WW","categories":[7,40]}]},{"store_category":{"key":46,"name":"Online Supermarkets"},"stores":[{"slug":"ubuy-many-geos","value":154,"label":"Ubuy Many GEOs","categories":[17,19,21,22,24,26,46,69]},{"slug":"teamo-revshare","value":199,"label":"Teamo - Revshare","categories":[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74]}]},{"store_category":{"key":25,"name":"Books"},"stores":[]},{"store_category":{"key":16,"name":"Deposits"},"stores":[]}],"enable_default_tab":true,"default_tab_label":{"en":"Popular"},"default_tab_logic":"popular"} /-->

<!-- wp:procash/top-offers {"title":{"en":"Top Offers","fr":"Meilleures offres"},"count":"6","categories":[{"key":"2","name":"Electronics"},{"key":1,"name":"Baby \\u0026 Kids products"},{"key":4,"name":"Shoes"},{"key":5,"name":"Clothing"}],"enable_default_tab":true,"default_tab_label":{"en":"Popular"},"default_tab_logic":"latest"} /-->

<!-- wp:procash/top-deals {"title":{"en":"Top Deals","fr":"Meilleures offres"},"description":{"fr":"Gagner du cashback est aussi simple que 1-2-3-4…","en":"Grab the best deals of the day from popular stores along with the cashback."},"logic":"latest","count":"10","categories":[{"key":"2","name":"Electronics"},{"key":"3","name":"Books"},{"key":13,"name":"I\'m mad."}],"default_tab_label":{"en":"Popular asd"},"default_tab_logic":"featured"} /-->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:procash/image-component {"image_url":"https://procash.enactweb.com/img/hp-refer-earn-compressor.png","redirect_link":"https://procash.enactweb.com/en/refer-earn"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:procash/image-component {"image_url":"https://procash.enactweb.com/img/hp-earn-cashback-compressor0.png"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:procash/image-component {"image_url":"https://procash.enactweb.com/img/hp-refer-earn-compressor.png","redirect_link":"https://procash.enactweb.com/en/share-earn"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:procash/call-to-action {"title":{"fr":"Adhérer maintenant","en":"Join LarabackPRO Now and \\u003cspan class=\\u0022text-orange\\u0022\\u003e Get a #Bonus Bonus\\u003c/span\\u003e Today!"},"description":{"en":"The best deals, sales, coupons \\u0026 more than 10,000 offers you can find here.","fr":"Les meilleures offres, ventes, coupons et plus de 10000 offres que vous pouvez trouver ici."},"image":"https://procash.enactweb.com/img/form-gift-cta.svg","className":"d-guest"} /-->

<!-- wp:procash/stats {"title":{"en":"How Popular We Are...","fr":"Statistiques"},"description":{"fr":"quelques chiffres de notre part","en":"Number tells louder than the words.."},"blocks":[{"icon":"https://procash.enactweb.com/img/testbook-logo-large.png","number":"1024","title":{"en":"Coupons \\u0026 Deals","fr":"Coupons et offres"},"sequence":"4"},{"icon":"https://procash.enactweb.com/img/times-prime-coupons-logo-large.jpg","number":"4874","title":{"en":"Coupons Redeemed","fr":"Coupons utilisés"},"sequence":"2"},{"icon":"https://procash.enactweb.com/img/reliancejio-logo-small.jpg","number":"1542","title":{"en":"Happy Users","fr":"Utilisateurs heureux"},"sequence":"1"},{"icon":"https://procash.enactweb.com/img/mcdonalds-logo-small.jpg","number":"3652","title":{"en":"Paid Cashback","fr":"Cashback payé"},"sequence":"3"}],"className":"d-auth"} /-->

<!-- wp:procash/payment-mode {"title":{"en":"Cashback can be withdrawn using PayPal or Bank Transfer","fr":"Le cashback peut être retiré via PayPal ou virement bancaire"},"description":{"en":"We offer the cashback payment with multiple payment mode."},"className":"d-auth"} /-->

<!-- wp:procash/categories {"title":{"en":"Best Deals By Categories"},"logic":"alphabetic"} /-->

<!-- wp:procash/categories {"title":{"en":"Popular Store Categories"},"category_type":"StoreCategory","categories":[]} /-->

<!-- wp:procash/categories {"title":{"en":"Handpicked Coupon Categories"},"logic":"handpicked","style":"3","category_type":"CouponCategory","categories":[{"key":5,"name":"Clothing"},{"key":4,"name":"Shoes"},{"key":3,"name":"Accessories \\u0026 Bags"},{"key":9,"name":"Gifts \\u0026 Flowers"}]} /-->

<!-- wp:procash/newsletter {"title":{"en":"Subscribe to our newsletters to have new coupon lists delivered directly to your inbox","fr":"Subscribe to our newsletters to have new coupon lists delivered directly to your inbox","hi":"Subscribe to our newsletters to have new coupon lists delivered directly to your inbox"},"style":"2","description":{"hi":"We do not send spam or share your mail with third parties","en":"We do not send spam or share your mail with third parties"},"bgImage":"https://procash.enactweb.com/img/instant-cb-header.png","icon":"https://procash.enactweb.com/img/blocks/refer-earn-plain-icon-1.png"} /-->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@home',
                'exclude_sitemap' => 0,
            'footer_content' => '{"en": "<h3> About LarabackPRO - Best &amp; Highest paying cashback site in the World</h3><div>LarabackPRO, simply known among the top Cashback sites in the world, serves its users by catering them best deals, discounts and coupons which are tested manually every day for the ease of the customer to compare and purchase their favorite products on 500+ various online websites (eg. Flipkart, Amazon,Jabong, Makemytrip, Yatra, Ajio, Myntra, Foodpanda etc) along with the Extra Cashback on their transactions. </div><div>We help our users save upto 100% with our Cashback Offers on their online shopping. Our mission is to be a single platform, where any user can get best experience at browsing their favourite items, knowing the best discount &amp; offer on it and earning extra cashback as well.</div><div><br></div><div><br></div><h4> Why LarabackPRO</h4><div>We help our users save upto 100% with our Cashback Offers on their online shopping. Our mission is to be a single platform, where any user can get best experience at browsing their favourite items, knowing the best discount &amp; offer on it and earning extra cashback as well.</div><div><br></div><div><br></div><h4> Highest Cashback</h4><div>We help our users save upto 100% with our Cashback Offers on their online shopping. Our mission is to be a single platform, where any user can get best experience at browsing their favourite items, knowing the best discount &amp; offer on it and earning extra cashback as well.</div><div><br></div><div><br></div><h4> 100% Trustworthy</h4><div>We help our users save upto 100% with our Cashback Offers on their online shopping. Our mission is to be a single platform, where any user can get best experience at browsing their favourite items, knowing the best discount &amp; offer on it and earning extra cashback as well.</div>", "fr": null}',
                'h1' => '{"en": "Home", "fr": null}',
                'h2' => '{"en": "Home", "fr": null}',
                'id' => 6,
                'image' => NULL,
                'meta_desc' => '{"en": "Now SAVE MORE with LarabackPro! Get the latest and up-to-date coupons & cashback offers on some of global’s top online shopping sites like AliExpress, Walmart, Amazon, Alibaba, Paytm, Flipkart, Myntra, Ajio and many more at LarabackPro.", "fr": null}',
                'meta_kw' => '{"en": "Home", "fr": null}',
                'meta_title' => '{"en": "LarabackPro | Coupons, Cashback, Offers and Promo Code", "fr": null}',
                'slug' => '/',
                'status' => 'publish',
                'style' => 1,
                'template' => 'home',
                'title' => '{"en": "Home", "fr": "Home"}',
                'updated_at' => '2021-06-04 14:29:28',
                'visits' => 12617,
            ),
            1 => 
            array (
                'content' => '<!-- wp:procash/hero-section {"title":{"en":"Contact Us"},"description":{"en":"Fill the form below and we shall get back to you within 1 business day."},"image":"https://procash.enactweb.com/img/blocks/contact-us.jpg","style":"2"} /-->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@contact',
                'exclude_sitemap' => 0,
            'footer_content' => '{"en": "<p style=\\"box-sizing: inherit;\\"><span style=\\"box-sizing: inherit; font-weight: bold; font-size: 24px;\\">Love to hear from you!</span></p><p style=\\"box-sizing: inherit;\\">Please fill the form and share your requirement with us. We will get back to you at the earliest!</p><div style=\\"box-sizing: inherit;\\"><br style=\\"box-sizing: inherit;\\"></div><div style=\\"box-sizing: inherit;\\"><br style=\\"box-sizing: inherit;\\"></div><div style=\\"box-sizing: inherit;\\"><div style=\\"box-sizing: inherit;\\"><span style=\\"box-sizing: inherit; font-weight: bold;\\">Need Help?</span></div><div style=\\"box-sizing: inherit;\\"><br style=\\"box-sizing: inherit;\\"></div><div style=\\"box-sizing: inherit;\\"><span style=\\"box-sizing: inherit; font-weight: bold;\\">Email</span></div><div style=\\"box-sizing: inherit;\\">support@larabackpro.com</div><div style=\\"box-sizing: inherit;\\"><span style=\\"box-sizing: inherit; font-weight: bold;\\">Phone</span></div><div style=\\"box-sizing: inherit;\\">+91 74260 60610</div></div>", "fr": "<div><br></div><div><span style=\\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 28px; white-space: pre-wrap; background-color: rgb(248, 249, 250); --darkreader-inline-color:#696866; --darkreader-inline-bgcolor:#0e0f0f;\\" data-darkreader-inline-color=\\"\\" data-darkreader-inline-bgcolor=\\"\\">Nous contacter</span><br></div>"}',
                'h1' => '{"en": "Contact Us", "fr": "Nous contacter"}',
                'h2' => '{"en": "Contact Us", "fr": "Nous contacter"}',
                'id' => 7,
                'image' => NULL,
                'meta_desc' => '{"en": "LarabackPro experts are 24*7 available to answer your questions or to receive your feedback. Please get in touch with us anytime via the form and we\'ll get back to you as soon as possible!", "fr": "Nous contacter"}',
                'meta_kw' => '{"en": "Contact Us", "fr": "Nous contacter"}',
                'meta_title' => '{"en": "Contact Us | Get In Touch With Us Anytime | LarabackPro", "fr": "Nous contacter"}',
                'slug' => 'contact-us',
                'status' => 'publish',
                'style' => 1,
                'template' => 'contact',
                'title' => '{"en": "Contact Us", "fr": "Nous contacter"}',
                'updated_at' => '2020-09-08 09:27:29',
                'visits' => 582,
            ),
            2 => 
            array (
                'content' => '<!-- wp:procash/hero-section {"title":{"en":"Invite your friends \\u0026 get 5% of their cashback!","fr":"la plus grande plateforme de cashback au monde"},"description":{"en":"Share the referral link with your friend and let your friend earn Rs. 50 joining bonus and you will earn Rs. 25 referral bonus. Moreover, you will continue to earn 5% of your friend\'s cashback earning!","fr":"Un programme de remise en argent est un programme d\'encouragement géré par des sociétés de cartes de crédit où un pourcentage du montant dépensé est remboursé au titulaire de la carte."},"button_name":{"en":"Invite Friends Now"},"button_url":"/user/refer-and-earn","image":"https://procash.enactweb.com/img/blocks/refer-earn-1.jpg","style":"2"} /-->

<!-- wp:procash/section {"title":{"en":"How Refer \\u0026 Earn Works","fr":" Comment fonctionne Refer \\u0026 Earn"},"description":{"en":"Follow simple steps and earn unlimited referral bonus.","fr":""},"style":"3","blocks":[{"title":{"en":"You Invite A Friend","fr":"Vous invitez un ami"},"content":{"en":"Invite a friend by an email, social media or WhatsApp.","fr":"Invitez un ami par e-mail, sur les réseaux sociaux ou sur WhatsApp."},"sequence":"100","image":"https://procash.enactweb.com/img/blocks/refer-earn-plain-icon.svg"},{"title":{"en":"Your Friend Joins Us","fr":"Votre ami nous rejoint"},"content":{"en":"Your Friend Joins us using referral code and complete verification.","fr":"Votre ami nous rejoint en utilisant le code de parrainage et une vérification complète."},"sequence":"200","image":"https://procash.enactweb.com/img/blocks/share-earn-plain-icon.svg"},{"title":{"en":"Friend Shops Online","fr":"Boutiques d\'amis en ligne"},"content":{"en":"Shop Online via our website and earn cashback.","fr":"Achetez en ligne via notre site Web et gagnez du cashback."},"sequence":"300","image":"https://procash.enactweb.com/img/blocks/shop-online-plain-icon.svg"},{"title":{"en":"Earn Bonus","fr":"Gagnez un bonus"},"content":{"en":"You get Rs. 25 referral bonus and your friend gets Rs. 50 joining bonus.","fr":"Bonus de parrainage et votre ami obtient Rs. 25 bonus d\'adhésion."},"sequence":"400","image":"https://procash.enactweb.com/img/blocks/cash-plain-icon.svg"}]} /-->

<!-- wp:procash/section {"title":{"en":"Why Refer Friends","fr":"Pourquoi parrainer des amis"},"description":{"en":"Benefits of referral"},"style":"2","blocks":[{"title":{"en":"Help Your Friends","fr":"Aidez vos amis"},"content":{"en":"Let your friends know about earning real cashback on top of all discounts and promo codes.","fr":"Le cashback suit instantanément dans les 2 jours maximum."},"sequence":"100","image":"https://procash.enactweb.com/img/blocks/help-friend-gr-bg-icon.svg"},{"title":{"en":"One-time Bonus","fr":"Bonus d\'adhésion"},"content":{"en":"When your friend join LarabackPro he/she will earn Rs. 50 as joining bonus and you\'ll earn Rs. 25 as referral bonus.","fr":"Le cashback suit instantanément dans les 2 jours maximum."},"sequence":"200","image":"https://procash.enactweb.com/img/blocks/earn-bonus-gr-bg-icon.svg"},{"title":{"en":"5% from Every Transaction","fr":"Bonus de parrainage"},"content":{"en":"Every time your friend earn the cashback, you will get 5% of his cashback as referral cashback.","fr":"Le cashback suit instantanément dans les 2 jours maximum."},"sequence":"300","image":"https://procash.enactweb.com/img/blocks/joining-bonus-gr-bg-icon.svg"},{"title":{"en":"Unlimited Earning for Life","fr":""},"content":{"en":"The referral earning in LarabackPro is unlimited without any upper cap, until the program is lifetime.","fr":""},"sequence":"400","image":"https://procash.enactweb.com/img/blocks/share-earn-gr-bg-icon.svg"}]} /-->

<!-- wp:procash/call-to-action {"title":{"fr":"Adhérer maintenant","en":"Join LarabackPRO Now and \\u003cspan class=\\u0022text-orange\\u0022\\u003e Get a $1 Bonus\\u003c/span\\u003e Today!"},"description":{"en":"Earn the real cashback from hundreds of top merchants. The cashback is on top of the offers \\u0026 discounts from the merchant.","fr":"Les meilleures offres, ventes, coupons et plus de 10000 offres que vous pouvez trouver ici."},"image":"https://procash.enactweb.com/img/blocks/handshake-3962172-1920.jpg","style":"2"} /-->

<!-- wp:procash/rich-text-block {"message":{"en":"\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eGeneral Referral Terms;\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhy Should I Refer a Friend?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou can earn a bonus amount for each friend that signs up using your referral code and fulfils the requirements related to the referral. There are no caps on the number of friends that you can refer, so you can potentially earn an unlimited amount of money for referring friends to our website.\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhat Is The Joining/Referral Code Field In The Sign Up Form?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eWe issue unique referral code to all our registered users. You may check with any of your friends if they are our registered users and get the referral code to enter during signup. It\'s an optional to use the referral code.\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eIs there any minimum purchase / cashback condition to be eligible to earn the cashback?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYes, you need to earn minimum Rs. 500 CONFIRMED cashback to be eligible to earn the referral bonus.\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eHow much time does it take to see the bonus in my account?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eAs soon as any user joins using your referral code, the bonus entry will be showing in your account with PENDING status. Once the terms of minimum cashback earning is satisfied, your bonus transaction will be marked as CONFIRMED.\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eIs there any duration within which minimum Rs. 500 confirmed cashback to be earned?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYes, you/your friend need to earn the prescribed minimum cashback within 120 days of joining us.\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eDo I need to earn Rs. 500 CONFIRMED cashback for every user who joins using my referral code to earn the referral bonus for his joining?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eNo, you don\'t need to earn Rs. 500 CONFIRMED cashback for every user. However, every new user who signs up using your referral code must earn Rs. 500 CONFIRMED cashback within prescribe duration so that you earn the joining bonus.\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eHow much cashback I will earn from my friend\'s cashback earning?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou will earn 5% cashback from your friends earning, this will be on top of the one time bonus.\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eIs there any validity for the refer \\u0026amp; earn program?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYes, this is introductory offers for limited time, so make the most before the program is discontinued.\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhat will happen to my referral earning when refer \\u0026amp; earn program is discontinued?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYour earning will remain with you, you can withdraw any time, it would never lapse or expire.\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eI\'ve some other question, which is not listed here, what do I do?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou can contact us by filling contact form and elaborate your question in details.\\u003c/div\\u003e","fr":"a"}} /-->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@fullWidth',
                'exclude_sitemap' => 0,
                'footer_content' => '{"en": "<div><br></div>", "fr": "Référez et gagnez"}',
                'h1' => '{"en": "Refer And Earn", "fr": "Référez et gagnez"}',
                'h2' => '{"en": "Refer And Earn", "fr": "Référez et gagnez"}',
                'id' => 8,
                'image' => NULL,
                'meta_desc' => '{"en": "Invite your friends and get cashback for life as a referral bonus at LarabackPro! Thousands of users are earning referral cash when they join us with your referral code. Don\'t miss out.", "fr": "Référez et gagnez"}',
                'meta_kw' => '{"en": "Refer And Earn", "fr": "Référez et gagnez"}',
                'meta_title' => '{"en": "Refer & Earn | Assured Cashback On Every Referral Along With Cashback For Life As Referral Bonus At LarabackPro. Refer Now!", "fr": "Référez et gagnez"}',
                'slug' => 'refer-and-earn',
                'status' => 'publish',
                'style' => 1,
                'template' => 'refer_earn',
                'title' => '{"en": "Refer And Earn", "fr": "Référez et gagnez"}',
                'updated_at' => '2020-09-12 18:37:34',
                'visits' => 746,
            ),
            3 => 
            array (
                'content' => '<!-- wp:procash/hero-section {"title":{"en":"Share the Links and Earn Real Cashback"},"description":{"en":"We\'ve made it easy to earn the money online. Now create a links for various offers and deals and share it with your friends and family. When they shop using your links, you earn the cashback in your account."},"button_name":{"en":"Share Now"},"button_url":"/user/share-and-earn","image":"https://procash.enactweb.com/img/blocks/share-earn.jpg","style":"2"} /-->

<!-- wp:procash/timeline-process {"title":{"en":"Start Earning In Just 4 Steps","fr":"Comment ça marche"},"description":{"en":"We help you earn money by sharing deals from popular online sites with your friends \\u0026 family."},"blocks":[{"image":"https://procash.enactweb.com/img/blocks/browse-plain-icon.svg","description":{"en":"Find interesting shopping offers and deals from any of our partner merchants","fr":"Cliquez sur les liens CashbackOS et faites vos achats dans vos magasins préférés comme Ajio, Jabong, Myntra et plus de 300 magasins"},"title":{"en":"Find Deals \\u0026 Offers","fr":"Boutique"},"sequence":"100"},{"image":"https://procash.enactweb.com/img/blocks/refer-earn-plain-icon.svg","description":{"en":"After login, go to Share \\u0026 Earn and enter the deal page link to create a shareable Link","fr":"Connectez-vous / Rejoignez CashbackOS et parcourez des milliers de coupons et offres dans des centaines de magasins en ligne."},"title":{"en":"Create Shareable Link","fr":"Feuilleter"},"sequence":"200"},{"image":"https://procash.enactweb.com/img/blocks/share-earn-plain-icon.svg","description":{"en":"Promote the links on your social media or share with friends and family via WhatsApp","fr":"Lorsque vous atteignez un seuil minimum de 100 USD ou plus en tant que Cashback «confirmé», vous pouvez retirer le cashback."},"title":{"en":"Share with Friends \\u0026 Family","fr":"Se désister"},"sequence":"300"},{"image":"https://procash.enactweb.com/img/blocks/earn-plain-icon.svg","description":{"en":"When any of your friend purchases via the sharable links, you will earn the real cashback.","fr":"Après un achat, la transaction est suivie dans les 6 heures et le cashback est crédité sur votre compte."},"title":{"en":"Earn Real Cashback","fr":"Gagner"},"sequence":"400"}]} /-->

<!-- wp:procash/section {"title":{"en":"Why Share \\u0026 Earn","fr":"Pourquoi parrainer des amis"},"description":{"en":"Now, earn the real cash from the comfort of your home"},"style":"2","blocks":[{"title":{"en":"At Your Home \\u0026 Time","fr":"Aidez vos amis"},"content":{"en":"From few simple steps earn the real money without leaving the comfort of your home and time.","fr":"Le cashback suit instantanément dans les 2 jours maximum."},"sequence":"100","image":"https://procash.enactweb.com/img/blocks/shop-online-gr-bg-icon.svg"},{"title":{"en":"Shop From Trusted Merchants","fr":"Bonus d\'adhésion"},"content":{"en":"We partner with only authentic and reliable partner whose products and services are assured to be worthy","fr":"Le cashback suit instantanément dans les 2 jours maximum."},"sequence":"200","image":"https://procash.enactweb.com/img/blocks/merchant-gr-bg-icon.svg"},{"title":{"en":"Share The Best Deals \\u0026 Offers ","fr":"Bonus de parrainage"},"content":{"en":"Share the joy of best deals and offers with your friends and family by following small amount of steps.","fr":"Le cashback suit instantanément dans les 2 jours maximum."},"sequence":"300","image":"https://procash.enactweb.com/img/blocks/offer-gr-bg-icon.svg"}]} /-->

<!-- wp:procash/call-to-action {"title":{"fr":"Adhérer maintenant","en":"Join LarabackPRO Now and \\u003cspan class=\\u0022text-orange\\u0022\\u003e Earn Upto Rs. 20,000\\u003c/span\\u003e per month!!"},"description":{"en":"The best deals, sales, coupons \\u0026 more than 10,000 offers you can find here.","fr":"Les meilleures offres, ventes, coupons et plus de 10000 offres que vous pouvez trouver ici."},"image":"https://procash.enactweb.com/img/blocks/handshake-3962172-1920.jpg","style":"2"} /-->

<!-- wp:procash/rich-text-block {"message":{"en":"\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eGeneral Terms\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhy Should I Refer a Friend?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou can earn a bonus amount for each friend that signs up using your referral code and fulfils the requirements related to the referral. There are no caps on the number of friends that you can refer, so you can potentially earn an unlimited amount of money for referring friends to our website.\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhat Is The Joining/Referral Code Field In The Sign Up Form?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou can earn a bonus amount for each friend that signs up using your referral code and fulfils the requirements related to the referral. There are no caps on.\\u003c/div\\u003e"}} /-->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@fullWidth',
                'exclude_sitemap' => 0,
                'footer_content' => '{"en": "<div><br></div>", "fr": "Partagez et gagnez"}',
                'h1' => '{"en": "Share And Earn", "fr": "Partagez et gagnez"}',
                'h2' => '{"en": "Share And Earn", "fr": "Partagez et gagnez"}',
                'id' => 9,
                'image' => NULL,
                'meta_desc' => '{"en": "Share your coupon/deals link with your friends and get assured cashback when your friends purchase using the link. Hundreds of users are earning referral cash while purchasing from LarabackPro. Don\'t miss out.", "fr": "Partagez et gagnez"}',
                'meta_kw' => '{"en": "Share And Earn", "fr": "Partagez et gagnez"}',
                'meta_title' => '{"en": "Share & Earn | Assured Cashback On Every Link Shared From LarabackPro.", "fr": "Partagez et gagnez"}',
                'slug' => 'share-and-earn',
                'status' => 'publish',
                'style' => 1,
                'template' => 'share_earn',
                'title' => '{"en": "Share And Earn", "fr": "Partagez et gagnez"}',
                'updated_at' => '2020-09-10 11:51:21',
                'visits' => 387,
            ),
            4 => 
            array (
                'content' => '<!-- wp:procash/hero-section {"title":{"en":"Earn Cashback","fr":"la plus grande plateforme de cashback au monde"},"description":{"en":"Every Single Time You Shop Online","fr":"Un programme de remise en argent est un programme d\'encouragement géré par des sociétés de cartes de crédit où un pourcentage du montant dépensé est remboursé au titulaire de la carte."},"button_name":{"en":"Join Now"},"button_url":"/signup","image":"https://procash.enactweb.com/img/blocks/share-earn-money.jpg","style":"2"} /-->

<!-- wp:procash/section {"title":{"en":"It\'s Easy to Earn the Real Cashback","fr":"Comment ça marche"},"description":{"en":"We\'ve made it really simple to earn the cashback","fr":"Connectez-vous / Rejoignez CashbackOS et parcourez des milliers de coupons et offres dans des centaines de magasins en ligne."},"style":"4","blocks":[{"title":{"en":"Login \\u0026 Browse Offers","fr":"Gagner"},"content":{"en":"Register or login and explore best offers and deals from hundreds of stores","fr":"Après un achat, la transaction est suivie dans les 6 heures et le cashback est crédité sur votre compte."},"sequence":"100","image":"https://procash.enactweb.com/img/blocks/browse-lg-icon.svg"},{"title":{"en":"Shop at Your Favorite Stores","fr":"Se désister"},"content":{"en":"Click thru\' the any Shop Now link, use listed coupons \\u0026 offers and complete shopping as usual.","fr":"Lorsque vous atteignez un seuil minimum de 100 USD ou plus en tant que Cashback «confirmé», vous pouvez retirer le cashback."},"sequence":"200","image":"https://procash.enactweb.com/img/blocks/earn-lg-icon.svg"},{"title":{"en":"Get Cashback Automatically","fr":"Boutique"},"content":{"en":"We track the shopping and award the cashback automatically within 72 hours","fr":"Cliquez sur les liens CashbackOS et faites vos achats dans vos magasins préférés comme Ajio, Jabong, Myntra et plus de 300 magasin"},"sequence":"300","image":"https://procash.enactweb.com/img/blocks/shop-lg-icon.svg"},{"title":{"en":"Withdraw the Cashback","fr":""},"content":{"en":"Once reached to confirmed cashback worth Rs. 250, request the payment via Gift-voucher, bank transfer, Paytm etc.","fr":""},"sequence":"400","image":"https://procash.enactweb.com/img/blocks/withdraw-lg-icon.svg"}]} /-->

<!-- wp:procash/section {"title":{"en":"Why we pay cashback","fr":"Pourquoi nous payons du cashback"},"description":{"en":"Yes, we are authentic business which provide the cashback all legitimately, here is how..","fr":"Connectez-vous / Rejoignez CashbackOS et parcourez des milliers de coupons et offres dans des centaines de magasins en ligne."},"style":"3","blocks":[{"title":{"en":"We connect customers like you with the shopping portals","fr":"Gagner"},"content":{"en":"","fr":"Après un achat, la transaction est suivie dans les 6 heures et le cashback est crédité sur votre compte."},"sequence":"100","image":"https://procash.enactweb.com/img/blocks/share-earn-gr-bg-icon.svg"},{"title":{"en":"Stores in return pay us the commission for your online shopping","fr":"Se désister"},"content":{"en":"","fr":"Lorsque vous atteignez un seuil minimum de 100 USD ou plus en tant que Cashback «confirmé», vous pouvez retirer le cashback."},"sequence":"200","image":"https://procash.enactweb.com/img/blocks/cash-gr-bg-icon.svg"},{"title":{"en":"Part of the commission is being paid out to you as cashback","fr":"Boutique"},"content":{"en":"","fr":"Cliquez sur les liens CashbackOS et faites vos achats dans vos magasins préférés comme Ajio, Jabong, Myntra et plus de 300 magasin"},"sequence":"300","image":"https://procash.enactweb.com/img/blocks/earn-gr-bg-icon.svg"}]} /-->

<!-- wp:procash/payment-mode {"title":{"en":"We pay the cashback by all popular mode","fr":" Comment nous payons le cashback"},"style":"3","description":{"en":"","fr":"Le cashback peut être retiré via PayPal ou virement bancaire"}} /-->

<!-- wp:procash/testimonial {"title":{"en":"Testimonials","fr":"Témoignages"},"testimonials":[{"user_name":{"en":"Dishant","fr":""},"user_profession":{"en":"Engineering Student","fr":""},"user_feedback":{"en":"Who does not love additional cashback. And that too without much effort. LarabackPRO.com is one and only one such portal which offers best cashbackon some of the reputed websites. Keep adding more websites for better experience. Kudos.","fr":""},"image":"https://procash.enactweb.com/img/photo-1541647376583-8934aaf3448a.jpg","sequence":"100"},{"user_name":{"en":"Isebella","fr":""},"user_profession":{"en":"Housewife","fr":""},"user_feedback":{"en":"It\'s really amazing experience shopping through LarabackPRO . Because it actually does whatever it claims for. Awesome app for middle class family to save their money in shopping. Exciting cashback offers, Rewards... awesome invention. Thanks LarabackPRO Team. We all proud of you. Keep it up.","fr":""},"image":"https://procash.enactweb.com/img/photo-1438761681033-6461ffad8d80.jpg","sequence":"200"},{"user_name":{"en":"John Campbell","fr":""},"user_profession":{"en":"Online Shopper","fr":""},"user_feedback":{"en":"Great app...has wonderful offers to save more...\\nEasy to operate... hassle free cashback earned..\\nOverall loved the app","fr":""},"image":"https://procash.enactweb.com/img/photo-1541647376583-8934aaf3448a.jpg","sequence":"300"}]} /-->

<!-- wp:procash/promote-download {"title":{"en":"Discount Coupons and Cashback at Over 1600 Online Stores","fr":"Téléchargement d\'extension"},"description":{"en":"LarabackPRO helps you find the the best coupons and remind to activate the cashback so that you never miss the best deal.","fr":"Chaque fois que vous visitez un partenaire marchand, notre extension vous rappellera d\'activer le cashback sans vous rendre sur un autre site Web."},"bg_img":"https://procash.enactweb.com/img/blocks/shops.jpg","app_img":"https://procash.enactweb.com/img/extension.png","type":"ext","style":"2"} /-->

<!-- wp:procash/info-box {"title":{"fr":"Parrainez des amis et gagnez","en":"Refer Friends \\u0026 Earn"},"description":{"fr":"Achetez en déplacement depuis votre téléphone, tablette ou autre appareil mobile. Vous pouvez économiser jusqu\'à 10% sur la totalité de votre achat en utilisant l\'application CashbackOS chez des dizaines de détaillants en ligne.","en":"Shop on the go from your phone, tablet, or other mobile device. You can save up to 10% on your entire purchase when you use the LarabackPRO app at dozens of online retailers."},"button_name":{"en":"Refer Now"},"button_url":"/user/refer-and-earn","image":"https://procash.enactweb.com/img/refer-and-earn.png"} /-->

<!-- wp:procash/promote-download {"title":{"en":"Install our App","fr":"Téléchargement d\'extension"},"description":{"en":"Every time you visit any merchant partner, our extension will remind you to activate cashback without going to any other website.","fr":"Chaque fois que vous visitez un partenaire marchand, notre extension vous rappellera d\'activer le cashback sans vous rendre sur un autre site Web."},"bg_img":"https://procash.enactweb.com/img/blocks/install-app.jpg","app_img":"https://procash.enactweb.com/img/download-mobile-app-img.png","style":"2"} /-->

<!-- wp:procash/info-box {"title":{"en":" Share \\u0026 Earn","fr":"Partagez et gagnez"},"description":{"en":"Now create cashback trackable links and share with your family and friends so that they grab the best offers and you earn the 100% cashback as if order is placed by you!","fr":"Créez maintenant des liens traçables de cashback et partagez-les avec votre famille et vos amis afin qu\'ils profitent des meilleures offres et que vous gagniez 100% de cashback comme si la commande était passée par vous!"},"button_name":{"en":"Share Now"},"button_url":"/user/share-and-earn","image":"https://procash.enactweb.com/img/share-and-earn.png"} /-->

<!-- wp:procash/call-to-action {"title":{"fr":"Adhérer maintenant","en":"Join Now"},"description":{"en":"The best deals, sales, coupons \\u0026 more than 10,000 offers you can find here.","fr":"Les meilleures offres, ventes, coupons et plus de 10000 offres que vous pouvez trouver ici."},"image":"https://procash.enactweb.com/img/blocks/handshake-3962172-1920.jpg","style":"2"} /-->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@fullWidth',
                'exclude_sitemap' => 0,
                'footer_content' => '{"en": "&nbsp;", "fr": "&nbsp;"}',
                'h1' => '{"en": "How It Works", "fr": "Comment ça fonctionne"}',
                'h2' => '{"en": "How It Works", "fr": "Comment ça fonctionne"}',
                'id' => 10,
                'image' => NULL,
                'meta_desc' => '{"en": "Get to know everything about how LarabackPro works and how you can earn exciting and highest cashback on every purchase.", "fr": "Comment ça fonctionne"}',
                'meta_kw' => '{"en": "How It Works", "fr": "Comment ça fonctionne"}',
                'meta_title' => '{"en": "How It Works | LarabackPro", "fr": "Comment ça fonctionne"}',
                'slug' => 'how-it-works',
                'status' => 'publish',
                'style' => 1,
                'template' => 'hiw',
                'title' => '{"en": "How It Works", "fr": "Comment ça fonctionne"}',
                'updated_at' => '2021-05-28 12:56:19',
                'visits' => 448,
            ),
            5 => 
            array (
                'content' => '<!-- wp:procash/hero-section {"title":{"en":"Frequently Asked Questions","fr":"la plus grande plateforme de cashback au monde"},"description":{"en":"A cashback reward program is an incentive program operated by credit card companies where a percentage of the amount spent is paid back to the card holder.","fr":"Un programme de remise en argent est un programme d\'encouragement géré par des sociétés de cartes de crédit où un pourcentage du montant dépensé est remboursé au titulaire de la carte."},"button_name":{"en":"Join Now"},"button_url":"/signup","image":"https://procash.enactweb.com/img/blocks/faqs.jpg","style":"2","className":"d-guest d-none"} /-->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@faqs',
                'exclude_sitemap' => 0,
                'footer_content' => '{"en": "<p><br></p><p>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t</p>", "fr": "Questions fréquemment posées"}',
                'h1' => '{"en": "Frequently Asked Questions", "fr": "Questions fréquemment posées"}',
                'h2' => '{"en": "Frequently Asked Questions", "fr": "Questions fréquemment posées"}',
                'id' => 11,
                'image' => NULL,
                'meta_desc' => '{"en": "Read the questions and answers frequently asked by the users regarding Cashback or Coupon facts/issues, How Refer And Earn, Share And Earn system works. Get the full details of every question here.", "fr": "Questions fréquemment posées"}',
                'meta_kw' => '{"en": "Frequently Asked Questions", "fr": "Questions fréquemment posées"}',
                'meta_title' => '{"en": "Frequently Asked Questions | LarabackPro", "fr": "Questions fréquemment posées"}',
                'slug' => 'faq',
                'status' => 'publish',
                'style' => 1,
                'template' => 'faqs',
                'title' => '{"en": "Frequently Asked Questions", "fr": "Questions fréquemment posées"}',
                'updated_at' => '2021-05-28 21:55:45',
                'visits' => 348,
            ),
            6 => 
            array (
                'content' => '<!-- wp:paragraph -->
<p>Shop today and earn Cash Back at over 2,500 stores online. Find everything you need from men’s, children’s and women’s clothing, accessories and shoes to home décor, electronics, toys and more. Shop the best sales and deals from your favorite online stores – plus save with thousands of coupons and promo codes. Check back daily for new sales and hot deals to help you save with Cash Back at LarabackPRO.</p>
<!-- /wp:paragraph -->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@allStores',
                'exclude_sitemap' => 0,
                'footer_content' => '{"en": "<span style=\\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200</span>", "fr": "Tous les magasins", "gu": null, "hi": null, "ja": null}',
                'h1' => '{"en": "All Stores", "fr": "Tous les magasins", "gu": null, "hi": null, "ja": null}',
                'h2' => '{"en": "All Stores", "fr": "Tous les magasins", "gu": null, "hi": null, "ja": null}',
                'id' => 12,
                'image' => NULL,
                'meta_desc' => '{"en": "Shop today and earn Cash Back at over 2,500 stores online. Find everything you need from men’s, children’s and women’s clothing, accessories and shoes to home décor, electronics, toys and more. Shop the best sales and deals from your favorite online stores – plus save with thousands of coupons and promo codes. Check back daily […]", "fr": "Tous les magasins", "gu": null, "hi": null, "ja": null}',
                'meta_kw' => '{"en": "All Stores", "fr": "Tous les magasins", "gu": null, "hi": null, "ja": null}',
                'meta_title' => '{"en": "All Stores | LarabackPro", "fr": "Tous les magasins", "gu": null, "hi": null, "ja": null}',
                'slug' => 'all-stores',
                'status' => 'publish',
                'style' => 1,
                'template' => 'all_stores',
                'title' => '{"en": "All Stores", "fr": "Tous les magasins", "gu": "All Stores", "hi": "All Stores", "ja": "All Stores"}',
                'updated_at' => '2021-05-26 23:41:16',
                'visits' => 1034,
            ),
            7 => 
            array (
                'content' => '<!-- wp:paragraph -->
<p>Find everything you need from men’s, children’s and women’s clothing, accessories and shoes to home décor, electronics, toys and more also earn Cash Back from over 2,500 stores online. Shop the best sales and deals from your favorite online stores – plus save with thousands of coupons and promo codes. Check back daily for new sales and hot deals to help you save with Cash Back at LarabackPRO.</p>
<!-- /wp:paragraph -->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@allCouponCategories',
                'exclude_sitemap' => 0,
            'footer_content' => '{"en": "<span style=\\"color: rgb(103, 106, 108); font-family: Montserrat, sans-serif; font-size: 14px; white-space: pre-wrap;\\">Shop today and earn Cash Back at over 2,500 stores online. Find everything you need from men’s, children’s and women’s clothing, accessories and shoes to home décor, electronics, toys and more. Shop the best sales and deals from your favorite online stores – plus save with thousands of coupons and promo codes. Check back daily for new sales and hot deals to help you save with Cash Back at Larabackpro!</span>", "fr": "Toutes les catégories de coupons"}',
                'h1' => '{"en": "All Coupon Categories", "fr": "Toutes les catégories de coupons"}',
                'h2' => '{"en": "All Coupon Categories", "fr": "Toutes les catégories de coupons"}',
                'id' => 14,
                'image' => NULL,
                'meta_desc' => '{"en": "Shop today and earn Cash Back at over 2,500 stores online. Find everything you need from men’s, children’s and women’s clothing, accessories and shoes to home décor, electronics, toys and more. Shop the best sales and deals from your favorite online stores – plus save with thousands of coupons and promo codes. Check back daily […]", "fr": "Toutes les catégories de coupons"}',
                'meta_kw' => '{"en": "All Coupon Categories", "fr": "Toutes les catégories de coupons"}',
                'meta_title' => '{"en": "All Coupon Categories | LarabackPro", "fr": "Toutes les catégories de coupons"}',
                'slug' => 'all-coupon-categories',
                'status' => 'publish',
                'style' => 1,
                'template' => 'all_coupon_categories',
                'title' => '{"en": "All Coupon Categories", "fr": "Toutes les catégories de coupons"}',
                'updated_at' => '2020-09-08 11:25:57',
                'visits' => 455,
            ),
            8 => 
            array (
                'content' => '<!-- wp:paragraph -->
<p>Shop today and earn Cash Back at over 2,500 stores online. Find everything you need from men’s, children’s and women’s clothing, accessories and shoes to home décor, electronics, toys and more. Shop the best sales and deals from your favorite online stores – plus save with thousands of coupons and promo codes. Check back daily for new sales and hot deals to help you save with Cash Back at LarabackPRO.</p>
<!-- /wp:paragraph -->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@allStoreCategories',
                'exclude_sitemap' => 0,
            'footer_content' => '{"en": "<span style=\\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span>", "fr": "Toutes les catégories de magasins"}',
                'h1' => '{"en": "All Store Categories", "fr": "Toutes les catégories de magasins"}',
                'h2' => '{"en": "All Store Categories", "fr": "Toutes les catégories de magasins"}',
                'id' => 15,
                'image' => NULL,
                'meta_desc' => '{"en": "Shop today and earn Cash Back at over 2,500 stores online. Find everything you need from men’s, children’s and women’s clothing, accessories and shoes to home décor, electronics, toys and more. Shop the best sales and deals from your favorite online stores – plus save with thousands of coupons and promo codes. Check back daily […]", "fr": "Toutes les catégories de magasins"}',
                'meta_kw' => '{"en": "All Store Categories", "fr": "Toutes les catégories de magasins"}',
                'meta_title' => '{"en": "All Store Categories | LarabackPro", "fr": "Toutes les catégories de magasins"}',
                'slug' => 'all-store-categories',
                'status' => 'publish',
                'style' => 1,
                'template' => 'all_store_categories',
                'title' => '{"en": "All Store Categories", "fr": "Toutes les catégories de magasins"}',
                'updated_at' => '2020-09-08 10:51:52',
                'visits' => 436,
            ),
            9 => 
            array (
                'content' => '<!-- wp:paragraph -->
<p>Shop today and earn Cash Back at over 2,500 stores online. Find everything you need from men’s, children’s and women’s clothing, accessories and shoes to home décor, electronics, toys and more. Shop the best sales and deals from your favorite online stores – plus save with thousands of coupons and promo codes. Check back daily for new sales and hot deals to help you save with Cash Back at LarabackPRO.</p>
<!-- /wp:paragraph -->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@allDealCategories',
                'exclude_sitemap' => 0,
            'footer_content' => '{"en": "<span style=\\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span>", "fr": "Toutes les catégories d\'offres"}',
                'h1' => '{"en": "All Deal Categories", "fr": "Toutes les catégories d\'offres"}',
                'h2' => '{"en": "All Deal Categories", "fr": "Toutes les catégories d\'offres"}',
                'id' => 16,
                'image' => NULL,
                'meta_desc' => '{"en": "Now SAVE MORE with LarabackPro! Get the latest and up-to-date Deals, Coupons & Cashback offers. Find everything you need from men’s, children’s and women’s clothing, accessories and shoes to home décor, electronics, toys and more. Shop the best sales and deals from your favorite online stores – plus save with thousands of coupons and promo codes. Check back daily […]", "fr": "Toutes les catégories d\'offres"}',
                'meta_kw' => '{"en": "All Deal Categories", "fr": "Toutes les catégories d\'offres"}',
                'meta_title' => '{"en": "All Deal Categories | LarabackPro", "fr": "Toutes les catégories d\'offres"}',
                'slug' => 'all-daily-deal-categories',
                'status' => 'publish',
                'style' => 1,
                'template' => 'all_deal_categories',
                'title' => '{"en": "All Daily Deal Categories", "fr": "Toutes les catégories doffres"}',
                'updated_at' => '2020-09-08 10:52:01',
                'visits' => 317,
            ),
            10 => 
            array (
                'content' => '<!-- wp:paragraph -->
<p>Shop today and earn Cash Back at over 2,500 stores online. Find everything you need from men’s, children’s and women’s clothing, accessories and shoes to home décor, electronics, toys and more. Shop the best sales and deals from your favorite online stores – plus save with thousands of coupons and promo codes. Check back daily for new sales and hot deals to help you save with Cash Back at LarabackPRO.</p>
<!-- /wp:paragraph -->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@allDeals',
                'exclude_sitemap' => 0,
            'footer_content' => '{"en": "<span style=\\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span>", "fr": "Toutes les offres", "hi": null}',
                'h1' => '{"en": "All Deals", "fr": "Toutes les offres", "hi": null}',
                'h2' => '{"en": "All Deals", "fr": "Toutes les offres", "hi": null}',
                'id' => 17,
                'image' => NULL,
                'meta_desc' => '{"en": "Now SAVE MORE with LarabackPro! Get the latest and up-to-date Deals, Coupons & Cashback offers. Find everything you need from men’s, children’s and women’s clothing, accessories and shoes to home décor, electronics, toys and more. Shop the best sales and deals from your favorite online stores – plus save with thousands of coupons and promo codes. Check back daily […]", "fr": "Toutes les offres", "hi": null}',
                'meta_kw' => '{"en": "All Deals", "fr": "Toutes les offres", "hi": null}',
                'meta_title' => '{"en": "All Deals | LarabackPro", "fr": "Toutes les offres", "hi": null}',
                'slug' => 'daily-deals',
                'status' => 'publish',
                'style' => 1,
                'template' => 'all_deals',
                'title' => '{"en": "Daily Deals", "fr": "Toutes les offres", "hi": "Deals"}',
                'updated_at' => '2021-01-12 06:37:35',
                'visits' => 4793,
            ),
            11 => 
            array (
                'content' => '<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":15} -->
<div class="wp-block-column" style="flex-basis:15%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":35} -->
<div class="wp-block-column" style="flex-basis:35%"><!-- wp:procash/signup-component /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":35,"className":"signup-info-box"} -->
<div class="wp-block-column signup-info-box" style="flex-basis:35%"><!-- wp:procash/section {"title":{"en":"Join World\'s Largest Cashback Site"},"description":{"en":"Earn real cashback with one of the most authentic cashback portals."},"style":"7","blocks":[{"title":{"en":"Real Cashback","fr":""},"content":{"en":"We provide the cashback that you can get in your bank.","fr":""},"sequence":"100","image":"https://procash.enactweb.com/img/blocks/cash-plain-icon.svg"},{"title":{"en":"100% Free to use","fr":""},"content":{"en":"We do not charge any fees for becoming member","fr":""},"image":"https://procash.enactweb.com/img/blocks/merchant-plain-icon.svg","sequence":"200"},{"title":{"en":"Best Coupons \\u0026 Offers","fr":""},"content":{"en":"Get thousands of the coupons and offers from hundreds of top stores","fr":""},"image":"https://procash.enactweb.com/img/blocks/offer-plain-icon.svg","sequence":"300"},{"title":{"en":"More ways to earn online","fr":""},"content":{"en":"Explore our refer \\u0026 earn, Share \\u0026 earn program to earn online.","fr":""},"image":"https://procash.enactweb.com/img/blocks/help-friend-plain-icon.svg","sequence":"400"}],"is_logged_in":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":15} -->
<div class="wp-block-column" style="flex-basis:15%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@registerPage',
                'exclude_sitemap' => 0,
            'footer_content' => '{"en": "Login", "fr": "<div class=\\"tw-ta-container hide-focus-ring tw-nfl\\" id=\\"tw-target-text-container\\" tabindex=\\"0\\" style=\\"overflow: hidden; position: relative; outline: 0px; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 0px; background-color: rgb(248, 249, 250); --darkreader-inline-outline: initial; --darkreader-inline-color:#696866; --darkreader-inline-bgcolor:#0e0f0f;\\" data-darkreader-inline-outline=\\"\\" data-darkreader-inline-color=\\"\\" data-darkreader-inline-bgcolor=\\"\\"><pre class=\\"tw-data-text tw-text-large XcVN5d tw-ta\\" data-placeholder=\\"Translation\\" id=\\"tw-target-text\\" dir=\\"ltr\\" style=\\"unicode-bidi: isolate; font-size: 28px; line-height: 36px; background-color: transparent; border-width: initial; border-style: none; border-color: initial; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; width: 277px; white-space: pre-wrap; --darkreader-inline-bgcolor:transparent; --darkreader-inline-border-top: initial; --darkreader-inline-border-right: initial; --darkreader-inline-border-bottom: initial; --darkreader-inline-border-left: initial;\\" data-darkreader-inline-bgcolor=\\"\\" data-darkreader-inline-border-top=\\"\\" data-darkreader-inline-border-right=\\"\\" data-darkreader-inline-border-bottom=\\"\\" data-darkreader-inline-border-left=\\"\\"><div class=\\"tw-ta-container hide-focus-ring tw-nfl\\" id=\\"tw-target-text-container\\" tabindex=\\"0\\" style=\\"overflow: hidden; position: relative; outline: 0px; color: rgb(34, 34, 34); font-size: 0px; white-space: normal; --darkreader-inline-outline: initial; --darkreader-inline-color:#696866;\\" data-darkreader-inline-outline=\\"\\" data-darkreader-inline-color=\\"\\"><pre class=\\"tw-data-text tw-text-large XcVN5d tw-ta\\" data-placeholder=\\"Translation\\" id=\\"tw-target-text\\" dir=\\"ltr\\" style=\\"unicode-bidi: isolate; font-size: 28px; line-height: 36px; background-color: transparent; border-width: initial; border-style: none; border-color: initial; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; width: 277px; white-space: pre-wrap; --darkreader-inline-bgcolor:transparent; --darkreader-inline-border-top: initial; --darkreader-inline-border-right: initial; --darkreader-inline-border-bottom: initial; --darkreader-inline-border-left: initial;\\" data-darkreader-inline-bgcolor=\\"\\" data-darkreader-inline-border-top=\\"\\" data-darkreader-inline-border-right=\\"\\" data-darkreader-inline-border-bottom=\\"\\" data-darkreader-inline-border-left=\\"\\"><span lang=\\"fr\\">S\'identifier</span></pre></div><div class=\\"tw-ta-container hide-focus-ring tw-nfl\\" id=\\"tw-target-rmn-container\\" style=\\"overflow: hidden; position: relative; outline: 0px; color: rgb(34, 34, 34); font-size: 0px; white-space: normal; --darkreader-inline-outline: initial; --darkreader-inline-color:#696866;\\" data-darkreader-inline-outline=\\"\\" data-darkreader-inline-color=\\"\\"><pre class=\\"tw-data-placeholder tw-text-small tw-ta\\" data-placeholder=\\"\\" id=\\"tw-target-rmn\\" dir=\\"ltr\\" style=\\"unicode-bidi: isolate; background-color: transparent; border-width: initial; border-style: none; border-color: initial; padding: 0px 0.14em 0px 0px; position: relative; margin-bottom: 0px; resize: none; font-family: inherit; overflow: hidden; width: 277px; white-space: pre-wrap; font-size: 16px; line-height: 24px; color: black; --darkreader-inline-bgcolor:transparent; --darkreader-inline-border-top: initial; --darkreader-inline-border-right: initial; --darkreader-inline-border-bottom: initial; --darkreader-inline-border-left: initial; --darkreader-inline-color:#747372;\\" data-darkreader-inline-bgcolor=\\"\\" data-darkreader-inline-border-top=\\"\\" data-darkreader-inline-border-right=\\"\\" data-darkreader-inline-border-bottom=\\"\\" data-darkreader-inline-border-left=\\"\\" data-darkreader-inline-color=\\"\\"></pre></div><div jsname=\\"fek9E\\" class=\\"iYB33c\\" style=\\"display: flex; align-items: center; justify-content: space-between; width: 309px; position: absolute; height: 48px; bottom: 0px; left: 0px; color: rgb(34, 34, 34); font-size: 0px; white-space: normal; --darkreader-inline-color:#696866;\\" data-darkreader-inline-color=\\"\\"><div class=\\"dlJLJe\\" style=\\"display: flex; margin: 0px 11px;\\"><div jscontroller=\\"zkUZDe\\" data-cviv=\\"false\\" jsaction=\\"R4nmZb:npT2md;C1RXse:PoUyQd\\" data-ved=\\"2ahUKEwiH2ZWh_qnrAhUHyDgGHb63AVoQz_AEMAB6BAgCEA4\\" style=\\"visibility: visible; position: relative;\\"><g-bubble jscontroller=\\"BlFnV\\" data-tp=\\"5\\" jsshadow=\\"\\"><span jsname=\\"d6wfac\\" class=\\"povykd hide-focus-ring\\" aria-haspopup=\\"true\\" data-extra-container-classes=\\"tw-verified-tooltip\\" data-theme=\\"0\\" data-width=\\"0\\" role=\\"button\\" tabindex=\\"0\\" jsslot=\\"\\" jsaction=\\"vQLyHf\\" style=\\"outline: 0px; display: inline-block; --darkreader-inline-outline: initial;\\" data-darkreader-inline-outline=\\"\\"><div class=\\"U9URNb\\" style=\\"opacity: 0.74; font-size: 12px; font-style: italic; height: 26px; line-height: 26px; min-width: 26px; margin: -11px; padding: 11px;\\"><g-img class=\\"XrZwB\\" role=\\"img\\" style=\\"display: inline-block; vertical-align: text-bottom; padding-left: 5px;\\"></g-img></div></span></g-bubble></div></div></div></pre></div>"}',
                'h1' => '{"en": "Login", "fr": "S\'identifier"}',
                'h2' => '{"en": "Login", "fr": "S\'identifier"}',
                'id' => 18,
                'image' => NULL,
                'meta_desc' => '{"en": "Sign up on World\'s best savings community to get the latest deals, coupons and promo code with assured cashback on every purchase from LarabackPro. Join Us Now!", "fr": "S\'identifier"}',
                'meta_kw' => '{"en": "Login", "fr": "S\'identifier"}',
                'meta_title' => '{"en": "Register | LarabackPro", "fr": "S\'identifier"}',
                'slug' => 'signup',
                'status' => 'publish',
                'style' => 1,
                'template' => 'register',
                'title' => '{"en": "Signup", "fr": "Sidentifier"}',
                'updated_at' => '2020-09-03 16:36:45',
                'visits' => 904,
            ),
            12 => 
            array (
                'content' => '<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":32.5} -->
<div class="wp-block-column" style="flex-basis:32.5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":35} -->
<div class="wp-block-column" style="flex-basis:35%"><!-- wp:procash/login-component /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":32.5} -->
<div class="wp-block-column" style="flex-basis:32.5%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@loginPage',
                'exclude_sitemap' => 0,
                'footer_content' => '{"en": "Sign Up", "fr": "S\'inscrire"}',
                'h1' => '{"en": "Sign Up", "fr": "S\'inscrire"}',
                'h2' => '{"en": "Sign Up", "fr": "S\'inscrire"}',
                'id' => 19,
                'image' => NULL,
                'meta_desc' => '{"en": "Sign in on World\'s best savings community to get the latest deals, coupons and promo code with assured cashback on every purchase from LarabackPro. Login Now!", "fr": "S\'inscrire"}',
                'meta_kw' => '{"en": "Sign Up", "fr": "S\'inscrire"}',
                'meta_title' => '{"en": "Login | LarabackPro", "fr": "S\'inscrire"}',
                'slug' => 'login',
                'status' => 'publish',
                'style' => 1,
                'template' => 'login',
                'title' => '{"en": "Login", "fr": "Login"}',
                'updated_at' => '2020-09-04 09:38:48',
                'visits' => 1407,
            ),
            13 => 
            array (
                'content' => '<!-- wp:paragraph -->
<p>View all important pages at one place.</p>
<!-- /wp:paragraph -->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@sitemap',
                'exclude_sitemap' => 0,
                'footer_content' => '{"en": "Sitemap", "hi": null}',
                'h1' => '{"en": "Sitemap", "hi": null}',
                'h2' => '{"en": "Sitemap", "hi": null}',
                'id' => 20,
                'image' => NULL,
                'meta_desc' => '{"en": "LarabackPro is amongst the top coupons and cashback website in the World, has more than 2500+ merchants with over 1620 Free Coupon Codes & Discount Deals updated daily for the customers with high cashbacks on every purchase.", "hi": null}',
                'meta_kw' => '{"en": "Sitemap", "hi": null}',
                'meta_title' => '{"en": "Sitemap | LarabackPro", "hi": null}',
                'slug' => 'sitemap',
                'status' => 'publish',
                'style' => 1,
                'template' => 'sitemap',
                'title' => '{"en": "Sitemap", "hi": "साइटमैप"}',
                'updated_at' => '2020-10-08 17:00:55',
                'visits' => 385,
            ),
            14 => 
            array (
                'content' => '<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@fullWidthTitle',
                'exclude_sitemap' => 0,
                'footer_content' => '{"en": "<p>\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\tAbout us content</p><p>We strive to have a positive impact on customers, employees, small businesses, the economy, and communities. Amazonians are smart, passionate builders with different backgrounds and goals, who share a common desire to always be learning and inventing on behalf of our customers.</p><p>If you\'re an inventor, you love to build and be part of high performance teams who are passionate about operational excellence—you’ll love it here.<br></p><p><br></p><p>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t</p>", "fr": null}',
                'h1' => '{"en": null, "fr": null}',
                'h2' => '{"en": null, "fr": null}',
                'id' => 21,
                'image' => 'https://procash.enactweb.com/img/2.png',
                'meta_desc' => '{"en": "LarabackPro is amongst the top coupons and cashback website in the World, LarabackPro helps you save money through comprehensive listing of coupons, offers, deals and discounts from top online brands and websites. We provide reliable cashback offers on top of the merchant discounts every time you shop through us.", "fr": null}',
                'meta_kw' => '{"en": null, "fr": null}',
                'meta_title' => '{"en": "About Us | LarabackPro", "fr": null}',
                'slug' => 'about-us',
                'status' => 'publish',
                'style' => 1,
                'template' => 'about-us',
                'title' => '{"en": "About Us", "fr": "FR About Us"}',
                'updated_at' => '2020-10-23 15:39:57',
                'visits' => 284,
            ),
            15 => 
            array (
                'content' => '<!-- wp:paragraph -->
<p>When you use our services, you’re trusting us with your information.<br>We understand this is a big responsibility and work hard to protect<br>your information and put you in control.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This Privacy Policy is meant to help you understand what information<br>we collect, why we collect it, and how you can update, manage, export,<br>and delete your information.</p>
<!-- /wp:paragraph -->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@fullWidthTitle',
                'exclude_sitemap' => 0,
            'footer_content' => '{"en": "<div style=\\"box-sizing: inherit; color: rgb(103, 106, 108); font-family: Montserrat, sans-serif; font-size: 14px;\\"><div style=\\"box-sizing: inherit;\\"><div style=\\"box-sizing: inherit;\\"><div class=\\"block-editor-block-list__layout is-root-container\\" style=\\"box-sizing: inherit;\\"><h1 aria-label=\\"Write heading…\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-bb9b65ec-2269-40a9-b240-5f9cb7855043\\" data-block=\\"bb9b65ec-2269-40a9-b240-5f9cb7855043\\" data-type=\\"core/heading\\" data-title=\\"Heading\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">Privacy Policy</h1><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-e08b04c7-75c7-457a-a94e-6419e9c2cef6\\" data-block=\\"e08b04c7-75c7-457a-a94e-6419e9c2cef6\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">Last updated: 01<sup style=\\"box-sizing: inherit;\\">st</sup> Sep 2020</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-bcddd979-8a55-49c6-bfe8-ed25330c6dfd\\" data-block=\\"bcddd979-8a55-49c6-bfe8-ed25330c6dfd\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">EnactOn (\\"us\\", \\"we\\", or \\"our\\") operates https://www.larabackpro.com (the \\"Site\\"). This page informs you of our policies regarding the collection, use and disclosure of Personal Information we receive from users of the Site.</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-e66f99fe-85fd-4128-9415-7a46b06a96f4\\" data-block=\\"e66f99fe-85fd-4128-9415-7a46b06a96f4\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">We use your Personal Information only for providing and improving the Site. By using the Site, you agree to the collection and use of information in accordance with this policy.</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-e1b2ec57-f7d7-4412-b376-5d2a639cb8bf\\" data-block=\\"e1b2ec57-f7d7-4412-b376-5d2a639cb8bf\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\"><span style=\\"box-sizing: inherit; font-weight: 700;\\">Information Collection And Use</span></p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-0784c59e-c200-42c6-acef-26773d3f4d5b\\" data-block=\\"0784c59e-c200-42c6-acef-26773d3f4d5b\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">While using our Site, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you. Personally identifiable information may include, but is not limited to your name (\\"Personal Information\\").</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-5f7bc522-e880-4ca9-87e7-bdc963032556\\" data-block=\\"5f7bc522-e880-4ca9-87e7-bdc963032556\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\"><span style=\\"box-sizing: inherit; font-weight: 700;\\">Log Data</span></p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-2b9023e6-6ccc-43dc-a2f7-7950653474fe\\" data-block=\\"2b9023e6-6ccc-43dc-a2f7-7950653474fe\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">Like many site operators, we collect information that your browser sends whenever you visit our Site (\\"Log Data\\").</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-3aeb9bea-4c1d-44c8-a2f0-ee94a78667c0\\" data-block=\\"3aeb9bea-4c1d-44c8-a2f0-ee94a78667c0\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">This Log Data may include information such as your computer\'s Internet Protocol (\\"IP\\") address, browser type, browser version, the pages of our Site that you visit, the time and date of your visit, the time spent on those pages and other statistics.</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-ebffc00c-a697-4210-ad4c-07e5d7f57846\\" data-block=\\"ebffc00c-a697-4210-ad4c-07e5d7f57846\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">In addition, we may use third party services such as Google Analytics that collect, monitor and analyze this …</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-3efd5104-e605-43f9-ae0e-4c29acfe1cff\\" data-block=\\"3efd5104-e605-43f9-ae0e-4c29acfe1cff\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\"><span style=\\"box-sizing: inherit; font-weight: 700;\\">Communications</span></p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-ba4577b3-f919-4cef-9221-a16373a6b328\\" data-block=\\"ba4577b3-f919-4cef-9221-a16373a6b328\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">We may use your Personal Information to contact you with newsletters, marketing or promotional materials and other information that ...</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-91fbfa8c-cdff-48cc-a5dc-c1970335213a\\" data-block=\\"91fbfa8c-cdff-48cc-a5dc-c1970335213a\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\"><span style=\\"box-sizing: inherit; font-weight: 700;\\">Cookies</span></p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-d378bee6-29b2-43a1-b491-383e794ffe4a\\" data-block=\\"d378bee6-29b2-43a1-b491-383e794ffe4a\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">Cookies are files with small amount of data, which may include an anonymous unique identifier. Cookies are sent to your browser from a web site and stored on your computer\'s hard drive.</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-8da4f931-75b2-451f-adf6-625e4746cd01\\" data-block=\\"8da4f931-75b2-451f-adf6-625e4746cd01\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">Like many sites, we use \\"cookies\\" to collect information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Site.</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-23ce752c-5083-43af-996c-a5512603c54c\\" data-block=\\"23ce752c-5083-43af-996c-a5512603c54c\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\"><span style=\\"box-sizing: inherit; font-weight: 700;\\">Security</span></p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-f2de7034-2470-4f41-b08b-c428a691941a\\" data-block=\\"f2de7034-2470-4f41-b08b-c428a691941a\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage, is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-d9439fa0-cb66-4e86-aa85-9f769b1c04f9\\" data-block=\\"d9439fa0-cb66-4e86-aa85-9f769b1c04f9\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\"><span style=\\"box-sizing: inherit; font-weight: 700;\\">Changes To This Privacy Policy</span></p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-98448dec-e8a0-4771-a960-5f9d3c3ea6e7\\" data-block=\\"98448dec-e8a0-4771-a960-5f9d3c3ea6e7\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">This Privacy Policy is effective as of 01<sup style=\\"box-sizing: inherit;\\">st</sup> Sep 2020 and will remain in effect except with respect to any changes in its provisions in the future, which will be in effect immediately after being posted on this page.</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-0a8ba71b-d73b-47bb-b421-ca34356c3802\\" data-block=\\"0a8ba71b-d73b-47bb-b421-ca34356c3802\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">We reserve the right to update or change our Privacy Policy at any time and you should check this Privacy Policy periodically. Your continued use of the Service after we post any modifications to the Privacy Policy on this page will constitute your acknowledgment of the modifications and your consent to abide and be bound by the modified Privacy Policy.</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-4c93a8e7-32b7-4e42-8e31-1f5bf88b26a0\\" data-block=\\"4c93a8e7-32b7-4e42-8e31-1f5bf88b26a0\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">If we make any material changes to this Privacy Policy, we will notify you either through the email address you have provided us, or by placing a prominent notice on our website.</p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-4b24c229-fe86-4bc3-90fa-d5040fe8be04\\" data-block=\\"4b24c229-fe86-4bc3-90fa-d5040fe8be04\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\"><span style=\\"box-sizing: inherit; font-weight: 700;\\">Contact Us</span></p><p aria-label=\\"Paragraph block\\" role=\\"textbox\\" class=\\"block-editor-block-list__block rich-text block-editor-rich-text__editable wp-block\\" aria-multiline=\\"true\\" id=\\"block-017aa8df-8d00-4239-9116-c9ccc6e8c3f5\\" data-block=\\"017aa8df-8d00-4239-9116-c9ccc6e8c3f5\\" data-type=\\"core/paragraph\\" data-title=\\"Paragraph\\" tabindex=\\"0\\" style=\\"box-sizing: inherit; white-space: pre-wrap; transform-origin: center center; transform: none;\\">If you have any questions about this Privacy Policy, please contact us.</p><div><br></div><div tabindex=\\"-1\\" class=\\"block-list-appender\\" style=\\"box-sizing: inherit;\\"></div></div></div></div></div><div tabindex=\\"0\\" style=\\"box-sizing: inherit; color: rgb(103, 106, 108); font-family: Montserrat, sans-serif; font-size: 14px; position: fixed;\\"></div>", "fr": null, "hi": null}',
                'h1' => '{"en": null, "fr": null, "hi": null}',
                'h2' => '{"en": null, "fr": null, "hi": null}',
                'id' => 22,
                'image' => 'https://procash.enactweb.com/img/1.png',
                'meta_desc' => '{"en": "At LarabackPro, We are committed to protecting and respecting user privacy online. Learn what personal information we collect and how we use it on our site.", "fr": null, "hi": null}',
                'meta_kw' => '{"en": null, "fr": null, "hi": null}',
                'meta_title' => '{"en": "Privacy Policy | LarabackPro", "fr": null, "hi": null}',
                'slug' => 'privacy-policy',
                'status' => 'publish',
                'style' => 1,
                'template' => 'privacy',
                'title' => '{"en": "Privacy Policy", "fr": "Privacy Policy", "hi": "Privacy Policy"}',
                'updated_at' => '2021-01-30 16:42:17',
                'visits' => 232,
            ),
            16 => 
            array (
                'content' => '<!-- wp:paragraph -->
<p>If you use the website, you are responsible for maintaining the confidentiality of<br>your account and password and for restricting access to your computer to prevent<br>unauthorised access to your account. You agree to accept responsibility for all<br>activities that occur under your account or password. You should take all necessary<br>steps to ensure that the password is kept confidential and secure and should inform us<br>immediately if you have any reason to believe that your password has become known to anyone<br>else, or if the password is being, or is likely to be, used in an unauthorised manner.<br>Please ensure that the details you provide us with are correct and complete and inform<br>us immediately of any changes to the information that you provided when registering.<br>You can access and update much of the information you provided us with in the Your Account<br>area of the website.</p>
<!-- /wp:paragraph -->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@fullWidth',
                'exclude_sitemap' => 0,
            'footer_content' => '{"en": "<h2>ProCash Terms of Service</h2>\\r\\n<h3>1. Terms</h3>\\r\\n<p>By accessing the website at <a href=\\"https://procash.enactweb.com/fr\\">https://procash.enactweb.com/fr</a>, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>\\r\\n<h3>2. Use License</h3>\\r\\n<ol type=\\"a\\">\\r\\n   <li>Permission is granted to temporarily download one copy of the materials (information or software) on ProCash\'s website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:\\r\\n   <ol type=\\"i\\">\\r\\n       <li>modify or copy the materials;</li>\\r\\n       <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>\\r\\n       <li>attempt to decompile or reverse engineer any software contained on ProCash\'s website;</li>\\r\\n       <li>remove any copyright or other proprietary notations from the materials; or</li>\\r\\n       <li>transfer the materials to another person or \\"mirror\\" the materials on any other server.</li>\\r\\n   </ol>\\r\\n    </li>\\r\\n   <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by ProCash at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>\\r\\n</ol>\\r\\n<h3>3. Disclaimer</h3>\\r\\n<ol type=\\"a\\">\\r\\n   <li>The materials on ProCash\'s website are provided on an \'as is\' basis. ProCash makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>\\r\\n   <li>Further, ProCash does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>\\r\\n</ol>\\r\\n<h3>4. Limitations</h3>\\r\\n<p>In no event shall ProCash or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on ProCash\'s website, even if ProCash or a ProCash authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>\\r\\n<h3>5. Accuracy of materials</h3>\\r\\n<p>The materials appearing on ProCash\'s website could include technical, typographical, or photographic errors. ProCash does not warrant that any of the materials on its website are accurate, complete or current. ProCash may make changes to the materials contained on its website at any time without notice. However ProCash does not make any commitment to update the materials.</p>\\r\\n<h3>6. Links</h3>\\r\\n<p>ProCash has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by ProCash of the site. Use of any such linked website is at the user\'s own risk.</p>\\r\\n<h3>7. Modifications</h3>\\r\\n<p>ProCash may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>\\r\\n<h3>8. Governing Law</h3>\\r\\n<p>These terms and conditions are governed by and construed in accordance with the laws of USA and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>\\r\\n<p><a href=\\"https://getterms.io\\" title=\\"Generate a free terms of use document\\">Terms of Use created with GetTerms.</a></p>", "fr": "<h2>ProCash Terms of Service</h2>\\r\\n<h3>1. Terms</h3>\\r\\n<p>By accessing the website at <a href=\\"https://procash.enactweb.com/fr\\">https://procash.enactweb.com/fr</a>, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>\\r\\n<h3>2. Use License</h3>\\r\\n<ol type=\\"a\\">\\r\\n   <li>Permission is granted to temporarily download one copy of the materials (information or software) on ProCash\'s website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:\\r\\n   <ol type=\\"i\\">\\r\\n       <li>modify or copy the materials;</li>\\r\\n       <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>\\r\\n       <li>attempt to decompile or reverse engineer any software contained on ProCash\'s website;</li>\\r\\n       <li>remove any copyright or other proprietary notations from the materials; or</li>\\r\\n       <li>transfer the materials to another person or \\"mirror\\" the materials on any other server.</li>\\r\\n   </ol>\\r\\n    </li>\\r\\n   <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by ProCash at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>\\r\\n</ol>\\r\\n<h3>3. Disclaimer</h3>\\r\\n<ol type=\\"a\\">\\r\\n   <li>The materials on ProCash\'s website are provided on an \'as is\' basis. ProCash makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>\\r\\n   <li>Further, ProCash does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>\\r\\n</ol>\\r\\n<h3>4. Limitations</h3>\\r\\n<p>In no event shall ProCash or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on ProCash\'s website, even if ProCash or a ProCash authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>\\r\\n<h3>5. Accuracy of materials</h3>\\r\\n<p>The materials appearing on ProCash\'s website could include technical, typographical, or photographic errors. ProCash does not warrant that any of the materials on its website are accurate, complete or current. ProCash may make changes to the materials contained on its website at any time without notice. However ProCash does not make any commitment to update the materials.</p>\\r\\n<h3>6. Links</h3>\\r\\n<p>ProCash has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by ProCash of the site. Use of any such linked website is at the user\'s own risk.</p>\\r\\n<h3>7. Modifications</h3>\\r\\n<p>ProCash may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>\\r\\n<h3>8. Governing Law</h3>\\r\\n<p>These terms and conditions are governed by and construed in accordance with the laws of USA and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>\\r\\n<p><a href=\\"https://getterms.io\\" title=\\"Generate a free terms of use document\\">Terms of Use created with GetTerms.</a></p>"}',
                'h1' => '{"en": null, "fr": null}',
                'h2' => '{"en": null, "fr": null}',
                'id' => 23,
                'image' => NULL,
                'meta_desc' => '{"en": "Read the terms and conditions before browsing through the LarabackPro site to get a better understanding of our services.", "fr": null}',
                'meta_kw' => '{"en": null, "fr": null}',
                'meta_title' => '{"en": "Terms Of Service | LarabackPro", "fr": null}',
                'slug' => 'terms-of-use',
                'status' => 'publish',
                'style' => 1,
                'template' => 'terms',
                'title' => '{"en": "Terms of Use", "fr": "Terms of Service"}',
                'updated_at' => '2020-10-23 15:38:12',
                'visits' => 259,
            ),
            17 => 
            array (
                'content' => '<!-- wp:procash/top-deals {"title":{"en":"Popular Deals from New Year"},"categories":[{"key":1,"name":"Lory, with a."}],"default_tab_label":{"en":""},"default_tab_logic":"popular"} /-->

<!-- wp:procash/top-stores {"title":{"en":"New Year Shopping Destinations","fr":"New Year Shopping Destinations"},"store_categories":[{"store_category":{"key":7,"name":"Online Services"},"stores":[]}],"default_tab_label":{"en":"Best Product"},"default_tab_logic":"featured"} /-->

<!-- wp:procash/top-offers {"title":{"en":"Exclusive New Years Offer"},"categories":[{"key":2,"name":"Health \\u0026 Beauty"},{"key":4,"name":"Shoes"}],"default_tab_label":{"en":"Best Product"},"default_tab_logic":"popular"} /-->',
                'created_at' => NULL,
                'ctrl_function' => 'PageController@festivePage',
                'exclude_sitemap' => 0,
                'footer_content' => '{"en": null, "fr": null, "hi": null}',
                'h1' => '{"en": null, "fr": null, "hi": null}',
                'h2' => '{"en": null, "fr": null, "hi": null}',
                'id' => 24,
                'image' => 'https://procash.enactweb.com/img/blocks/new-year-6.gif',
                'meta_desc' => '{"en": "Super Awesome New Year Offers ZZZ", "fr": null, "hi": null}',
                'meta_kw' => '{"en": null, "fr": null, "hi": null}',
                'meta_title' => '{"en": "Super Awesome New Year Offers", "fr": null, "hi": null}',
                'slug' => 'new-year-offers',
                'status' => 'publish',
                'style' => 1,
                'template' => 'festive',
                'title' => '{"en": "New Year Offers", "fr": "New Year Offers", "hi": "New Year Offers"}',
                'updated_at' => '2021-01-29 22:19:53',
                'visits' => 161,
            ),
            18 => 
            array (
                'content' => NULL,
                'created_at' => NULL,
                'ctrl_function' => 'PageController@fullWidth',
                'exclude_sitemap' => 1,
                'footer_content' => '{"en": "<p style=\\"text-align: center; \\"><span style=\\"font-size: 36px;\\">Whitelist in Adblocker</span><br></p><p style=\\"text-align: center; \\"><iframe frameborder=\\"0\\" src=\\"//www.youtube.com/embed/yQRVGIztS38\\" width=\\"640\\" height=\\"360\\" class=\\"note-video-clip\\"></iframe>\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t</p>", "fr": null}',
                'h1' => '{"en": "Whitelist in Adblocker", "fr": null}',
                'h2' => '{"en": null, "fr": null}',
                'id' => 28,
                'image' => NULL,
                'meta_desc' => '{"en": null, "fr": null}',
                'meta_kw' => '{"en": null, "fr": null}',
                'meta_title' => '{"en": null, "fr": null}',
                'slug' => 'learn-whitelist-adblocker',
                'status' => 'publish',
                'style' => 1,
                'template' => 'unblock-adblock',
                'title' => '{"en": "Whitelisting our website  in Adblocker", "fr": "Whitelisting our website  in Adblocker"}',
                'updated_at' => '2020-09-08 14:41:50',
                'visits' => 127,
            ),
            19 => 
            array (
                'content' => '<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:procash/hero-section {"title":{"en":"Join our WhatsApp channel to get notified about best offers","fr":"la plus grande plateforme de cashback au monde"},"description":{"en":"1). Add +91912345689 To Your Contacts As CashbackOS Official.\\n2). Send ‘START’ Via WhatsApp.\\n3). That’s It! Now You Will Receive Best Deals At Your Finger Tips.","fr":"Un programme de remise en argent est un programme d\'encouragement géré par des sociétés de cartes de crédit où un pourcentage du montant dépensé est remboursé au titulaire de la carte."},"button_name":{"en":"Subscribe to WhatsApp"},"button_url":"https://www.whatsapp.com/?lang=en","image":"https://procash.enactweb.com/img/whatsapp-promo-1400x400.png","style":"2"} /-->

<!-- wp:procash/section {"title":{"en":"Join Our Whatsapp Group By Following These Easy Steps","fr":"Pourquoi parrainer des amis"},"style":"2","blocks":[{"title":{"en":"Step 1","fr":"Aidez vos amis"},"content":{"en":"Save the above number as “Larabackpro Official” to your contact list.","fr":"Le cashback suit instantanément dans les 2 jours maximum."},"image":"https://procash.enactweb.com/img/whatsapp-image-1.png"},{"title":{"en":"Step 2","fr":"Bonus d\'adhésion"},"content":{"en":"Go to your Whatsapp, Refresh your contact list and select “Larabackpro Official”","fr":"Le cashback suit instantanément dans les 2 jours maximum."},"image":"https://procash.enactweb.com/img/whatsapp-image-2.png"},{"title":{"en":"Step 3","fr":"Bonus de parrainage"},"content":{"en":"Send “START” to the Larabackpro Official Contact. You will soon receive a confirmation message.","fr":"Le cashback suit instantanément dans les 2 jours maximum."},"image":"https://procash.enactweb.com/img/whatsapp-image-3.png"}]} /-->

<!-- wp:procash/big-button {"button_name":{"en":"Subscribe to WhatsApp"},"button_url":"https://www.whatsapp.com/","icon":"https://procash.enactweb.com/img/blocks/whatsapp.svg"} /-->

<!-- wp:procash/testimonial {"title":{"en":"What Our Clients Say"},"testimonials":[{"user_name":{"en":"Suresh Kumar","fr":""},"user_profession":{"en":"Hard-core online shopper","fr":""},"user_feedback":{"en":"I have been shopping via CashbackOS from last sveral months \\u0026 have already earned Rs 1500 cashback. PaisaWapas helps me in saving money on Flipkart, Nykaa","fr":""},"image":"https://procash.enactweb.com/img/photo-1438761681033-6461ffad8d80.jpg"},{"user_name":{"en":"Ria Rai","fr":""},"user_profession":{"en":"Software Developer","fr":""},"user_feedback":{"en":"I have been shopping via CashbackOS from last sveral months \\u0026 have already earned Rs 1500 cashback. PaisaWapas helps me in saving money on Flipkart, Nykaa","fr":""},"image":"https://procash.enactweb.com/img/photo-1541647376583-8934aaf3448a.jpg"}]} /-->

<!-- wp:procash/info-box {"title":{"en":"Benefits of joining channel","fr":"Benefits of joining channel"},"description":{"fr":"Shop on the go from your phone, tablet, or other mobile devices. You can save up to 10% on your entire purchase when you use the LarabackPRO app at dozens of online retailers.","en":"Shop on the go from your phone, tablet, or other mobile device. You can save up to 10% on your entire purchase when you use the LarabackPRO app at dozens of online retailers."},"button_name":{"fr":"Subscribe to WhatsApp","en":"Subscribe to WhatsApp"},"button_url":"https://www.whatsapp.com/?lang=en","image":"https://procash.enactweb.com/img/refer-and-earn.png"} /-->

<!-- wp:procash/rich-text-block {"message":{"en":"\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eGeneral Terms\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhy Should I Refer a Friend?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou can earn a bonus amount for each friend that signs up using your referral code and fulfils the requirements related to the referral. There are no caps on the number of friends that you can refer, so you can potentially earn an unlimited amount of money for referring friends to our website.\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhat Is The Joining/Referral Code Field In The Sign Up Form?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou can earn a bonus amount for each friend that signs up using your referral code and fulfils the requirements related to the referral. There are no caps on.\\u003c/div\\u003e","fr":"\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eGeneral Terms\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhy Should I Refer a Friend?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou can earn a bonus amount for each friend that signs up using your referral code and fulfils the requirements related to the referral. There are no caps on the number of friends that you can refer, so you can potentially earn an unlimited amount of money for referring friends to our website.\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhat Is The Joining/Referral Code Field In The Sign Up Form?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou can earn a bonus amount for each friend that signs up using your referral code and fulfils the requirements related to the referral. There are no caps on.\\u003c/div\\u003e"}} /-->',
            'created_at' => NULL,
            'ctrl_function' => 'PageController@fullWidth',
            'exclude_sitemap' => 0,
            'footer_content' => '{"en": null, "fr": null, "hi": null}',
            'h1' => '{"en": null, "fr": null, "hi": null}',
            'h2' => '{"en": null, "fr": null, "hi": null}',
            'id' => 33,
            'image' => NULL,
            'meta_desc' => '{"en": null, "fr": null, "hi": null}',
            'meta_kw' => '{"en": null, "fr": null, "hi": null}',
            'meta_title' => '{"en": null, "fr": null, "hi": null}',
            'slug' => 'whatsapp-subscribe',
            'status' => 'publish',
            'style' => 1,
            'template' => 'other-pages',
            'title' => '{"en": "Whatsapp Subscribe", "fr": "Whatsapp Subscribe", "hi": "Whatsapp Subscribe"}',
            'updated_at' => '2020-12-18 10:44:02',
            'visits' => 114,
        ),
        20 => 
        array (
        'content' => '<!-- wp:procash/hero-section {"title":{"en":"Join our Telegram channel to get notified about best offers"},"description":{"en":"1). Add +91912345689 To Your Contacts As CashbackOS Official.\\n2). Send ‘START’ Via WhatsApp.\\n3). That’s It! Now You Will Receive Best Deals At Your Finger Tips."},"button_name":{"en":"Join to Telegram"},"button_url":"https://web.telegram.org/","image":"https://procash.enactweb.com/img/telegram-1.png"} /-->

<!-- wp:procash/section {"title":{"en":"Join Our Telegram Group By Following These Easy Steps","fr":"Pourquoi parrainer des amis"},"style":"2","blocks":[{"title":{"en":"Step 1","fr":"Aidez vos amis"},"content":{"en":"Tap on the Search icon and Enter the Larabackpro channel.","fr":"Le cashback suit instantanément dans les 2 jours maximum."},"image":"https://procash.enactweb.com/img/blocks/telegram-image-1.png"},{"title":{"en":"Step 2","fr":"Bonus d\'adhésion"},"content":{"en":"Tap on the Larabackpro channel to Join.\\n","fr":"Le cashback suit instantanément dans les 2 jours maximum."},"image":"https://procash.enactweb.com/img/blocks/telegram-image-2.png"},{"title":{"en":"Step 3 ","fr":"Bonus de parrainage"},"content":{"en":"Tap Join Button and you’ll become a member of the Larabackpro channel.","fr":"Le cashback suit instantanément dans les 2 jours maximum."},"image":"https://procash.enactweb.com/img/blocks/telegram-image-3.png"}]} /-->

<!-- wp:procash/testimonial {"title":{"en":"What Our Clients Say"},"testimonials":[{"user_name":{"en":"Rai Rai","fr":""},"user_profession":{"en":"Software Developer","fr":""},"user_feedback":{"en":"I have been shopping via CashbackOS from last sveral months \\u0026 have already earned Rs 1500 cashback. PaisaWapas helps me in saving money on Flipkart, Nykaa","fr":""},"image":"https://procash.enactweb.com/img/photo-1438761681033-6461ffad8d80.jpg"},{"user_name":{"en":"Nick James","fr":""},"user_profession":{"en":"Hard-core online shopper","fr":""},"user_feedback":{"en":"It\'s a great website!! I often earn 100% cashback on my shopping at websites like Jabong, Printvenue, VLCC. Offers \\u0026 Cashbacks are amazing at PaisaWapas. A must try.","fr":""},"image":"https://procash.enactweb.com/img/photo-1541647376583-8934aaf3448a.jpg"}]} /-->

<!-- wp:procash/info-box {"title":{"en":"Benefits of joining channel","fr":"Benefits of joining channel"},"description":{"en":"Shop on the go from your phone, tablet, or other mobile device. You can save up to 10% on your entire purchase when you use the LarabackPRO app at dozens of online retailers."},"button_name":{"en":"Join to Telegram"},"button_url":"https://web.telegram.org/","image":"https://procash.enactweb.com/img/share-and-earn.png"} /-->

<!-- wp:procash/rich-text-block {"message":{"en":"\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eGeneral Terms\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhy Should I Refer a Friend?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou can earn a bonus amount for each friend that signs up using your referral code and fulfils the requirements related to the referral. There are no caps on the number of friends that you can refer, so you can potentially earn an unlimited amount of money for referring friends to our website.\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhat Is The Joining/Referral Code Field In The Sign Up Form?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou can earn a bonus amount for each friend that signs up using your referral code and fulfils the requirements related to the referral. There are no caps on.\\u003c/div\\u003e","fr":"\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eGeneral Terms\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhy Should I Refer a Friend?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou can earn a bonus amount for each friend that signs up using your referral code and fulfils the requirements related to the referral. There are no caps on the number of friends that you can refer, so you can potentially earn an unlimited amount of money for referring friends to our website.\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cbr style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003e\\u003cspan style=\\u0022box-sizing: border-box; font-weight: bold;\\u0022\\u003eWhat Is The Joining/Referral Code Field In The Sign Up Form?\\u003c/span\\u003e\\u003c/div\\u003e\\u003cdiv style=\\u0022box-sizing: border-box;\\u0022\\u003eYou can earn a bonus amount for each friend that signs up using your referral code and fulfils the requirements related to the referral. There are no caps on.\\u003c/div\\u003e"}} /-->',
        'created_at' => NULL,
        'ctrl_function' => 'PageController@fullWidth',
        'exclude_sitemap' => 0,
        'footer_content' => '{"en": null, "fr": null, "hi": null}',
        'h1' => '{"en": null, "fr": null, "hi": null}',
        'h2' => '{"en": null, "fr": null, "hi": null}',
        'id' => 34,
        'image' => NULL,
        'meta_desc' => '{"en": null, "fr": null, "hi": null}',
        'meta_kw' => '{"en": null, "fr": null, "hi": null}',
        'meta_title' => '{"en": null, "fr": null, "hi": null}',
        'slug' => 'telegram-subscribe',
        'status' => 'publish',
        'style' => 1,
        'template' => 'other-pages',
        'title' => '{"en": "telegram-subscribe", "fr": "telegram-subscribe", "hi": "Telegram"}',
        'updated_at' => '2020-12-23 00:03:27',
        'visits' => 126,
    ),
));
        
        
    }
}