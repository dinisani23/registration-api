# Laravel API Projects

This repository contains two Laravel projects with controllers designed for handling API requests and managing user data taht is built to create a fault tolerance registration prototype. Below is a brief overview of the provided controllers and their functionalities.

## 1. PostController
The PostController in registration project is responsible for handling form submissions and interacting with an external API.

Methods
store(Request $request):

Handles POST requests to store user data.
### Functionality:
Retrieves name and phone from the request.
Sends these details to an external API (in this case) = (https://intern.qr.my/receiver/public/api/get_user) using Guzzle HTTP client.
Based on the response from the external API, redirects to either response_yes or response_no view.
### Response Handling:
If the external API returns a status code of 200, a success message is flashed, and the response_yes view is returned.
For any other status code, the response_no view is returned.


## 2. ApiController
The ApiController in receiver project is a resource controller designed for managing User resources.

Methods
store(Request $request):

Handles POST requests to create and store a new user in the database.
### Functionality:
Creates a new User instance with name and phone from the request.
Saves the User instance to the database.
Returns an empty response with a 200 status code.
### Response Handling:
Ideally, it should return a JSON response or a meaningful message indicating success.
