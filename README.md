![siteLogo](https://user-images.githubusercontent.com/108950985/233356844-d34654a8-50bf-40b4-97f3-13ee30c0cf98.png)

# Description 📝

Web application to manage my favourite images ![emoticon](https://user-images.githubusercontent.com/108950985/233363344-3ef6cc6e-22ab-4b11-9732-e44cf3e91d19.png)

<ul>
<li>As a user I need to be able to see a list of my images</li>
<li>As a user it will be necessary to be able to add images to a database</li>
<li>As a user I need to be able to delete an image</li>
<li>As a user I need to be able to edit an existing image</li>
</ul>

# Screenshoots 📸

<p align="center">
<img src="https://user-images.githubusercontent.com/108950985/233600991-c28098fd-c8ff-44a0-b8b5-5eea4a80d285.png" width="370px">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://user-images.githubusercontent.com/108950985/233591780-3a87685b-af2f-47dc-9f4e-ca36d3377ed8.png" width="370px">
</p>

# Stacks ⚙️

- HTML 5
- CSS 3
- BootStrap 5
- JavaScript
- PHP 8.1
- Laravel Framework 10.0
- MySQL
- DrawSQL
- Cloudinary
- SweetAlert2

# How to install the project 👩‍💻

1. Clone the project
```bash
  git clone https://github.com/birdsinyourgarden/imagenizer
```

2. Go to the project directory
```bash
  cd imagenizer
```

3. Start MySQL service and create a MySQL database named "imagenizer"

4. Create in the text editor an .env file by copying the contents of .env.example and modify the database name (laravel by imagenizer)

5. Install dependencies
```bash
  npm install
```
```bash
  composer install
```

6. Activate the server and keep this terminal open
```bash
  npm run dev
```

7. Run the PHP server and keep this terminal open
```bash
  php artisan serve
```

8. Import database
```bash
  php artisan migrate:fresh --seed
```

# Tests ✅
  
To run the tests, execute the following command(s)

```bash
  php artisan test
```
<img src="https://user-images.githubusercontent.com/108950985/233361004-c94d8b9b-53a9-492c-ae84-0fed404486cd.png" width="500">

```bash
  vendor/bin/phpunit
```
<img src="https://user-images.githubusercontent.com/108950985/233362369-eb462076-5943-4a46-b0c5-420a452863d5.png" width="600">
