<h1>VIEW ITEM</h1>

<a href="profile.php">My Profile</a>
<br /> <br />

<?php /** @var array $errors  */ ?>
<?php /** @var \App\Data\FullItemDTO[] $data */ ?>

<?php foreach ($errors as $error): ?>
    <p style="color: red"><?= $error ?></p>
    <br /><br />
<?php endforeach; ?>

<b>Title: </b> <?= $data->getTitle(); ?><br />
<b>Price: </b> <?= $data->getPrice(); ?><br />
<b>Category: </b> <?= $data->getCategory(); ?><br />
<b>Phone: </b> <?= $data->getPhone(); ?><br />
<b>Description: </b> <?= $data->getDescription(); ?><br /

<img src="<?=$data->getImage();?>"/>

<a href="index.php">back</a
