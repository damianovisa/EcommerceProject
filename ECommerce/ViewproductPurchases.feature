Feature: View product purchases

Scenario: The seller tries to see the users that have purchased their product
Given the person is logged in as a seller
And the seller is on the right page to see their products
When the seller clicks on one of their products 
And clicks on "view product purchases"
Then the seller will be presented with a list of users that have purchased the product