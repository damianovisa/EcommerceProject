Feature: Add product 
 
Scenario: Seller tries to add a new product
Given the person is logged in as a seller
And the seller is on the right page to add products
When the seller clicks on "add product"
Then the seller will be presented with a form to fill out
When the seller fills out the form and clicks on add product
Then the product will be added the sellers list of products that they are selling.

