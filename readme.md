# Project To Demonstrate PHP + Bootstrap

- [Project To Demonstrate PHP + Bootstrap](#project-to-demonstrate-php--bootstrap)
  - [Set Up](#set-up)
  - [Features](#features)
  - [Authentication](#authentication)

## Set Up

- The project is written using PHP.
- It's ran on localhost using XAMPP using Apache as the web server and MySQL as the database.
- It uses Bootstrap
- It uses tinymce for the WYSIWYG blog post writer.
- To use this project, please run the **posts.sql** and **users.sql** scripts. 

## Features

- Creation of Blog Posts
  - Through the New Post button when logged in
- Retrieval of Blog Posts
  - Site automatically loads last 12 posts
  - Ability to search through all posts
- Updating of Blog Posts
  - Through The Edit Button
- Deletion of Blog Posts
  - Through the Delete Button
- Log In/Log Out
- Levels of Access
  - If logged in can create/edit/delete posts otherwise just view

## Authentication

To be able to create posts you must log in. Details are below

| Username | Plain Text Password | Encrypted Password       |
| -------- | ------------------- | ------------------------ |
| jack     | password            | U3tEvnkTUJTLT/EaZ42aaA== |
