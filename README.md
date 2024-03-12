## How to Run the Project

### Prerequisites

Before you begin, ensure you have met the following requirements:
- PHP 8.0
- Laravel 10.47.0

### Installation

1. Clone the repository to your local machine:

git clone https://github.com/your-username/news-article-system.git

2. Navigate to the project directory:

cd news-article-system

3. Install composer dependencies:

composer install

4. Copy the .env.example file to .env:

cp .env.example .env

5. Generate an application key:

php artisan key:generate

### Database Setup

1. Run migrations to create the necessary tables in the database:

php artisan migrate

2. Seed the database with initial data:

php artisan db:seed

### Start Development Server

Run the following command to start the development server:

php artisan serve

The application will now be accessible at [http://localhost:8000](http://localhost:8000).

## Usage

### Adding a News Article

To add a new news article, follow these steps:

- Navigate to the homepage.
- Click on the "Create" link.
- Fill in the required fields: title, text, and select an author from the dropdown menu.
- Click the "Add Article" button.

### Editing a News Article

To edit an existing news article, follow these steps:

- Navigate to the homepage.
- Click on the title of the article you want to edit.
- Modify the article details as needed.
- Click the "Update" button.

To view a list of news articles, simply visit the homepage. You will see a list of articles with their titles and authors.

## API Endpoints

1. **Get Article by ID**

    - Endpoint: `/api/articles/{id}`
    - Method: GET
    - Description: Returns the article with the specified ID.


2. **Get All Articles for Given Author**

    - Endpoint: `/api/articles/author/{authorId}`
    - Method: GET
    - Description: Returns all articles written by the author with the specified ID.


3. **Get Top 3 Authors that Wrote the Most Articles Last Week**

    - Endpoint: `/api/top-authors`
    - Method: GET
    - Description: Returns the top 3 authors who wrote the most articles in the last week.
