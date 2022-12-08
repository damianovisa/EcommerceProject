Feature: Modify product

Scenario: Seller tries to change something for their product
Given the person is logged in as a seller
And the seller is on the right page to modify products
When the seller clicks on "edit"
Then the seller will be presented with a form will all information about the product previously filled out
When the seller changes any of the information
Then the changes will be applied to the product.