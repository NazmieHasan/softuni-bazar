<h1>MY ITEMS</h1>

<?php /** @var \App\Data\MyItemDTO[] $data */ ?>

<a href="add_item.php">Add Item</a> |
<a href="profile.php">Add Item</a> |
<a href="logout.php">Logout</a>


<table border="1">
    <thead>
    <tr>
        <td>Title</td>
        <td>Category</td>
        <td>Price</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?= $item->getTitle(); ?></td>
            <td><?= $item->getCategory(); ?></td>
            <td><?= $item->getPrice(); ?></td>
            <td><a href="edit.php?id=<?=$item->getId();?>">Edit</a></td>
            <td><a href="delete.php?id=<?=$item->getId();?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>

