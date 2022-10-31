Feature: Modify quantities for products in cart

Scenario: The user changes their mind on the quantity of the product they want
Given the user has added an item to their cart
When the user is in their cart
And they click on the plus or minus button
Then the user can change the quantity of the product before purchasing