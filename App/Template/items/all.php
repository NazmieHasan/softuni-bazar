<h1>ALL ITEMS</h1>

<?php /** @var \App\Data\FullItemDTO[] $data */ ?>

<a href="add_item.php">Add Item</a> |
<a href="profile.php">My Profile</a> |
<a href="logout.php">Logout</a>


<table border="1">
    <thead>
    <tr>
        <td>Title</td>
        <td>Category</td>
        <td>Price</td>
        <td>Username</td>
        <td>Location</td>
        <td>Phone</td>
        <td>Details</td>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?= $item->getTitle(); ?></td>
            <td><?= $item->getCategory(); ?></td>
            <td><?= $item->getPrice(); ?></td>
            <td><?= $item->getUsername(); ?></td>
            <td><?= $item->getLocation(); ?></td>
            <td><?= $item->getPhone(); ?></td>
            <td><a href="view.php?id=<?=$item->getId();?>">Details</a></td>

        </tr>
    <?php endforeach; ?>
    </tbody>

</table>

