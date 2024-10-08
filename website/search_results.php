<?php
// Получить поисковый запрос
$search_query = $_GET['search'];

// Подключиться к базе данных
$conn = new mysqli("localhost", "root", "password", "database_name");

// Выполнить поиск
$sql = "SELECT * FROM table_name WHERE column_name LIKE '%$search_query%'";
$result = $conn->query($sql);

// Вывести результаты
while ($row = $result->fetch_assoc()) {
  echo $row['column_name'];
}
?>
