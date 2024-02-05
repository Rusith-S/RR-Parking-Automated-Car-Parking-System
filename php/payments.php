<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/paymentt.css">
        <title>RR Parking - payment</title>

    </head>

    <body>
        <div class="container">
            <h1>Enter Your Payment details</h1>
        
            <form action="../php/payment.php" method="POST">
                <div class="first-row">   

                    <div class="images">
                        <h3>Cards Accepeted : </h3>
                        <img src="../images/payment/mastercard.png" height="40px" width="70px" alt="master">
                        <img src="../images/payment/visa.png" height="40px" width="70px" alt="visa">
                    </div>

                    <div class="cardholder">
                        <h3>Cardholder's name*</h3>
                        <div class="input-field">
                            <input type="text" name="cardholder" placeholder="Cardholder's name" required autocomplete="off">
                        </div> 
                    </div>       
                </div>


                <div class="second-row">   
                    <div class="card-number">
                        <h3>Card-number*</h3>
                        <div class="input-field">
                            <input type="text" name ="card-number" placeholder="card-number" required autocomplete="off">
                        </div>
                    </div>            
                    <div class="amount">
                        <h3>Amount*</h3>
                        <div class="input-field">
                            <input type="text" name="Pamount" placeholder="Amount" required autocomplete="off">
                        </div>  
                    </div>
                </div>

                <div class="third-row">
                    <div class="expiry">
                        <h3>Expiration Date*</h3>
                        <div class="selection">
                            <div class="date">
                                <select name="months" id="months">
                                    <option value="Jan">Jan</option>
                                    <option value="Feb">Feb</option>
                                    <option value="Mar">Mar</option>
                                    <option value="Apr">Apr</option>
                                    <option value="May">May</option>
                                    <option value="Jun">Jun</option>
                                    <option value="Jul">Jul</option>
                                    <option value="Aug">Aug</option>
                                    <option value="Sep">Sep</option>
                                    <option value="Oct">Oct</option>
                                    <option value="Nov">Nov</option>
                                    <option value="Dec">Dec</option>
                                </select>
                                <select name="years" id="years">
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="cvv">
                        <h3>CVV*</h3>
                        <div class="input-field">
                            <input type="text" placeholder="CVV" name="CVV"required autocomplete="off">
                        </div>                    
                    </div>
                    <button id="paybutton" type="submit">PAY NOW</button>                
                </div>   
               
            </form>
        
        </div> 

    </body>
</html>