# Users Files App Documentation

## Introduction
The Users Files app is a Laravel application designed following the MVC (Model-View-Controller) pattern. It allows managing users and their associated files. This documentation provides an overview of the app's endpoints, their expected responses.

## Endpoints

### Fetch All Users with Files
- Endpoint: `GET /users`
- Description: Retrieves all users with their associated files.
- Response Body:
```json
{
    "users": [
        {
            "user_name": "John Doe",
            "files": [
                "NewFile.txt",
                "test_file.doc",
                "file.html",
                "Mustafa.zip"
            ]
        },
    ]
}
```

### Fetch All Files
- Endpoint: `GET /files`
- Description: Retrieves all files.
- Response Body:
```json
{
    "files": [
        {
            "id": 1,
            "title": "New File",
            "user_id": 1,
            "created_at": "2023-06-13T07:48:36.000000Z",
            "updated_at": "2023-06-13T07:48:36.000000Z",
            "format": null
        },
    ]
}
```

### Create New File
- Endpoint: `POST /api/files`
- Description: Creates a new file.
- Request Body:
```json
{
  "title": "names.doc",
  "user_id": 2
}
```
- Response Body:
```json
{
    "file": {
        "id": 3,
        "title": "names.doc",
        "user_id": 2,
        "created_at": "2023-06-13T09:00:00.000000Z",
        "updated_at": "2023-06-13T09:00:00.000000Z"
    }
}
```

##Section 2 in TASK

## SQL Query Explanation
The provided SQL query is as follows:
```sql
SELECT 
    GROUP_CONCAT(CONCAT(first_name, ' ', last_name) SEPARATOR ', ') AS full_name,
    city,
    SUM(CASE WHEN city = city THEN salary ELSE 0 END) AS total_salary
FROM 
    employee_salaries
GROUP BY 
    city;
```
- This query retrieves the full names, city, and total salary for employees stored in the `employee_salaries` table.
- The `GROUP_CONCAT` function is used to concatenate the first name and last name with a space separator for each group of employees in the same city.
- The `SUM` function calculates the total salary for each city, considering only the employees from that city.
- The query groups the results by city using the `GROUP BY` clause.
