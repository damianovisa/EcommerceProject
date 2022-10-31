Feature: Check if product price has dropped or is on sale

Scenario: The user wants to buy a product at a better price than it previously was
Given the user is on the home page with all products displaying
When the user scrolls through the product catalagog
Then the user will see different 2 different prices displayed with the original price crossed out 
And the user will be shown the percent of the sale if a sale is occuring 