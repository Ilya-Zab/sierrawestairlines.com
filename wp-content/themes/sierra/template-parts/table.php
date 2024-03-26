<?php
$string = $args[0][0];
$table_strings = explode("\n", $string);

$headers = [];
$rows = [];

foreach ($table_strings as $index => $line) {
    $line = rtrim($line, ";");
    if ($index === 0) {
        $headers[] = explode(";", $line);
    } else {
        $row = array_map('trim', explode(";", $line));
        if (!empty($row[0])) {
            $rows[] = $row;
        }
    }
}
?>

<table class="table schedule-table">
    <thead>
        <tr>
            <?php foreach ($headers[0] as $title) : ?>
                <th scope="col" class="text-uppercase h3">
                    <?= $title . ':' ?>
                </th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row) : ?>
            <tr>
                <?php foreach ($row as $td) : ?>
                    <td class="desc"><?= $td ?></td>
                <?php endforeach; ?>
            <tr>
            <?php endforeach; ?>
    </tbody>
</table>