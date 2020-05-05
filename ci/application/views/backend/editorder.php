

<div class="main col-md-12" style="text-align:center" ng-app="myapp2" ng-controller="editctrl"> 


   <form name="editform" ng-submit="editorder()"> 
      <div>  
      
     <label for="orderid">Order ID</label>
     <input type="text"  ng-model="editorders.id"> 
     <br/> 
      <label for="userid">User ID</label>
     <input type="text" ng-model="editorders.user_id"> 
     <br/> 
        <label for="sid">Session ID</label>
     <input type="text" ng-model="editorders.sid"> 
     <br/>      
     <label for="bill_firstname">Billing Firstname</label>
     <input type="text" ng-model="editorders.bill_firstname"> 
     <br/>   
     <label for="bill_lastname">Billing Lastname </label>
     <input type="text" ng-model="editorders.bill_lastname"> 
     <br/>  
     <label for="bill_tel">Billing Telephone </label>
     <input type="text"  ng-model="editorders.bill_tel"> 
     <br/> 
      <label for="bill_email">Billing Email</label>
     <input type="text" ng-model="editorders.bill_email"> 
     <br/> 
        <label for="bill_address1">Billing Address 1</label>
     <input type="text" ng-model="editorders.bill_address1"> 
     <br/>      
     <label for="bill_address2">Billing Address 2</label>
     <input type="text" ng-model="editorders.bill_address2"> 
     <br/>   
     <label for="bill_country"></label>
     <input type="text" ng-model="editorders.bill_address2"> 
     <br/>  
     <label for="bill_city">Billing City</label>
     <input type="text"  ng-model="editorders.bill_city"> 
     <br/> 
      <label for="bill_zipcode">Billing Zipcode</label>
     <input type="text" ng-model="editorders.bill_zipcode"> 
     <br/> 
        <label for="bill_addinfo">Billing Additional Information</label>
     <input type="text" ng-model="editorders.bill_addinfo"> 
     <br/>      
     <label for="ship_firstname">Shipping Firstname</label>
     <input type="text" ng-model="editorders.ship_firstname"> 
     <br/>   
     <label for="ship_lastname">Shhipping Lastname</label>
     <input type="text" ng-model="editorders.ship_lastname"> 
     <br/>  
     <label for="ship_tel">Shipping Telephone</label>
     <input type="text"  ng-model="editorders.ship_tel"> 
     <br/> 
      <label for="ship_email">Shipping Email</label>
     <input type="text" ng-model="editorders.ship_email"> 
     <br/> 
        <label for="ship_address1">Shipping Address 1</label>
     <input type="text" ng-model="editorders.ship_address1"> 
     <br/>      
     <label for="ship_address2">Shipping Address 2</label>
     <input type="text" ng-model="editorders.ship_address2"> 
     <br/>   
     <label for="ship_country">Shipping Country</label>
     <input type="text" ng-model="editorders.ship_country"> 
     <br/>  
     <label for="ship_city">Shipping City</label>
     <input type="text"  ng-model="editorders.ship_city"> 
     <br/> 
      <label for="ship_zipcode">Shipping Zipcode</label>
     <input type="text" ng-model="editorders.ship_zipcode"> 
     <br/> 
        <label for="payment_totalamount">Payment Total Amount</label>
     <input type="text" ng-model="editorders.payment_totalamount"> 
     <br/>      
     <label for="payment_photo">Payment Photo</label>
     <input type="text" ng-model="editorders.payment_photo"> 
     <br/>   
     <label for="payment_status">Payment Status</label>
     <input type="text" ng-model="editorders.payment_status"> 
     <br/>     
     <label for="created_date">Created Date</label>
     <input type="text" ng-model="editorders.created_date"> 
     <br/> 



      <input type="submit" value="Submit"> 
      <input type="button" ng-click="reset()" value="Reset"></input>
     </div> 
    </form>


  
</div>

