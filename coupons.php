<?php include 'header.php';?>

        <div id="main-content">

            <div class="container">

                <div id="content">

                    <div id="content-left">

                        <h1 class="title-page"><span>Moving & Storage Coupons - Boca Raton</span></h1>

                        <article>

                            <p>Take advantage of one of the following discount moving coupons. Simply click on each coupon to print it. Offers cannot be combined, only one coupon per customer. Please show us your coupon on moving day.
</p>

                        
                        <p align="center"><a href="images/coupon2.jpg"><img width="80%" height="80%" src="images/coupon2.jpg" /></a></p>
                        <p align="center"><a href="images/coupon1.jpg"><img width="80%" height="80%" src="images/coupon1.jpg" /></a></p>
                        <p align="center"><a href="images/coupon3.jpg"><img width="80%" height="80%" src="images/coupon3.jpg" /></a></p>
                        </article>

                    </div>

                    <div id="content-right">

                    <form id="frmsend" action="" method="POST" onsubmit="return checkRong()">

                        <p class="suggestion_box">Free Moving quote</p>

                        <p class="inp"><label>Pickup  Zip</label><input type="text" name="txtpickup" id="txtpickup" /> </p>
						
						 <p class="inp_2"><label>Name</label><input type="text" name="txtname" id="txtname" /> </p>
						 
						 <p class="inp_2"><label>Email</label><input type="text" name="txtemail" id="txtemail" /> </p>

                        <p class="inp"><label>Delivery Zip</label><input type="text" name="txtdelivery" id="txtdelivery" /> </p>
						
						<p class="inp_2"><label>Phone</label><input type="text" name="txtphone" id="txtphone" /> </p>
						
						 <p class="inp_2"><label style="line-height:40px;width:176px;">Estimated Move Weight</label>

                            <select name="estimated" >

								<option value="Studio">Studio</option>
								<option value="1 Bedroom">1 Bedroom</option>
								<option value="2 Bedrooms">2 Bedrooms</option>
								<option value="3 Bedrooms">3 Bedrooms</option>
								<option value="4 Bedrooms or More">4 Bedrooms or More</option>
								<option value="Office Move">Office Move</option>

                            </select>

                        </p>

                        <p class="inp"><label>Moving Date</label><input type="text" name="txtmoving" id="txtmoving" /> </p>

                        <p class="inp_2"><label>Address</label><input type="text" name="txtaddress" id="txtaddress" /> </p>
                        <p class="inp_2"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit"  /></p>
						<p class="free">Free  international moving quote >></p>
                        <p class="thongbao"><?php echo $baoLoi ?></p>
						
						<p style="float:left;" ><table><tr><td width="50%" ><img style="margin:0px 0px;" src="images/yelp.jpg" /> </td><td align="center"><strong>Icon Moving Receives A+ Rating from the Better Business Bureau</strong></td> </tr></table></p>

                    </form>

                </div>

                </p>

            </div>

        </div><!-- end # main-content-->

    </div><!-- end # wraper-main -->

<?php include 'footer.php';?>