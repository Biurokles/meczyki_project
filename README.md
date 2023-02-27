# Project

- models
- html
- api


## models
there are 2 models. News, Authors.
### News
    title - Name of article
    text  - This is where you can place content of article
### Authors
    name - contains first and last name of every author


- Pivot has id's of both Author and News tables
- it's records adds automatically and deletes when article edited.

## html
- on 127.0.0.1:8000 you have list of articles with option of creating new ones editing them and seeing.
- To create new article you have to write title and content in inputs (there are no event handlers for empty inputs or something like that ).
- when you edit specific article you get redirect to special site.
- there is a little css so table of articles is more readable.

## api 


### endpoints:
#### GET /api/news/{id}
      where {id} means specified id, you can get a title and content of the article with given id
#### GET /api/authors/{id}
     where {id} means specified id, you will get all articles of authors with given id
#### GET /api/top3
     you get 3 authors who wrote the most articles last week
