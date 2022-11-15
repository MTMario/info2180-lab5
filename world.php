<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// ?>
// <ul>
// <?php foreach ($results as $row): ?>
//   <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
// <?php endforeach; ?>
// </ul>

<?php
  echo $_GET['country'];
?>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Continent</th>
      <th>Independence</th>
      <th>Head of State</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($countries as $country): ?>
    <tr>
      <td><?= $country['name']; ?></td>
      <td><?= $country['continent']; ?></td>
      <td><?= $country['independence_year']; ?></td>
      <td><?= $country['head_of_state']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>District</th>
      <th>Population</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cities as $city): ?>
    <tr>
      <td><?= $city['name']; ?></td>
      <td><?= $city['district']; ?></td>
      <td><?= $city['population']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
