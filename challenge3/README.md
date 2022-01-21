#Everything has been completed

## /
Forms to post for either Content or Contact

## /contact 
1. Endpoint lists all contacts
2. /contact/{id} shows that specific contact
3. /contact/new - form for creating new contact


## /content
1. Endpoint lists all content
2. /content/{id} shows that specific contact
3. /content/new - form for creating new content


### Thoughts
I extracted the respond, success, and failure methods to the controller base object so the code could be reused.

I used route groups, named routes in links and forms

Comments included.

No unit tests were added to this project.
