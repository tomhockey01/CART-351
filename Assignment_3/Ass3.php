<html>
    <head>
        <title>Assignment 3: Travel destination</title>
        <link href="https://github.com/tomhockey01/CART-351/blob/master/Assignment_3/style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <h1>Toms Travel Destinations</h1>
        <div class="mainwrapper">
            
            <div class="left">

                <form action="ass3.php" method="post">
                    Did Tom go to ...
                    <input type="text" name="formCountry" maxlength="50" value="Type country here">
                    <input type="submit" name="formSubmit" value="Submit">
                </form>

            </div>

            <div class="right">
                    <?php
                    class visited_country{
                        public $name;
                        public $arrival_date;
                        public $departure_date;
                        public $travel_medium;
                        public $purpose;
                        public $lifelong_friends;
                        public $photo_url;
                        public $location_url;

                        public function __construct($name, $arrival_date, $departure_date, $travel_medium, $purpose, $lifelong_friends, $photo_url, $location_url) {
                            $this->name = $name;
                            $this->arrival_date = $arrival_date;
                            $this->departure_date = $departure_date;
                            $this->travel_medium = $travel_medium;
                            $this->purpose = $purpose;
                            $this->lifelong_friends = $lifelong_friends;
                            $this->photo_url = $photo_url;
                            $this->location_url = $location_url;
                        }
                    }

                    //$Country1 = new visited_country('', '', '', '', '', '', 'http://plusquotes.com/images/quotes-img/halloween-02.jpg', ''); 
                    $Country1 = new visited_country('canada', '25-08-2016', '20-01-2017', 'airplane', 'study', 'Margot & Marion', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/IMG_5559.JPG?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d178784.32599555986!2d-73.85213382064889!3d45.56028048700914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a541c64b70d%3A0x654e3138211fefef!2sMontreal%2C+Qu%C3%A9bec!5e0!3m2!1snl!2sca!4v1477581095126'); 
                    $Country2 = new visited_country('spain', '08-08-2015', '20-08-2015', 'train & airplane', 'holiday', 'Freek & Gina','https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/IMG_1408.JPG?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101459.40852239418!2d-6.025098356078732!3d37.37548641810342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126c1114be6291%3A0x34f018621cfe5648!2sSevilla%2C+Spanje!5e0!3m2!1snl!2sca!4v1477580430940');
                    $Country3 = new visited_country('portugal', '26-06-2013', '05-07-2013', 'airplane', 'party holiday', 'Freek & Gina & Luuk','https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/969734_485048571579869_1388567840_n.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101814.37905923014!2d-8.287958812851128!3d37.11227369799212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1aceae38ddc41f%3A0xed22e7a562441045!2sAlbufeira%2C+Portugal!5e0!3m2!1snl!2sca!4v1477581011749');
                    $Country4 = new visited_country('new zealand', '05-02-2014', '31-03-2014', 'airplane', 'backpacking', 'Tomasso', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/IMG_0465.JPG?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d408595.92552921263!2d174.58459752049401!3d-36.86269257308265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47fb5a9ce6fb%3A0x500ef6143a29917!2sAuckland%2C+Nieuw-Zeeland!5e0!3m2!1snl!2sca!4v1477758299458'); 
                    $Country5 = new visited_country('australia', '31-03-2014', '05-05-2014', 'airplane', 'backpacking', 'Michael & Jessy & Blake', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/IMG_1168.JPG?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28182.422323264316!2d153.40483932819583!3d-27.99992938552605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b910fe19fd1c2b7%3A0x502a35af3dea680!2sSurfers+Paradise+Queensland+4217%2C+Australi%C3%AB!5e0!3m2!1snl!2sca!4v1477759065628');
                    $Country6 = new visited_country('thailand', '06-05-2014', '05-07-2014', 'airplane', 'backpacking', 'Evelien', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/IMG_6301.JPG?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248057.53966374998!2d100.49268160068301!3d13.72456078582444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6032280d61f3%3A0x10100b25de24820!2sBangkok%2C+Thailand!5e0!3m2!1snl!2sca!4v1477759295789'); 
                    $Country7 = new visited_country('malasia', '31-05-2016', '06-06-2014', 'airplane', 'backpacking', 'Evelien', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/2.JPG?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127482.68814800383!2d101.61677733903137!3d3.1385034981846958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49c701efeae7%3A0xf4d98e5b2f1c287d!2sKuala+Lumpur%2C+Federal+Territory+of+Kuala+Lumpur%2C+Maleisi%C3%AB!5e0!3m2!1snl!2sca!4v1477759448646'); 
                    $Country8 = new visited_country('netherlands', '26-01-1995', 'never', 'his mother', 'life', 'Jurre & Evelien & Freek & Luuk & Gina & Susan', 'https://github.com/tomhockey01/CART-351/blob/master/Images/TomsTravelDestinations/UNADJUSTEDNONRAW_thumb_3ebf.jpg?raw=true', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504548.546812865!2d3.0315082349645888!3d52.19163210723564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2sca!4v1477759603263'); 

                    $visited_countries = array($Country1, $Country2, $Country3, $Country4, $Country5, $Country6, $Country7, $Country8);


                    $value = 0;            

                    if(isset($_POST['formSubmit']) == "Submit"){
                        $varCountry = $_POST['formCountry'];
                        $varCountry = strtolower($varCountry);
                        foreach($visited_countries as $con){
                            if($con->name == $varCountry){
                                echo "<div class=media>";
                                echo "<img class='country_picture' src='" . $con->photo_url . "'>";
                                echo "<div class='location_map'><iframe src='" . $con->location_url . "'
                                        width='100%' 
                                        height='50%'
                                        frameborder='0' 
                                        style='border:0' allowfullscreen>
                                    </iframe></div>";
                                echo "</div>";
                                echo "<div class='text'><p>Tom did go here! <br> He arrived here on: " . $con->arrival_date . " and left on: " . $con->departure_date . ". He arrived here by " . $con->travel_medium . ", and he met some lifelong friend(s) named: " . $con->lifelong_friends . ". Toms main purpose of this trip was " . $con->purpose . ".</p></div>";
                                $value = 1;
                            }
                        }
                        if($value == 0){
                            echo "<img class='worldmap' src='http://i.ebayimg.com/images/i/191287530781-0-1/s-l1000.jpg'>";
                            echo "<p class='text'>Tom went to a lot of places, unfortunately, he didn't go to ". $varCountry ." yet! He would really love to go there, it might be on his wish list.</p>" ;   
                        }
                    }
                    else{
                        echo "<img class='worldmap' src='http://i.ebayimg.com/images/i/191287530781-0-1/s-l1000.jpg'>"; 
                        echo "<div class='map'><p>Do you want to know where Tom went? Type a location, submit and see if Tom went there.</p></div>";
                    }
                    ?>
            </div>
            
            
            
            
        </div>
    </body>
    
</html>