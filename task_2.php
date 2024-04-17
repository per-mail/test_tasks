
<?php  
$events = [  
[  
'date' => '2019-11',  
'event' => 'name3'  
],  
[  
'date' => '2019-11',  
'event' => 'name4'  
],  
[  
'date' => '2019-12',  
'event' => 'name1'  
],  
[  
'date' => '2019-12',  
  'event' => 'name2'  
],  
[  
'date' => '2020-10', 
'event' => 'name5'  
],  
[  
'date' => '2020-10',  
'event' => 'name6'  
],  
[  
'date' => '2020-11',  
'event' => 'name5'  
],  
[  
'date' => '2020-11',  
'event' => 'name6'  
],  
[  
'date' => '2020-12',  
'event' => 'name7'  
],  
[  
'date' => '2020-12',  
'event' => 'name8'  
],  
[  
'date' => '2020-12',  
'event' => 'name9'  
],  
];  
$groupedEvents = [];

foreach ($events as $event) {
    // Разбиваем дату на год и месяц
    $dateParts = explode('-', $event['date']);
    $year = $dateParts[0];
    $month = $dateParts[1];

    // Добавляем событие в массив группированных событий
    $groupedEvents[$year][$month][] = $event['event'];
}

// Выводим результат
echo json_encode($groupedEvents, JSON_PRETTY_PRINT);
?>
