<h1>Create</h1>


<!-- GET/POST -->
<!-- action -->

<!-- veiksmas.php -->
<!-- /veiksmas -->


<!-- store funkcija -->
<form method="POST" action="{{ route('author.store') }}">

<!-- ID pildyti nereikia -->
<!-- name, surname, description, phone -->
    Name: <input type="text" name="author_name" />
    Surname: <input type="text" name="author_surname" />
    Descrpition<input type="text" name="author_description" />
    Phone: <input type="text" name="author_phone" />

    @csrf


    <button type="submit">Add</button>

</form>

<!-- $_POST['author_name'] -->