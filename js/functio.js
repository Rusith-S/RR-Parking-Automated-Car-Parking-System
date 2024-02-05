
    function sumvalues(){
     
       var num1,num3;
       var dis1="%5";
       var dis2="%10";
       var dis3="%15";
       var dis4="No offers"
       var disc;
       var amount;
       var cost=350;
  
  
  
    num1=Number(document.formcalc.txtnum1.value);
  
  
      if(num1>=15){
          document.formcalc.txtnum2.value=dis3;
          num3=0.15;
      }
      else if(num1>=10){
          document.formcalc.txtnum2.value=dis2;
          num3=0.1;
      }
      else if(num1>=5){
          document.formcalc.txtnum2.value=dis1;
          num3=0.05;
      }

      else{
        document.formcalc.txtnum2.value=dis4;
        num3=0;
      }
  
      amount=num1*cost; 
      disc=amount*num3;
      res=amount-disc;
      document.formcalc.txtres.value=res;
    }
  
  
  
  

  
  
  
  
  