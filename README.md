<!-- Build a small web app similar to facebook app -->

<!-- Features -->
1. Register an account
2. Login 
3. Create a post
4. Edit a post
5. Delete a post
6. Like a post
7. Comment on a post
8. Delete a comment
9. Logout

<!-- Database Schema -->
php artisan make:model User -cfms
- C : Controller
- F : Factory
- M : Migration
- S : Seeder
1. Users
    - id
    - first_name
    - last_name
    - password
    - email
    - profile_url
    - phone_number
    - date_of_birth
    - created_at
    - updated_at
2. Posts 
    - id
    - title
    - content
    - image_url
    - user_id
    - created_at
    - updated_at
3. Likes 
    - id
    - user_id
    - post_id
    - created_at
    - updated_at
4. Comments
    - id
    - user_id
    - post_id
    - text
    - created_at
    - updated_at


