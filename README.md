# Project_2_PHP
This is just a school group project... Sorry, nothing useful for the public.

## Calendar (Task scheduling application using PHP)
CRUD app for user's tasks to do.

### Work in progress:
- User CRUD
    - DB table name = users
    - table columns = id, user_name, password
    - views = *register.php* (registration form) and *login.php* (login form)
- Task CRUD
    - DB table name = tasks
    - table columns = id, user_id, title, description, due_date
    - views = *home.php* (list of all user's tasks) and *task.php* (individual task)
- Other views by flags
    - Today (all tasks due today) -> today.php
    - Coming up (all tasks due this week -- except today's) -> coming.php
    - Approaching (all tasks with due dates after a week or more) -> approaching.php
- Sorting
    - By creation date
    - By due date
    - By alphabetical order
- Searching
    - By keyword (in title and description)
    - By flag (Today, Coming up, Approaching)
    - By due date
