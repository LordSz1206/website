<?php
// �������� ��������� ������
$search_query = $_GET['search'];

// ������������ � ���� ������
$conn = new mysqli("localhost", "root", "password", "database_name");

// ��������� �����
$sql = "SELECT * FROM table_name WHERE column_name LIKE '%$search_query%'";
$result = $conn->query($sql);

// ������� ����������
while ($row = $result->fetch_assoc()) {
  echo $row['column_name'];
}
?>
