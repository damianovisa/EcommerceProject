Feature: Delete products inside cart

Scenario: The user does not want a certain product anymore
Given the user has added a product to their cart
When the user goes into their cart
And clicks on the remove button
Then that product will be removed from the users cart
