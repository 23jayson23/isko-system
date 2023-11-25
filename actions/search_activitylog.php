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
              WHERE scholar.status != 'X' AND scholar.status != 'D' AND scholar.status != 'P'
              AND CONCAT(scholar.fname, ' ', scholar.lname) LIKE ?";
$stmt_count = $conn->prepare($sql_count);
$stmt_count->bind_param("s", $key);
$stmt_count->execute();

$result_count = $stmt_count->get_result();
$total_records = $result_count->fetch_assoc()['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);

$sql = "SELECT scholar.*, program.*, scholar.create_date AS scholar_create_date FROM scholar
        LEFT JOIN program ON scholar.program_id = program.program_id 
        WHERE scholar.status != 'X' AND scholar.status != 'D' AND scholar.status != 'P'
        AND CONCAT(scholar.fname, ' ', scholar.lname) LIKE ? 
        ORDER BY scholar.update_date DESC LIMIT ?, ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sii", $key, $offset, $total_records_per_page);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status_display = ($row['status'] == 'A') ? 'Active' : (($row['status'] == 'I') ? 'Inactive' : 'Not Yet Approved');
        $newdate = date('F d, Y', strtotime($row['scholar_create_date']));
        ?>
        <tr>
                                <td><?=$row['lrn_id']?></td>
                                <td><?=$row['lname']?></td>
                                <td><?=$row['fname']?></td>
                                <td><?=$newdate?></td>
                                <td><?=$row['program_name']?></td>
                                <td><?=$status_display?></td>
                                <td class='action'>
                                <button class='view' onclick='viewInfo()' data-id='<?=$row['user_id']?>'>
                                  <svg
                                    xmlns='http://www.w3.org/2000/svg'
                                    viewBox='0 0 20 20'
                                    fill='currentColor'
                                    class='w-5 h-5'
                                  >
                                    <path
                                      d='M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z'
                                    />
                                    <path
                                      d='M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z'
                                    />
                                  </svg>
                                </button>
                                <button class='delete' data-id='<?=$row['user_id']?>'>
                                  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6'>
                                    <path fill-rule='evenodd' d='M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z' clip-rule='evenodd' />
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
