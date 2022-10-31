Feature: Modify profile and personal info

Scenario: The user wants/needs to change information in their profile
Given the user is logged in
When the user goes to their profile
And the user clicks on edit
Then all the users information will be displayed
And they will be able to edit that information