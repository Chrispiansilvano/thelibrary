<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            /* font-family: 'Roboto', sans-serif; */
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 10px;
            background-color: #fff;
            color: #000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #002c5f;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #005c5f;
            color: white;
        }

        tr:hover {
            background-color: #008c8f;
            color: white;
        }
    </style>
</head>

<body>
    book list
    

    <?php if(!empty($books)):?>
        <table>
        <tr>
            <th>Book ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Publisher</th>
            <th>Edition</th>
            <th>Publication Date</th>
            <th>Description</th>
            <th>Book Cover</th>
            <th>Availability</th>
            <th>Quantity</th>
        </tr>
        <?php foreach($books as $book):?>
        <tr> 
            <td><?= $book->Id; ?></td>
            <td><?= $book->Title; ?></td>
            <td><?= $book->Author; ?></td>
            <td><?= $book->ISBN; ?></td>
            <td><?= $book->publisher; ?></td>
            <td><?= $book->edition; ?></td>
            <td><?= $book->Publicationdate; ?></td>
            <td><?= $book->Description; ?></td>
            <td><img src="<?= $book->BookCover; ?>" alt="Book 1 Cover"></td>
            <td><?= $book->availability; ?></td>
            <td><?= $book->Quantity; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php else:?>
        <h1>Sorry! No any book record found</h1>
     <?php endif;?>   
    
</body>

</html>