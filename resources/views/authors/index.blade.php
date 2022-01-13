<h1>Index</h1>



<!-- $authors -->



<!-- <table> -->
<!--  foreach -->

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Description</th>
        <th>Phone</th>
    </tr>

    @foreach ($authors as $author)
        <tr>
            <td>{{$author->id}}</td>
            <td>{{$author->name}}</td>
            <td>{{$author->surname}}</td>
            <td>{{$author->description}}</td>
            <td>{{$author->phone}}</td>
        </tr>
    @endforeach

</table>    



<!-- Vaizdo surisimas su controller -->
<!-- <! -- Controleri su model  -->

<!-- /authors -->
<!-- AuthorController@index 
tureturi papildomai i modeli
modelis kreipiasi i duomenu baze - automatiskai
is duomenu bazes paimi $authors
$authors grizta i controlleri

o controleris grazina ne tik view, bet ir grazina visa kintamaji $authors

!-->