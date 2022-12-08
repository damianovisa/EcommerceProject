Feature: Refund

Scenario: The user wants a refund on a product they purchased
Given the user has made a purchase
When the user views their product purchased
And the user clicks on "request a refund?"
Then the user will be prompted with a form to fill out
When the user clicks on "send"
Then the refund request will be sent to the seller