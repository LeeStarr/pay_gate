<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="paygateStyle.css">
    <title>Document</title>
</head>
<body>
    <div class="all">

        <div class="payNav">

            <div class="box" id="box1">
    
                <div class="top">
                    <hr class="connector-left" style="visibility: hidden;">
                    <span id="span1">1</span>
                    <hr class="conncetor-right" id="firstRight">
                </div>
                
                <label class="title" id="section1">Payment Options</label> <!--(Page 1) Cash or Financing (Page 2) If Financing-->
            </div>
    
            <div class="box">
                <div class="top">
                    <hr class="connector-left" id="firstLeft">
                    <span id="span2"> 2 </span>
                    <hr class="conncetor-right" id="secondRight">
                </div>
        
                <label class="title" id="section2">Personal Details</label>
            </div>
    
            <div class="box">
                <div class="top">
                    <hr class="connector-left" id="secondLeft">
                    <span id="span3"> 3 </span>
                    <hr class="conncetor-right" id="thirdRight">
                </div>
                <label class="title" id="section3">Collection/Delivery</label>
            </div>
    
            <div class="box">
                <div class="top">
                    <hr class="connector-left" id="thirdLeft">
                    <span id="span4"> 4 </span>
                </div>
                <label class="title" id="section4">Summary & Order Request</label><!--Can include payment if reservation fee is needeed-->
            </div>
    
        </div>
        
        <div class="container"> 
    
            <div class="col">
                <form action="storeData.php" method="post" class="pay">
<!--PAGE 1-->

                    <div class="paymentOption">
                        <h3 class="title">Preferred Payment Method</h3>

                        <div class="payOp-Container">
                            <input name="payOp" type="radio" value="cash" id="payOp1" checked>
                            <label>Cash/Pre-arranged Finance</label>
                            <p>Mr Ranger will contact you to finalise your payment details.</p>
                        </div>

                        <div class="payOp-Container" >
                            <input name="payOp" type="radio" value="finance" id="payOp2">
                            <label>Mr Ranger Financial Services</label>
                            <p>Maximise your campaign support by financing with us. Choose your finance product and adjust the conditions to suit your requirements. Your finance request is not a binding contract until all terms and conditions are personally explained to you and you have signed the final contract.</p>
                        </div>

                    </div>
<!--PAGE 2-->
                    <div class="calculator">


                    </div>

<!--PAGE 3-->    
                    <div class="personalInfo">
    
                        <h3 class="title">Personal Details</h3>
    
                        
                            <div class="detailInput">
                                <input  type="text" name="name" id="name" required>
                                <label for="firstName" >First Name(s)</label>
                                <div class="error" id="nameError"></div>
                            </div>
    
                            <div class="detailInput">
                                <input  type="text" name="surname" id="surname" required>
                                <label for="lastName" id="surL">Last Name</label>
                                <div class="error" id="surError"></div>
                            </div>
                            
                            <div class="flex">
                                <div class="detailInput" >
                                <select name="idType" id="idtype">
                                    <option  value="passport">Passport Number</option>
                                    <option value="id">SA ID Number</option>
                                </select>
                                <label for="lastName">ID Type</label>
                                
                                </div>
    
                                <div class="detailInput">
                                    <input  type="text" name="idPassport" id="idvalue" maxlength="17" required>
                                    <label for="idPassport">ID/Passport Number</label>
                                    <div class="error" id="idvalueError"></div>
                                </div>
                            </div>
    
                            <div class="detailInput">
                                <input  type="tel" name="cell" id="cell" data-mask="0000000000" required>
                                <label for="cell" >Mobile Number</label>
                                <div class="error" id="cellError"></div>
                            </div>
    
                       <div class="flex">
                       <div class="detailInput">
                            <input  type="text" name="address2" data-mask="0000" required id="housenum">
                            <label for="address">House/Apartment Number</label>
                            <div class="error" id="housenumError"></div>
                        </div>
    
                        <div class="detailInput">
                            <input  type="text" name="address1" id="address" required>
                            <label for="address">Residential Address</label>
                            <div class="error" id="addressError"></div>
                        </div>
                       </div>
    
                        
    
                        <div class="detailInput">
                            <input type="text" name="suburb" id="suburb"  required>
                            <label for="suburb">Suburb</label>
                            <div class="error" id="suburbError"></div>
                        </div>
    
                        <div class="flex">
                            <div class="detailInput">
                                <input type="text" name="code" id="code"  data-mask="0000" required>
                                <label for="code">Postal Code</label>
                                <div class="error" id="codeError"></div>
                            </div>
    
                            <div class="detailInput">
                                <input type="text" name="city" id="city" required>
                                <label for="city">City/Town</label>
                                <div class="error" id="cityError"></div>
                            </div>
                        </div>
    
                    </div> 
<!--PAGE 4-->
                    <div class="schedule">

                        <h3 class="title">Schedule Delivery/Collection</h3>
                        <br>
                        <div class="businessInfo">

                            <div class="info">
                                <hr>
                                <h3>Mr Ranger</h3>

                                <p class="colorChange">Cnr Opstaal & Bloekomdraai Street, Rietvalleirand, Pretoria, Gauteng, 0174. <br> <br><hr></p>
                                <div class="dateholder"><div class="date">Tel</div><b class="times">011 234 5678</b></div><br><hr>
                                <b>Trading Hours:</b> <br>
                                <div class="dateholder"><div class="date">Monday</div><b class="times">09:00 - 17:00</b></div><br><hr>
                                <div class="dateholder"><div class="date">Tuesday</div><b class="times">09:00 - 17:00</b></div><br><hr>
                                <div class="dateholder"><div class="date">Wednesday</div><b class="times">09:00 - 17:00</b> </div><br><hr>
                                <div class="dateholder"><div class="date">Thursday</div><b class="times">09:00 - 17:00</b> </div><br><hr>
                                <div class="dateholder"><div class="date">Friday</div><b class="times">09:00 - 17:00</b> </div><br><hr>
                                <div class="dateholder"><div class="date">Saturday</div><b class="times">10:00 - 15:00</b></div><br><hr>
                                
                                <br><br>
                                <div class="scheduleInfo">

                                    <div class="scheduleOp">
                                        <label><input type="radio" value="collect" name="scheduleInfo" id="collect" checked>Schedule Collection</label>
                                        <label><input type="radio" value="deliver" name="scheduleInfo" id="deliver">Schedule Delivery</label>
                                    </div>
                                        <br>
                                    <div class="scheduleDate">
                                        <input type="date" id="scheduleDate" name="scheduleDate" placeholder="none">
                                        <div class="error" id="dateError"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="divide"></div>

                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3590.9979290452097!2d28.24981687442388!3d-25.836613549102346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9567e89c40d1e9%3A0x7ea1a0bc36ffa916!2sCornwall%20Hill%20Motors!5e0!3m2!1sen!2sza!4v1695974347193!5m2!1sen!2sza" width="300" height="445" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        
                        </div>
                        
                    </div>
                        
<!--PAGE 5-->   
                    <div class="payment">
    
                        <h3 class="title">Summary</h3>
                        
                        <div class="retailer">
                            <div style="color: #5e5c5c; font-size:15px;">Sold by</div>
                            <div class="retailerName" style="font-size: large;"><b>Mr Ranger</b></div>
                            <div></div>
                        </div>
                        <br><hr>

                        <div class="section2">
                            <img class="carImg" src="https://media.architecturaldigest.com/photos/63079fc7b4858efb76814bd2/16:9/w_1600%2Cc_limit/9.%2520DeLorean-Alpha-5%2520%255BDeLorean%255D.jpg">

                            <div class="info">
                                <div class="carName">
                                    CarModel Name XV34  
                                </div><br>
                                <div class="total">
                                    R 000 000.00
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="breakdown">
                            <div class="pbd" style="color: #5e5c5c; font-size:15px;">Price breakdown</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div class="pbdName">Base Price <hr></div>
                            <div class="pbdAmt">R 000 000.00 <hr></div>
                        </div>
                        
                        <div class="pbdContain">
                            <div class="none"></div>
                            <div class="all">
                                
                                <div class="pbdlist"> 
                                   <div class="otherCharge pbdName">Other Costs & Charges</div> 
                                   <div></div>
                                   <div class="name">Discount</div> 
                                   <div class="pbdAmt">R00.00</div>
                                    <div class="name">Total Extras</div> 
                                    <div class="pbdAmt">R00.00</div> 
                                    <div class="name">CO2 Tax</div> 
                                    <div class="pbdAmt">R00.00</div> 
                                    <div class="name delivery">Delivery Charge</div> 
                                    <div class="pbdAmt deliveryAmt" >R00.00</div>
                                    <div class="name">VAT 15%</div> 
                                    <div class="pbdAmt">R00.00</div>
                                    <!--<div class="name">Reservation Fee</div><div class="pbdAmt"></div>--> 
                                </div>
                                <hr>
                             </div>
                             
                        </div>
                        <div class="breakdown">
                            <div></div>
                            <div class="pbdName">Total Purchase price</div>
                            <div class="pbdAmt">R000 000.00</div>
                         </div><br><hr>

                         <div class="breakdown">
                            <div class="pbd" style="color: #5e5c5c; font-size:15px;">Payment Option</div>
                            <div class="pbdName sumPayOp">Financing</div>
                            <div class="pbdAmt"> </div>
                        </div>
                        <div class="breakdown">
                            <div class="pbd" style="color: #5e5c5c; font-size:15px;">Aquirment Option</div>
                            <div class="pbdName aquireOp" >Collection</div>
                            <div class="pbdAmt"> </div>
                        </div>
                        <div class="breakdown">
                            <div class="pbd sumDateLabel" style="color: #5e5c5c; font-size:15px;"></div>
                            <div class="pbdName sumDateDisplay">03/08/19</div>
                            <div class="pbdAmt"> </div>
                        </div>
    
                        <button class="checkout" name="submit" value="<?php echo $_SESSION['price']?>.00">Place Order</button>
                    </div> 
                    
                </form>

                <button class="cont1">Continue</button> 
                <button class="cont2">Continue</button>
                <button class="cont3">Continue</button>
                <button class="cont4">Continue</button>
                <button  class="prev1 prev">Previous</button>
                <button  class="prev2 prev">Previous</button>
                <button  class="prev3 prev">Previous</button>
                <button  class="prev4 prev">Previous</button>
                   
    
            </div>
    
<!--SIDE BAR -->   
        <div class="carDetails">
            <img class="carImg" src="<?php echo $_SESSION['picture'] ?>">
    
            <div class="carInfo">
                <div class="specs">
                    <label >MODEL</label>
                    <p class="model"><?php echo $_SESSION['name']; ?></p>
    
                </div>
    
                <div class="specs total">
                    <label>TOTAL </label>
                    <p class="total">R<?php echo $_SESSION['price']?>.00</p>
    
                </div>
    
            </div>
            
        </div>
    
    </div> 

    </div>

    

<div class="footer">content</div>

<script src="paygate.js"></script>
<script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
 
</body>
</html>