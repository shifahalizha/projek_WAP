<?php
include '../auth/koneksi.php';

$query = mysqli_query($mysqli, "SELECT * from tb_menu");

?>
<center>
    <h2>Data Menu</h2>
    <table border='1' width="100%" cellspacing=3 cellpading=5>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Nama pembuat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=0;
            while ($result = mysqli_fetch_array($query)){
                $no++;
                ?>
            <tr>
                <th>
                    <?php echo $no;?>
                </th>
                <th>
                    <?php echo $result['nama menu']; ?>
                </th>
                <th>
                    <?php echo $result['pembuat']; ?>
                </th>
            </tr>
            <?php }?>
        </tbody>
    </table>
</center>