Feature: Track sales

Scenario: The seller wants to see the statistics of their product
Given the person is logged in as a seller
And the seller is on the right page to see their product statistics
When the seller clicks "view product sales"
Then the seller will be presented with a list of all their products
And the seller will be able to see the different statistics of their products 