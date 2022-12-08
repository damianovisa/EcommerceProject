Feature: Product reviews

Scenario: The user tries to see other peoples reviews before purchasing a product
Given the user is viewing a product 
When the user clicks on "reviews"
Then a list of reviews posted from other users will be shown