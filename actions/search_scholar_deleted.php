<?php
require_once('auth.php');

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
} else {
    $page_no = 1;
}
$total_records_per_page = 5;
$offset = ($page_no-1) * $total_records_per_page;

$key = "%{$_POST['key']}%";

$sql_count = "SELECT COUNT(*) As total_records FROM scholar 
              LEFT JOIN program ON scholar.program_id = program.program_id 
              LEFT JOIN scholar_reqs ON scholar.user_id = scholar_reqs.user_id 
              WHERE scholar.status = 'X' AND scholar_reqs.user_id IS NOT NULL 
              AND CONCAT(scholar.fname, ' ', scholar.lname) LIKE ?";
$stmt_count = $conn->prepare($sql_count);
$stmt_count->bind_param("s", $key);
$stmt_count->execute();

$result_count = $stmt_count->get_result();
$total_records = $result_count->fetch_assoc()['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);

$sql = "SELECT * FROM scholar 
        LEFT JOIN program ON scholar.program_id = program.program_id 
        LEFT JOIN scholar_reqs ON scholar.user_id = scholar_reqs.user_id 
        WHERE scholar.status = 'X' AND scholar_reqs.user_id IS NOT NULL 
        AND CONCAT(scholar.fname, ' ', scholar.lname) LIKE ? 
        ORDER BY scholar.update_date DESC LIMIT ?, ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sii", $key, $offset, $total_records_per_page);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status_display = ($row['status'] == 'D') ? 'Declined' : 'Declined';
        ?>
        <tr>
            <!-- Your table data -->
            <td><?=$row['lrn_id'];?>"</td>
                                <td><?=$row['lname'];?></td>
                                <td><?=$row['fname'];?></td>
                                <td><?=$row['mname'];?></td>
                                <td><?=$row['email'];?></td>
                                <td><?=$row['phone'];?></td>
                                <td><?=$row['program_name'];?>"</td>
                                <td><?=$row['remarks'];?></td>
        </tr>
<?php
    }
}
?>

<div class="pagination">
    <div class="pagination-container">
        <?php if($page_no > 1){ ?>
            <a href="?page_no=1">&laquo;</a>
        <?php } ?>

        <?php 
        $start = ($page_no - 5) > 0 ? ($page_no - 5) : 1;
        $end = ($page_no + 5) <= $total_no_of_pages ? ($page_no + 5) : $total_no_of_pages;

        for ($i = $start; $i <= $end; $i++) {
            if ($i == $page_no) {
                echo "<a class='active' href='?page_no=$i'>$i</a>";
            } else {
                echo "<a href='?page_no=$i'>$i</a>";
            }
        }
        ?>

        <?php if($page_no < $total_no_of_pages){ ?>
            <a href="?page_no=<?php echo $total_no_of_pages; ?>">&raquo;</a>
        <?php } ?>
    </div>
</div>
