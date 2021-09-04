<!--  inner-banner-section start  -->
<?php include('app/views/includes/inner-banner.php'); ?>

<div class="main-box">
    <h3>Brands Management</h3>
    <hr>
    <p>
    <?php if($this->access()) {?>
        <a class="btn btn-sm btn-primary" href="<?=self::ROOT?>/brands/create">Add Brand</a>
    <?php } ?>
    </p>
    <table class="categories-table" border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Control</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($brands as $brand) { ?>
                <tr>
                    <td><?=$brand['id']?></td>
                    <td><b><?=$brand['name']?></b></td>
                    <td>
                        <a href="<?=self::ROOT?>/brands/update/<?=$brand['id']?>">Update</a>
                        |
                        <a href="<?=self::ROOT?>/brands/delete/<?=$brand['id']?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<style>
    .categories-table {
        width: 60%;
        margin: 20px auto;
    }

    .categories-table th,
    .categories-table td {
        padding: 5px;
    }
</style>