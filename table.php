<?php
$talabalar = [
    [ "Ism" => "Ali", "Familiya" => "Ozodov", "yoshi" => 15, 'bahosi' => 5],
    [ "Ism" => "Ozod", "Familiya" => "Akmalov", "yoshi" => 15, 'bahosi' => 5],
    [ "Ism" => "Akbar", "Familiya" => "Sultonov", "yoshi" => 15, 'bahosi' => 5],
    [ "Ism" => "Shuhrat", "Familiya" => "Kamolov", "yoshi" => 15, 'bahosi' => 5],
    [ "Ism" => "Mansur", "Familiya" => "Komilov", "yoshi" => 15, 'bahosi' => 5]

];
?>


<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f5f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    table {
      border-collapse: collapse;
      width: 70%;
      background: #fff;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      border-radius: 10px;
      overflow: hidden;
    }
    th, td {
      padding: 12px 15px;
      text-align: left;
    }
    th {
      background-color: #4f46e5;
      color: white;
      text-transform: uppercase;
      letter-spacing: 0.03em;
    }
    tr:nth-child(even) {
      background-color: #f8f8ff;
    }
    tr:hover {
      background-color: #e8eaff;
    }
  </style>
</head>
<body>
  <table>
    <tr>
       </thead>
      <th>Ism</th>
      <th>Familiya</th>
      <th>Yosh</th>
      <th>Bahosi</th>
    </tr>
     </thead>
     </tbody>
     <?php foreach($talabalar as $key => $item): ?>
    <tr>
      <td><?php echo ++$key ?></td>
      <td><?= $item['Ism'] ?> </td>
      <td><?= $item['Familiya'] ?></td>
      <td><?php echo $item['yoshi'] ?></td>
      <td><?php echo $item['bahosi'] ?></td>
    </tr>
    <?php endforeach; ?>
   </tbody>
  </table>
</body>
</html>


