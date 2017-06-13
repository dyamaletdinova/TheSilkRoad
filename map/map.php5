<?php
    include '../mainpage/header.htm';
    include '../mainpage/leftsidemenu.htm';
    include '../mainpage/rightsidemenu.htm';
?>
<section id="order"> <!-- start order -->
	<div class = "mapimg"> 
	<h2><span>Map</span></h2>

	<br>
	<h4>Click on the region and learn about the country. </h4>
	<br><br><br>
<!-- display the map and give the coordinates and link it to the appropriate page -->
	    <p><img src="../images/Map_of_Central_Asia.png"  alt="Map of Central Asia"  usemap="#Map" /></p>
    	<map name="Map" id="Map">

            <area alt="Azerbaijan" title="Azerbaijan" href="../destinations/azerbaijan.php5" shape="poly" coords="200,480,162,495,66,429,30,366,65,239,200,347,157,353" />

            <area alt="Turkmenistan" title="Turkmenistan" href="../destinations/turkmenistan.php5" shape="poly" coords="174,378,209,475,366,522,420,464,259,344,227,376" />

            <area alt="Tajikistan" title="Tajikistan" href="../destinations/tajikistan.php5"  shape="poly" coords="449,414,466,483,510,449,522,495,600,470,550,415" />

            <area alt="Kyrgyzstan" title="Kyrgyzstan" href="../destinations/kyrgyzstan.php5" shape="poly" coords="470,411,610,409,650,345,535,318,494,334,492,359,536,378" />

            <area alt="Uzbekistan" title="Uzbekistan" href="../destinations/uzbekistan.php5" shape="poly" coords="228,364,214,271,256,258,319,310,378,313,454,386,462,363,487,343,482,365,529,379,490,393,481,379,441,416,456,469,430,468,323,368,295,367,289,342,266,331" />

            <area alt="Kazakhstan" title="Kazakhstan" href="../destinations/kazakhstan.php5" shape="poly" coords="222,359,206,260,274,245,322,301,378,304,446,370,486,327,562,311,696,343,717,156,491,27,276,3,12,135,76,239" />
        </map>
    </div>
</section> <!-- end order -->
</section> <!-- end container -->

<?php
    include '../mainpage/footer.htm';
?>