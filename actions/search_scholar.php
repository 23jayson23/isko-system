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
              WHERE scholar.status = 'P' AND scholar_reqs.user_id IS NOT NULL 
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
        WHERE scholar.status = 'P' AND scholar_reqs.user_id IS NOT NULL 
        AND CONCAT(scholar.fname, ' ', scholar.lname) LIKE ? 
        ORDER BY scholar.update_date DESC LIMIT ?, ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sii", $key, $offset, $total_records_per_page);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status_display = ($row['status'] == 'P') ? 'Pending' : 'Approved';
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
                                <td><?=$status_display;?></td>
                                <td class='action'>
                                    <button class='view' onclick='viewInfo()' data-id='<?=$row['user_id'];?>'>
                                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5'>
                                            <path d='M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z' />
                                            <path fill-rule='evenodd'
                                                d='M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z'
                                                clip-rule='evenodd' />
                                        </svg>
                                    </button>
                                    <button class='approve' data-id='<?=$row['user_id'];?>'>
                                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6'>
                                            <path fill-rule='evenodd'
                                            d='M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z'
                                            clip-rule='evenodd' />
                                        </svg>
                                    <button class='decline' data-id='<?=$row['user_id'];?>'>
                                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6'>
                                            <path fill-rule='evenodd'
                                            d='M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z'
                                            clip-rule='evenodd' />
                                        </svg>
                                    </button>
                                </td>
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
