# Virtual Guest Book - Laravel API
Create a small API that will serve the front end of an application that allows users to submit a
comment on a virtual guest book. The only fields on the virtual guest book are name and
message.

# Api Endpoints
/** Retrieve all entries from Virtual Guest Book
*   METHOD GET
**/
http://localhost/api/v1/guestbook/entry/all 

/** Retrieve specific entry using Virtual Guest Book ID
*   METHOD GET
**/
http://localhost/api/v1/guestbook/entry/$id 

/** Create a new entry for Virtual Guest Book
*   METHOD POST
*   FIELDS = name | message
**/
http://localhost/api/v1/guestbook/entry/create


/** Edit entry in Virtual Guest Book using ID
*   METHOD POST
*   FIELDS = name | message
**/
http://localhost/api/v1/guestbook/entry/edit/$id 


/** Delete a specific entry from Virtual Guest Book using ID
*   METHOD DELETE
**/
http://localhost/api/v1/guestbook/entry/delete/$id 