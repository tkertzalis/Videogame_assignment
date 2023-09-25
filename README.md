
To start the server navigate to the project folder using cmd and type the command : php artisan serve

For this project I used the SQLite database.

Open postman to start calling the API.

To view the available games, send a GET request on localhost:8000/api/videogames

To add a new videogame, you have to register or login.

To register, send a POST request on localhost:8000/api/register

•	Choose headers and type “Accept” in the Key column and “application/json” in the Value column

 ![register2](https://github.com/tkertzalis/Videogame_assignment/assets/57686873/5e40052e-3ef6-47e5-8333-c4513452f367)!
•	Choose Body and select the ‘x-www-form-urlencoded’ option

•	In the Body column fill these fields as shown in the image below

![register3](https://github.com/tkertzalis/Videogame_assignment/assets/57686873/c1c51623-3bb9-49bc-b003-5d9a3a6b8303)
A response as shown below should appear.
![register4](https://github.com/tkertzalis/Videogame_assignment/assets/57686873/24219b39-c56c-49c0-b13c-a59d3db05c9a)

You are registered now.

To add a videogame, send a post request on localhost:8000/api/videogames

Copy and paste the token of the user and choose Authorization -> Type -> Bearer Token 
	
![register5](https://github.com/tkertzalis/Videogame_assignment/assets/57686873/4678e053-ff6d-451b-8315-63179492f5e0)

Fill these data and send the request. You should see something similar with the following.
![add_game](https://github.com/tkertzalis/Videogame_assignment/assets/57686873/ec487d31-5cd7-4a21-a765-d258b3559c7e)

If you dont paste the token a message that states "Unauthorized" should appear because this route is protected

You can login and logout by accessing the localhost:8000/api/login and localhost:8000/api/logout routes in a similar way as shown above.

When you login the api returns the user and the token

When you log out the api sends a "Logged out!" message.

You can update a videogame by sending a PUT request on localhost:8000/api/videogames{id}
![update](https://github.com/tkertzalis/Videogame_assignment/assets/57686873/27870f66-c765-4366-836a-efb2a9a7222d)


You can delete a videogame by sending a DELETE request on localhost:8000/api/videogames{id} id -> id of the game on the database. Api should return the id as a number if it was successful.

Remember to apply the token to have access to these routes

You can order by release date by sending a GET request on localhost:8000/api/videogames/order/{orderType} orderType = ASC or DESC
![ORDER](https://github.com/tkertzalis/Videogame_assignment/assets/57686873/1cbad79d-7cb3-42d6-917e-de45ed51404a)

You can filter by enre by sending a GET request on localhost:8000/api/filter/order/{genre} genre = RPG,Sports, etc

![filter](https://github.com/tkertzalis/Videogame_assignment/assets/57686873/2ca79854-03d2-43fc-85ee-005ad12378c5)





