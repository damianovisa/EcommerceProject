Feature: Change product status

Scenario: The seller wants to let the users know if their product is being shipped
Given the person is logged in as a seller
And the seller is on the right page to see their products
When the seller clicks on one of their products 
And clicks on "view product purchases"
Then the seller will be presented with a list of users that have purchased the product
And the seller can mark down if the product has been shipped and it will add tracking information