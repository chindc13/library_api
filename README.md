
<h5>Database Migration</h5>
<table>
    <tbody>
        <tr><td>php artisan migrate</td></tr>
        <tr><td>php artisan db:seed</td></tr>
    </tbody>
</table>

<h5>Composer Config</h5>
<table>
    <tbody>
        <tr><td>composer update</td></tr>
        <tr><td>php artisan cache:clear</td></tr>
        <tr><td>php artisan route:cache</td></tr>
        <tr><td>php artisan config:clear</td></tr>
        <tr><td>php artisan view:clear</td></tr>
        <tr><td>rm -rf bootstrap/cache/*/*</td></tr>
    </tbody>
</table>

<h5>Routing API's</h5>
<table>
    <tbody>
        <tr><td>REQUEST</td><td>API</td><td>REMARK</td></tr>
        <tr><td>POST</td><td>"api/register"</td><td>with json request</td></tr>
        <tr><td>POST</td><td>"api/libraries"</td><td>create library : with json request</td></tr>
        <tr><td>POST</td><td>"api/users/{user}/borrow/{book}"</td><td>borrow a book</td></tr>
        <tr><td>POST</td><td>"api/users/{user}/return/{book}"</td><td>return a book</td></tr>
        <tr><td>GET</td><td>"api/books"</td><td>list of books</td></tr>
        <tr><td>GET</td><td>"api/libraries"</td><td>list of libraries</td></tr>
        <tr><td>GET</td><td>"api/books/{book}/library"</td><td>get book details</td></tr>
        <tr><td>GET</td><td>"api/books/{book}/borrowers"</td><td>list of user of books</td></tr>
        <tr><td>GET</td><td>"api/books/available"</td><td>list of available books</td></tr>
        <tr><td>GET</td><td>"api/borrowers"</td><td>list of borrowers</td></tr>
    </tbody>
</table>

<h5></h5>
<p>
<b>Register Request Body : </b><br>
{
    "name": "Sample Name",
    "email": "sname@example.com",
    "password": "malupitnapassword",
    "library_id": 1
}
</p>