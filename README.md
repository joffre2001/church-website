# Church Website

## Overview
This is a fully functional church website built using PHP. It serves as a platform for the church to share information about its mission, values, upcoming events, and provide a way for the community to get in touch.

## Features
- **Home Page**: An introduction to the church with links to other sections.
- **About Page**: Information about the church's mission and values.
- **Contact Page**: A contact form for inquiries and contact information.
- **Events Page**: A list of upcoming events and activities organized by the church.

## Project Structure
```
church-website
├── public
│   ├── index.php
│   ├── about.php
│   ├── contact.php
│   ├── events.php
│   ├── css
│   │   └── styles.css
│   ├── js
│   │   └── scripts.js
│   └── images
├── src
│   ├── config
│   │   └── database.php
│   ├── controllers
│   │   ├── ContactController.php
│   │   └── EventController.php
│   ├── models
│   │   ├── Contact.php
│   │   └── Event.php
│   ├── views
│   │   ├── header.php
│   │   ├── footer.php
│   │   ├── home.php
│   │   ├── about.php
│   │   ├── contact.php
│   │   └── events.php
│   └── helpers
│       └── utils.php
├── .env
├── composer.json
├── composer.lock
└── README.md
```

## Installation
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Install dependencies using Composer:
   ```
   composer install
   ```
4. Set up your database and update the `.env` file with your database credentials.
5. Start a local server and navigate to `http://localhost/church-website/public`.

## Technologies Used
- PHP
- MySQL
- HTML/CSS
- JavaScript

## Contributing
Feel free to fork the repository and submit pull requests for any improvements or features you would like to add. 

## License
This project is open-source and available under the MIT License.