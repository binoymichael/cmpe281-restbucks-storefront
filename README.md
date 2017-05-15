# Starbucks Drink Ordering Portal by Team A+

## Team Members:  
### Binoy Michael Prakash  
### Gaurav Misra  
### Pallavi Jakanachary  
### Yaniv Cohen  
★ Link to YouTube Video :   
https://www.youtube.com/watch?v=bH9-TJym5Ek  
★ Link to Portal :  
http://my-env.qj8inemkmz.us-west-1.elasticbeanstalk.com/  
★ Link to API Gateway used by Portal :  
http://ec2-54-215-145-110.us-west-1.compute.amazonaws.com:8000/  
★ Links to GitHub Project Source Code from each team member -  
○ Binoy Michael Prakash -  
https://github.com/binoymichael/cmpe281-restbucks-kong  
○ Gaurav Misra -  
https://github.com/GauravMisraSE/CMPE-281---Team-Hackathon-REST-API-implementation  
○ Pallavi Jakanachary -  
https://github.com/PallaviKarthick/cmpe281Cloud/tree/master/cmpe281_nodeJS    
○ Yaniv Cohen  
https://github.com/yanivcohen/teamProject  
★ Links to REST API Endpoint from each team member  
The Kong Gateway just routes the request to the respective stores. The different store routes are:    
http://ec2-54-215-145-110.us-west-1.compute.amazonaws.com:8000/mountainview  
http://ec2-54-215-145-110.us-west-1.compute.amazonaws.com:8000/paloalto  
http://ec2-54-215-145-110.us-west-1.compute.amazonaws.com:8000/sunnyvale  
  
Mountain View Store:  
POST [Place an Order] : http://54.193.2.52:9090/order  
GET [Get an Order] : http://54.193.2.52:9090/order/{order_id}  
GET [Get All Orders] : http://54.193.2.52:9090/orders  
DELETE [Delete an Order] : http://54.193.2.52:9090/order/{order_id}  
POST [Pay for an Order] : http://54.193.2.52:9090/order/{order_id}/pay  
PUT [Update an Order] : http://54.193.2.52:9090/order/{order_id}  
  
Palo Alto Store:  
POST [Place an Order] : http://54.215.4.81:5000/starbucks/order  
GET [Get an Order] : http://54.215.4.81:5000/starbucks/order/{order_num}  
GET [Get All Orders] : http://54.215.4.81:5000/starbucks/orders  
DELETE [Delete an Order] : http://54.215.4.81:5000/starbucks/order/{order_num}  
POST [Pay for an Order] : http://54.215.4.81:5000/starbucks/order/{order_num}/pay  
PUT [Update an Order] : http://54.215.4.81:5000/starbucks/order/{order_id}  
  
Sunnyvale Store:  
POST [Place an Order] : http://54.67.122.67/order  
GET [Get an Order] : http://54.67.122.67/order/{order_id}  
GET [Get All Orders] : http://54.67.122.67/orders  
DELETE [Delete an Order] : http://54.67.122.67/order/{order_id}  
POST [Pay for an Order] : http://54.67.122.67/order/{order_id}/pay  
PUT [Update an Order] : http://54.67.122.67/order/{order_id}  
  
Routes:  
POST /order:    
 Create a new order, and upon success, receive a Location header specifying the new order’s URI.  
 GET /order/{order_id}:    
 Request the current state of the order specified by the URI.
  GET /orders:    
 Get list of Open Orders  
  DELETE /order/{order_id}:    
 Logically remove the order identified by the given URI.  
  POST /order/{order_id}/pay:    
 Process payment for the order.  
  PUT /order/{order_id}:    
 Update an order at the given URI with new information,providing the full representation.  
